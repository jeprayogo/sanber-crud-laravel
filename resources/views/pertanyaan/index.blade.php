@extends('layout.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel Pertanyaan</h3>
    </div>

    <div class="card-body">
        @if (!empty($pertanyaan_list))
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Jawaban</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pertanyaan_list as $pertanyaan) : ?>
                    <tr>
                        <td>{{ $pertanyaan->judul }}</td>
                        <td>{{ $pertanyaan->isi }}</td>
                        <td><a href="{{url('/jawaban')."/".$pertanyaan->id}}" class="btn btn-success btn-sm">Lihat Jawaban</a></td>
                        <td>
                            <div class="box-button">
                                {{ link_to('pertanyaan/'. $pertanyaan->id, 'Detail', ['class' => 'btn btn-info btn-sm']) }}
                            </div>
                            <div class="box-button">
                                {{ link_to('pertanyaan/'.$pertanyaan->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm'])}}
                            </div>
                            <div class="box-button">
                                {!! Form::open(['method' => 'Delete', 'action' => ['PertanyaanController@destroy', $pertanyaan->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>     
         @else
          <p>Tidak Ada Data</p>
        @endif

        <div class="bottom-nav">
            <div>
                <a href="pertanyaan/create" class="btn btn-primary">Tambah Pertanyaan</a>
            </div>
        </div>
    </div>
</div>
@endsection