@component('mail::message')
# {{ $name }} has contacted to Nascence

## email: {{ $email }}

<div>{{ $message }}</div><br>

{{ config('app.name') }}
@endcomponent
