@extends('layouts.app')

@section('content')

<body class="text-gray-800 antialiased">
    <main>
        <section class="absolute w-full h-full">
            <div class="container mx-auto px-4 h-full">
                <div class="flex content-center items-center justify-center h-full">
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                            <div class="rounded-t mb-0 px-6 py-3">
                                <div class="text-center mb-3">
                                    <h6 class="text-gray-600 text-sm font-bold">
                                        {{ __('Login') }}
                                    </h6>
                                </div>
                                <div class="btn-wrapper text-center">
                                    <button class="bg-white active:bg-gray-100 text-gray-800 px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs" type="button" style="transition: all 0.15s ease 0s;">
                                        <img alt="..." class="w-5 mr-1" src="/images/github.svg" />Github</button><button class="bg-white active:bg-gray-100 text-gray-800 px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs" type="button" style="transition: all 0.15s ease 0s;">
                                        <img alt="..." class="w-5 mr-1" src="/images/google.svg" />Google
                                    </button>
                                </div>
                                <hr class="mt-4 border-b-1 border-gray-400" />
                            </div>
                            <div class="flex-auto px-4 lg:px-4 py-10 pt-0">
                                <div class="text-gray-500 text-center mb-3 font-bold">
                                    <small>Or sign in with e-mail</small>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="email">Email</label>
                                        <input name="email" type="email" autocomplete="email" autofocus class="@error('email') is-invalid @enderror px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Email" value="{{ old('email') }}" style="transition: all 0.15s ease 0s;" />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Password</label>
                                        <input type="password" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full @error('password') is-invalid @enderror" placeholder="Password" style="transition: all 0.15s ease 0s;" name="password" required autocomplete="current-password" />

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label class="inline-flex items-center cursor-pointer">
                                            <input id="customCheckLogin" type="checkbox" class="form-checkbox text-gray-800 ml-1 w-5 h-5" style="transition: all 0.15s ease 0s;" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} /><span class="ml-2 text-sm font-semibold text-gray-700">Remember me</span></label>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button class="bg-primary active:bg-gray-700 text-white text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full" type="submit" style="transition: all 0.15s ease 0s;">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="flex flex-wrap p-4">
                                <div class="w-1/2">
                                    <a href="{{ route('password.request') }}" class=""><small>{{ __('Forgot Your Password?') }}</small></a>
                                </div>
                                <div class="w-1/2 text-right">
                                    <a href="/register" class=""><small>Create new account</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
@endsection