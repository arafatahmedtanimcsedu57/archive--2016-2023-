var url = "http://localhost:8000/courses";
    //display modal form for product editing
    $(document).on('click','.open_modal',function(){
        var course_id = $(this).val();
       
        $.get(url + '/' + course_id, function (data) {
            //success data
            console.log(data);
            $('#course_id').val(data.id);
            $('#term').val(data.term);
            $('#type').val(data.type);
            $('#title').val(data.title);
            $('#name').val(data.name);
            $('#credit').val(data.credit);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
    //display modal form for creating new product
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmCourses').trigger("reset");
        $('#myModal').modal('show');
    });
    //delete product and remove it from list
    $(document).on('click','.delete-course',function(){
        var course_id = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + course_id,
            success: function (data) {
                console.log(data);
                $("#course" + course_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
    //create new product / update existing product
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault(); 
        var formData = {
        	term: $('#term').val(),
        	type: $('#type').val(),
        	title: $('#title').val(),
            name: $('#name').val(),
            credit: $('#credit').val(),
        }
        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var course_id = $('#course_id').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + course_id;
        }
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var course = '<tr id="course' + data.id + '"><td>' + data.title + '</td><td>' + data.name + '</td><td>' + data.credit + '</td>';
                course += '<td><button class="btn btn-warning btn-detail open_modal" value="' + data.id + '"><i class="fa fa-edit"></i></button>';
                course += ' <button class="btn btn-danger btn-delete delete-course" value="' + data.id + '"><i class="fa fa-trash"></i></button></td></tr>';
                if (state == "add"){
                    $('#courses-list').append(course);
                    setTimeout(function() {
                         location.reload();
                      }, 0001);

                }else{
                    $("#course" + course_id).replaceWith( course );
                    setTimeout(function() {
                         location.reload();
                      }, 0001);
                }
                $('#frmCourses').trigger("reset");
                $('#myModal').modal('hide')


            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
