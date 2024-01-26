<x-layout title="Email Verification">
    <div class="container mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">{{ $instruction }}</h4>
                <p>Please check your email.</p>
                <hr>
                <p class="mb-0">If you don't receive an email within a few minutes, make sure to check your spam folder.</p>
            </div>

            @if (Route::current()->getName() != 'forgot.create')
            <div class="p-2"><a href="{{route('login')}}">Sing-In</a></div>
            @endif

        </div>
    </div>

</x-layout>
