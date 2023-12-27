<!-- resources/views/products/create.blade.php -->

<div class="container">
    <h2>Create New Product</h2>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="kategori">Kategori:</label>
            <select name="kategori" class="form-control" required>
                <option value="tempe">Tempe</option>
                <option value="tahu">Tahu</option>
            </select>
        </div>

        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" name="harga" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan:</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
</div>