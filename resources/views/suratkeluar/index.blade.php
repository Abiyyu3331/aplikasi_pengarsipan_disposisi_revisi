@extends('layout.master')
@section('content')

<div class="row" style="width: 960px; margin-left: 270px;">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Tabel Surat Keluar</h4>
                <div class="card-header-form">
                  <div class="card-body" style="margin-right: 0px;">
                    <a href="{{ route('suratkeluar.create') }}" class="btn btn-success btn-sm mb-2 float-right"><i class="fas fa-plus"></i> Tambah Surat Keluar</a>
                  </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped v_center">
                        <tr>
                            <th>No Surat</th>
                            <th>No Agenda</th>
                            <th>Jenis Surat</th>
                            <th>Tanggal Kirim</th>
                            <th>Pengirim</th>
                            <th>Perihal<th>
                            <th>Aksi<th>
                        </tr>
                        @forelse ($suratkeluar as $key => $value)
                        <tr>
                            <td>
                                {{ $value->no_surat}}
                            </td>
                            <td class="align-middle">
                                {{ $value->no_agenda}}
                            </td>
                            <td>
                                {{ $value->jenis_surat}}
                            </td>
                            <td>
                            {{ $value->tanggal_kirim}}
                            </td>
                            <td>{{ $value->pengirim}}</td>
                            <td>{{ $value->perihal}}</td>
                            <td>
                                    <form action="{{ route('suratkeluar.destroy', $value->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('suratkeluar.show', $value->id) }}"
                                            class="btn-sm btn-info">Show</a>
                                        <a href="{{ route('suratkeluar.edit', $value->id) }}"
                                            class="btn-sm btn-warning">Edit</a>
                                        <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapusData" onclick="return confirm('Apakah Anda yakin ingin menghapus Disposisi ini?')">Delete
                                    </form> 
                                
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">Data Masih Kosong</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection