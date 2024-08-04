<!DOCTYPE html>
<html lang="en">



<head>
    <title>Blog Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('/Auth/images/icons/favicon.ico') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('/Auth/vendor/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('/Auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/Auth/vendor/animate/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/Auth/vendor/css-hamburgers/hamburgers.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/Auth/vendor/select2/select2.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/Auth/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/Auth/css/main.css') }}">

    <meta name="robots" content="noindex, follow">
    <script nonce="c7ed5441-2197-4ba1-9996-dfa33d580628">
        (function(w, d) {
            ! function(dp, dq, dr, ds) {
                dp[dr] = dp[dr] || {};
                dp[dr].executed = [];
                dp.zaraz = {
                    deferred: [],
                    listeners: []
                };
                dp.zaraz.q = [];
                dp.zaraz._f = function(dt) {
                    return async function() {
                        var du = Array.prototype.slice.call(arguments);
                        dp.zaraz.q.push({
                            m: dt,
                            a: du
                        })
                    }
                };
                for (const dv of ["track", "set", "debug"]) dp.zaraz[dv] = dp.zaraz._f(dv);
                dp.zaraz.init = () => {
                    var dw = dq.getElementsByTagName(ds)[0],
                        dx = dq.createElement(ds),
                        dy = dq.getElementsByTagName("title")[0];
                    dy && (dp[dr].t = dq.getElementsByTagName("title")[0].text);
                    dp[dr].x = Math.random();
                    dp[dr].w = dp.screen.width;
                    dp[dr].h = dp.screen.height;
                    dp[dr].j = dp.innerHeight;
                    dp[dr].e = dp.innerWidth;
                    dp[dr].l = dp.location.href;
                    dp[dr].r = dq.referrer;
                    dp[dr].k = dp.screen.colorDepth;
                    dp[dr].n = dq.characterSet;
                    dp[dr].o = (new Date).getTimezoneOffset();
                    if (dp.dataLayer)
                        for (const dC of Object.entries(Object.entries(dataLayer).reduce(((dD, dE) => ({
                                ...dD[1],
                                ...dE[1]
                            })), {}))) zaraz.set(dC[0], dC[1], {
                            scope: "page"
                        });
                    dp[dr].q = [];
                    for (; dp.zaraz.q.length;) {
                        const dF = dp.zaraz.q.shift();
                        dp[dr].q.push(dF)
                    }
                    dx.defer = !0;
                    for (const dG of [localStorage, sessionStorage]) Object.keys(dG || {}).filter((dI => dI
                        .startsWith("_zaraz_"))).forEach((dH => {
                        try {
                            dp[dr]["z_" + dH.slice(7)] = JSON.parse(dG.getItem(dH))
                        } catch {
                            dp[dr]["z_" + dH.slice(7)] = dG.getItem(dH)
                        }
                    }));
                    dx.referrerPolicy = "origin";
                    dx.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(dp[
                        dr])));
                    dw.parentNode.insertBefore(dx, dw)
                };
                ["complete", "interactive"].includes(dq.readyState) ? zaraz.init() : dp.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Display validation errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('/Auth/images/img-01.png') }}" alt="IMG">
                </div>
                <form class="login100-form validate-form" method="post" action="{{ url('login') }}">
                    @csrf
                    <span class="login100-form-title">
                        User Login
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
                    {{-- <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="{{ url('password/reset') }}">
                            Username / Password?
                        </a>
                    </div> --}}
                    <div class="text-center p-t-136">
                        <a class="txt2" href="{{ url('register') }}">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('/Auth/vendor/jquery/jquery-3.2.1.min.js') }}"></script>

    <script src="{{ asset('/Auth/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('/Auth/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('/Auth/vendor/select2/select2.min.js') }}"></script>

    <script src="{{ asset('/Auth/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <script src="{{ asset('/Auth/js/main.js') }}"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"846d40e65c4f54b6","b":1,"version":"2024.1.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>

</html>
