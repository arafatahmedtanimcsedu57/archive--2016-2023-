var url = "http://localhost:8000/event";
    //display modal form for product editing
    $(document).on('click','.open_modal',function(){
        var teacher_id = $(this).val();
        $.get(url + '/' + teacher_id, function (data) {
            console.log(data);
            $('#event_id').val(data.id);
            $('#event_heading').val(data.heading);
            $('#event_body').val(data.body);
            $('#event_date').val(data.date);
            $('#event_palce').val(data.place);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmEvent').trigger("reset");
        $('#myModal').modal('show');
    });
    $(document).on('click','.delete-event',function(){
        var event_id = $(this).val();
        console.log('ok');
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + event_id,
            success: function (data) {
                console.log(data);
                $("#event" + event_id).remove();
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

        var form_data = new FormData();

        var image = $('#event_image').prop('files')[0];
        var heading = $('#event_heading').val();
        var body = $('#event_body').val();
        var date = $('#event_date').val();
        var place = $('#event_place').val();
        var total_file=document.getElementById("sponsers_image").files.length;
        var sponsers = [];
        for(var i=0;i<total_file;i++)
        {
            sponsers[i] = $("#sponsers_image").prop('files')[i];
            form_data.append('sponsers[]', sponsers[i]);
            console.log (sponsers[i]);
        }
        
        
        form_data.append('image', image);
        form_data.append('heading', heading);
        form_data.append('body', body);
        form_data.append('date', date);
        form_data.append('place', place);



        var state = $('#btn-save').val();
        var type = "POST";
        var event_id = $('#event_id').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT";
            my_url += '/' + event_id;
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
                var event = '<tr id="event' + data.id + '"><td style="text-align: center;"><img class="" src="/uploads/image/'+data.heading+'.jpg" style="height: 100px; width: 100px; border-radius:50% ;"></td><td style="text-align: center">' + data.heading +'</td></td><td style="text-align: center">' + data.body +'</td></td></td><td style="text-align: center">' + data.date +'</td></td></td><td style="text-align: center">' + data.place +'</td>';
                event += '<td style="text-align: center">';
                event += ' <button class="btn btn-danger btn-delete delete-event" value="' + data.id + '"><i class="fa fa-trash"></i></button></td></tr>';
                if (state == "add"){
                    $('#events-list').append(event);
                    setTimeout(function() {
                         location.reload();
                      }, 0001);
                }else{ 
                    $("#event" + event_id).replaceWith( event );
                        setTimeout(function() {
                            location.reload();
                        },0001);
                }
                $('#frmEvent').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
