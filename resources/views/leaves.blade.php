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
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            padding: 22px 40px 20px 12px;
            text-decoration: none;
        }

        .emp_reg_head {
            list-style: none;
            display: inline-flex;
            /* position: relative; */
            /* top: 34px;
            left: 34px; */
        }

        .emp_reg_head ul li {
            display: inline-block;
            padding: 5px 5px;
            color: white;
        }

        #add_emp {
            display: inline-flex;
            position: absolute;
            top: 163px;
            left: 20%;
            background-color: green;
        }


        .emp_reg_head {
            background-color: grey;
            padding: 21px 818px 1px 33px;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            position: absolute;
            top: 244px;
            left: 365px;
            border: 3px solid blue;
            border-radius: 3px;
        }
        </style>
</head>

<body>
    @extends('layouts.main')
    @section('main-section')
    <div class="table">
        <table>
            <tr>
                <th>Leave Date</th>
                <th>Leave Type</th>
                <th>Reasons</th>
            </tr>
            @foreach ($leaves as $items)
                <tr>
                    <td>{{ $items->leave_date }}</td>
                    <td>{{ $items->leave_type }}</td>
                    <td>{{ $items->leave_reason }}</td>
                    {{-- <td><a href="{{ url('/department/delete', ['id' => $items->department_id]) }}"><button
                                class="btn btn-danger">Delete</button></a></td> --}}
                </tr>
            @endforeach

        </table>
    </div>
    @endsection
</body>

</html>
