var url = "http://localhost:8000/staff";
    //display modal form for product editing
    $(document).on('click','.open_modal',function(){
        var staff_id = $(this).val();
        $.get(url + '/' + staff_id, function (data) {
            console.log(data);
            $('#staff_id').val(data.id);
            $('#staff_name').val(data.name);
            $('#staff_des').val(data.des);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmStaff').trigger("reset");
        $('#myModal').modal('show');
    });
    $(document).on('click','.delete-staff',function(){
        var staff_id = $(this).val();
        console.log('ok');
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + staff_id,
            success: function (data) {
                console.log(data);
                $("#staff" + staff_id).remove();
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

        var image = $('#staff_image').prop('files')[0];
        var name = $('#staff_name').val();
        var des = $('#staff_des').val();
        
        var form_data = new FormData();
        form_data.append('image', image);
        form_data.append('name', name);
        form_data.append('des', des);

        var state = $('#btn-save').val();
        var type = "POST";
        var staff_id = $('#staff_id').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT";
            my_url += '/' + staff_id;
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
                var staff = '<tr id="staff' + data.id + '"><td style="text-align: center;"><img class="" src="/uploads/image/'+data.name+'.jpg" style="height: 100px; width: 100px; border-radius:50% ;"></td><td style="text-align: center">' + data.name +'</br>'+ data.des+'</br></td>';
                staff += '<td style="text-align: center">';
                staff += ' <button class="btn btn-danger btn-delete delete-staff" value="' + data.id + '"><i class="fa fa-trash"></i></button></td></tr>';
                if (state == "add"){
                    $('#staffs-list').append(staff);
                    setTimeout(function() {
                         location.reload();
                      }, 0001);
                }else{ 
                    $("#staff" + staff_id).replaceWith( staff );
                        setTimeout(function() {
                            location.reload();
                        },0001);
                }
                $('#frmStaff').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
