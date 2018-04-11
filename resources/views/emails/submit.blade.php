@component('mail::message')
# Dear Mr/Ms {{ $task->name }},

Thank you for using our website
Your ticket is #{{ $task->id }}

Thank you for using our web-service, the results will be informed to you by email when it's done. I hope you will send more protein samples so that we can enrich our database and improve the accuracy of the system.

@component('mail::button', ['url' => url('task/'. $task->id) ])
Your detailed task
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
