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
                            <!-- <a href="student-question-answer.html" class="single-item">
                                <i class="fa-regular fa-circle-question"></i>
                                <p>Question &amp; Answer</p>
                            </a> -->
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-calender.html" class="single-item active">
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
                    <div class="calender-area-wrapper">
                        <h5 class="title">Calendar</h5>
                        <div class="calender-dash-wrapper" id="calender-active">
                            <!-- calender -->
                            <div class="wrapper">

                                <div class="container-calendar">
                                    <div class="footer-container-calendar">
                                        <select id="month" onchange="jump()">
                                            <option value="0">Jan</option>
                                            <option value="1">Feb</option>
                                            <option value="2">Mar</option>
                                            <option value="3">Apr</option>
                                            <option value="4">May</option>
                                            <option value="5">Jun</option>
                                            <option value="6">Jul</option>
                                            <option value="7">Aug</option>
                                            <option value="8">Sep</option>
                                            <option value="9">Oct</option>
                                            <option value="10">Nov</option>
                                            <option value="11">Dec</option>
                                        </select>
                                        <select id="year" onchange="jump()"></select>
                                    </div>
                                    <div class="mt--30" id="monthAndYear"></div>

                                    <!-- <div class="button-container-calendar">
                                        <button id="previous" onclick="previous()">‹</button>
                                        <button id="next" onclick="next()">›</button>
                                    </div> -->

                                    <table class="table-calendar" id="calendar" data-lang="en">
                                        <thead id="thead-month"></thead>
                                        <tbody id="calendar-body"></tbody>
                                    </table>



                                </div>

                            </div>
                            <!-- calender -->
                        </div>
                        <div class="search-area-calender-inner">
                            <input type="text" placeholder="Search...">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <!-- assignments-area saert -->
                        <div class="assignment-list-wrapper-calender">
                            <!-- single assignments area wrapper -->
                            <div class="single-assignments-wrapper">
                                <div class="top-wrapper">
                                    <i class="fa-regular fa-calendar-lines-pen"></i>
                                    <span>October 4, 2023</span>
                                </div>
                                <div class="assignment-list">
                                    <div class="left">
                                        <i class="fa-regular fa-calendar-lines-pen"></i>
                                        <p>Assignment:</p>
                                        <span>My Quiz Attempts</span>
                                    </div>
                                    <div class="right">
                                        <span>Deadline: No Limit</span>
                                    </div>
                                </div>
                                <div class="assignment-list mt--20">
                                    <div class="left">
                                        <i class="fa-regular fa-calendar-lines-pen"></i>
                                        <p>Assignment:</p>
                                        <span>My Quiz Attempts</span>
                                    </div>
                                    <div class="right">
                                        <span>Deadline: No Limit</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single assignments area wrapper end -->
                            <!-- single assignments area wrapper -->
                            <div class="single-assignments-wrapper mt--50">
                                <div class="top-wrapper">
                                    <i class="fa-regular fa-calendar-lines-pen"></i>
                                    <span>October 29, 2023</span>
                                </div>
                                <div class="assignment-list">
                                    <div class="left">
                                        <i class="fa-regular fa-calendar-lines-pen"></i>
                                        <p>Assignment:</p>
                                        <span>My Quiz Attempts</span>
                                    </div>
                                    <div class="right">
                                        <span>Deadline: No Limit</span>
                                    </div>
                                </div>
                                <div class="assignment-list mt--20">
                                    <div class="left">
                                        <i class="fa-regular fa-calendar-lines-pen"></i>
                                        <p>Assignment:</p>
                                        <span>My Quiz Attempts</span>
                                    </div>
                                    <div class="right">
                                        <span>Deadline: No Limit</span>
                                    </div>
                                </div>
                                <div class="assignment-list mt--20">
                                    <div class="left">
                                        <i class="fa-regular fa-calendar-lines-pen"></i>
                                        <p>Assignment:</p>
                                        <span>My Quiz Attempts</span>
                                    </div>
                                    <div class="right">
                                        <span>Deadline: No Limit</span>
                                    </div>
                                </div>
                                <div class="assignment-list mt--20">
                                    <div class="left">
                                        <i class="fa-regular fa-calendar-lines-pen"></i>
                                        <p>Assignment:</p>
                                        <span>My Quiz Attempts</span>
                                    </div>
                                    <div class="right">
                                        <span>Deadline: No Limit</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single assignments area wrapper end -->
                        </div>
                        <!-- assignments-area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection