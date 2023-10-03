<x-auth>
    @include('layouts.table')
    <x-slot name="title">Products</x-slot>

    <div class="container">
        <div class="card ">
            <div class="card-header">
                @include('product.store')
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Produk</th>
                                <th>Harga Produk</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $no => $product)
                                <tr>
                                    <td>{{ ++$no }}.</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-3">
                                            @include('product.update')
                                            <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm ">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-auth>
