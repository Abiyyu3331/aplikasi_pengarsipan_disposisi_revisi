@extends('layout.master')
@section('content')

<div class="row justify-content-center" style="width: 1150px; margin-left: 170px;">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h4>Tabel Surat Masuk</h4>
                <div class="card-header-form">
                    <div class="card-body">
                        <a href="{{ route('suratmasuk.create') }}" class="btn btn-success btn-sm mb-2 float-right"><i class="fas fa-plus"></i> Tambah Surat Masuk</a>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No Surat</th>
                                <th>No Agenda</th>
                                <th>Jenis Surat</th>
                                <th>Tanggal Kirim</th>
                                <th>Tanggal Terima</th>
                                <th>Pengirim</th>
                                <th>Perihal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($suratmasuk as $key => $value)
                            <tr>
                                <td>{{ $value->no_surat }}</td>
                                <td>{{ $value->no_agenda }}</td>
                                <td>{{ $value->jenis_surat }}</td>
                                <td>{{ $value->tanggal_kirim }}</td>
                                <td>{{ $value->tanggal_terima }}</td>
                                <td>{{ $value->pengirim }}</td>
                                <td>{{ $value->perihal }}</td>
                                <td>
                                    <form action="{{ route('suratmasuk.destroy', $value->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('suratmasuk.show', $value->id) }}" class="btn btn-info btn-sm">Show</a>
                                        <a href="{{ route('suratmasuk.edit', $value->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusData" onclick="return confirm('Apakah Anda yakin ingin menghapus Disposisi ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8">Data Masih Kosong</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
