<link rel="stylesheet" href="{{ asset('template/assets/modules/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/modules/fontawesome/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css')}}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('template/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/modules/summernote/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('template/assets/css/style.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/css/components.min.css') }}">
@stack('css')

<div class="main-sidebar sidebar-style-3">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a>Archiving.co</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">WL</a>
        </div>
        <ul class="sidebar-menu">
            <a href="{{route('dashboard')}}" type="submit" class="btn btn-success btn-lg btn-block btn-icon-split" style="align-content: center; font-size: 16px;">
                <i class="fas fa-home"></i>
                Dashboard
            </a>
            <li class="menu-header"></li>
            @can('isAdmin')
            <li class="has-dropdown dropdown">
                    <li><a class="nav-link" href="/user"><i class="fa fa-users"></i><span>Menu User</span></a></li>
            </li>
            @endcan
            <li class="dropdown">
                <a href="/suratmasuk" class="nav-link"><i class="fa fa-envelope"></i><span>Surat Masuk</span></a>
            </li>
            @can('isAtasan')
            <li class="has-dropdown">
                <a href="/disposisi" class="nav-link"><i class="fa fa-envelope"></i><span>Disposisi</span></a>
            </li>
            @endcan
            <li class="dropdown">
                <a href="/suratkeluar" class="nav-link"><i class="fa fa-envelope" ></i><span>Surat Keluar</span></a>
            </li>
            <br><br><br><br>
            <li class="nav-item">
                <form action="{{ route('auth.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger btn-lg btn-block btn-icon-split" style="align-content: center; font-size: 16px;">
                <i class="fas fa-solid fa-door-open"></i>
                    Logout
                </button>
                </form>
            </li>
        </aside>
</div>

<script src="{{ asset('template/assets/bundles/lib.vendor.bundle.js') }}"></script>
<script src="{{ asset('template/js/CodiePie.js') }}"></script>

<!-- JS Libraies -->
<script src="{{ asset('template/assets/modules/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('template/assets/modules/chart.min.js') }}"></script>
<script src="{{ asset('template/assets/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('template/assets/modules/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('template/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('template/js/page/index.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('template/js/scripts.js') }}"></script>
<script src="{{ asset('template/js/custom.js') }}"></script>
@stack('script')
