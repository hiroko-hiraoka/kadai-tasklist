@extends('layouts.app')

@section('content')

 <h1>課題 新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
                <div class="form-group">
                    {!! Form::label('content', '課題:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('status', '進捗状況:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('提出', ['class' => 'btn btn-info']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection

 