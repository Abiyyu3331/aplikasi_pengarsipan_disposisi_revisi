@extends('layout.master')
@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Edit Disposisi</h3>
              </div>
<form action="{{ route('disposisi.update' , $disposisi->no_surat) }}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                        <label for="no_surat">No Surat</label>
                        <input type="text" name="no_surat" id="no_surat" placeholder="Masukkan No Surat" value="{{ $disposisi->no_surat }}" class="form-control @error('id') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="no_agenda">No Agenda</label>
                        <input type="text" name="no_agenda" id="no_agenda" placeholder="Masukkan No Agenda" value="{{ $disposisi->no_agenda }}" class="form-control @error('id') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="kepada">Kepada</label>
                        <input type="text" name="kepada" id="kepada" placeholder="Masukkan Kepada" value="{{ $disposisi->kepada }}" class="form-control @error('id') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" placeholder="Masukkan Keterangan" value="{{ $disposisi->keterangan }}" class="form-control @error('id') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="status_surat">Status Surat</label>
                        <input type="text" name="status_surat" id="status_surat" placeholder="Masukkan Status Surat" value="{{ $disposisi->status_surat }}" class="form-control @error('id') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="tanggapan">Tanggapan</label>
                        <input type="text" name="tanggapan" id="tanggapan" placeholder="Masukkan Tanggapan" value="{{ $disposisi->tanggapan }}" class="form-control @error('id') is-invalid @enderror">
                    </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('disposisi.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
</form>
</div>
</div>
</div>
@endsection