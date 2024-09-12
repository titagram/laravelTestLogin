<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .home-container {
            background-color: #1e1e1e;
            border-radius: 15px;
            padding: 3rem;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            text-align: center;
        }
        .btn {
            transition: all 0.3s ease;
            width: 200px;
            margin: 10px;
        }
        .btn:hover {
            transform: translateY(-2px);
        }
        .btn-primary {
            background-color: #0d6efd;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
        }
        .btn-outline-light:hover {
            background-color: #f8f9fa;
            color: #1e1e1e;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="home-container">
                <h1 class="text-white mb-4">Benvenuto</h1>
                <p class="text-light mb-5">Accedi o registrati per continuare</p>
                <div>
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">Registrati</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>