@component('mail::message')

Click on this link
[Change Password]({{route('resetPassword', ['id' => $id, 'token' => $token[0]->token])}})

@endcomponent
