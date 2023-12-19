{{-- <form action="{{ route('auth.authentication') }}" method="post">
    @csrf
    <div class="input-group mb-3">
      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ @old('email') }}">
    </div>
    <div class="input-group mb-3">
      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
    </div>

    <div class="row">
      <div class="col-8">
        <div class="icheck-primary">
          <input type="checkbox" id="remember">
          <label for="remember">
            Remember Me
          </label>
        </div>
      </div>
      <div class="col-4">
        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
      </div>
    </div>
  </form> --}}
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ecommerce Dashboard &mdash; CodiePie</title>

    <!-- General CSS Files -->
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
    </head>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="card card-primary" style="margin-top: 120px;">
                        <div class="card-header">
                            <h4>Login</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('auth.authentication') }}" class="needs-validation" novalidate="" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
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
