<!doctype html>
<html lang="en">

<head>
    <title>Title</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            opacity: 1;
        }

        h1 {
            text-align: center;
            position: relative;
            top: 110px;
            font-size: 4rem;
            color: rgb(255, 251, 251);
            margin-bottom: 4rem;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar-brand {
            font-size: 2rem;
            font-weight: bold;
        }

        .nav-item a {
            font-size: 1.5rem;
            color: white;
        }

        body {
            /* The image used */
            background-image: url("https://images8.alphacoders.com/559/559128.jpg");
            height: 100%;
            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Employee Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('login_pg') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post_admin_login') }}">Admin Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main content -->
    <main class="container">
        <h1>Welcome to Our HRMS System</h1>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm
