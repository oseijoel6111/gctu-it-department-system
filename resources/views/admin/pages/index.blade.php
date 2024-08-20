@extends('admin.layouts.master')

@section('content')
<div class="dashboard--area-main pt--100 pt_sm--50">
    <div class="container">
        <div class="row g-5">
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
                        <a href="my-profile.html" class="single-item">
                            <i class="fa-regular fa-user"></i>
                            <p>My Profile</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="enroll-course.html" class="single-item">
                            <i class="fa-light fa-graduation-cap"></i>
                            <p>Enrolled Courses</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="wishlist.html" class="single-item">
                            <i class="fa-sharp fa-light fa-bookmark"></i>
                            <p>Wishlist</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="reviews.html" class="single-item">
                            <i class="fa-regular fa-star"></i>
                            <p>Reviews</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="quiz-attempts.html" class="single-item">
                            <i class="fa-sharp fa-light fa-bullseye-pointer"></i>
                            <p>My Quiz Attempts</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="order-history.html" class="single-item">
                            <i class="fa-sharp fa-light fa-bag-shopping"></i>
                            <p>Order History</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="question-answer.html" class="single-item">
                            <i class="fa-regular fa-circle-question"></i>
                            <p>Question &amp; Answer</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="calender.html" class="single-item">
                            <i class="fa-light fa-calendar-days"></i>
                            <p>Calendar</p>
                        </a>
                        <!-- single item end -->
                    </div>
                    <div class="dashboard-left-single-wrapper mt--40">
                        <h4 class="title mb--5">Instructor</h4>
                        <!-- single item -->
                        <a href="my-course.html" class="single-item">
                            <i class="fa-light fa-book"></i>
                            <p>My Courses</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="my-bundles.html" class="single-item">
                            <i class="fa-sharp fa-regular fa-layer-group"></i>
                            <p>My Bundles</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="announcement.html" class="single-item">
                            <i class="fa-solid fa-megaphone"></i>
                            <p>Announcements</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="withdrowals.html" class="single-item">
                            <i class="fa-regular fa-box"></i>
                            <p>Withdrawals</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="assignments.html" class="single-item">
                            <i class="fa-regular fa-page"></i>
                            <p>Assignments</p>
                        </a>
                        <!-- single item end -->
                        <!-- single item -->
                        <a href="certificate.html" class="single-item">
                            <i class="fa-sharp fa-light fa-file-certificate"></i>
                            <p>Certificate</p>
                        </a>
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
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <!-- single dashboard-card -->
                            <div class="single-dashboard-card">
                                <div class="icon">
                                    <i class="fa-light fa-user"></i>
                                </div>
                                <h5 class="title"><span class="counter">41</span></h5>
                                <p>Total Students</p>
                            </div>
                            <!-- single dashboard-card end -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <!-- single dashboard-card -->
                            <div class="single-dashboard-card">
                                <div class="icon">
                                    <i class="fa-light fa-book"></i>
                                </div>
                                <h5 class="title"><span class="counter">28</span></h5>
                                <p>Total Courses</p>
                            </div>
                            <!-- single dashboard-card end -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <!-- single dashboard-card -->
                            <div class="single-dashboard-card">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-dollar-sign"></i>
                                </div>
                                <h5 class="title">$<span class="counter">2900</span></h5>
                                <p>Total Earning</p>
                            </div>
                            <!-- single dashboard-card end -->
                        </div>
                    </div>
                    <div class="row mt--40">
                        <div class="col-lg-12">
                            <!-- in progress course area -->
                            <div class="in-progress-course-wrapper">
                                <h5 class="title">In Progress Courses</h5>
                            </div>
                            <!-- in progress course area end -->
                            <!-- single progress area start -->
                            <div class="single-progress-course">
                                <a href="single-course.html" class="thumbnail">
                                    <img src="images/02.jpg" alt="img">
                                </a>
                                <div class="information-progress-course">
                                    <div class="rating-area">
                                        <i class="fa-light fa-star"></i>
                                        <i class="fa-light fa-star"></i>
                                        <i class="fa-light fa-star"></i>
                                        <i class="fa-light fa-star"></i>
                                        <i class="fa-light fa-star"></i>
                                        <span>(0)</span>
                                    </div>
                                    <a href="single-course.html">
                                        <h5 class="title">User Experience The Ultimate Guide to Usability and UX</h5>
                                    </a>
                                    <span class="comp">Completed Lessons: 0 of 1 lesson</span>
                                    <div class="progress-wrapper-lesson-compleate">
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="end">
                                            <span>0% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single progress area end -->
                            <!-- single progress area start -->
                            <div class="single-progress-course">
                                <a href="single-course.html" class="thumbnail">
                                    <img src="images/03_1.jpg" alt="img">
                                </a>
                                <div class="information-progress-course">
                                    <div class="rating-area">
                                        <i class="fa-light fa-star"></i>
                                        <i class="fa-light fa-star"></i>
                                        <i class="fa-light fa-star"></i>
                                        <i class="fa-light fa-star"></i>
                                        <i class="fa-light fa-star"></i>
                                        <span>(0)</span>
                                    </div>
                                    <a href="single-course.html">
                                        <h5 class="title">Front-End Course With Bootstrap 5</h5>
                                    </a>
                                    <span class="comp">Completed Lessons: 5 of 7 lesson</span>
                                    <div class="progress-wrapper-lesson-compleate">
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="end">
                                            <span>80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single progress area end -->
                            <!-- single progress area start -->
                            <div class="single-progress-course">
                                <a href="single-course.html" class="thumbnail">
                                    <img src="images/04_1.jpg" alt="img">
                                </a>
                                <div class="information-progress-course">
                                    <div class="rating-area">
                                        <i class="fa-light fa-star"></i>
                                        <i class="fa-light fa-star"></i>
                                        <i class="fa-light fa-star"></i>
                                        <i class="fa-light fa-star"></i>
                                        <i class="fa-light fa-star"></i>
                                        <span>(0)</span>
                                    </div>
                                    <a href="single-course.html">
                                        <h5 class="title">PHP Basic to Advance Full Course In English</h5>
                                    </a>
                                    <span class="comp">Completed Lessons: 3 of 6 lesson</span>
                                    <div class="progress-wrapper-lesson-compleate">
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="end">
                                            <span>50% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single progress area end -->
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
