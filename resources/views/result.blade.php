@extends('layout') 
@section('content')
<div class="wrapper">
    <div class="page-header page-header-small" style="max-height: 80px;">
        <div class="page-header-image" data-parallax="true" style="background-image: url({{ asset('assets/img/bg.png') }});">
        </div>
    </div>
    <div class="section section-result">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if ($task->status == 'queue')
                    <i class="fa fa-5x fa-clock-o pull-right text-success"></i> @else
                    <i class="fa fa-5x fa-check-circle pull-right text-success"></i> @endif
                    <h1>Task #{{ $task->id }}</h1>

                    <p class="text-muted">
                        <b>Submitter:</b> {{ $task->name }}<br>
                        <b>Email:</b> {{ $task->email }} <br>
                        <b>Status:</b> {{ $task->status }}
                    </p>
                    <table class="table is-bordered">
                        <thead>
                            <th>#</th>
                            <th>Code</th>
                            <th>Sequence</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            @foreach ($task_details as $detail)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $detail->name }}</td>
                                <td style="word-break:break-all">
                                    @if($detail->result!='') @for($i = 0; $i
                                    < strlen($detail->result); $i++) @if($detail->result[$i]==0) {{ $detail->sequence[$i] }} @else
                                        <b style="color: #f00">{{ $detail->sequence[$i] }}</b> @endif @endfor @else {{ $detail->sequence
                                        }} @endif
                                </td>
                                <td class="has-text-centered">
                                    @if ($task->status == 'queue')
                                    <i class="fa fa-2x fa-clock-o"></i> @else
                                    <i class="fa fa-2x fa-check-circle text-success"></i> @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="has-text-centered">
                    @if ($task->status == 'queue')
                    <p class="has-text-danger">This page will refresh automaticlly in 15 seconds</p>
                    @endif
                    <a href="{{ url('/') }}" class="button is-primary">Go to homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 
@section('meta_tags') @if ($task->status == 'queue')
<meta http-equiv="refresh" content="15" /> @endif
@endsection