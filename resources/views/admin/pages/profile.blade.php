@extends('admin.layouts.master')

@section('content')

<div class="dashboard--area-main pt--100">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-3 rts-sticky-column-item">
                <div class="left-sindebar-dashboard  theiaStickySidebar">
                    <div class="dashboard-left-single-wrapper">
                        <!-- single item -->
                        <a href="dashboard.html" class="single-item ">
                            <i class="fa-light fa-house"></i>
                            <p>Dashboard</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="my-profile.html" class="single-item active">
                            <i class="fa-regular fa-user"></i>
                            <p>My Profile</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="{{route('admin.enrollcourse')}}" class="single-item">
                            <i class="fa-light fa-graduation-cap"></i>
                            <p>Enrolled Courses</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <!-- <a href="wishlist.html" class="single-item">
                            <i class="fa-sharp fa-light fa-bookmark"></i>
                            <p>Wishlist</p>
                        </a> -->
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="{{route('admin.review')}}" class="single-item">
                            <i class="fa-regular fa-star"></i>
                            <p>Reviews</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <!-- <a href="quiz-attempts.html" class="single-item">
                            <i class="fa-sharp fa-light fa-bullseye-pointer"></i>
                            <p>My Quiz Attempts</p>
                        </a> -->
                        <!-- single item end -->
                        <!-- single item -->
                        <!-- <a href="order-history.html" class="single-item">
                            <i class="fa-sharp fa-light fa-bag-shopping"></i>
                            <p>Order History</p>
                        </a> -->
                        <!-- single item end -->
                        <!-- single item -->
                        <!-- <a href="question-answer.html" class="single-item">
                            <i class="fa-regular fa-circle-question"></i>
                            <p>Question &amp; Answer</p>
                        </a> -->
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="{{route('admin.calender')}}" class="single-item">
                            <i class="fa-light fa-calendar-days"></i>
                            <p>Calendar</p>
                        </a>
                        <!-- single item end -->
                    </div>
                    <div class="dashboard-left-single-wrapper mt--40">
                        <h4 class="title mb--5">Instructor</h4>
                        <!-- single item -->
                        <!-- <a href="my-course.html" class="single-item">
                            <i class="fa-light fa-book"></i>
                            <p>My Courses</p>
                        </a> -->
                        <!-- single item end -->
                        <!-- single item -->
                        <!-- <a href="my-bundles.html" class="single-item">
                            <i class="fa-sharp fa-regular fa-layer-group"></i>
                            <p>My Bundles</p>
                        </a> -->
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="{{route('admin.announcement')}}" class="single-item">
                            <i class="fa-solid fa-megaphone"></i>
                            <p>Announcements</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <!-- <a href="withdrowals.html" class="single-item">
                            <i class="fa-regular fa-box"></i>
                            <p>Withdrawals</p>
                        </a> -->
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="{{route('admin.review')}}" class="single-item">
                            <i class="fa-regular fa-page"></i>
                            <p>Assignments</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <!-- <a href="certificate.html" class="single-item">
                            <i class="fa-sharp fa-light fa-file-certificate"></i>
                            <p>Certificate</p>
                        </a> -->
                        <!-- single item end -->
                    </div>
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
            <div class="col-lg-9  rts-sticky-column-item">
                <div class="right-sidebar-my-profile-dash theiaStickySidebar pt--30">
                    <h5 class="title">My Profile</h5>
                    <!-- single My portfolio start-->
                    <div class="my-single-portfolio-dashed">
                        <div class="name">Registration Date</div>
                        <div class="value">February 25, 2022 6:01 am</div>
                    </div>
                    <!-- single My portfolio end-->
                    <!-- single My portfolio start-->
                    <div class="my-single-portfolio-dashed">
                        <div class="name">First Name:</div>
                        <div class="value">Jon Adam</div>
                    </div>
                    <!-- single My portfolio end-->
                    <!-- single My portfolio start-->
                    <div class="my-single-portfolio-dashed">
                        <div class="name">Last Name:</div>
                        <div class="value">Caster</div>
                    </div>
                    <!-- single My portfolio end-->
                    <!-- single My portfolio start-->
                    <div class="my-single-portfolio-dashed">
                        <div class="name">Username:</div>
                        <div class="value">jonadam</div>
                    </div>
                    <!-- single My portfolio end-->
                    <!-- single My portfolio start-->
                    <div class="my-single-portfolio-dashed">
                        <div class="name">Email:</div>
                        <div class="value">studyhub@ino.com</div>
                    </div>
                    <!-- single My portfolio end-->
                    <!-- single My portfolio start-->
                    <div class="my-single-portfolio-dashed">
                        <div class="name">Phone Number:</div>
                        <div class="value">February 25, 2022 6:01 am</div>
                    </div>
                    <!-- single My portfolio end-->
                    <!-- single My portfolio start-->
                    <div class="my-single-portfolio-dashed">
                        <div class="name">Skill/Occupation</div>
                        <div class="value">Full Stack Developer</div>
                    </div>
                    <!-- single My portfolio end-->
                    <!-- single My portfolio start-->
                    <div class="my-single-portfolio-dashed">
                        <div class="name">Biography</div>
                        <div class="value">I have a degree in Journalism with over 15 years of work experience in the field.
                            Throughout the years, I have worked in several well-known institutions and in published several books on Journalism that are available on Amazon.</div>
                    </div>
                    <!-- single My portfolio end-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
