<!doctype html>
<html lang="en">

<head>
    <title>{{$title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        #admin_btn {
            display: inline-block;
            position: relative;
            left: 81%;
        }

        .sidebar {
            display: inline-flex;
            border: 4px solid black;
            background: grey;

        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            padding: 22px 40px 20px 12px;
            text-decoration: none;
            color: whitesmoke;
        }

        .form_box h3 {
            border: 2px solid blue;
            position: absolute;
            top: 155px;
            left: 274px;
            padding: 7px 52% 10px 45px;
            background-color: #6b6be7;

        }

        .side_bar {
            display: inline-flex;
            position: absolute;
            top: 77px;
            left: 235px;
        }

        .side_bar ul li {
            display: inline-flex;
            position: relative;
            top: 23px;
            padding: 4px 13px 0px 9px;
        }

        .box {
            /* height: 45%; */
            width: 915px;
            /* background-color: #6b6be7; */
            display: inline-flex;
            position: absolute;
            border: 2px solid blue;
            top: 209px;
            left: 275px;

        }

        .name_text {

            padding: 6px 153px 7px 150px;
            margin: 0px 0px 0px 66px;

        }

        .form {

            display: inline-flex;
            position: absolute;
            top: 237px;
            left: 323px;

        }
        .admin_email{

            display: inline-flex;
            position: relative;
            top: 18px;
            left: 9px;
        }

        .email_text{
            padding: 6px 153px 7px 150px;
            margin: 0px 0px 0px 66px;
        }
        .admin_pass{
            display: inline-flex;
            position: relative;
            top: 34px;
            left: -19px;
        }
        .password_text{
            padding: 6px 153px 7px 150px;
            margin: 0px 0px 0px 66px;
        }
        #sub{
            position: relative;
            top: 98px;
            left: -440px;
        }
    </style>
</head>

<body>
    @extends('layouts.main')
    <div class="side_bar">
        <ul>
            <a href="{{ route('welcome') }}">
                <li>Home</li>
            </a>
            <a href="{{ route('admin') }}">
                <li>Admin</li>
            </a>
            <li>New Admin</li>
        </ul>
    </div>
    <div class="form_box">
        <h3>Add New Admin</h3>
    </div>
    <div class="box">
    </div>
    <div class="form">
        <form action="{{$url}}" method="post">
            @csrf
            <div class="admin_name">
                <label for="">Name</label>
                <input type="text" class="name_text" name="name" id="" aria-describedby="emailHelpId"
                    placeholder="Enter Name" />
                    <span>
                        @error('name')
                            {{$message}}
                        @enderror
                    </span>
            </div>

            <div class="admin_email">
                <label for="">Email</label>
                <input type="email" class="email_text" name="email" id="" aria-describedby="emailHelpId"
                    placeholder="Enter Email" />
                    <span>
                        @error('email')
                            {{$message}}
                        @enderror
                    </span>
            </div>

            <div class="admin_pass">
                <label for="">Password</label>
                <input type="password" class="password_text" name="password" id="" aria-describedby="emailHelpId"
                    placeholder="Enter Password" />
                    <span>
                        @error('password')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <button type="submit" class="btn btn-primary" id="sub">{{$button}}</button>
        </form>
    </div>
    @section('main-section')
    @endsection
</body>

</html>
