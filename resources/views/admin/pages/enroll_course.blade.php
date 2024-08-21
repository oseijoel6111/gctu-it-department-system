@extends('admin.layouts.master')

@section('content')
<div class="dashboard--area-main pt--100">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="left-sindebar-dashboard">
                        <div class="dashboard-left-single-wrapper">
                            <!-- single item -->
                            <a href="student-dashboard.html" class="single-item ">
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
                            <a href="student-enroll-course.html" class="single-item active">
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
                            <a href="{{route('admin.review')}}" class="single-item ">
                                <i class="fa-regular fa-star"></i>
                                <p>Reviews</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <!-- <a href="student-quiz-attempts.html" class="single-item ">
                                <i class="fa-sharp fa-light fa-bullseye-pointer"></i>
                                <p>My Quiz Attempts</p>
                            </a> -->
                            <!-- single item end -->
                            <!-- single item -->
                            <!-- <a href="student-order-history.html" class="single-item ">
                                <i class="fa-sharp fa-light fa-bag-shopping"></i>
                                <p>Order History</p>
                            </a> -->
                            <!-- single item end -->
                            <!-- single item -->
                            <!-- <a href="student-question-answer.html" class="single-item ">
                                <i class="fa-regular fa-circle-question"></i>
                                <p>Question &amp; Answer</p>
                            </a> -->
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="{{route('admin.calender')}}" class="single-item ">
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
                    <div class="exrolled-course-wrapper-dashed">
                        <h5 class="title">Enrolleld Courses</h5>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Enrolleld Courses</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Active Courses</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Completed Courses</button>
                            </li>
                        </ul>
                        <div class="tab-content mt--30" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row g-5">
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/01_1.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>50%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/02.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>70%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/03.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>90%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/04_1.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>20%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/05.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>50%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/06.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>80%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row g-5">
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/01_1.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>50%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/02.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>70%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/03.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>90%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/04_1.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>20%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/05.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>50%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/06.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>80%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row g-5">
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/01_1.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>50%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/02.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>70%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/03.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>90%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/04_1.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>20%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/05.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>50%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- single course style two -->
                                        <div class="single-course-style-three enroll-course">
                                            <a href="single-course.html" class="thumbnail">
                                                <img src="/assets/images/06.jpg" alt="course">
                                                <div class="tag-thumb">
                                                    <span>Marketing</span>
                                                </div>
                                            </a>
                                            <div class="body-area">
                                                <div class="course-top">
                                                    <div class="tags">Best Seller</div>
                                                    <div class="price">$49.50</div>
                                                </div>
                                                <a href="single-course.html">
                                                    <h5 class="title">How to Write the Ultimate 1 Page
                                                        Strategic Business Plan</h5>
                                                </a>
                                                <div class="teacher-stars">
                                                    <div class="teacher"><span>Dr. Angela Yu</span></div>
                                                    <ul class="stars">
                                                        <li class="span">4.5</li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                        <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="leasson-students">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="students">
                                                        <i class="fa-light fa-users"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                </div>
                                                <div class="progress-wrapper-lesson-compleate">
                                                    <div class="compleate">
                                                        <div class="compl">
                                                            Complete
                                                        </div>
                                                        <div class="end">
                                                            <span>80%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="rts-btn btn-border">Download Certificate</button>
                                            </div>
                                        </div>
                                        <!-- single course style two end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection