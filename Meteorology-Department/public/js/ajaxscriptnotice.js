var url = "http://localhost:8000/notice";

    $(document).on('click','.open_modal',function(){
        var notice_id = $(this).val();
        $.get(url + '/' + notice_id, function (data) {
            $('#notice_id').val(data.id);
            $('#notice_heading').val(data.heading);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });

    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmNotice').trigger("reset");
        $('#myModal').modal('show');
    });

    $(document).on('click','.delete-notice',function(){
        var notice_id = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + notice_id,
            success: function (data) {
                $("#notice" + notice_id).remove();
            },
            error: function (data) {
                console.log('Error');
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

        var file = $('#link').prop('files')[0];
        var heading = $('#notice_heading').val();

        var form_data = new FormData();
        form_data.append('link', file);
        form_data.append('heading', heading);

        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var notice_id = $('#notice_id').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + notice_id;

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
                var notice = '<tr id="notice' + data.id + '"><td style="text-align: center">' + data.heading + '</td>';
                notice += '<td style="text-align: center"><a href="{{notice->link}}"><button class="btn btn-success" value="' + data.id + '"><i class=" fa fa-download"></i></button></a>';
                notice += ' <button class="btn btn-danger btn-delete delete-notice" value="' + data.id + '"><i class="fa fa-trash"></i></button></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#notices-list').append(notice);
                }else{ //if user updated an existing record
                    $("#notice" + notice_id).replaceWith(notice);
                }
                $('#frmNotice').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error');
            }
        });
    });
