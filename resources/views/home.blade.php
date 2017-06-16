@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    @foreach($sample as $val)
                    <li>{{ $val }}</li>
                    <li>The current UNIX timestamp is {{ time() }}.</li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
