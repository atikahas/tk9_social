<html lang="{{ app()->getLocale() }}" data-theme="emerald">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TK9 Social</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left"></div>
            <div class="card w-96 bg-base-100 shadow-xl shadow-2xl">
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="card-body">
                        <div class="form-control">
                            <label class="label">
                            <span class="label-text">Email</span>
                            </label>
                            <input id="email" type="email" placeholder="email" class="input input-bordered @error('email') input-error @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-control">
                            <label class="label">
                            <span class="label-text">Password</span>
                            </label>
                            <input id="password" type="password" placeholder="password" class="input input-bordered @error('password') input-error @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-control mt-3">
                            <label class="label label-text-alt">
                                <a href="{{ route('register') }}" class="link link-hover">Doesn't have an account? Register here</a>.
                            </label>
                        </div>
                        <div class="form-control ">
                            <button class="btn btn-primary">Login
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>