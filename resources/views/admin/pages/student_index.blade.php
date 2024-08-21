@extends('admin.layouts.master')

@section('content')
<div class="dashboard--area-main pt--100">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="left-sindebar-dashboard">
                        <div class="dashboard-left-single-wrapper">
                            <!-- single item -->
                            <a href="student-dashboard.html" class="single-item active">
                                <i class="fa-light fa-house"></i>
                                <p>Dashboard</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-profile.html" class="single-item ">
                                <i class="fa-regular fa-user"></i>
                                <p>My Profile</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-enroll-course.html" class="single-item ">
                                <i class="fa-light fa-graduation-cap"></i>
                                <p>Enrolled Courses</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <!-- <a href="student-wishlist.html" class="single-item ">
                                <i class="fa-sharp fa-light fa-bookmark"></i>
                                <p>Wishlist</p>
                            </a> -->
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-reviews.html" class="single-item ">
                                <i class="fa-regular fa-star"></i>
                                <p>Reviews</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-quiz-attempts.html" class="single-item ">
                                <i class="fa-sharp fa-light fa-bullseye-pointer"></i>
                                <p>My Quiz Attempts</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <!-- <a href="student-order-history.html" class="single-item ">
                                <i class="fa-sharp fa-light fa-bag-shopping"></i>
                                <p>Order History</p>
                            </a> -->
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-question-answer.html" class="single-item ">
                                <i class="fa-regular fa-circle-question"></i>
                                <p>Question &amp; Answer</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-calender.html" class="single-item ">
                                <i class="fa-light fa-calendar-days"></i>
                                <p>Calendar</p>
                            </a>
                            <!-- single item end -->
                        </div>
                        <div class="dashboard-left-single-wrapper bbnone mt--40">
                            <h4 class="title mb--5">User</h4>
                            <!-- single item -->
                            <a href="student-settings.html" class="single-item ">
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
                <div class="col-lg-9">
                    <div class="right-sidebar-dashboard">
                        <div class="row g-5">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <!-- single dashboard-card -->
                                <div class="single-dashboard-card">
                                    <div class="icon">
                                        <i class="fa-light fa-book-open-cover"></i>
                                    </div>
                                    <h5 class="title"><span class="counter">30</span></h5>
                                    <p>Enrolled Courses</p>
                                </div>
                                <!-- single dashboard-card end -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <!-- single dashboard-card -->
                                <div class="single-dashboard-card">
                                    <div class="icon">
                                        <i class="fa-regular fa-graduation-cap"></i>
                                    </div>
                                    <h5 class="title"><span class="counter">10</span></h5>
                                    <p>Active Courses</p>
                                </div>
                                <!-- single dashboard-card end -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <!-- single dashboard-card -->
                                <div class="single-dashboard-card">
                                    <div class="icon">
                                        <i class="fa-light fa-trophy"></i>
                                    </div>
                                    <h5 class="title"><span class="counter">36</span></h5>
                                    <p>Completed Courses</p>
                                </div>
                                <!-- single dashboard-card end -->
                            </div>

                        </div>
                        <div class="row mt--40">
                            <div class="col-lg-12">
                                <!-- in progress course area -->
                                <div class="in-progress-course-wrapper  title-between-dashboard mb--10">
                                    <h5 class="title">My Courses</h5>
                                    <a href="#" class="more">View All</a>
                                </div>
                                <!-- in progress course area end -->

                                <!-- my course enroll wrapper -->
                                <div class="my-course-enroll-wrapper-board">
                                    <!-- single course inroll -->
                                    <div class="single-course-inroll-board head">
                                        <div class="name">
                                            <p>My Course</p>
                                        </div>
                                        <div class="enroll">
                                            <p>Enrolled</p>
                                        </div>
                                        <div class="rating">
                                            <p>Rating</p>
                                        </div>
                                    </div>
                                    <!-- single course inroll end -->
                                    <!-- single course inroll -->
                                    <div class="single-course-inroll-board">
                                        <div class="name">
                                            <p>New Course</p>
                                        </div>
                                        <div class="enroll">
                                            <p>2</p>
                                        </div>
                                        <div class="rating">
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                        </div>
                                    </div>
                                    <!-- single course inroll end -->
                                    <!-- single course inroll -->
                                    <div class="single-course-inroll-board">
                                        <div class="name">
                                            <p>My Course</p>
                                        </div>
                                        <div class="enroll">
                                            <p>0</p>
                                        </div>
                                        <div class="rating">
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                        </div>
                                    </div>
                                    <!-- single course inroll end -->
                                    <!-- single course inroll -->
                                    <div class="single-course-inroll-board">
                                        <div class="name">
                                            <p>Test New Course</p>
                                        </div>
                                        <div class="enroll">
                                            <p>2</p>
                                        </div>
                                        <div class="rating">
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                        </div>
                                    </div>
                                    <!-- single course inroll end -->
                                    <!-- single course inroll -->
                                    <div class="single-course-inroll-board">
                                        <div class="name">
                                            <p>New Course</p>
                                        </div>
                                        <div class="enroll">
                                            <p>2</p>
                                        </div>
                                        <div class="rating">
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                        </div>
                                    </div>
                                    <!-- single course inroll end -->
                                </div>
                                <!-- my course enroll wrapper end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection