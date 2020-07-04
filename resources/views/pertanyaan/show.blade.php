@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detail Pertanyaan</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Judul</th>
                    <td>{{ $pertanyaan->judul }}</td>
                </tr>
                <tr>
                    <th>Isi</th>
                    <td>{{ $pertanyaan->isi }}</td>
                </tr>
                <tr>
                    <th>Tanggal Dibuat</th>
                    <td>{{ $pertanyaan->created_at}}</td>
                </tr>
                <tr>
                    <th>Tanggal Diperbarui</th>
                    <td>{{ $pertanyaan->updated_at }}</td>
                </tr>
                <tr>
                    <th>Jawaban</th>
                    @foreach ($pertanyaan->jawaban as $jawab)
                    <td>{{ $jawab->isi }}</td>
                    @endforeach
                </tr>
            </table>
        </div>
    </div>
@endsection