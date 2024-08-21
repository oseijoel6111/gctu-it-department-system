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
                            <a href="{{route('admin.enrollcourse')}}" class="single-item ">
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
                            <a href="{{route('admin.announcement')}}" class="single-item active">
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
                            <a href="{{route('admin.assignment')}}" class="single-item">
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
                    <div class="announcements-wrapper-dashed">
                        <div class="top-announcement-wrapper">
                            <div class="left-wrapper">
                                <div class="icon">
                                    <img src="/assets/images/01_1.png" alt="announcement">
                                </div>
                                <div class="information">
                                    <span>Create Announcement</span>
                                    <p>Notify all students of your course</p>
                                </div>
                            </div>
                            <div class="right">
                                <button type="button" class="rts-btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Announcement</button>
                            </div>
                        </div>
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
                        <div class="rts-reviewd-area-dashed table-responsive" style="white-space: nowrap;">
                            <table class="table-reviews quiz announcement">
                                <thead>
                                    <tr>
                                        <th style="width: 30%;">Date</th>
                                        <th>Announcements</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="information-quiz">
                                                <span>November 28, 2023</span>
                                                <p class="quiz">9:20 pm</p>
                                            </div>
                                        </td>
                                        <td class="announcement-1">
                                            <div class="left">
                                                <p>Recently Update Web Design Course</p>
                                                <span>Course: New Courses</span>
                                            </div>
                                            <div class="right">
                                                <button class="rts-btn btn-primary">Details</button>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="information-quiz">
                                                <span>November 28, 2023</span>
                                                <p class="quiz">9:20 pm</p>
                                            </div>
                                        </td>
                                        <td class="announcement-1">
                                            <div class="left">
                                                <p>Recently Update Web Design Course</p>
                                                <span>Course: New Courses</span>
                                            </div>
                                            <div class="right">
                                                <button class="rts-btn btn-primary">Details</button>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="information-quiz">
                                                <span>November 28, 2023</span>
                                                <p class="quiz">9:20 pm</p>
                                            </div>
                                        </td>
                                        <td class="announcement-1">
                                            <div class="left">
                                                <p>Recently Update Web Design Course</p>
                                                <span>Course: New Courses</span>
                                            </div>
                                            <div class="right">
                                                <button class="rts-btn btn-primary">Details</button>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="information-quiz">
                                                <span>November 28, 2023</span>
                                                <p class="quiz">9:20 pm</p>
                                            </div>
                                        </td>
                                        <td class="announcement-1">
                                            <div class="left">
                                                <p>Recently Update Web Design Course</p>
                                                <span>Course: New Courses</span>
                                            </div>
                                            <div class="right">
                                                <button class="rts-btn btn-primary">Details</button>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="information-quiz">
                                                <span>November 28, 2023</span>
                                                <p class="quiz">9:20 pm</p>
                                            </div>
                                        </td>
                                        <td class="announcement-1">
                                            <div class="left">
                                                <p>Recently Update Web Design Course</p>
                                                <span>Course: New Courses</span>
                                            </div>
                                            <div class="right">
                                                <button class="rts-btn btn-primary">Details</button>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="information-quiz">
                                                <span>November 28, 2023</span>
                                                <p class="quiz">9:20 pm</p>
                                            </div>
                                        </td>
                                        <td class="announcement-1">
                                            <div class="left">
                                                <p>Recently Update Web Design Course</p>
                                                <span>Course: New Courses</span>
                                            </div>
                                            <div class="right">
                                                <button class="rts-btn btn-primary">Details</button>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="pagination-full-width">
                                <span>Page 1 of 4</span>
                                <div class="pagination">
                                    <ul>
                                        <li><a href="#0" class="prev"><i class="fa-solid fa-chevron-left"></i></a></li>
                                        <li><a href="#0">1</a></li>
                                        <li><a href="#0">2</a></li>
                                        <li><a href="#0">3</a></li>
                                        <li><a href="#0">4</a></li>
                                        <li><a href="#0" class="next"><i class="fa-solid fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection