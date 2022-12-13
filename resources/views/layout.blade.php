<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Post Job</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('css/style.css')}}>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700&display=swap');

        body {
            margin: 8px;
            font-family: 'Rubik', sans-serif;
            color: #9a9a9a;
            font-size: 14px;
            font-weight: 400;
        }

        /*table, tr, td, th {*/
        /*    border: 1px solid black;*/
        /*    border-collapse: collapse;*/
        /*    padding: 10px;*/
        /*}*/
        tr th {
            border: none;
            font-weight: 400;
        }

        td {
            padding: 6% !important;
        }

        nav {
            margin-bottom: 25px;
        }


        .navbar-brand {
            margin: 0 262px 0 105px;
        }

        .navbar-nav .nav-link {
            color: #333 !important;
            padding: 0 17px;
            letter-spacing: 0.5px;
            border-radius: 4px;
            line-height: 37px;
        }

        .navbar-nav:last-child {
            margin-right: 105px;
        }

        #signin {
            color: #26ae61 !important;
        }


        #post-job {
            line-height: 24px;
            background: #26ae61;
            color: white !important;
            border: none;
            text-align: center;
            overflow: hidden;
            padding: 9px 21px;
            border-radius: 30px;
            z-index: 1;
        }

        #login-form {
            padding: 30px;
            box-shadow: 0px 0px 14px rgba(191, 191, 191, 0.25);
            display: flex;
            flex-direction: column;
        }

        .page-login-form h3 {
            font-size: 18px;
            color: #333;
            line-height: 18px;
            padding: 15px 0 30px;
            text-transform: uppercase;
            text-align: center;
        }

        .form-control, input {
            width: 100%;
            height: 46px;
            padding: 0 20px;
            font-size: 14px;
            border-radius: 30px;
            border: 1px solid #ececec;

        }

        #log-btn {
            width: 100%;
            padding: 12px 22px;
            margin: 0px 0px 20px;
            text-transform: capitalize;
            font-size: 16px;
            background-color: #26ae61;
            border-radius: 30px;
            border: none;
        }

        a {
            color: #9a9a9a;
            text-align: center;
            text-decoration: none;
        }

        a:hover {
            color: #26ae61;
        }

        h3 {
            text-transform: uppercase;
        }

        p {
            text-align: center;
        }

        #signin-href {
            color: #26ae61;
        }

        select, option {
            color: #9a9a9a;
        }

        .container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .main-card {
            width: 65%;
            box-shadow: 0px 0px 14px rgba(191, 191, 191, 0.25);

        }

        .main-card p {
            color: black;
        }

        .input-group {
            width: 100%;
            flex-direction: row;
        }

        .form-select {
            border-radius: 30px;
        }

        input[type='file'] {
            display: none;
        }

        .input-group-text::after {
            content: 'Browse';
            color: white;
            background: #26ae61;
            border-radius: 0 30px 30px 0;
            border: none;
            position: relative;
            left: 74%;
            padding: 4px 15px;
            font-weight: 400;
        }

        .input-group-text {
            border-radius: 30px;
            background: unset;
            color: unset;
        }

        label {
            font-weight: 400 !important;

        }

        #job-btn {
            width: unset;
            padding: 10px 29px;
            text-transform: uppercase;
            font-size: 14px;
            background-color: #26ae61;
            border-radius: 30px;
            border: none;
        }

        textarea {
            width: 100%;
        }
    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: 0px">
    <a href="index3.html" class="navbar-brand">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Home</a>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Page</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Candidates</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Employers</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Blog</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        @guest
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('login')}}" class="nav-link" id="signin">Sign in</a>
            </li>
        @else
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('logout') }}" class="nav-link">Sign out</a>
            </li>
        @endguest

        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('posts.create')}}" class="nav-link" id="post-job">POST A JOB</a>
        </li>
    </ul>
</nav>

<div class="container">
    @yield('content')

</div>
</body>
</html>


