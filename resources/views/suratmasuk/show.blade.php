@extends('layout.master')
@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Surat Masuk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="no_agenda">No Agenda</label>
                        <input type="text" name="no_agenda" id="no_agenda" placeholder="Masukkan No Agenda" value="{{ $suratmasuk->no_agenda }}" class="form-control @error('id') is-invalid @enderror" disabled>
                    </div>
                    <div class="form-group">
                        <label for="jenis_surat">Jenis Surat</label>
                        <input type="text" name="jenis_surat" id="jenis_surat" placeholder="Masukkan Jenis Surat" value="{{ $suratmasuk->jenis_surat }}" class="form-control @error('id') is-invalid @enderror" disabled>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kirim">Tanggal Kirim</label>
                        <input type="date" name="tanggal_kirim" id="tanggal_kirim" placeholder="Masukkan Tanggal Kirim" value="{{ $suratmasuk->tanggal_kirim }}" class="form-control @error('id') is-invalid @enderror" disabled>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_terima">Tanggal Terima</label>
                        <input type="date" name="tanggal_terima" id="tanggal_terima" placeholder="Masukkan Tanggal Terima" value="{{ $suratmasuk->tanggal_terima }}" class="form-control @error('id') is-invalid @enderror" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_surat">No Surat</label>
                        <input type="text" name="no_surat" id="no_surat" placeholder="Masukkan No Surat" value="{{ $suratmasuk->no_surat }}" class="form-control @error('id') is-invalid @enderror" disabled>
                    </div>
                    <div class="form-group">
                        <label for="pengirim">Pengirim</label>
                        <input type="text" name="pengirim" id="pengirim" placeholder="Masukkan Pengirim" value="{{ $suratmasuk->pengirim }}" class="form-control @error('id') is-invalid @enderror" disabled>
                    </div>
                    <div class="form-group">
                        <label for="perihal">Perihal</label>
                        <input type="text" name="perihal" id="perihal" placeholder="Masukkan Perihal" value="{{ $suratmasuk->perihal }}" class="form-control @error('id') is-invalid @enderror" disabled>
                    </div>
                </div>
        </div>
    </div>
</div>