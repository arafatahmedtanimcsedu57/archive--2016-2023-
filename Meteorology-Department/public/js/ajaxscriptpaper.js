var url = "http://localhost:8000/paper";

    $(document).on('click','.open_modal',function(){
        var paper_id = $(this).val();
        $.get(url + '/' + paper_id, function (data) {
            console.log(data);
            $('#paper_id').val(data.id);
            $('#paper_name').val(data.paper_name);
            $('#link').val(data.link);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });

    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmPaper').trigger("reset");
        $('#myModal').modal('show');
    });

    $(document).on('click','.delete-paper',function(){
        var paper_id = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + paper_id,
            success: function (data) {
                console.log(data);
                $("#paper" + paper_id).remove();
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
        var formData = {
        	paper_name: $('#paper_name').val(),
        	link: $('#link').val(),
        }

        var state = $('#btn-save').val();
        var type = "POST"; 
        var paper_id = $('#paper_id').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT"; 
            my_url += '/' + paper_id;
        }
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var paper = '<tr id="paper' + data.id + '"><td style="text-align: center">' + data.paper_name + '</td>';
                paper += '<td style="text-align: center"><a href="{{paper->link}}"><button class="btn btn-success" value="' + data.id + '"><i class="fa fa-book"></i></button></a>';
                paper += ' <button class="btn btn-warning btn-detail open_modal" value="' + data.id + '"><i class="fa fa-edit"></i></button>';
                paper += ' <button class="btn btn-danger btn-delete delete-paper" value="' + data.id + '"><i class="fa fa-trash"></i></button></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#papers-list').append(paper);
                }else{ //if user updated an existing record
                    $("#paper" + paper_id).replaceWith( paper );
                }
                $('#frmBook').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
