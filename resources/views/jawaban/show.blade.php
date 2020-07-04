@extends('layout.master')

@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title">Daftar Jawaban</h3>
    </div>

    <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id Pertanyaan</th>
                        <th>Jawaban</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jawaban as $jawab)
                    <tr>
                        <td>{{ $jawab->pertanyaan_id}}</td>
                        <td>{{ $jawab->isi }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table> 

        {!! Form::open(['url' => 'jawaban/{pertanyaan_id}', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('isi','Jawaban Baru:',['class' => 'control-label']) !!}
            {!! Form::textarea('isi',null,['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Tambah Jawaban', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}

        <div class="bottom-nav">
            <div>
                <a href="/pertanyaan" class="btn btn-danger form-control">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection