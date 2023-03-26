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
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .card-title {
            text-align: center;
            font-size: 30px;
            margin-bottom: 30px;
        }

        .form-group label {
            font-size: 20px;
            font-weight: 500;
        }

        .form-control {
            border-radius: 10px;
            padding: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 10px;
            padding: 10px 30px;
            font-size: 20px;
            font-weight: 500;
        }

        .btn-primary:hover {
            background-color: #0069d9;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-title">
                        Admin
                    </div>
                    @if (\Session::has('message'))
                        <div class="alert alert-info">
                            {{ \Session::get('message') }}
                        </div>
                    @endif
                    <form action="{{ route('postlogin_admin') }}
                    " method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                aria-describedby="emailHelpId" placeholder="" required>
                            <span>
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                aria-describedby="passwordHelpId" placeholder="" required>
                            <span>
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
