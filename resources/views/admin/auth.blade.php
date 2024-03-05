<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="{{url('storage/img/')}}/IMG_6171.png">

    <!-- plugins:css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('vendors/base/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <link rel="stylesheet" href="{{url('admin/admin.css')}}">
    <script src="https://cdn.tiny.cloud/1/arlygrqvqogm8jt5rp1cix0jik7vutqeudourbugx5buwlph/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <style>
        #proBanner{
            display: none;
        }
    </style>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo me-5" href="/home">Admin</a>
            <a class="navbar-brand brand-logo-mini" href="/home">Admin</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="ti-view-list"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                        {{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="ti-view-list"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper" style="background-color: #dddce1;">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: white;">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('books.index')}}">
                        <i class="ti-book menu-icon"></i>
                        <span class="menu-title">Kitoblar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('category.index')}}">
                        <i class="ti-layout-list-post menu-icon"></i>
                        <span class="menu-title">Categoriya</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('author.index')}}">
                        <i class="ti-user menu-icon"></i>
                        <span class="menu-title">Mualliflar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('genre.index')}}">
                        <i class="ti-layout-cta-btn-right menu-icon"></i>
                        <span class="menu-title">Janr</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
    @yield('content')
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>

<script src="{{url('vendors/base/vendor.bundle.base.js')}}"></script>

<script src="{{url('vendors/chart.js/Chart.min. js')}}"></script>

<script src="{{url('admin/templates.js')}}"></script>

<script>
    tinymce.init({
        selector: 'textarea#myeditorinstance',
        plugins: 'code table lists',
        toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
    });
</script>

</body>

</html>

