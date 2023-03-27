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

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            position: absolute;
            top: 80px;
            left: 260px;
        }

        table {
            border-collapse: collapse;
            width: 70%;
            position: absolute;
            top: 210px;
            left: 286px;
        }

        th,
        td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        input[type="time"],
        select {
            width: 100%;
            padding: 6px 10px;
            margin: 2px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
        }

        button {
            position: relative;
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 12px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 0;
            border-radius: 4px;
            cursor: pointer;
            top: 339px;
            left: 250px;
        }

        button:hover {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    @extends('layouts.main')
    @section('main-section')
        <h1>Employee Attendance Tracker</h1>
        <table>
            <tr>
                <th>Attendance ID</th>
                <th>Employee ID</th>
                <th>Date</th>
                <th>Time In</th>
                <th>Time Out</th>
            </tr>
            @foreach ($attendance as $items)
                <tr>
                    <td>{{ $items->attendance_id }}</td>
                    <td>{{ $items->employee_id }}</td>
                    <td>{{ $items->date }}</td>
                    <td>{{ $items->time_in }}</td>
                    <td>{{ $items->time_out }}</td>
                </tr>
            @endforeach
        </table>
    @endsection
</body>

</html>
