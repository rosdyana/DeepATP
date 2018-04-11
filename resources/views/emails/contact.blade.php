@component('mail::message')
# Hi Admin,

{{ $contact->name }} ({{ $contact->email }})  just send you a following message:

{{ $contact->message }}

Nice day, Admin.<br>
{{ config('app.name') }}
@endcomponent
