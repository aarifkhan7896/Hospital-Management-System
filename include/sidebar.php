<div class="sidebar d-flex flex-column">
    <div class="topheading d-flex justify-content-between p-3">
        <h1 class="text-warning">Dashboard</h1>
        <div class="lines">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
    <ul class="list-unstyled">
        <li class="mb-5 ps-2">
            <a href="#" data-bs-toggle="collapse" data-bs-target="#home"><i class="fas fa-angle-right"></i> Home</a>
            <div class="collapse show" id="home">
                <ul class="list-unstyled ps-5">
                    <li><a href="admindashboard.php">- Dashboard</a></li>
                    <li><a href="adminappointment.php">- Appointments</a></li>
                    <li><a href="managepatients.php">- Manage Patients</a></li>
                    <li><a href="queries.php">- Queries</a></li>
                </ul>
            </div>
        </li>
        <li class="mb-5 ps-2">
            <a href="#" data-bs-toggle="collapse" data-bs-target="#doctors"><i class="fas fa-angle-right"></i>
                Doctors</a>
            <div class="collapse" id="doctors">
                <ul class="list-unstyled ps-5">
                    <li><a href="managedoctors.php">- Manage Doctors</a></li>
                    <li><a href="adddoctor.php">- Add Doctor</a></li>
                </ul>
            </div>
        </li>
        <li class="mb-5 ps-2">
            <a href="#" data-bs-toggle="collapse" data-bs-target="#account"><i class="fas fa-angle-right"></i>
                Account</a>
            <div class="collapse" id="account">
                <ul class="list-unstyled ps-5">
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modaladmin">- Change Password</a></li>
                    <li><a href="logout.php">- Logout</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>