<div class="col-lg-3 rts-sticky-column-item">
    <div class="left-sindebar-dashboard theiaStickySidebar">
        <div class="dashboard-left-single-wrapper">
            <!-- single item -->
            <a href="dashboard.html" class="single-item active">
                <i class="fa-light fa-house"></i>
                <p>Dashboard</p>
            </a>
            <!-- single item end -->
            <!-- single item -->
            <a href="" class="single-item">
                <i class="fa-regular fa-user"></i>
                <p>My Profile</p>
            </a>
            <!-- single item end -->
            <!-- single item -->
            <a href="" class="single-item">
                <i class="fa-light fa-graduation-cap"></i>
                <p>Enrolled Courses</p>
            </a>
            <!-- single item end -->

            <!-- single item -->
            <a href="" class="single-item">
                <i class="fa-regular fa-star"></i>
                <p>Reviews</p>
            </a>
            <!-- single item end -->

            <!-- single item -->
            <a href="" class="single-item">
                <i class="fa-light fa-calendar-days"></i>
                <p>Calendar</p>
            </a>
            <!-- single item end -->
        </div>

        {{-- Students sidebar section start --}}
        <div class="dashboard-left-single-wrapper mt--40">
            <h4 class="title mb--5"> Academic Activities</h4>

            <a href="" class="single-item">
                <i class="fa-solid fa-pencil-square"></i>
                <p>Retake/Resit</p>
            </a>
            <!-- single item -->
            <a href="" class="single-item">
                <i class="fa-regular fa-pencil-square"></i>
                <p>Course Registration</p>
            </a>
            <!-- single item end -->
            <a href="{{route('admin.projectWork.index')}}" class="single-item">
                <i class="fa-regular fa-pencil-square"></i>
                <p>Project Work</p>
            </a>
            <a href="" class="single-item">
                <i class="fa-regular fa-page"></i>
                <p>Industrial Attachment</p>
            </a>
        </div>

        <div class="dashboard-left-single-wrapper mt--40">
            <h4 class="title mb--5"> Requests </h4>

            <a href="{{route('admin.deferment.index')}}" class="single-item">
                <i class="fa-solid fa-megaphone"></i>
                <p>Deferment of Programme</p>
            </a>
            <!-- single item -->
            <a href="{{route('admin.sessionChange.index')}}" class="single-item">
                <i class="fa-regular fa-page"></i>
                <p>Change of Session</p>
            </a>
            <!-- single item end -->
            <a href="" class="single-item">
                <i class="fa-regular fa-page"></i>
                <p>Recommendation Letter</p>
            </a>
            <a href="" class="single-item">
                <i class="fa-regular fa-page"></i>
                <p>Results Complaint</p>
            </a>
        </div>

        <div class="dashboard-left-single-wrapper mt--40">
            <h4 class="title mb--5"> Resources </h4>

            <a href="{{route('admin.classAttendance.index')}}" class="single-item">
            <a href="" class="single-item">
                <i class="fa-solid fa-megaphone"></i>
                <p>Class Attendance</p>
            </a>
            <!-- single item -->
            <a href="{{route('admin.Timetable.index')}}" class="single-item">
                <i class="fa-regular fa-clock"></i>
                <p>Timetable</p>
            </a>
        </div>

        {{-- Students sidebar section end --}}

        {{-- Admin sidebar section start --}}
        <div class="dashboard-left-single-wrapper mt--40">
            <h4 class="title mb--5"> Student Management</h4>

            <a href="{{route('admin.student.index')}}" class="single-item">
                <i class="fa-solid fa-megaphone"></i>
                <p>Manage Students</p>
            </a>
            <!-- single item -->
            <a href="" class="single-item">
                <i class="fa-regular fa-page"></i>
                <p>Manage Retake/Resit Registrations</p>
            </a>
            <!-- single item end -->
            <a href="{{route('admin.deferment.index')}}" class="single-item">
                <i class="fa-regular fa-page"></i>
                <p>Manage Deferments</p>
            </a>
            <a href="{{route('admin.sessionChange.index')}}" class="single-item">
                <i class="fa-regular fa-page"></i>
                <p>Manage Session Change Requests</p>
            </a>
            <a href="{{route('admin.projectWork.index')}}" class="single-item">
                <i class="fa-regular fa-page"></i>
                <p>Manage Project Work</p>
            </a>
            <a href="" class="single-item">
                <i class="fa-regular fa-page"></i>
                <p>Manage Industrial Attachments</p>
            </a>
            <a href="" class="single-item">
                <i class="fa-regular fa-page"></i>
                <p>Manage Results Complaints</p>
            </a>
            <a href="" class="single-item">
                <i class="fa-regular fa-page"></i>
                <p>Manage Recommendation Letters</p>
            </a>
        </div>

        <div class="dashboard-left-single-wrapper mt--40">
            <h4 class="title mb--5"> Academic Management </h4>

            <a href="{{route('admin.program.index')}}" class="single-item">
                <i class="fa-solid fa-megaphone"></i>
                <p>Manage Programs</p>
            </a>
            <!-- single item -->
            <a href="{{route('admin.session.index')}}" class="single-item">
                <i class="fa-regular fa-page"></i>
                <p>Manage Sessions</p>
            </a>
            <a href="{{route('admin.course.index')}}" class="single-item">
                <i class="fa-regular fa-page"></i>
                <p>Manage Courses</p>
            </a>
        </div>

        <div class="dashboard-left-single-wrapper mt--40">
            <h4 class="title mb--5"> Resources </h4>

            <a href="{{route('admin.classAttendance.index')}}" class="single-item">
            <a href="" class="single-item">
                <i class="fa-solid fa-megaphone"></i>
                <p>Manage Attendance Forms</p>
            </a>
            <!-- single item -->
            <a href="" class="single-item">
                <i class="fa-regular fa-clock"></i>
                <p>Manage Timetables</p>
            </a>
        </div>

        <div class="dashboard-left-single-wrapper mt--40">
            <h4 class="title mb--5"> Staff Management </h4>

            <a href="" class="single-item">
                <i class="fa-solid fa-megaphone"></i>
                <p>Manage Staff</p>
            </a>
            <!-- single item -->
            <a href="" class="single-item">
                <i class="fa-regular fa-page"></i>
                <p>Manage Departments</p>
            </a>
        </div>

         {{-- Admin sidebar section end --}}

        <div class="dashboard-left-single-wrapper bbnone mt--40">
            <h4 class="title mb--5">User</h4>
            <!-- single item -->
            <a href="settings.html" class="single-item">
                <i class="fa-sharp fa-regular fa-gear"></i>
                <p>Settings</p>
            </a>
            <!-- single item end -->
            <!-- single item -->
            <a href="index.html" class="single-item">
                <i class="fa-light fa-right-from-bracket"></i>
                <p>Logout</p>
            </a>
            <!-- single item end -->
        </div>
    </div>
</div>
