<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Fostifest 2.0</title>
    <!-- Login CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- Icon Title -->
    <link rel="icon" href="{{ asset('asset/logo.png') }}" type="image/x-icon">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center">
    <div class="wrap-form px-5 py-5 rounded bg-white">
        <form action="{{ route('authenticate') }}" method="POST" class="text-center">
            @csrf
            <img src="asset/logo.png" width="100" class="logo-form">
            <h1 class="text-center">Sign in to FOSTIFEST</h1>
            @if(session()->has('loginError'))
            <p class="text-danger">{{ session('loginError') }}</p>
            @else
            <p class="text-center">Input username and password to sign in</p>
            @endif
            <input type="text" name="username" class="@error('username', 'post') is-invalid @enderror"
                placeholder="Username" id="username" autocomplete="off" required>
            @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <input type="password" name="password" class="@error('password', 'post') is-invalid @enderror"
                placeholder="Password" id="password" autocomplete="off" required>
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <input type="submit" value="Sign in" name="signin" class="button-submit">
        </form>
    </div>
</body>

</html>