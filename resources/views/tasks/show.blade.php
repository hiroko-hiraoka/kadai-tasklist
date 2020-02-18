@extends('layouts.app')

@section('content')

    <h1>課題の詳細ページ</h1>
    
    <table class="table table-borderd">
        <tr>
            <th>id</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'この課題を編集', ['id' => $task->id], ['class' => 'btn btn-info']) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    

@endsection