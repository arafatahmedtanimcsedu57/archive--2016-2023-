var url = "http://localhost:8000/student";
    //display modal form for product editing
    $(document).on('click','.open_modal',function(){
        var id = $(this).val();
        $.get(url + '/' + id, function (data) {
            console.log(data);
            $('#id').val(data.id);
            $('#id_card').val(data.id_card);
            $('#name').val(data.name);
            $('#roll').val(data.roll);
            $('#email').val(data.email);
            $('#session').val(data.session);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmStudent').trigger("reset");
        $('#myModal').modal('show');
    });
    $(document).on('click','.delete-student',function(){
        var id = $(this).val();
        console.log('ok');
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
                $("#student" + id).remove();
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

        var id_card = $('#id_card').val();
        var name = $('#name').val();
        var roll = $('#roll').val();
        var email = $('#email').val();
        var session = $('#session').val();
        
        var form_data = new FormData();
        form_data.append('id_card', id_card);
        form_data.append('name', name);
        form_data.append('roll', roll);
        form_data.append('email', email);
        form_data.append('session', session);

        var state = $('#btn-save').val();
        var type = "POST";
        var id = $('#id').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT";
            my_url += '/' + id;
        }

        console.log(form_data);
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
                var student = '<tr id="student' + data.id + '"><td style="text-align: center;">'+data.id_card+'</td><td style="text-align: center;">'+data.name+'</td><td style="text-align: center">' + data.roll +'</td><td style="text-align: center">' + data.email +'</td><td style="text-align: center">' + data.session +'</td>';
                student += '<td style="text-align: center">';
                student += '<button class="btn btn-danger btn-delete delete-student" value="' + data.id + '"><i class="fa fa-trash"></i></button></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#students-list').append(student);
                }else{ //if user updated an existing record
                    $("#student" + id).replaceWith( student );
                }
                $('#frmStudent').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
