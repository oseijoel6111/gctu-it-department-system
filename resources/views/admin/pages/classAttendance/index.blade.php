
<x-master headerSection='admin.layouts.header' title="Students">
    <div class="dashboard--area-main pt--100 pt_sm--50">
        <div class="container">
            <div class="row g-5">

                <x-sidebar />

                <div class="col-lg-9">
                    <div class="announcements-wrapper-dashed">
                        <div class="top-announcement-wrapper">
                            <div class="left-wrapper">
                                <div class="icon">
                                    <img src="/assets/images/01_1.png" alt="announcement">
                                </div>
                                <div class="information">
                                    <span>Add class Attendance</span>
                                    <p>Notify all students of your course</p>
                                </div>
                            </div>
                            <div class="right">
                                <a  class="rts-btn btn-primary" href="{{route('admin.student.create')}}">Add class Attendance</a>
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
    </x-master>
