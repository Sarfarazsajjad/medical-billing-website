<div class="container my-5 mobile-hide">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2 class="font-weight-bold">{{$cardHeading1}}</h2>
            <p>{{$desc}}</p>
        </div>
        <div class="col-md-6">
            <div class="custom-img-container">
                <img src='{{ $page->baseUrl }}/{{$image}}' alt={{$imageAlt}} class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="container my-5 mobile-show">
    <div class="row align-items-center">
    <div class="col-md-6">
            <div class="custom-img-container">
                <img src='{{ $page->baseUrl }}/{{$image}}' alt={{$imageAlt}} class="img-fluid">
            </div>
        </div>
        <div class="col-md-6 text-center">
            <h2 class="font-weight-bold">{{$cardHeading1}}</h2>
            <p>{{$desc}}</p>
        </div>
    </div>
</div>