@extends('layout.master')
@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Edit Surat Keluar</h3>
              </div>
<form action="{{ route('suratkeluar.update' , $suratkeluar->id) }}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="no">No Surat</label>
                          <select name="no_surat" id="no" class="form-control">
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
                        <input type="text" name="no_agenda" id="no_agenda" placeholder="Masukkan No Agenda" value="{{ $suratkeluar->no_agenda }}" class="form-control @error('id') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="jenis_surat">Jenis Surat</label>
                        <input type="text" name="jenis_surat" id="jenis_surat" placeholder="Masukkan Jenis Surat" value="{{ $suratkeluar->jenis_surat }}" class="form-control @error('id') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kirim">Tanggal Kirim</label>
                        <input type="date" name="tanggal_kirim" id="tanggal_kirim" placeholder="Masukkan Tanggal Kirim" value="{{ $suratkeluar->tanggal_kirim }}" class="form-control @error('id') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="pengirim">Pengirim</label>
                        <input type="text" name="pengirim" id="pengirim" placeholder="Masukkan Pengirim" value="{{ $suratkeluar->pengirim }}" class="form-control @error('id') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="perihal">Perihal</label>
                        <input type="text" name="perihal" id="perihal" placeholder="Masukkan Perihal" value="{{ $suratkeluar->perihal }}" class="form-control @error('id') is-invalid @enderror">
                    </div>
                </div>
            
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('suratkeluar.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
</form>
</div>
</div>
</div>
@endsection