@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="register-form">
    <section class="container">
        <div class="columns is-multiline">
            <div class="column is-8 is-offset-2 register">
                <div class="columns">
                    <div class="column left">
                        <h1 class="title is-1">Super Cool Website</h1>
                        <h2 class="subtitle colored is-4">Lorem ipsum dolor sit amet.</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis ex deleniti aliquam tempora libero excepturi vero soluta odio optio sed.</p>
                    </div>
                    <div class="column right has-text-centered">
                        <h1 class="title is-4">Sign up today</h1>
                        <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>
                        <form>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="text" placeholder="Name">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="email" placeholder="Email">
                                </div>
                            </div>
                            <button class="button is-block is-primary is-fullwidth is-medium">Submit</button>
                            <br />
                            <small><em>Lorem ipsum dolor sit amet consectetur.</em></small>
                        </form>
                    </div>
                </div>
            </div>
            <div class="column is-8 is-offset-2">
                <br>
                <nav class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <span class="icon">
                                <i class="fab fa-twitter"></i>
                            </span> &emsp;
                            <span class="icon">
                                <i class="fab fa-facebook"></i>
                            </span> &emsp;
                            <span class="icon">
                                <i class="fab fa-instagram"></i>
                            </span> &emsp;
                            <span class="icon">
                                <i class="fab fa-github"></i>
                            </span> &emsp;
                            <span class="icon">
                                <i class="fas fa-envelope"></i>
                                </h1>
                            </span>
                        </div>
                    </div>
                    <div class="level-right">
                        <small class="level-item" style="color: var(--textLight)">
                            &copy; Super Cool Website. All Rights Reserved.
                        </small>
                    </div>
                </nav>
            </div>
        </div>
    </section>
</div> -->
@endsection