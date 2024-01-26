<x-layout title="New Books">

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>New Book</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Título:</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <div class="form-group">
                        <label for="author">Autor:</label>
                        <input type="text" class="form-control" id="author" name="author" required>
                    </div>

                    <div class="form-group">
                        <label for="barcode">Código de Barras:</label>
                        <input type="text" class="form-control" id="barcode" name="barcode" required>
                    </div>

                    <div class="form-group">
                        <label for="qty">Quantidade:</label>
                        <input type="text" class="form-control" id="qty" name="qty" required>
                    </div>

                    <div class="form-group">
                        <label for="img">Imagem:</label>
                        <input type="file" class="form-control-file" id="img" name="img" accept="image/gif, image/jpeg, image/png" required>
                    </div>

                    <div class="form-group">
                        <label for="isbn">ISBN:</label>
                        <input type="text" class="form-control" id="isbn" name="isbn" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Insert</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
