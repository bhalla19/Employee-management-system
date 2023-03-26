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

        .emp_reg {
            display: inline-flex;
            /* border: 3px solid black;  */
            height: 50%;
            width: 36%;
        }

        .emp_reg h4 {
            border: 3px solid black;
            margin: 18px 0px 0px 45px;
            padding: 11px 43px 19px 48px;
            background-color: #e23be2;
        }

        .name_f {
            display: inline-flex;
            position: absolute;
            top: 165px;
            left: 280px;
        }

        .emp_name {
            padding: 1px 9px 4px 41px;
            margin: -1px 0px 0px 107px;
        }

        .f_name {
            display: inline-flex;
            position: absolute;
            top: 207px;
            left: 280px;
        }

        .father_n {
            padding: 1px 9px 4px 41px;
            margin: -1px 0px 0px 59px;
        }

        .dob_d {
            display: inline-flex;
            position: absolute;
            top: 248px;
            left: 280px;
        }

        .date_of_birth {
            padding: 1px 9px 4px 41px;
            margin: -1px 0px 0px 118px;
        }

        .gender {
            display: inline-flex;
            position: absolute;
            top: 290px;
            left: 280px;
        }

        .contact_details {
            display: inline-flex;
            position: absolute;
            top: 326px;
            left: 280px;
        }

        .phone_no {
            padding: 1px 9px 4px 41px;
            margin: -1px 0px 0px 44px;
        }

        .local_add {
            display: inline-flex;
            position: absolute;
            top: 369px;
            left: 280px;
        }

        .local_address {
            padding: 1px 9px 4px 41px;
            margin: -1px 0px 0px 74px;
        }

        .control_gender {
            padding: 1px 9px 4px 41px;
            margin: -1px 0px 0px 90px;
        }

        .permanent_add {
            display: inline-flex;
            position: absolute;
            top: 87px;
            left: 0px;
        }

        .permanent_address {
            padding: 1px 9px 4px 45px;
            margin: -1px 0px 0px 13px;
        }

        .ac_login h1 {
            display: inline-flex;
            position: absolute;
            top: 182px;
            left: -16px;
        }

        .ac_email {

            display: inline-flex;
            position: absolute;
            top: 246px;
            left: 0px;

        }

        .email {
            padding: 3px 84px 6px 53px;
            margin: -7px 1px 0px 40px;
        }

        .ac_pass {

            display: inline-flex;
            position: absolute;
            top: 295px;
            left: -28px;

        }

        .pass {
            padding: 3px 84px 6px 53px;
            margin: -7px 1px 0px 40px;
        }

        #btn {
            position: absolute;
            top: 344px;
            left: 295px;
        }

        .company_details h3 {
            display: inline-flex;
            position: relative;
            top: -278px;
            left: 125px;
            border: 3px solid black;
            padding: 14px 35px 20px 36px;
        }

        .form {
            display: inline-flex;
            position: absolute;
            top: -8px;
            left: 125px;
            padding: 4px 39px 8px 60px;
        }

        .emp_id {
            display: inline-flex;
            position: relative;
            top: -200px;
            left: -200px;
        }

        .department {
            display: inline-flex;
            position: relative;
            top: -211px;
            left: 101px;
        }

        .department_option {
            padding: 0px 76px 5px 55px;
            margin: -7px 0px 0px 35px;
        }
        .designation{
            display: inline-flex;
            position: relative;
            top: -200px;
            left: 102px;
        }
        #designation{
            padding: 0px 76px 5px 55px;
            margin: -7px 0px 0px 35px;
        }
        .dateOfJoining{
            display: inline-flex;
            position: relative;
            top: -188px;
            left: 82px;
        }
        .joiningDate{
            padding: 0px 88px 6px 89px;
            margin: -6px 0px 0px 35px;
        }
        .JoiningSalary{
            display: inline-flex;
            position: absolute;
            top: 0px;
            left: 439px;
        }
        .salary{
            padding: 0px 43px 6px 89px;
            margin: -6px 0px 0px 34px;
        }
    </style>
</head>

<body>
    @extends('layouts.main')
    @section('main-section')
        <div class="emp_reg">
            <h4>Personal Details</h4>
            <form action="{{ route('emp_reg_data') }}" method="POST">
                @csrf
                <div class="name_f">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="emp_name" placeholder="Employee Name"
                        aria-describedby="helpId" />
                    <span>
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="f_name">
                    <label for="father_n">Father Name</label>
                    <input type="text" name="father_name" class="father_n" placeholder="Father's Name"
                        aria-describedby="helpId" />
                    <span>
                        @error('father_name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="dob_d">
                    <label for="dob">DOB</label>
                    <input type="date" name="dob" class="date_of_birth" />
                    <span>
                        @error('dob')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="gender">
                    <label for="gender">Gender : </label>
                    <select class="control_gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <span>
                        @error('gender')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="contact_details">
                    <label for="phone-no">Phone Number</label>
                    <input type="number" name="phone_no" class="phone_no" />
                    <span>
                        @error('phone_no')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="local_add">
                    <label class="">Local
                        Address</label>
                    <div class="">
                        <textarea class="local_address" name="localAddress" rows="3"></textarea>
                        <span>
                            @error('localAddress')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="permanent_add">
                        <label class="">Permanent Address</label>
                        <div class="">
                            <textarea class="permanent_address" name="permanentAddress" rows="3"></textarea>
                        </div>
                        <span>
                            @error('permanentAddress')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="ac_login">
                        <h1>Account Login</h1>
                        <div class="ac_email">
                            <label for="">Email</label>
                            <input type="email" class="email" name="email" placeholder="Enter Your Email" />
                            <span>
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="ac_pass">
                            <label for="pass">Password</label>
                            <input type="password" class="pass" name="password" placeholder="Enter Password" />
                            <span>
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="company_details">
                        <h3>Company Details</h3>
                        <div class="emp_id">
                            <label for="">Employee ID</label>
                            <input type="text" name="employee_id" id="" class="form" placeholder="Employee Id"
                                aria-describedby="helpId">
                        </div>

                        <div class="department">
                            <label for="">Department</label>
                            <select name="department" class="department_option" id="">
                                <option value="Php Developer">Php Developer</option>
                                <option value="Human Resource">Human Resource</option>
                                <option value="Android Developer">Android Developer</option>
                            </select>
                        </div>

                        <div class="designation">
                            <label for="">Designation</label>
                            <select name="designation" id="designation">
                                <option value="Fresher Developer">Fresher PHP Developer</option>
                                <option value="Senior Developer">Senior PHP Developer</option>
                            </select>
                        </div>

                        <div class="dateOfJoining">
                            <label for="">Date of Joining</label>
                            <input type="date" name="joining_date" class="joiningDate" id="">
                        </div>

                        <div class="JoiningSalary">
                            <label for="">Joining Salary</label>
                            <input type="text" name="joining_salary" class="salary" placeholder="Joining Salary">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btn">Submit</button>
            </form>
        </div>
    @endsection
</body>

</html>
