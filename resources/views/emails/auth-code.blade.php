<x-mail::message>
    
<h1>Your Authentication Code</h1>
<p>Your 6-digit code is: <strong>{{ $code }}</strong></p>
<p>This code will expire in 15 minutes.</p>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
