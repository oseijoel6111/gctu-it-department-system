<x-master headerSection='admin.layouts.header' title="Courses">
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
                                    <span>Add Courses</span>
                                    <p>Notify all students of your course</p>
                                </div>
                            </div>
                            <div class="right">
                                <a class="rts-btn btn-primary" href="{{ route('admin.course.create') }}">Add Courses</a>
                            </div>
                        </div>

                        <div class="rts-reviewd-area-dashed table-responsive" style="white-space: nowrap;">
                            <table class="table-reviews quiz announcement">
                                <thead>
                                    <tr>
                                        <th style="width: 30%;">Date</th>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Program</th>
                                        <th>Credits</th>
                                        <th>Semester</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="information-quiz">
                                                <span>November 28, 2023</span>
                                            </div>
                                        </td>
                                        <td class="announcement-1">
                                            <div class="left">
                                                <p>Recently Update Web Design Course</p>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
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
    </div>
</x-master>
