@extends('layouts.app')

@section('content')

    <h1>課題一覧</h1>
    
    @if (count($tasks)>0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>課題</th>
                    <th>進捗状況</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show',$task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    {!! link_to_route('tasks.create', '新規課題の提出', [], ['class' => 'btn btn-info']) !!}

@endsection 
