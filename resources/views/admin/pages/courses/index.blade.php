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
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($courses as $course)
                                    <tr>
                                        <td>
                                            <div class="information-quiz">
                                                <span>{{$course->created_at->format('F d, Y')}}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="information-quiz">
                                                <span>{{$course->course_code}}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="information-quiz">
                                                <span>{{$course->course_name}}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="information-quiz">
                                                <span>{{$course->program->program_name}}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="information-quiz">
                                                <span>{{$course->credits}}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="information-quiz">
                                                <span>{{$course->semester}}</span>
                                            </div>
                                        </td>
                                        <td class="announcement-1">

                                            <div class="right">
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-master>
