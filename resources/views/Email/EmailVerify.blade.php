@component('mail::message')

Click on this link
[Email Verify]({{route('verify', ['id' => $id, 'token'=>$token[0]->token])}})

@endcomponent
