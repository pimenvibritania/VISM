@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">{{ ucwords(Auth::user()->name) }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-md-4">
                        Welcome to your Profile!
                        <img src="{{url('../')}}/img/{{Auth::user()->pic}}" height="80" width="80"><br>
                        <a href="#">Change Pic</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
