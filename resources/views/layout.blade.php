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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
            integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Share JS -->
    <script src="{{ asset('js/share.js') }}"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700&display=swap');

        body {
            margin: 8px;
            font-family: 'Rubik', sans-serif;
            color: #9a9a9a;
            font-size: 14px;
            font-weight: 400;
        }

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

        .main-header {
            position: fixed;
            top: 0;
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


        #post-job, .apply-btn {
            line-height: 24px;
            background: #26ae61;
            color: white !important;
            border: none;
            text-align: center;
            overflow: hidden;
            padding: 9px 21px;
            border-radius: 30px;
            z-index: 1;
            text-transform: uppercase;
        }

        #filetr-btn {
            line-height: 24px;
            background: #26ae61;
            color: white !important;
            border: none;
            text-align: center;
            overflow: hidden;
            padding: 9px 30px;
            border-radius: 30px;
            text-transform: uppercase;

        }

        #login-form {
            padding: 30px;
            box-shadow: 0px 0px 14px rgba(191, 191, 191, 0.25);
            display: flex;
            flex-direction: column;
        }

        .formm {
            padding: 30px;
            box-shadow: 0px 0px 14px rgba(191, 191, 191, 0.25);
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
            margin-top: 100px;
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

        .details-table td {
            overflow-wrap: anywhere;
        }

        .details-table tr td:first-child {
            width: 31%;
            text-align: right !important;
        }

        .details-table tr td input {
            width: 297px;
        }

        #categories-table td {
            padding: 5px !important;
        }

        .card img {
            border: 1px solid;
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }

        .card {
            margin: 0;
            padding: 10px;
            height: 191px;
            align-items: center;
        }

        #jobs-cards tr {
            padding: 20px 30px;
            margin: 17px 0 !important;
            justify-content: space-between;
            box-shadow: 0px 0px 14px rgba(191, 191, 191, 0.25);
            border: 0;
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-items: center;

        }

        #jobs-cards tr td:first-child {
            display: flex;
            align-items: center;
        }

        #jobs-cards td {
            border: 0;
        }

        #jobs-cards img {
            width: 40px;
            height: 40px;
            border: 1px solid;

        }

        #job-card-body {
            display: flex;
            flex-direction: column;
        }

        #jobs-cards h5 {
            color: black;
        }

        #jobs-cards p {
            margin: 0;
        }

        #apply-btn {
            border: 2px solid #26ae61;
            line-height: 24px;
            color: #26ae61;
            font-size: 14px;
            text-transform: uppercase;
            padding: 5px 20px;
            border-radius: 30px;
        }

        #apply-btn:hover {
            color: white;
            background: #26ae61;
        }

        #jobs-cards td {
            padding: 0 !important;
        }

        #active-job {
            color: #26ae61;
            background: #d5ffe7;
            padding: 5px 21px;
            border-radius: 30px;
        }

        td i {
            color: #26ae61;

        }

        .show-job > div {
            box-shadow: 0px 0px 14px rgba(191, 191, 191, 0.25);
            padding: 15px 20px;
        }

        .show-job {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .show-job div:first-child {
            width: 65%;
        }

        .show-job div:last-child {
            width: 32%;
        }

        .show-job div div {
            width: 100% !important;
        }

        .show-job h3 {
            color: black;
            text-transform: capitalize;
        }

        #social-links ul {
            padding-left: 0;
        }

        #social-links ul li {
            display: inline-block;
        }

        #social-links ul li a {
            border-radius: 5px;
            margin: 5px;
            font-size: 25px;
        }

        #social-links .fa-facebook {
            color: #3b5998;
        }

        #social-links .fa-twitter {
            color: deepskyblue;
        }

        #social-links .fa-linkedin {
            color: #0e76a8;
        }

        #social-links .fa-whatsapp {
            color: #25D366
        }

        #social-links .fa-reddit {
            color: #FF4500;;
        }

        #social-links .fa-telegram {
            color: #0088cc;
        }

        .copy-text {
            display: flex;
        }
    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://kit.fontawesome.com/2db4f0a0af.js" crossorigin="anonymous"></script>
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
        <li class="nav-item dropdown">
            <button class="navbar-toggler" type="button" {{--data-bs-toggle="collapse"--}}
            data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Candidates
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Browse Jobs</a></li>
                            <li><a class="dropdown-item" href="#">Browse Categories</a></li>
                            <li><a class="dropdown-item" href="#">Add Resume</a></li>
                            <li><a class="dropdown-item" href="#">Manage Resumes</a></li>
                            <li><a class="dropdown-item" href="#">Jobs Alerts</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
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
            <a href="{{route('jobs.create')}}" class="nav-link" id="post-job">POST A JOB</a>
        </li>
    </ul>
</nav>

<div class="container">
    @yield('content')

</div>
</body>
</html>


