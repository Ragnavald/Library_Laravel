<x-layout title="Livros">
    <x-nav></x-nav>
    <div class="container mt-5">
        <div class="row">
            @auth

            @endauth
            <div class="container">
                <div class="container mb-4 d-flex align-items-center justify-content-center">
                    <h2 class="text-uppercase text-white">Books</h2>
                </div>
       <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <button class="btn btn-primary" id="btnAddBook">Adicionar Livro</button>
        <button class="btn btn-warning" id="btnEditBook">Editar Livro</button>
        <button class="btn btn-danger" id="btnDeleteBook">Excluir Livro</button>
    </nav>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Filtros</h5>
            <div class="form-group">
                <label for="filtroCategoria">Categoria:</label>
                <select class="form-control" id="filtroCategoria">
                    <option>Todas</option>
                    <option>Romance</option>
                    <option>Ficção Científica</option>
                    <option>Mistério</option>
                </select>
            </div>
            <div class="form-group">
                <label for="filtroAutor">Autor:</label>
                <input type="text" class="form-control" id="filtroAutor">
            </div>
            <button type="button" class="btn btn-primary">Aplicar Filtros</button>
        </div>
    </div>

            </div>
        </div>
    </div>

</x-layout>
