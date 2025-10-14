<form action="{{route('store_book')}}" method="post" >
    @csrf
    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="title">Title</label>
        <input type="text" id="title" class="form-control form-control-lg" required name="title"/>
    </div>
    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="description">Description</label>
        <input type="text" id="description" class="form-control form-control-lg" required name="description"/>
    </div>
    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="quantity">Quantity</label>
        <input type="number" min="0"step="1" id="quantity" class="form-control form-control-lg" required name="quantity"  />
    </div>
    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="price">Price</label>
        <input type="number" min="50" id="price" class="form-control form-control-lg" required name="price"  />
    </div>
{{--    <div data-mdb-input-init class="form-outline mb-4">--}}
{{--        <label class="form-label" for="#fileToUpload">Image</label>--}}
{{--        <input type="file" name="fileToUpload" id="fileToUpload">--}}
{{--    </div>--}}
    <div class="d-flex justify-content-end pt-3">
        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-lg ms-2" style="background-color: #0b8f96; color: white">Add</button>
    </div>
</form>
