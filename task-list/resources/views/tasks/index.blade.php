@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2"> 
            <div class="col-lg-6 col-lg-offset-3">

 <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
             <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
             <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('tasks.create', '新規タスクの投稿', null, ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
</div>
    

@endsection