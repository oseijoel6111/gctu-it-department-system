@extends('admin.layouts.master')

@section('content')
<div class="dashboard--area-main pt--100">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="left-sindebar-dashboard">
                        <div class="dashboard-left-single-wrapper">
                            <!-- single item -->
                            <a href="{{route('admin.student_index')}}" class="single-item ">
                                <i class="fa-light fa-house"></i>
                                <p>Dashboard</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="{{route('admin.student_profile')}}" class="single-item ">
                                <i class="fa-regular fa-user"></i>
                                <p>My Profile</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="{{route('admin.student_course')}}" class="single-item ">
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
                            <a href="{{route('admin.student_review')}}" class="single-item active">
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
                    <div class="rts-reviewd-area-dashed table-responsive" style="white-space: nowrap;">
                        <h5 class="title">Reviews</h5>
                        <table class="table-reviews">
                            <thead>
                                <tr>
                                    <th style="width: 30%;">Student</th>
                                    <th style="width: 30%;">Date</th>
                                    <th>Feedback</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr>
                                    <td>
                                        <div class="author-area">
                                            <div class="profile-picture">
                                                <img src="images/01.png" alt="reviews">
                                            </div>
                                            <p>Christopher</p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="date">October 29, 2023</span>
                                    </td>
                                    <td>
                                        <span class="name">Course: UI/UX Design for Expert</span>
                                        <div class="stars">
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp-half"></i>
                                            <span>(10 Review)</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td>
                                        <div class="author-area">
                                            <div class="profile-picture">
                                                <img src="images/02_1.png" alt="reviews">
                                            </div>
                                            <p>Christopher</p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="date">November 28, 2023</span>
                                    </td>
                                    <td>
                                        <span class="name">Course: Speaking Korean for Beginners</span>
                                        <div class="stars">
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp-half"></i>
                                            <span>(10 Review)</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="author-area">
                                            <div class="profile-picture">
                                                <img src="images/03_1.png" alt="reviews">
                                            </div>
                                            <p>Christopher</p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="date">December 12, 2023</span>
                                    </td>
                                    <td>
                                        <span class="name">Course: How to play the Guitar</span>
                                        <div class="stars">
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp-half"></i>
                                            <span>(10 Review)</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td>
                                        <div class="author-area">
                                            <div class="profile-picture">
                                                <img src="images/04_2.png" alt="reviews">
                                            </div>
                                            <p>Daniel Jonh</p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="date">January 04, 2024</span>
                                    </td>
                                    <td>
                                        <span class="name">Course: Speaking Korean for Beginners</span>
                                        <div class="stars">
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp-half"></i>
                                            <span>(10 Review)</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="author-area">
                                            <div class="profile-picture">
                                                <img src="images/05_1.png" alt="reviews">
                                            </div>
                                            <p>Jennifer Linda</p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="date">October 29, 2023</span>
                                    </td>
                                    <td>
                                        <span class="name">Course: UI/UX Design for Expert</span>
                                        <div class="stars">
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp-half"></i>
                                            <span>(10 Review)</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td>
                                        <div class="author-area">
                                            <div class="profile-picture">
                                                <img src="images/06_1.png" alt="reviews">
                                            </div>
                                            <p>Jennifer Linda</p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="date">October 29, 2023</span>
                                    </td>
                                    <td>
                                        <span class="name">Course: UI/UX Design for Expert</span>
                                        <div class="stars">
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp-half"></i>
                                            <span>(10 Review)</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="author-area">
                                            <div class="profile-picture">
                                                <img src="images/07.png" alt="reviews">
                                            </div>
                                            <p>Daniel Jonh</p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="date">January 04, 2024</span>
                                    </td>
                                    <td>
                                        <span class="name">Course: UI/UX Design for Expert</span>
                                        <div class="stars">
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp-half"></i>
                                            <span>(10 Review)</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td>
                                        <div class="author-area">
                                            <div class="profile-picture">
                                                <img src="images/08.png" alt="reviews">
                                            </div>
                                            <p>James Robert</p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="date">October 29, 2023</span>
                                    </td>
                                    <td>
                                        <span class="name">Course: UI/UX Design for Expert</span>
                                        <div class="stars">
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp-half"></i>
                                            <span>(10 Review)</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="author-area">
                                            <div class="profile-picture">
                                                <img src="images/09.png" alt="reviews">
                                            </div>
                                            <p>Daniel Jonh</p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="date">October 29, 2023</span>
                                    </td>
                                    <td>
                                        <span class="name">Course: UI/UX Design for Expert</span>
                                        <div class="stars">
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp-half"></i>
                                            <span>(10 Review)</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td>
                                        <div class="author-area">
                                            <div class="profile-picture">
                                                <img src="images/10.png" alt="reviews">
                                            </div>
                                            <p>James Robert</p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="date">October 29, 2023</span>
                                    </td>
                                    <td>
                                        <span class="name">Course: UI/UX Design for Expert</span>
                                        <div class="stars">
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp-half"></i>
                                            <span>(10 Review)</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="author-area">
                                            <div class="profile-picture">
                                                <img src="images/11.png" alt="reviews">
                                            </div>
                                            <p>James Robert</p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="date">October 29, 2023</span>
                                    </td>
                                    <td>
                                        <span class="name">Course: UI/UX Design for Expert</span>
                                        <div class="stars">
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp"></i>
                                            <i class="fa-solid fa-star-sharp-half"></i>
                                            <span>(10 Review)</span>
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