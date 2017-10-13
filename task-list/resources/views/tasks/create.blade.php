@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-xs-12">
        <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2"> 
            <div class="col-lg-6 col-lg-offset-3">
            <h1>タスク新規作成ページ</h1>

            {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status',null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content',null, ['class' => 'form-control']) !!}
                </div>
        
                    {!! Form::submit('投稿',['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection