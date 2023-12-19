@extends('layout.master')
@section('content')

<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css')}}">
@stack('css')



<nav class="navbar navbar-expand-lg main-navbar"`>
    <div class="d-sm-none d-lg-inline-block">Hi, {{Auth::user()->nama_belakang}} </div>
</nav>
<div class="main-content" style="min-height: 659px;">
    <section class="section">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2" style="width: 800px;">
                <div class="card-stats" style="height: 200px;">
                <div class="card-stats-title" style="font-size: 18px;">Surat Surat:
                </div>
                <div class="card-stats-items" style="height: 100px;">
                    <div class="card-stats-item">
                        <div class="card-stats-item-count" style="font-size: 38px;">{{$jumlah_suratmasuk}}</div>
                        <div class="card-stats-item-label">Surat Masuk</div>
                    </div>
                    <div class="card-stats-item">
                        <div class="card-stats-item-count" style="font-size: 38px;">{{$jumlah_disposisi}}</div>
                        <div class="card-stats-item-label">Disposisi</div>
                    </div>
                    <div class="card-stats-item">
                        <div class="card-stats-item-count" style="font-size: 38px;">{{$jumlah_suratkeluar}}</div>
                        <div class="card-stats-item-label">Surat Keluar</div>
                    </div>
                </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Surat</h4>
                </div>
                <div class="card-body">
                    {{$jumlah_surat}}
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</div>

@endsection