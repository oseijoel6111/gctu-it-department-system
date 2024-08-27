@props(
['title' => '']
)

<div class="rts-bread-crumbarea-1 rts-section-gap bg_image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main-wrapper">
                    <h1 class="title">{{$title}}</h1>
                    <div class="pagination-wrapper">
                        <a href="{{route('admin.index')}}">Home</a>
                        <i class="fa-regular fa-chevron-right"></i>
                        <a class="active" href="create-course.html">{{$title}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
