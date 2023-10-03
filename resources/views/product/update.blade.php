<!-- Modal trigger button -->
<button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
    data-bs-target="#{{ Str::slug($product->name) }}">
    Edit
</button>

<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="{{ Str::slug($product->name) }}" tabindex="-1" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('product.update', $product->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body text-start">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name Product</label>
                        <input type="text" class="form-control" value="{{ $product->name }}" name="name"
                            id="name" aria-describedby="helpId" placeholder="Enter product name">
                        @error('name')
                            <small class="fw-bold text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price Product</label>
                        <input type="number" class="form-control" value="{{ $product->price }}" name="price"
                            id="price" aria-describedby="helpId" placeholder="Enter product price">
                        @error('price')
                            <small class="fw-bold text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
