<!DOCTYPE html>
<html>
@include('includes.header')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
    table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    tr:nth-child(even){background-color: white;}

    tr:hover {background-color: rgb(247, 238, 238);}

    th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color:#0b8f96;
        color: white;
    }
    .update , .delete {
        background-color: white;
        border: none;
        color: #0b8f96;
    }
</style>


<body>
@include('includes.navbar')
@include('includes.cart')
<div class="card container">
    <div class="my-2 py-2">
        <button  data-bs-toggle="modal" data-bs-target="#exampleModal"  id="create" class="btn btn-outline-dark mx-3" >
            Create
        </button>
    </div>
    <!-- Modal -->
    <div class="modal hide" id="Modal_create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
                    <button type="button" class="btn-close closeModal1" data-bs-dismiss="modal" aria-label="Close" ></button>
                </div>
                <div class="modal-body" id="create_model_book" >

                </div>

            </div>
        </div>
    </div>

    <div class="card-body">
        <table>
            <thead>
            <th>ID</th>
            <th>Book Title</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Category ID</th>
            <th>Actions</th>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr >
                    <td>{{$book->id}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->quantity}}</td>
                    <td>{{$book->price}}</td>
                    <td>{{$book->category_id}}</td>

                    <td>
                        <button data-bs-toggle="modal" data-bs-target="#Modal2"   data_id="{{$book->id}}" class="update">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <button class="delete" data_id="{{$book->id}}">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

</div>
<div class="modal hide" id="Modal_update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
                <button type="button" class="btn-close closeModal2" data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="modal-body" id="update_model_book" >
             //form for edit
            </div>

        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#create').on('click',function(){
            $.ajax({
                url:"{{route('create_book')}}",
                success:function(response){
                    $('#create_model_book').html(response);
                    $('#Modal_create').modal('show');
                }
            });
            $('#Modal_create').modal('show');
        });

        $('.closeModal1').on('click',function(){
            $('#Modal_create').modal('hide');
        });

        $('.update').on('click',function(){
            let book_id = $(this).attr('data_id')
            $.ajax({
                url:"{{route('edit_book')}}",
                data:{
                  id:  book_id
                },
                success:function(response){
                    $('#update_model_book').html(response);
                    $('#Modal_update').modal('show');
                }
            });
            $('#Modal_update').modal('show');
        });

        $('.closeModal2').on('click',function(){
            $('#Modal_update').modal('hide');
        });

    });
</script>
</body>
</html>
