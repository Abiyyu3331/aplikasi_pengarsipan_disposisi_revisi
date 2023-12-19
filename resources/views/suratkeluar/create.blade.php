@extends('layout.master')
@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Surat Keluar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('suratkeluar.store') }}" method="POST">
                @csrf 
                <div class="card-body">
                    <div class="form-group">
                        <label for="no_surat">No Surat</label>
                          <select name="no_surat" id="no_surat" class="form-control">
                            <option disabled selected>-- Pilih Nomor Surat--</option>
                          @forelse ($disposisis as $disposisi)
                            <option value="{{ $disposisi->no_surat }}">{{ $disposisi->no_surat }}</option>
                          @empty
                            <option>--- Tidak Ada No Surat ---</option>
                          @endforelse
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_agenda">No Agenda</label>
                        <input type="text" name="no_agenda" id="no_agenda" placeholder="Masukkan No Agenda" value="{{ old('no_agenda') }}" class="form-control @error('id') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="jenis_surat">Jenis Surat</label>
                        <input type="text" name="jenis_surat" id="jenis_surat" placeholder="Masukkan Jenis Surat" value="{{ old('jenis_surat') }}" class="form-control @error('id') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kirim">Tanggal Kirim</label>
                        <input type="date" name="tanggal_kirim" id="tanggal_kirim" placeholder="Masukkan Tanggal Kirim" value="{{ old('tanggal_kirim') }}" class="form-control @error('id') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="pengirim">Pengirim</label>
                        <input type="text" name="pengirim" id="pengirim" placeholder="Masukkan Pengirim" value="{{ old('pengirim') }}" class="form-control @error('id') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="perihal">Perihal</label>
                        <input type="text" name="perihal" id="perihal" placeholder="Masukkan Perihal" value="{{ old('perihal') }}" class="form-control @error('id') is-invalid @enderror">
                    </div>
                    <div>
                        <label for="surat">Pilih Surat:</label>
                        <input type="file" name="surat_keluar" accept=".pdf, .doc, .docx" value="{{ old('surat_keluar') }}" class="form-control @error('id') is-invalid @enderror">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('suratkeluar.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
              </form>
    </div>
  </div>
</div>
@endsection