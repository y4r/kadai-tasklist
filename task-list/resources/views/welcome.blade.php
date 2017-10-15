@extends('layouts.app')

@section('content')
    @if (Auth::check())
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            {!! Form::open(['route' => 'tasks.store']) !!}
                    <div class="form-group">
                            {!! Form::label('status', 'ステータス:') !!}
                            {!! Form::text('status',null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                            {!! Form::label('content', 'タスク:') !!}
                            {!! Form::text('content',null, ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-block']) !!}
                    
                    
        </di>
    </div>
            {!! Form::close() !!}    
        
                @if (count($tasks) > 0)
                    @include('tasks.index', ['tasks' => $tasks])
                @endif
                
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the tasklists</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection