<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body class="h-100 bg-dark">
    <div class="container-fluid d-flex align-items-center justify-content-center bg-dark" style="height: 100vh; ">
        <div class="card login-form p-3 shadow-lg">
            <form action="login/process" method="POST" class="card-body d-flex flex-column justify-content-between">
                <h1 class="card-title text-center fw-bold text-uppercase mb-4 form-title">Login</h1>
                @csrf   
                <input type="email" id="email" placeholder="Email" name="email" class="mb-4 input-form">
                <input type="Password" placeholder="Password" name="password" class="mb-1 input-form ">
                <a href="/register" class="mb-2 fs-6 link" style="text-align: right;">doesn't have an account?</a>
                <button type="submit" class="btn btn-dark mt-4 btn-form">SUBMIT</button>
            </form> 
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>