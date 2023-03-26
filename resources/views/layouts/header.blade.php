    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Admin Portal</a>
            <a name="admin_btn" id="admin_btn" class="btn btn-primary" href="{{route('signOut')}}" role="button">Logout</a>
    </div>
    <div class="sidebar">
        <ul>
            <a href="{{ route('employee') }}">
                <li>Empoyees</li>
            </a>
            <a href="{{ route('admin') }}">
                <li>Admin</li>a
            </a>
            <a href="{{route('department')}}"><li>Department</li></a>
            <a href="{{route('holidays')}}"><li>Holidays</li></a>
            <a href="{{route('attendance')}}"><li>Attendance</li></a>
            <a href="{{route('leaves')}}"><li>Leave Application</li></a>
            <li>Notice Board</li>
        </ul>
    </div>
