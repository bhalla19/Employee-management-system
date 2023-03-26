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

        .page_title {
            display: inline-flex;
            position: absolute;
            top: 85px;
            left: 255px;
        }

        .page_title small {
            display: inline-flex;
            position: relative;
            top: 17px;
            left: 3px;
        }

        .page_bar {

            position: absolute;
            display: inline-flex;
            top: 140px;
            left: 232px;
            background-color: grey;
            padding: 14px 774px 3px 3px;
            margin: 1px 0px 0px -8px;
            border: 2px solid grey;
            border-radius: 13px;

        }

        .page_bar ul li {
            display: inline-block;
            padding: 0px 0px 0px 15px;
            color: #e5e5e5;
        }

        .admin_add_btn button {
            display: inline-flex;
            position: absolute;
            top: 234px;
            left: 250px;
            background: green;
        }

        .table {
            border-collapse: collapse;
            width: 63%;
            position: absolute;
            top: 322px;
            left: 341px;
            border: 3px solid blue;
            border-radius: 6px;
        }

        .table th {

            border-collapse: collapse;
            width: 27%;
            padding: 9px 31px 11px 55px;
        }
    </style>
</head>

<body>
    @extends('layouts.main')
    <div class="admin_page">
        <div class="page_title">
            <h2>Admin</h2>
            <small>Admin List</small>
        </div>
    </div>
    <div class="page_bar">
        <ul>
            <a href="{{ route('employee') }}">
                <li>Home</li>
            </a>
            <a href="{{ route('admin') }}">
                <li>Admin</li>
            </a>
            <a href=""></a>
            <li>Admin List</li>
        </ul>
    </div>
    {{-- <div class="admin_add_btn">
        <a href="{{ route('admin_create-pg') }}"><button class="btn btn-primary">Add New Admin ++</button></a> --}}
    </div>
    <div class="table">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                {{-- <th>Actions</th> --}}
            </tr>
            @foreach ($users as $items)
                <tr>
                    <td>{{ $items->name }}</td>
                    <td>{{ $items->email }}</td>
                    <td>{{ $items->password }}</td>
                    {{-- <td><a href="{{ url('/admin/delete', ['id' => $items->id]) }}"><button
                                class="btn btn-danger">Delete</button></a></td> --}}
                </tr>
            @endforeach

        </table>
    </div>

    @section('main-section')
    @endsection

</body>

</html>
