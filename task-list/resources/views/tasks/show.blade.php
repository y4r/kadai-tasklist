@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2"> 
            <div class="col-lg-6 col-lg-offset-3">
               <h1>id = {{ $task->id }} のメッセージ詳細ページ</h1>

                 <table class="table table-bordered">
                   <tr>
                     <th>id</th>
                       <td>{{ $task->id }}</td>
                   </tr>
                   <tr>
                     <th>ステータス</th>
                     <td>{{ $task->status }}</td>
                   </tr>
                   <tr>
                     <th>タスク</th>
                     <td>{{ $task->content }}</td>
                   </tr>
                 </table>
    
    {!! link_to_route('tasks.edit', 'このタスクの編集', ['id' => $task->id],['class' => 'btn btn-default']) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
           </div>
        </div>
    </div>
</div>
@endsection