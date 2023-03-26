<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="st.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        /* Style for form container */
        .form {
            display: flex;
            flex-direction: column;
            margin: 20px;
            width: 300px;
        }

        /* Style for form labels */
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Style for form inputs */
        input[type="text"],
        select,
        input[type="date"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Style for submit button */
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            margin-top: 20px;
            cursor: pointer;
        }

        /* Style for bootstrap classes */
        /* These styles are specific to the Bootstrap CSS file linked in the HTML file */
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            margin-top: 20px;
            cursor: pointer;
            margin: 20px;
            margin-bottom: 200px;
        }
    </style>
</head>

<body>
    <form action="{{ route('leaves_data') }}" method="post">
        @csrf
        <div class="form">
            <label for="leave_date">Leave Date</label>
            <input type="date" class="leave_date" name="leave_date">

            <label for="">Type</label>
            <select name="leave_type" id="">
                <option value="sick">Sick</option>
                <option value="casual">Casual</option>
                <option value="half_day">Half Day</option>
                <option value="maternity">Maternity</option>
                <option value="others">others</option>
            </select>

            <label for="Reason">Reason</label>
            <input type="text" class="reason" name="leave_reason">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
