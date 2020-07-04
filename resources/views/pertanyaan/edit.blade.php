@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Pertanyaan</h3>
        </div>
        <div class="card-body">
            {!! Form::model($pertanyaan, ['method' => 'PATCH', 'action' => ['PertanyaanController@update', $pertanyaan->id]]) !!}
            <div class="form-group">
                {!! Form::label('judul', 'Judul: ', null, ['class' => 'control-label']) !!}
                {!! Form::text('judul', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('isi', 'Isi: ', null, ['class' => 'control-label']) !!}
                {!! Form::textarea('isi', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection