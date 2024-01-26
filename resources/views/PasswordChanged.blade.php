<x-layout title="Password has changed">
    <x-layout title="User Verified">

        <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Password has Changed</h4>
            <p>Congratulations! Your password has changed.</p>
            <hr>
            <p class="mb-0">Thank you for using our services.</p>
        </div>

       <button class="btn btn-primary" onclick="redirectLogin()">Sing-In</button>
    </div>

    <script>
        function redirectLogin()
        {
            window.location.href = '/login';
        }
    </script>

    </x-layout>

</x-layout>
