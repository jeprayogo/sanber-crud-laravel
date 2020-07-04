@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Pertanyaan</h3>
        </div>
        <div class="card-body">
            {!! Form::open(['url' => 'pertanyaan']) !!}
                <div class="form-group">
                    {!! Form::label('judul','Judul:',['class' => 'control-label']) !!}
                    {!! Form::text('judul',null,['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('isi','Isi:',['class' => 'control-label']) !!}
                    {!! Form::textarea('isi',null,['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Tambah Pertanyaan', ['class' => 'btn btn-primary form-control']) !!}
                </div>
            {!! Form::close() !!}
            <div class="form-group">
                <a href="{{ url('/pertanyaan') }}"><button class="btn btn-danger form-control">Cancel</button></a>
            </div>
        </div>
    </div>
@endsection