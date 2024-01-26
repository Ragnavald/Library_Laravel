<x-layout title="Reset Password">
    <div class="container mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <form action="{{route('forgot.create')}}" method="post" class="bg-light p-4 rounded">
                @csrf
                @method('GET')
                <h2 class="mb-4">Password Recovery</h2>
                <p class="mb-4">Please provide the following information to reset your password.</p>

                <div class="form-group">
                    <label for="username">Email:</label>
                    <input type="email" id="username" name="username" class="form-control mb-2 mt-2" required>
                </div>

                <button type="submit" class="btn btn-success btn-block">Send</button>
            </form>
        </div>
    </div>
</x-layout>
