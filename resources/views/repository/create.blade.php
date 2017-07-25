@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create repository</h1></div>

                <div class="panel-body">

                    <form action="{{ route('repository.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inputRepositoryName">Repository Name</label>
                            <input type="text" class="form-control" name="inputRepositoryName" id="inputRepositoryName" placeholder="Name">
                        </div>
                        <button type="submit" class="btn btn-default btn-primary">Create</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection