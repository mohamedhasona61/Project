@component('mail::message')
# Introduction
Laravel ResetPassword


@component('mail::button', ['url' => ''])
Button Text
@endcomponent
<p>Your Reset Code is {{$code}}</p>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
