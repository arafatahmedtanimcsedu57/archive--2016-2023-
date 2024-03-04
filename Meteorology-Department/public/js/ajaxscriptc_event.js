var url = "http://localhost:8000/c_event";
    //display modal form for product editing
   
    
    

    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault(); 

        var form_data = new FormData();

      
        var eve_mem_name = $('#eve_mem_name').val();
        var eve_mem_designation = $('#eve_mem_designation').val();
        var eve_mem_institute = $('#eve_mem_institute').val();
        var eve_mem_country = $('#eve_mem_country').val();
        var eve_mem_mail = $('#eve_mem_mail').val();
        var event_id = $('event_id').val();
        
        
        
        form_data.append('eve_mem_name', eve_mem_name);
        form_data.append('eve_mem_designation', eve_mem_designation);
        form_data.append('eve_mem_institute', eve_mem_institute);
        form_data.append('eve_mem_country', eve_mem_country);
        form_data.append('eve_mem_mail', eve_mem_mail);
        form_data.append('event_id', event_id);


        $.ajax({
            url:"http://localhost:8000/c_event",
            type:'POST',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:form_data,
            success:function(response){
                alert("Ok");
            }
        })
    });
