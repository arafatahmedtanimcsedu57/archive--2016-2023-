var url = "http://localhost:8000/book";
    //display modal form for product editing
    $(document).on('click','.open_modal',function(){
        var book_id = $(this).val();
       //'book_name', 'author','edition','publication'
        $.get(url + '/' + book_id, function (data) {
            //success data
            console.log(data);

            $('#book_id').val(data.id);
            $('#book_name').val(data.book_name);
            $('#author').val(data.author);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
    //display modal form for creating new product
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmBook').trigger("reset");
        $('#myModal').modal('show');
    });
    //delete product and remove it from list
    $(document).on('click','.delete-book',function(){
        var book_id = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + book_id,
            success: function (data) {
                console.log(data);
                $("#book" + book_id).remove();
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

        var link = $('#link').prop('files')[0];
        var author = $('#author').val();
        var book_name = $('#book_name').val();

        var form_data = new FormData();
        form_data.append('book_name', book_name);
        form_data.append('author', author);
        form_data.append('link', link);

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var book_id = $('#book_id').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + book_id;
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
                var book = '<tr id="book' + data.id + '"><td style="text-align: center">' + data.book_name + '</td><td style="text-align: center">' + data.author + '</td>';
                book += '<td style="text-align: center"><a href="{{book->link}}"><button class="btn btn-success" value="' + data.id + '"><i class=" fa fa-download"></i></button></a>';
                book += ' <button class="btn btn-danger btn-delete delete-book" value="' + data.id + '"><i class="fa fa-trash"></i></button></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#books-list').append(book);
                }else{ //if user updated an existing record
                    $("#book" + book_id).replaceWith( book );
                }
                $('#frmBook').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
