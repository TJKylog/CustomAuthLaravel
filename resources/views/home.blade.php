@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>
                <div class="panel-body">
                    You are logged in!
                </div>
                <div class="panel-body">
                    User logged!
                    <p> <b>{{Auth::user()}}</b> </p>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
