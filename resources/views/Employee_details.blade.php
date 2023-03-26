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
        nav {
            background-color: #2b1010;
            color: #fff;
            display: flex;
            justify-content: flex-end;
            padding: 10px;
        }

        /* Navbar button styles */
        nav button {
            background-color: transparent;
            border: none;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        nav button:hover {
            background-color: #555;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        header {
            background-color: #180c0c;
            color: white;
            padding: 10px;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 28px;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #211212;
            color: white;
        }

        .employee-photo {
            max-width: 200px;
            margin: 20px auto;
            display: block;
        }

        .section-header {
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 24px;
            font-weight: bold;
        }

        .section {
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #311616;
            font-weight: bold;
        }

        .attendance-table {
            margin-top: 40px;
        }

        .attendance-table th {
            background-color: #ddd;
            font-weight: bold;
        }

        .attendance-table td {
            background-color: #f2f2f2;
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
        }

        .attendance-table td.present {
            background-color: #7fbf7f;
            color: white;
        }

        .attendance-table td.absent {
            background-color: #ff7f7f;
            color: white;
        }
    </style>
</head>

<body>
    <nav>
        <button>Home</button>
        <a href="{{route('leaves_form')}}"><button> Leave </button></a>
        <a href="{{route('signOut')}}"><button>Logout</button></a>
    </nav>

    <main>
        <img class="employee-photo"
            src="https://api.dicebear.com/5.x/open-peeps/png?size=512&seed={{Auth::user()->name}}"
            alt="Employee Photo">

        <section class="section">
            <h2 class="section-header">Personal Details</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <td>{{ Auth::user()->name }}</td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>{{ Auth::user()->gender }}</td>
                </tr>
                <tr>
                    <th>Father's Name</th>
                    <td>{{ Auth::user()->father_name }}</td>
                </tr>
                <tr>
                    <th>Employee ID</th>
                    <td>{{ Auth::user()->employee_id }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ Auth::user()->email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ Auth::user()->phone_no }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ Auth::user()->permanentAddress }}</td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td>{{ Auth::user()->dob }}</td>
                </tr>
            </table>
        </section>

        <section class="section">
            <h2 class="section-header">Company Details</h2>
            <table>
                <tr>
                    <th>Department</th>
                    <td>{{ Auth::user()->department }}</td>
                </tr>
                <tr>
                    <th>Position</th>
                    <td>{{ Auth::user()->designation }}</td>
                </tr>
                <tr>
                    <th>Employee ID</th>
                    <td>{{ Auth::user()->employee_id }}</td>
                </tr>
                <tr>
                    <th>Start Date</th>
                    <td>{{ Auth::user()->joining_date }}</td>
                </tr>
                <tr>
                    <th>Salary</th>
                    <td>{{ Auth::user()->joining_salary }}</td>
                </tr>
            </table>
        </section>


        <div class="container">
            <h1>Attendance</h1>
            {{-- <table class="attendance-table">
                <form action="">
                <tr>
                    <th><input type="text">Date</th>
                    <th>Time In</th>
                    <th>Time Out</th>
                    <th>Status</th>
                </tr>
            </form>
                <tr>
                    <td>03/01/2023</td>
                    <td>9:00 AM</td>
                    <td>5:00 PM</td>
                    <td class="present">Present</td>
                </tr>
                <tr>
                    <td>03/02/2023</td>
                    <td>9:05 AM</td>
                    <td>5:03 PM</td>
                    <td class="present">Present</td>
                </tr>
                <tr>
                    <td>03/03/2023</td>
                    <td>9:08 AM</td>
                    <td>5:02 PM</td>
                    <td class="present">Present</td>
                </tr>
                <tr>
                    <td>03/04/2023</td>
                    <td>9:02 AM</td>
                    <td>5:01 PM</td>
                    <td class="present">Present</td>
                </tr>
                <tr>
                    <td>03/05/2023</td>
                    <td>9:10 AM</td>
                    <td>5:04 PM</td>
                    <td class="present">Present</td>
                </tr>
            </table> --}}
            <div class="attendance">
                <form action="#" method="post">
                    @csrf
                    <label for="Date">Date</label>
                    <input type="date" name="date" id="date"> <br>

                    <label for="time_in">Time In</label>
                    <input type="time" name="time_in" id="time_in"> <br>

                    <label for="time_out">Time out</label>
                    <input type="time" name="time_out" id="time_out"><br>

                    <label for="status">Status</label>
                    <select name="status" id="status">
                        <option value="Present">Present</option>
                        <option value="Absent">Absent</option>
                        <option value="Late">Late</option>
                    </select>
                </form>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </main>
</body>

</html>
