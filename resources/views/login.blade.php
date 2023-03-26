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
</head>

<body>
    <h1>
        Login
    </h1>
@if (\Session::has('message'))
    <div class="alert alert-info">
        {{\Session::get('message')}}
    </div>
@endif
<form action="{{route('postlogin')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="" />
        <span>
            @error('email')
                {{$message}}
            @enderror
        </span>
    </div>
    <div class="form-group">
        <label for="">password</label>
        <input type="password" class="form-control" name="password" id="" aria-describedby="emailHelpId" placeholder="" />
        <span>
            @error('password')
                {{$message}}
            @enderror
        </span>
  </div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>
