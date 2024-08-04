@extends('website.layouts.main')
@section('section')
    <!-- main body -->
    <section id="login">
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
        <div class="square"></div>
        <div class="login-body container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="login-welcome">
                        <div class="login-item">

                            <h3 class="heading3">Welcome Back</h3>
                            <h5 class="heading5">
                                Please enter your details.
                            </h5>



                            <div class="login-form">
                                <form action="{{ url('user-login') }}" method="post">
                                    @csrf
                                    <input type="email" name="email" placeholder="Email Address"
                                        class="email-input heading5 mt-20" />

                                    <div class="input-password">
                                        <input type="password" name="password" id="password" placeholder="Password"
                                            class="password password-input heading5" />
                                        <i class="fa fa-eye-slash" id="eye"></i>
                                    </div>
                                    <div class="login-forget heading5">
                                        <div class="login-remember mb-20">
                                            <input type="checkbox" id="remember-me" class="" />
                                            <label for="remember-me" class="">Remember Me</label>
                                        </div>

                                    </div>
                                    <div class="login-button">
                                        <button class="button-1" type="submit">Log In</button>
                                    </div>
                                    <div class="login-signUp">
                                        <p class="heading5">
                                            Don't Have An Account?
                                            <a href='{{ url('/user-reg') }}'><span class="heading2">Sign Up</span></a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="login-picture">
                        <img class="img-fluid anim-img" data-value="1" src="{{ asset('/website/images/login/login.png') }}"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div cl ass="square"></div>
    </section>
@endsection
