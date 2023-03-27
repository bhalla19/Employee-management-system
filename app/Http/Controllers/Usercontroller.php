<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Customer;
use App\Models\Admin;
use App\Models\Attendance;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Leaves;
use App\Models\User;
// use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Hash;
use Session;

class Usercontroller extends Controller
{

    public function Employee_details()
    {
        return view('Employee_details');
    }

    public function welcome()
    {
        return view('welcome');
    }
    public function employee()
    {
        $employee = Employee::all();
        $stored_data = compact('employee');
        return view('employee')->with($stored_data);
    }
    public function user()
    {
        // $user = User::all();
        // $users = DB::table('users')->get();
        // $stored_data = compact('users');
        $users = User::where('is_admin', false)->get();
        return view('employee', ['users' => $users]);
    }
    public function emp_reg_pg()
    {
        return view('employee_form');
    }
    public function emp_reg_data(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'father_name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'phone_no' => 'required',
            'localAddress' => 'required',
            'permanentAddress' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $customer = new User;
        $customer->is_admin = false;
        $customer->name = $request['name'];
        $customer->father_name = $request['father_name'];
        $customer->dob = $request['dob'];
        $customer->gender = $request['gender'];
        $customer->phone_no = $request['phone_no'];
        $customer->localAddress = $request['localAddress'];
        $customer->permanentAddress = $request['permanentAddress'];
        $customer->email = $request['email'];
        $customer->password = $request['password'];
        $customer->employee_id = $request['employee_id'];
        $customer->department = $request['department'];
        $customer->designation = $request['designation'];
        $customer->joining_date = $request['joining_date'];
        $customer->joining_salary = $request['joining_salary'];
        $customer->save();
        return redirect('employees');

        $data = $request->all();
        $check = $this->create($data);
    }

    // public function create(array $data)
    // {
    //     Employee::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => $data['password'],
    //         'father_name' => $data['father_name'],
    //         'dob' => $data['dob'],
    //         'gender' => $data['gender'],
    //         'phone_no' => $data['phone_no'],
    //         'localAddress' => $data['localAddress'],
    //         'permanentAddress' => $data['permanentAddress'],
    //         'employee_id' => $data['employee_id'],
    //         'department' => $data['department'],
    //         'designation' => $data['designation'],
    //         'joining_date' => $data['joining_date'],
    //         'joining_salary' => $data['joining_salary']
    //     ]);
    // }

    public function admin()
    {
        $users = User::where('is_admin', true)->get();
        return view('admin', ['users' => $users]);
    }
    public function admin_create_pg(Request $request)
    {
        $title = 'Admin Registration';
        $button = 'Submit';
        $url = url('/admin/create');
        $data = compact('title', 'button', 'url');
        return view('admin_form')->with($data);
    }
    // public function admin_create(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);
    //     $admin = new Admin;
    //     $admin->name = $request['name'];
    //     $admin->email = $request['email'];
    //     $admin->password = $request['password'];
    //     $admin->save();
    //     return redirect('admin');

    //     $data = $request->all();
    //     $check = $this->create_admin($data);
    // }

    public function emp_destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back();
    }
    // public function admin_destroy($id)
    // {
    //     Admin::where('admin_id', $id)->delete();
    //     return redirect()->back();
    // }
    public function department_destroy($id)
    {
        Department::where('department_id', $id)->delete();
        return redirect()->back();
    }

    // public function edit_admin($id){
    //     $admin = Admin::where('admin_id',$id);
    //     if(is_null($admin)){
    //         return redirect('admin');
    //     }
    //     else{
    //         $url = route('update_admin')."/".$id;
    //         $data = compact('admin','url');
    //         return view('admin_form')->with($data);
    //     }
    // }

    // public function update_admin($admin_id, Request $request){
    //     Admin::find($admin_id)->update([
    //         'name'=>$request['name'],
    //         'email'=>$request['email'],
    //         'password'=>$request['password']
    //     ]);
    //     return view('admin');
    // }

    // public function create_admin(array $data)
    // {
    //     Admin::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => $data['password']
    //     ]);
    // }

    public function department()
    {
        $department = Department::all();
        $stored_data = compact('department'); //stored_data is var who store $admin data
        // return view('admin')
        return view('department')->with($stored_data);;
    }
    public function department_addDepart()
    {
        return view('department_add');
    }
    public function department_create(Request $request)
    {
        $request->validate([
            'department' => 'required',
            'designation' => 'required'
        ]);
        $department = new Department;
        $department->department = $request['department'];
        $department->designation = $request['designation'];
        $department->save();
        return redirect('department');
    }
    public function holidays()
    {
        return view('holidays');
    }
    public function attendance()
    {
        return view('attendance');
    }
    public function leave_application()
    {
        return view('leave_application');
    }
    public function login_pg()
    {
        return view('login');
    }
    public function postlogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if ($user && $password == $user->password) {
            Auth::login($user);
            return view('Employee_details');
        }

        return redirect('/login')->with('message', 'Invalid credentials');
    }
    public function postlogin_admin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();
        $users = DB::table('users')->get();

        if ($user && $password == $user->password) {
            if ($user->is_admin) {
                $users = User::where('is_admin', false)->get();
                Auth::login($user);
                return view('admin', ['users' => $users]);
            } else {
                return redirect('/admin-login')->with('message', 'You are not an Admin');
            }
        }
        return redirect('/admin-login')->with('message', 'Invalid credentials');
    }
    public function post_admin_login()
    {
        return view('admin_login');
    }

    public function register_pg()
    {
        return view('register');
    }


    public function leaves()
    {
        $leaves = Leaves::all();
        $stored_data = compact('leaves');
        return view('leaves')->with($stored_data);
    }
    public function leaves_form()
    {
        return view('leaves_form');
    }
    public function leaves_data(Request $request)
    {
        $request->validate([
            'leave_date' => 'required',
            'leave_type' => 'required',
            'leave_reason' => 'required'
        ]);
        $leave = new Leaves;
        $leave->leave_date = $request['leave_date'];
        $leave->leave_type = $request['leave_type'];
        $leave->leave_reason = $request['leave_reason'];
        $leave->save();
        return view('Employee_details');
    }
    public function signOut()
    {
        // Session::flush();
        Auth::logout();

        return redirect('/');
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return view('Employee_details');
        }
        return redirect('/');
    }

    public function attendance_emp(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'time_in' => 'required',
            'time_out' => 'required',
            'status' => 'required'
        ]);
        $attendance = new Attendance();
        $attendance->date = $request['date'];
        $attendance->time_in = $request['time_in'];
        $attendance->time_out = $request['time_out'];
        $attendance->status = $request['status'];
        $attendance->employee_id = $request['employee_id'];
        $attendance->save();
        return redirect('/employee_details');
    }

    public function attendance_data()
    {
        $attendance = Attendance::all(); // retrieve attendance data from the database
        return view('attendance', ['Attendance' => $attendance]); // pass the data to the view
    }
}
