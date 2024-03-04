var url = "http://localhost:8000/video";
    //display modal form for product editing
    $(document).on('click','.open_modal',function(){
        var id = $(this).val();
       //'book_name', 'author','edition','publication'
        $.get(url + '/' + id, function (data) {
        
            console.log(data);

            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#link').val(data.link);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
    //display modal form for creating new product
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmVideo').trigger("reset");
        $('#myModal').modal('show');
    });
    //delete product and remove it from list
    $(document).on('click','.delete-video',function(){
        var id = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + id,
            success: function (data) {
                console.log(data);
                $("#video" + id).remove();
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
        	name: $('#name').val(),
        	link: $('#link').val(),
        }

        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var id = $('#id').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + id;
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
                var video = '<tr id="video' + data.id + '"><td style="text-align: center">' + data.name + '</td>';
                video += '<td style="text-align: center"><button class="btn btn-success" value="'+data.id+'"><a href="{{$video->link}}"><i class="fa fa-book"></i></a></button>';
                video += '<button class="btn btn-warning btn-detail open_modal" value="' + data.id + '"><i class="fa fa-edit"></i></button>';
                video += ' <button class="btn btn-danger btn-delete delete-video" value="' + data.id + '"><i class="fa fa-trash"></i></button></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#videos-list').append(video);
                }else{ //if user updated an existing record
                    $("#video" + id).replaceWith( video );
                }
                $('#frmVideo').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
