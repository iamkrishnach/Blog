@extends('website.layouts.main')
@section('section')
    <section id="signUp">
        <!-- welcome -->
        <div class="square"></div>
        <div class="signUp-body container">
            <div class="signUp-picture">
                <img class="anim-img" data-value="1" src="{{ asset('/website/images/login/signUp.png') }}" alt="" />
            </div>

            <div class="signUp-welcome">
                <div class="signUp-item">
                    <p class="heading3">Welcome Back</p>
                    <p class="heading5">Please enter your details.</p>

                    <div class="signUp-form">
                        <form action="{{ url('user-reg') }}" method="post">
                            @csrf

                            <!-- Display validation errors -->
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

                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your name"
                                class="email-input heading5 mt-20" />
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <input type="email" name="email" value="{{ old('email') }}"
                                placeholder="Enter your email address" class="email-input heading5 mt-20" />
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Number"
                                class="password password-input heading5 mt-20" pattern="[1-9]{1}[0-9]{9}" maxlength="10" />
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <input type="password" name="password" placeholder="Password"
                                class="password password-input heading5 mt-20" />
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <input type="password" name="password_confirmation" placeholder="Confirm Password"
                                class="password password-input heading5 mt-20" />

                            <div class="signUp-button mt-20">
                                <button type="submit" class="button-1">Sign Up</button>
                            </div>

                            <div class="signUp-login">
                                <p class="heading5">
                                    Already Have An Account?
                                    <a href='{{ url('user-login') }}'>
                                        <span class="heading2">Log In</span>
                                    </a>
                                </p>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section padding -->
    <div class="square"></div>
@endsection
