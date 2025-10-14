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
    <div class="modal hide" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
                    <button type="button" class="btn-close closeModal1" data-bs-dismiss="modal" aria-label="Close" ></button>
                </div>
                <div class="modal-body" id="model1" >
{{--                    <form>--}}
{{--                        <div data-mdb-input-init class="form-outline mb-4">--}}
{{--                            <label class="form-label" for="name">Name</label>--}}
{{--                            <input type="text" id="name" class="form-control form-control-lg" required name="name"/>--}}
{{--                        </div>--}}
{{--                        <div data-mdb-input-init class="form-outline mb-4">--}}
{{--                            <label class="form-label" for="code">Code</label>--}}
{{--                            <input type="text" minlength="1"  maxlength="2" id="code" class="form-control form-control-lg" required name="code"/>--}}
{{--                        </div>--}}

{{--                        <div class="d-flex justify-content-end pt-3">--}}
{{--                            <a  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-lg ms-2" style="background-color: #0b8f96; color: white">Add</a>--}}
{{--                        </div>--}}
{{--                    </form>--}}
                </div>

            </div>
        </div>
    </div>

    <div class="card-body">
        <table>
            <thead>
            <th>ID</th>
            <th>Category Name</th>
            <th>Code</th>
            <th>Actions</th>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr >
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->code}}</td>
                    <td>
                        <button data-bs-toggle="modal" data-bs-target="#Modal2"   data_id="{{$category->id}}" class="update">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <button class="delete" data_id="{{$category->id}}">
                        <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

</div>
<div class="modal hide" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Edit Category</h5>
                <button type="button" class="btn-close closeModal2" data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="modal-body" id="model2">

            </div>

        </div>
    </div>
</div>
<script>

    $(document).ready(function(){
        $('#create').on('click',function(){
            $.ajax({
                url: "{{route('create_category')}}",

                success: function ( response )  {
                    $('#model1').html(response);
                    $('#exampleModal').modal('show');
                }
            });
            $('#exampleModal').modal('show');
        });

        $('.closeModal1').on('click', function(){
            $('#exampleModal').modal('hide');
        });

        $('.update').on('click',function(){
            let cat_id = $(this).attr('data_id');
            $.ajax({
                url: "{{route('edit_category')}}",
                data:{
                   id : cat_id,
                },
                success: function ( response )  {
                    $('#model2').html(response);
                    $('#Modal2').modal('show');
                }
            });
            $('#Modal2').modal('show');

            });
        $('.closeModal2').on('click', function(){
            $('#Modal2').modal('hide');
        });
        $('.delete').on('click',function(){
             let delete_id = $(this).attr('data_id');
            $.ajax({
                url:"{{route('delete_category')}}",
                data:{
                    id:delete_id
                },

                success:function (response) {
                  if(response.success== 'yes'){
                      window.location.reload();
                  }else{
                     alert(response.message)
                  }
                },


            });
        });

    });

</script>

</body>
</html>
