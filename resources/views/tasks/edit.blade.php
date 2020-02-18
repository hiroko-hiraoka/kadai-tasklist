@extends('layouts.app')

@section('content')

    <h1>{{ $task->id }} の課題編集ページ</h1>
    
    <div class="row">
        <div "col-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
            
                <div class="form-group">
                    {!! Form::label('content', '課題:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('更新', ['class' => 'btn btn-info']) !!}
            
            {!! Form::close() !!}
        </div>
    </div>
        
@endsection