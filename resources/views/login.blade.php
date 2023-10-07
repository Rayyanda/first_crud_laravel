<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link href="app.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                Rayyanda
            </a>
        </div>
    </nav>
    <div class="container-lg">
        <div class="row mt-5 p-3">
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-body">
                        
                        <form class="form" method="post" action="{{ route('actionLogin') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                            </div>
                            <div class="mb-1">
                                <a class="" href="#" style="text-decoration:none;">Lupa Password</a>
                            </div>
                            <div class="mb-1">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <p class="mb-1">Didn't have account? <a href="#" style="text-decoration: none;"> Register</a></p>
                        </form>
                        @if(session('error'))
                        <div class="alert alert-danger">
                            <b>Opps!</b> {{session('error')}}
                        </div>
                        
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>