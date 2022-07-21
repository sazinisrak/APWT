    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar">
        <div class="sidebar-header">
            <a href="{{ route('adminDash') }}" class="sidebar-brand">
                MT<span>LTD</span>
            </a>
            <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="sidebar-body">
            <ul class="nav">
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item">
                    <a href="{{ route('adminDash') }}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item nav-category">Personal</li>
                <li class="nav-item">
                    <a href="{{ route('adminViewProfile') }}" class="nav-link">
                        <i class="link-icon" data-feather="user"></i>
                        <span class="link-title">View Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('adminEditProfile') }}" class="nav-link">
                        <i class="link-icon" data-feather="edit"></i>
                        <span class="link-title">Edit Profile</span>
                    </a>
                </li>

                <li class="nav-item nav-category">Employee</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('adminEmployeeAdd') }}">
                        <i class="link-icon" data-feather="user-plus"></i>
                        <span class="link-title">Add Employee</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('employeeList') }}">
                        <i class="link-icon" data-feather="list"></i>
                        <span class="link-title">Employee list</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- partial -->
