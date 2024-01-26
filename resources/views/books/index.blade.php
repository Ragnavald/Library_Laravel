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
                <div class="row">
                    @foreach ($books as $book)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ $book->img }}" class="card-img-top" alt="book cover">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $book->title }}</h5>
                                    <p class="card-text">Author: {{ $book->author }}</p>
                                    <p class="card-text">Barcode: {{ $book->barcode }}</p>
                                    <p class="card-text">Quantity: {{ $book->qty }}</p>
                                    <div class="btn-group" role="group">
                                        @if (\Auth::User()->is_admin)
                                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('books.destroy', $book->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este livro?')">Delete</button>
                                        </form>
                                        @endif
                                        <a {{-- href="{{ /* route('books.reserve', $book->id) */ }}" --}} class="btn btn-success">Reserving</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</x-layout>
