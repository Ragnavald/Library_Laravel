<x-layout>
    <div class="card-body">
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

        <form action="{{$action}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="senha" class="form-label">New Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            @if ($option == "Sing-Up")
            <div class="mb-3">
                <label for="senha" class="form-label">Confirm the password:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
            @endif

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</div>
</x-layout>
