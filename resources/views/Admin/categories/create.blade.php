

            <form action="{{route('store_category')}}" method="post" enctype="multipart/form-data">
                 @csrf
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" id="name" class="form-control form-control-lg" required name="name"/>
                    </div>
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="code">Code</label>
                        <input type="text" minlength="1"  maxlength="2" id="code" class="form-control form-control-lg" required name="code" style="text-transform: uppercase;" />
                    </div>
                 <div data-mdb-input-init class="form-outline mb-4">
                     <label class="form-label" for="#fileToUpload">Image</label>
                     <input type="file" name="fileToUpload" id="fileToUpload">
                 </div>
                    <div class="d-flex justify-content-end pt-3">
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-lg ms-2" style="background-color: #0b8f96; color: white">Add</button>
                    </div>
             </form>

