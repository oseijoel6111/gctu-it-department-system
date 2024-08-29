<x-master title="Course">
    @include('admin.layouts.header-crumb')
    <x-bread-crumb title="Create Course" />

    <div class="crea-te-course-area-start ptb--100">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="create-course-area-main-wrapper-inner">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Course Info
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="course-information-area">
                                            <form action="{{route('admin.course.store')}}" method="POST" class="top-form-create-course">
                                                @csrf
                                                <div class="single-input">
                                                    <label for="name">Course Code</label>
                                                    <input id="name" name="code" type="text" placeholder="Course Code">
                                                </div>
                                                <div class="single-input">
                                                    <label for="name">Course Name</label>
                                                    <input id="name" name="name" type="text" placeholder="Course Name">
                                                </div>
                                                <div class="single-input">
                                                  <label for="program">Program</label>
                                                   <select id="program" name="program">
                                                   <option value="" disabled selected>Select a Program</option>
                                                   @foreach ($programs as $program)
                                                   <option value="{{$program->id}}">{{$program->program_name}}</option>
                                                   @endforeach
                                                     </select>
                                                </div>

                                                <div class="single-input">
                                                    <label for="credits">Course Credit</label>
                                                    <input id="credits" name="credits" type="number" placeholder="Credits">
                                                </div>

                                                <div class="single-input">
                                                    <label for="semester">Semester</label>
                                                    <input id="semester" name="semester" type="text" placeholder="Semester">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="rts-btn btn-primary">Create</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
                <div class="col-lg-4 rts-sticky-column-item">
                    <div class="course-upload-tips-wrapper theiaStickySidebar">
                        <h5 class="title">Course Upload Tips</h5>
                        <div class="single-check-wrapper">
                            <i class="fa-light fa-circle-check"></i>
                            <span>Set the Course Price option or make it free.</span>
                        </div>
                        <div class="single-check-wrapper">
                            <i class="fa-light fa-circle-check"></i>
                            <span>Standard size for the course thumbnail is
                                700x430.</span>
                        </div>
                        <div class="single-check-wrapper">
                            <i class="fa-light fa-circle-check"></i>
                            <span>Video section controls the course overview video.</span>
                        </div>
                        <div class="single-check-wrapper">
                            <i class="fa-light fa-circle-check"></i>
                            <span>Course Builder is where you create &amp; organize
                                a course.</span>
                        </div>
                        <div class="single-check-wrapper">
                            <i class="fa-light fa-circle-check"></i>
                            <span>Add Topics in the Course Builder section to create
                                lessons, quizzes, and assignments.</span>
                        </div>
                        <div class="single-check-wrapper">
                            <i class="fa-light fa-circle-check"></i>
                            <span>Prerequisites refers to the fundamental courses
                                to complete before taking this particular course.</span>
                        </div>
                        <div class="single-check-wrapper">
                            <i class="fa-light fa-circle-check"></i>
                            <span>Information from the Additional Data section
                                shows up on the course single page.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-master>
