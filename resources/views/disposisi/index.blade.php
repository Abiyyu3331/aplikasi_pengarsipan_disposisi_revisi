@extends('layout.master')
@section('content')

@php
    $keyword = isset($keyword) ? $keyword : ''; // Inisialisasi variabel $keyword jika belum ada nilai
@endphp

<div class="row justify-content-center" style="width: 1150px; margin-left: 170px;">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h4>Tabel Disposisi</h4>
                <div class="card-header-form">
                    <form action="{{ route('disposisi.index') }}" method="GET">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="Cari..." value="{{ $keyword }}">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No Surat</th>
                                <th>No Agenda</th>
                                <th>Kepada</th>
                                <th>Keterangan</th>
                                <th>Status Surat</th>
                                <th>Tanggapan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($filteredDisposisi as $value)
                                <tr>
                                    <td>{{ $value->no_surat}}</td>
                                    <td>{{ $value->no_agenda}}</td>
                                    <td>{{ $value->kepada}}</td>
                                    <td>{{ $value->keterangan}}</td>
                                    <td>
                                        <div class="badge badge-success">{{ $value->status_surat}}</div>
                                    </td>
                                    <td>{{ $value->tanggapan}}</td>
                                    <td>
                                        <form action="{{ route('disposisi.destroy', $value->no_surat) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('disposisi.show', $value->no_surat) }}" class="btn btn-info btn-sm">Show</a>
                                            <a href="{{ route('disposisi.edit', $value->no_surat) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusData" onclick="return confirm('Apakah Anda yakin ingin menghapus Disposisi ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">Data Masih Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-body mt-3">
            <a href="{{ route('disposisi.create') }}" class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i> Tambah Disposisi</a>
        </div>
    </div>
</div>

@endsection
