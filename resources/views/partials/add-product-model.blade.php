
  <!-- Modal -->
  <form action="" method="POST">
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="errorMessageContainer">

            </div>
            <div class="form-group">
              <label for="my-input">Product Name</label>
              <input id="name" class="form-control" type="text" name="name" placeholder="enter product name">
            </div>
            <div class="form-group">
              <label for="my-input">Product Price</label>
              <input id="price" class="form-control" type="text" name="price" placeholder="enter product price">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary ad-product">Save Product</button>
          </div>
        </div>
      </div>
    </div>
  </form>
