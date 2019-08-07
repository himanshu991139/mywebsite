
<div class="signUpModal theme-modal-box">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h3>Tutors Registration</h3>
                    <div class="wrapper">


                        <input id="name" type="text" placeholder="Name" class=" @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror


                        <input id="email" type="email" placeholder="Email"
                               class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                               required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror


                        <input id="password" type="password" placeholder="Password"
                               class=" @error('password') is-invalid @enderror" name="password" required
                               autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror


                        <input id="password-confirm" placeholder="Confirm Password" type="password" class=""
                               name="password_confirmation" required autocomplete="new-password">


                        <button type="submit" class="p-bg-color hvr-trim">
                            {{ __('Register') }}
                        </button>
                        <br>
                        <p style="text-align: center; ">Already Have Account? <a href="{{route('login')}}">Sign In</a> Here</p>

                    </div>
                </form>

            </div> <!-- /.modal-body -->
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.signUpModal -->\






login

<div class="signUpModal theme-modal-box">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <h3>Tutors Login</h3>
                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror



                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror


                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input style="width: 10%; height: 15px" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12 offset-md-12">

                            <button type="submit" class="p-bg-color hvr-trim">
                                {{ __('Login') }}
                            </button>
                            <br>

                            @if (Route::has('password.request'))

                                <p style="text-align: center"> <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a></p>
                            @endif
                            <p style="text-align: center; ">Don't Have Account? <a href="{{route('register')}}">Sign Up</a> Here</p>

                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>