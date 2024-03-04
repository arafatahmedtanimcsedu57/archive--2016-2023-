var url = "http://localhost:8000/departmentlibrary";
    //display modal form for product editing
    $(document).on('click','.open_modal',function(){
        var departmentlibrary_id = $(this).val();
       //'book_name', 'author','edition','publication'
        $.get(url + '/' + departmentlibrary_id, function (data) {
            //success data
            console.log(data);

            $('#departmentlibrary_id').val(data.id);
            $('#book_name').val(data.book_name);
            $('#author').val(data.author);
            $('#edition').val(data.edition);
            $('#publication').val(data.publication);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
    //display modal form for creating new product
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmDepartmentLibrary').trigger("reset");
        $('#myModal').modal('show');
    });
    //delete product and remove it from list
    $(document).on('click','.delete-departmentlibrary',function(){
        var departmentlibrary_id = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + departmentlibrary_id,
            success: function (data) {
                console.log(data);
                $("#departmentlibrary" + departmentlibrary_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
    //create new product / update existing product

    //'book_name', 'author','edition','publication'
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault(); 
        var formData = {
        	book_name: $('#book_name').val(),
        	author: $('#author').val(),
        	edition: $('#edition').val(),
            publication: $('#publication').val(),
        }
        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var departmentlibrary_id = $('#departmentlibrary_id').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + departmentlibrary_id;
        }
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                //'book_name', 'author','edition','publication'
                var departmentlibrary = '<tr id="departmentlibrary' + data.id + '"><td style="text-align: center">' + data.book_name + '</td><td>' + data.author + '</td><td>' + data.edition + '</td><td>'+data.publication+'</td>';
                departmentlibrary += '<td style="text-align: center"><button class="btn btn-warning btn-detail open_modal" value="' + data.id + '"><i class="fa fa-edit"></i></button>';
                departmentlibrary += ' <button class="btn btn-danger btn-delete delete-departmentlibrary" value="' + data.id + '"><i class="fa fa-trash"></i></button></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#departmentlibrarys-list').append(departmentlibrary);
                }else{ //if user updated an existing record
                    $("#departmentlibrary" + departmentlibrary_id).replaceWith( departmentlibrary );
                }
                $('#frmDepartmentLibrary').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
