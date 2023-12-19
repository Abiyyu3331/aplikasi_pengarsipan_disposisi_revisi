@extends('layout.master')
@section('content')

<div class="row" style="width: 960px; margin-left: 270px;">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Tabel Disposisi</h4>
                <div class="card-header-form">
                    <div class="card-body" style="margin-right: 0px;">
                        <a href="{{ route('auth.register') }}" class="btn btn-success btn-sm mb-2 float-right">
                            <i class="fas fa-plus"></i> Tambah User
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped v_center">
                        <tr>
                            <th>Nama Depan</th>
                            <th>Nama Belakang</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                        @forelse ($users as $key => $user)
    <tr>
        <td>{{ $user->nama_depan }}</td>
        <td>{{ $user->nama_belakang }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role->role }}</td>
        <td style="margin-left: 100px;">
            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger" 
                        onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Delete
                </button>
            </form>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="5">Data Masih Kosong</td>
    </tr>
@endforelse

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
