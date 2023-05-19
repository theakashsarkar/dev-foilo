
<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <!-- Mobile Specific Metas -->
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/styles/core.css') }}" />
    <link
        rel="stylesheet"
        type="text/css"
        href="{{ asset('backend/vendors/styles/icon-font.min.css') }}"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href="{{ asset('backend/src/plugins/jquery-steps/jquery.steps.css') }}"
    />
    <link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/styles/style.css')}}" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
        async
        src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
    ></script>
    <script
        async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"
    ></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
</head>

<body class="login-page">
<div class="login-header box-shadow">
    <div
        class="container-fluid d-flex justify-content-between align-items-center"
    >
        <div class="brand-logo">
            <a href="login.html">
                <img src="{{asset('backend/vendors/images/deskapp-logo.svg')}}" alt="" />
            </a>
        </div>
        <div class="login-menu">
            <ul>
                <li><a href="login.html">Login</a></li>
            </ul>
        </div>
    </div>
</div>
<div
    class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center"
>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <img src="{{asset('backend/vendors/images/register-page-img.png')}}" alt="" />
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">Admin User Register</h2>
                    </div>
                    <form method="POST" action="{{ route('admin.register') }}">
                        @csrf
                        <div class="input-group custom">
                            <input
                                type="text"
                                class="form-control form-control-lg"
                                placeholder="First Name"
                                name="first_name"
                            />
                        </div>
                        <div class="input-group custom">
                            <input
                                type="text"
                                class="form-control form-control-lg"
                                placeholder="Last Name"
                                name="last_name"
                            />
                        </div>
                        <div class="input-group custom">
                            <input
                                type="email"
                                class="form-control form-control-lg"
                                placeholder="Email"
                                name="email"
                            />
                        </div>
                        <div class="input-group custom">
                            <input
                                type="number"
                                class="form-control form-control-lg"
                                placeholder="Phone Number"
                                name="phone"
                            />
                        </div>
                        <div class="input-group custom">
                            <input
                                type="password"
                                class="form-control form-control-lg"
                                placeholder="password"
                                name="password"
                            />
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <!--
                                    use code for form submit
                                -->
                                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- js -->
<script src="{{asset('backend/vendors/scripts/core.js')}}"></script>
<script src="{{asset('backend/vendors/scripts/script.min.js')}}"></script>
<script src="{{asset('backend/vendors/scripts/process.js')}}"></script>
<script src="{{asset('backend/vendors/scripts/layout-settings.js')}}"></script>>
<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->
</body>
</html>
