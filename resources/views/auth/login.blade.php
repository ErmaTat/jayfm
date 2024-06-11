@extends('layouts.auth')
@section('content')
    <div class="row">
        <div class="col-xl-7 order-1"><img class="bg-img-cover bg-center" src="{{ asset('assets/images/login/1.jpg') }}"
                alt="looginpage"></div>
        <div class="col-xl-5 p-0">
            <div class="login-card login-dark">
                <div>
                    <div class="login-main">
                        <form class="theme-form"  method="POST" action="{{ route('login') }}">
                            @csrf
                            <h4>Sign in to account</h4>
                            <p>Enter your email & password to login</p>
                            <div class="form-group">
                                <label class="col-form-label">Email Address</label>
                                <input class="form-control" type="email" required="" name="email"
                                    value="{{ old('email') }}" placeholder="Test@gmail.com">
                                @if ($errors->has('email'))
                                <span class="text-danger mt-2">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="password" required=""
                                        placeholder="*********">
                                    <div class="show-hide"><span class="show"> </span></div>
                                </div>
                                @if ($errors->has('password'))
                                <span class="text-danger mt-2">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-0">
                                <div class="checkbox p-0">
                                    <input id="checkbox1" type="checkbox" name="remember">
                                    <label class="text-muted" for="checkbox1">Remember Me</label>
                                </div>

                                @if (Route::has('password.request'))
                                <a class="link" href="{{ route('password.request') }}">Forgot password?</a>
                                @endif
                                <div class="text-end mt-3">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                                </div>
                            </div>
                            {{-- <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                        <div class="social mt-4">
                            <div class="btn-showcase"><a class="btn btn-light"
                                    href="https://www.linkedin.com/login" target="_blank"><i
                                        class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a
                                    class="btn btn-light" href="https://twitter.com/login?lang=en"
                                    target="_blank"><i class="txt-twitter"
                                        data-feather="twitter"></i>twitter</a><a class="btn btn-light"
                                    href="https://www.facebook.com/" target="_blank"><i class="txt-fb"
                                        data-feather="facebook"></i>facebook</a></div>
                        </div> --}}
                            <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="{{route('register')}}">Create
                                    Account</a></p>
                            <script>
                                (function() {
                                    'use strict';
                                    window.addEventListener('load', function() {
                                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                        var forms = document.getElementsByClassName('needs-validation');
                                        // Loop over them and prevent submission
                                        var validation = Array.prototype.filter.call(forms, function(form) {
                                            form.addEventListener('submit', function(event) {
                                                if (form.checkValidity() === false) {
                                                    event.preventDefault();
                                                    event.stopPropagation();
                                                }
                                                form.classList.add('was-validated');
                                            }, false);
                                        });
                                    }, false);
                                })();
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
