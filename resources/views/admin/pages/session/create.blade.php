<x-master title="Session">
    @include('admin.layouts.header-crumb')
    <x-bread-crumb title="Create Session" />

    <div class="crea-te-course-area-start ptb--100">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="create-course-area-main-wrapper-inner">
                        <div class="accordion" id="accordionExample">
                            <!-- single accordion nitem area start -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Session Info
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="course-information-area">
                                            <form action="#" class="top-form-create-course">
                                                <div class="single-input">
                                                    <label for="name">Session Name</label>
                                                    <input id="name" type="text" placeholder="New Course">
                                                </div>
                                                <!-- <div class="single-input">
                                                    <label for="slug">Course Slug</label>
                                                    <input id="slug" type="text" placeholder="New Course">
                                                </div> -->
                                                <!-- <div class="single-input">
                                                    <label for="message-2">About Course</label>
                                                    <textarea id="message-2" placeholder="New Course"></textarea>
                                                </div> -->



                                            </form>
                                            <div class="modal-footer">
                                                <button type="button" class="rts-btn btn-primary">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
                <div class="col-lg-4 rts-sticky-column-item">
                    <div class="course-upload-tips-wrapper theiaStickySidebar">
                        <h5 class="title">Session Upload Tips</h5>
                        <div class="single-check-wrapper">
                            <i class="fa-light fa-circle-check"></i>
                            <span>Prepare Your Files</span>
                        </div>
                        <div class="single-check-wrapper">
                            <i class="fa-light fa-circle-check"></i>
                            <span>Check File Size Limits</span>
                        </div>
                        <div class="single-check-wrapper">
                            <i class="fa-light fa-circle-check"></i>
                            <span>Supported File Types</span>
                        </div>
                        <div class="single-check-wrapper">
                            <i class="fa-light fa-circle-check"></i>
                            <span>Stable Internet Connection</span>
                        </div>
                        <div class="single-check-wrapper">
                            <i class="fa-light fa-circle-check"></i>
                            <span>Upload Progress</span>
                        </div>
                        <div class="single-check-wrapper">
                            <i class="fa-light fa-circle-check"></i>
                            <span>Select multiple file once</span>
                        </div>
                        <div class="single-check-wrapper">
                            <i class="fa-light fa-circle-check"></i>
                            <span>Double-Check Before Submission</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-master>
