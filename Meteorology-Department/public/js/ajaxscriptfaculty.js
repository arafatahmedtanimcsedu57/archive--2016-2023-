var url = "http://localhost:8000/faculty";
    //display modal form for product editing
    $(document).on('click','.open_modal',function(){
        var teacher_id = $(this).val();
        $.get(url + '/' + teacher_id, function (data) {
            console.log(data);
            $('#teacher_id').val(data.id);
            $('#teacher_name').val(data.name);
            $('type').val(data.type);
            $('#teacher_des').val(data.des);
            $('#teacher_deg').val(data.deg);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmTacher').trigger("reset");
        $('#myModal').modal('show');
    });
    $(document).on('click','.delete-teacher',function(){
        var teacher_id = $(this).val();
        console.log('ok');
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + teacher_id,
            success: function (data) {
                console.log(data);
                $("#teacher" + teacher_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault(); 

        var image = $('#teacher_image').prop('files')[0];
        var name = $('#teacher_name').val();
        var type = $('#type').val();
        var des = $('#teacher_des').val();
        var deg = $('#teacher_deg').val();
        
        var form_data = new FormData();
        form_data.append('image', image);
        form_data.append('name', name);
        form_data.append('type', type);
        form_data.append('des', des);
        form_data.append('deg', deg);

        var state = $('#btn-save').val();
        var type = "POST";
        var teacher_id = $('#teacher_id').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT";
            my_url += '/' + teacher_id;
        }
        $.ajax({
            type: type,
            url: my_url,
            data: form_data,
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: false,
            success: function (data) {
                console.log(data);
                var teacher = '<tr id="teacher' + data.id + '"><td style="text-align: center;"><img class="" src="/uploads/image/'+data.name+'.jpg" style="height: 100px; width: 100px; border-radius:50% ;"></td><td style="text-align: center">' + data.name +'</br>'+ data.des+'</br>'+data.deg+'</td>';
                teacher += '<td style="text-align: center">';
                teacher += ' <button class="btn btn-danger btn-delete delete-teacher" value="' + data.id + '"><i class="fa fa-trash"></i></button></td></tr>';
                if (state == "add"){
                    $('#teachers-list').append(teacher);
                    setTimeout(function() {
                         location.reload();
                      }, 0001);
                }else{ 
                    $("#teacher" + teacher_id).replaceWith( teacher );
                        setTimeout(function() {
                            location.reload();
                        },0001);
                }
                $('#frmTeacher').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
