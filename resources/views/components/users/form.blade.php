<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="container h-25 d-flex align-items-center justify-content-center">
                <h2 class="text-uppercase text-white">{{$option}}</h2>
            </div>
            <div class="card">
                <div class="card-header bg-primary text-white">
                </div>
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
                        @if ($option == "Sing-Up")
                        <div class="mb-3">
                            <label for="nome" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
                        </div>
                        @endif
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="senha" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        @if ($option == "Sing-Up")
                        <div class="mb-3">
                            <label for="senha" class="form-label">Confirm the password:</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        @endif

                        <button type="submit" class="btn btn-success"><?=$option == "Sing-Up" ? "Sing-Up" : "Sing-In"  ?></button>
                    </form>
                </div>
                <div class="container d-flex flex-row-reverse">
                @if($option == "Sing-In")
                    <div class="p-2"><a href="{{route('users.create')}}">Sing-Up</a></div>
                    <div class="p-2"><a href="{{route('forgot.index')}}">Forgot password?</a></div>
                @else
                    <div class="p-2"><a href="/login">Sing-In</a></div>
                @endif
            </div>

            </div>
        </div>
    </div>
</div>
