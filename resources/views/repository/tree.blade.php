@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Repository</h1></div>

                <div class="panel-body">
                    <ul>
                        @foreach($files as $file)
                            <li style="list-style: none;">
                                @if($file['type'] == 'folder')
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-file-code-o" aria-hidden="true"></i>
                                @endif
                                <a href="{{ $file['url'] }}">
                                {{ $file['name'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection