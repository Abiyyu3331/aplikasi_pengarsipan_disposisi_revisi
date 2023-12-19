@extends('layout.master')
@section('content')
<div class="row justify-content-center" >
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
          <div class="card-header">
             <h4>Form Register</h4>
          </div>
        <form action="{{ route('auth.store') }}" method="post">
          @csrf
          <div class="card-body">
            <div class="input-group mb-3">
              <input type="text" name="id" class="form-control @error('id') is-invalid @enderror" placeholder="ID Petugas">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            @error('id')
              <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="input-group mb-3">
              <input type="text" name="nama_depan" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Depan">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            @error('nama')
              <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="input-group mb-3">
                <input type="text" name="nama_belakang" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Belakang">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
            </div>
              @error('nama')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            <div class="input-group mb-3">
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
            </div>
              @error('email')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            @error('password')
              <span class="text-danger">{{ $message }}</span>
            @enderror
              <div class="form-group">
                <select name="role_id" id="role" class="form-control">
                    <option disabled selected>-- Pilih Role--</option>
                  @forelse ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->role }}</option>
                  @empty
                    <option>--- Data Role ---</option>
                  @endforelse
                </select>
              </div>
                <!-- /.col -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Register</button>
                <a href="{{ route('user.index') }}" class="btn btn-danger float-right">Kembali</a>
              </div>
                <!-- /.col -->
            </div>
          </form>
        </div>
      </div>
  </div>
  @endsection