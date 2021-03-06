@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @foreach($repositories as $repository)
                        <div><a href="{{ route('repository.open', ['repository' => $repository]) }}">{{ $repository }}</a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
