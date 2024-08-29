<x-master headerSection='admin.layouts.header' title="Programs">
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
                                    <span>Add Programs</span>
                                    <p>Notify all students of your programs</p>
                                </div>
                            </div>
                            <div class="right">
                                <a class="rts-btn btn-primary" href="{{ route('admin.program.create') }}">Add
                                    Programs</a>
                            </div>
                        </div>

                        <div class="rts-reviewd-area-dashed table-responsive" style="white-space: nowrap;">
                            <table class="table-reviews quiz announcement">
                                <thead>
                                    <tr>
                                        <th style="width: 30%;">Date</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($programs as $program)
                                        <tr>
                                            <td>
                                                <div class="information-quiz">
                                                    <span>{{$program->created_at->format('F d, Y')}}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="information-quiz">
                                                    <span>{{$program->program_name}}</span>
                                                </div>
                                            </td>
                                            <td class="announcement-1">
                                                <div class="left">
                                                    <p>{{$program->description}}</p>
                                                </div>
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
