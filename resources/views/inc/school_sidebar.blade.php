<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<h5 class="sidebar-brand d-flex align-items-center justify-content-center">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">{{ Auth::user()->name }}</div>
</h5>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="/home">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>School Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Schools -->
<li class="nav-item">
    <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Admin</span>
    </a> -->
    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/studentClass">Class</a>
            <a class="collapse-item" href="/streams">Streams</a>
            <a class="collapse-item" href="/stdGroup">Group</a>
            <a class="collapse-item" href="/studentShift">Shift</a>
            <a class="collapse-item" href="#">Subjects</a>
            <a class="collapse-item" href="#">Assign Subjects</a>
            <a class="collapse-item" href="#">Designation</a>
        </div>
    </div>
</li>

<!-- Nav Item -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        <span>Students Info</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/reg_student">Register Student</a>
            <a class="collapse-item" href="#">Generate Student Number</a>
        </div>
    </div>
</li>



<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/payment" data-toggle="" data-target="#Pay"
        aria-expanded="true" aria-controls="Pay">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        <span>Payment</span>
    </a>
</li>


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
        <span>Reports</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="#">Payment Slip</a>
            <a class="collapse-item" href="#">Marks and Attendance</a>
            <a class="collapse-item" href="#">Subject Analysis</a>
            <a class="collapse-item" href="#">Photo Album</a>
        </div>
    </div>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
