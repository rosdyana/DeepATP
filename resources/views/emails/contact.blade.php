@component('mail::message') # Hi Admin, {{ $contact->name }} ({{ $contact->email }}) just send you a following message: {{
$contact->message }} Have a nice day.<br> {{ config('app.name') }} @endcomponent