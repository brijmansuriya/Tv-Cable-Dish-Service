

<!DOCTYPE html>
<html>


<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="keywords" content="Admin" />
    <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    {{-- <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'> --}}

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/skin/default_skin/css/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/skin/default_skin/css/custom.css') }}">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/admin-tools/admin-forms/css/admin-forms.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/img/favicon.ico') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="external-page external-alt sb-l-c sb-r-c">

    <!-- Start: Main -->
    <div id="main" class="animated fadeIn">

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- Begin: Content -->
            <section id="content">

                <div class="admin-form theme-info mw500" id="login">

                    <!-- Login Logo -->
                    <div class="row table-layout">
                        <a href="dashboard.html" title="Return to Dashboard">
                            <img src="{{ asset('admin/assets/img/logos/logo.png') }}" title="AdminDesigns Logo" class="center-block img-responsive" style="max-width: 275px;">
                        </a>
                    </div>

                    <!-- Login Panel/Form -->
                    <div class="panel mt30 mb25">

                        <form method="POST" action="{{ route('login') }}" >
                                @csrf

                            <div class="panel-body bg-light p25 pb15">

                               

                                <!-- Username Input -->
                                <div class="section">
                                    <label for="username" class="field-label text-muted fs18 mb10">Username</label>
                                    <label for="username" class="field prepend-icon">
                                        {{-- <input type="text" name="username" id="username" class="gui-input" placeholder="Enter username"> --}}

                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        <label for="username" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>

                                <!-- Password Input -->
                                <div class="section">
                                    <label for="username" class="field-label text-muted fs18 mb10">Password</label>
                                    <label for="password" class="field prepend-icon">
                                        {{-- <input type="password" name="password" id="password" class="gui-input" placeholder="Enter password"> --}}

                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror gui-input" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <label for="password" class="field-icon">
                                            <i class="fa fa-lock"></i>
                                        </label>
                                    </label>
                                </div>

                            </div>

                            <div class="panel-footer clearfix">
                                <button type="submit" class="button btn-primary mr10 pull-right">Log In</button>
                               

                                {{-- <label class="switch ib switch-primary mt10">
                                    <input type="checkbox" name="remember" id="remember" checked>
                                    <label for="remember" data-on="YES" data-off="NO"></label>
                                    <span>Remember me</span>
                                </label> --}}
                            </div>

                        </form>
                    </div>

                    <!-- Registration Links -->
                    {{-- <div class="login-links">
                      
                        <p>Haven't yet Registered?
                            <a href="pages_login-alt.html" title="Sign In">Sign up here</a>
                        </p>
                    </div> --}}

                    <!-- Registration Links(alt) -->
                    <div class="login-links hidden">
                        <a href="pages_forgotpw(alt).html" class="active" title="Sign In">Sign In</a> |
                        <a href="pages_register(alt).html" class="" title="Register">Register</a>
                    </div>

                </div>

            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

    </div>
   

  
</body>



</html>


