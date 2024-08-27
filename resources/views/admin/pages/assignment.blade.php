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
                            <a href="my-profile.html" class="single-item ">
                                <i class="fa-regular fa-user"></i>
                                <p>My Profile</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="" class="single-item ">
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
                            <!-- <a href="quiz-attempts.html" class="single-item ">
                                <i class="fa-sharp fa-light fa-bullseye-pointer"></i>
                                <p>My Quiz Attempts</p>
                            </a> -->
                            <!-- single item end -->
                            <!-- single item -->
                            <!-- <a href="order-history.html" class="single-item ">
                                <i class="fa-sharp fa-light fa-bag-shopping"></i>
                                <p>Order History</p>
                            </a> -->
                            <!-- single item end -->
                            <!-- single item -->
                            <!-- <a href="question-answer.html" class="single-item ">
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
                        <div class="dashboard-left-single-wrapper mt--40">
                            <h4 class="title mb--5">Instructor</h4>
                            <!-- single item -->
                            <!-- <a href="my-course.html" class="single-item ">
                                <i class="fa-light fa-book"></i>
                                <p>My Courses</p>
                            </a> -->
                            <!-- single item end -->
                            <!-- single item -->
                            <!-- <a href="my-bundles.html" class="single-item ">
                                <i class="fa-sharp fa-regular fa-layer-group"></i>
                                <p>My Bundles</p>
                            </a> -->
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="" class="single-item ">
                                <i class="fa-solid fa-megaphone"></i>
                                <p>Announcements</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <!-- <a href="withdrowals.html" class="single-item ">
                                <i class="fa-regular fa-box"></i>
                                <p>Withdrawals</p>
                            </a> -->
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="{{route('admin.assignment')}}" class="single-item active">
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
                <div class="col-lg-9">
                    <div class="announcements-wrapper-dashed rts-reviewd-area-dashed table-responsive" style="white-space: nowrap;">
                        <h5 class="title">Assignment</h5>
                        <div class="course-short-by-date-wrapper">
                            <div class="single-course-filter">
                                <span>Course</span>
                                <select class="nice-select" name="price">
                                    <option>Read (12)</option>
                                    <option value="asc">Stars (30)</option>
                                    <option value="desc">Comments(42)</option>
                                    <option value="pop">Popularity (20)</option>
                                    <option value="low">Questions &amp; Ans (10)</option>
                                    <option value="high">Stars (52)</option>
                                </select>
                            </div>
                            <div class="single-course-filter short-by">
                                <span>Course</span>
                                <select class="nice-select" name="price">
                                    <option>Read (12)</option>
                                    <option value="asc">Stars (30)</option>
                                    <option value="desc">Comments(42)</option>
                                    <option value="pop">Popularity (20)</option>
                                    <option value="low">Questions &amp; Ans (10)</option>
                                    <option value="high">Stars (52)</option>
                                </select>
                            </div>
                            <div class="single-course-filter short-by">
                                <span>Date</span>
                                <div class="date-picker-area">
                                    <input placeholder="Select your date" type="text" name="checkIn" id="datepicker" value="mm/dd/yyyy" class="calendar">
                                    <i class="fa-light fa-calendar-lines-pen"></i>
                                </div>
                            </div>
                        </div>
                        <table class="table-reviews quiz mt--30">
                            <thead>
                                <tr>
                                    <th style="width: 40%;">Assignment Name</th>
                                    <th style="width: 20%;">Total Marks</th>
                                    <th>Total Submit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="information-quiz">
                                            <p class="quiz">Assignment</p>
                                            <p>Course: <span style="color: #553CDF;">New Course</span></p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions">6</span>
                                    </td>
                                    <td>
                                        <div class="betweena-area-assignment">
                                            <span class="marks">9</span>
                                            <button class="rts-btn btn-border">Details</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="information-quiz">
                                            <p class="quiz">Assignment</p>
                                            <p>Course: <span style="color: #553CDF;">New Course</span></p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions">3</span>
                                    </td>
                                    <td>
                                        <div class="betweena-area-assignment">
                                            <span class="marks">2</span>
                                            <button class="rts-btn btn-border">Details</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="information-quiz">
                                            <p class="quiz">Assignment</p>
                                            <p>Course: <span style="color: #553CDF;">New Course</span></p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions">15</span>
                                    </td>
                                    <td>
                                        <div class="betweena-area-assignment">
                                            <span class="marks">8</span>
                                            <button class="rts-btn btn-border">Details</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="information-quiz">
                                            <p class="quiz">Assignment</p>
                                            <p>Course: <span style="color: #553CDF;">New Course</span></p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions">10</span>
                                    </td>
                                    <td>
                                        <div class="betweena-area-assignment">
                                            <span class="marks">3</span>
                                            <button class="rts-btn btn-border">Details</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="information-quiz">
                                            <p class="quiz">Assignment</p>
                                            <p>Course: <span style="color: #553CDF;">New Course</span></p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions">20</span>
                                    </td>
                                    <td>
                                        <div class="betweena-area-assignment">
                                            <span class="marks">10</span>
                                            <button class="rts-btn btn-border">Details</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="information-quiz">
                                            <p class="quiz">Assignment</p>
                                            <p>Course: <span style="color: #553CDF;">New Course</span></p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions">22</span>
                                    </td>
                                    <td>
                                        <div class="betweena-area-assignment">
                                            <span class="marks">6</span>
                                            <button class="rts-btn btn-border">Details</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="information-quiz">
                                            <p class="quiz">Assignment</p>
                                            <p>Course: <span style="color: #553CDF;">New Course</span></p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions">12</span>
                                    </td>
                                    <td>
                                        <div class="betweena-area-assignment">
                                            <span class="marks">5</span>
                                            <button class="rts-btn btn-border">Details</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="information-quiz">
                                            <p class="quiz">Assignment</p>
                                            <p>Course: <span style="color: #553CDF;">New Course</span></p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions">8</span>
                                    </td>
                                    <td>
                                        <div class="betweena-area-assignment">
                                            <span class="marks">2</span>
                                            <button class="rts-btn btn-border">Details</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="information-quiz">
                                            <p class="quiz">Assignment</p>
                                            <p>Course: <span style="color: #553CDF;">New Course</span></p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions">8</span>
                                    </td>
                                    <td>
                                        <div class="betweena-area-assignment">
                                            <span class="marks">5</span>
                                            <button class="rts-btn btn-border">Details</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="information-quiz">
                                            <p class="quiz">Assignment</p>
                                            <p>Course: <span style="color: #553CDF;">New Course</span></p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions">18</span>
                                    </td>
                                    <td>
                                        <div class="betweena-area-assignment">
                                            <span class="marks">2</span>
                                            <button class="rts-btn btn-border">Details</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
