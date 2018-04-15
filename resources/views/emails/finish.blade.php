@component('mail::message') # Dear Mr/Ms {{ $task->name }}, Thank you for using our website Your task id #{{ $task->id }}is finished. 
@component('mail::button', ['url' => url('task/'.$task->id) ]) View results @endcomponent Thanks,
<br> {{ config('app.name') }} @endcomponent