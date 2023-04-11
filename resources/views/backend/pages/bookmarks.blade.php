@extends('backend.app')
@section('dashboard')
<div class="row">
    <!-- Listings -->
    <div class="col-lg-12 col-md-12">
        <div class="dashboard-list-box mb-5">
            <div class="db-tile ">
                <h4>Bookmarked Listings</h4>
            </div>
            <ul class="row border-grid">
                <li class="col-sm-6 col-md-6 col-lg-6 py-4">
                    <div class="media">
                        <img class="rounded-circle shadow-lg" width="80" height="80" src="assets/images/dp-1.jpg" alt="image">
                        <div class="media-body px-4">
                            <h5>Sticky Band</h5>
                            <p>Bishop Avenue, New York</p>
                            <p>(23 reviews)</p>
                            <button class="btn btn-sm btn-primary" type="button">Edit</button>
                            <button class="btn btn-sm btn-danger" type="button">Remove</button>
                        </div>
                    </div>
                </li>
                <li class="col-sm-6 col-md-6 col-lg-6 py-4">
                    <div class="media">
                        <img class="rounded-circle shadow-lg" width="80" height="80" src="assets/images/dp-1.jpg" alt="image">
                        <div class="media-body px-4">
                            <h5>Sticky Band</h5>
                            <p>Bishop Avenue, New York</p>
                            <p>(23 reviews)</p>
                            <button class="btn btn-sm btn-primary" type="button">Edit</button>
                            <button class="btn btn-sm btn-danger" type="button">Remove</button>
                        </div>
                    </div>
                </li>
                <li class="col-sm-6 col-md-6 col-lg-6 py-4">
                    <div class="media">
                        <img class="rounded-circle shadow-lg" width="80" height="80" src="assets/images/dp-1.jpg" alt="image">
                        <div class="media-body px-4">
                            <h5>Sticky Band</h5>
                            <p>Bishop Avenue, New York</p>
                            <p>(23 reviews)</p>
                            <button class="btn btn-sm btn-primary" type="button">Edit</button>
                            <button class="btn btn-sm btn-danger" type="button">Remove</button>
                        </div>
                    </div>
                </li>
                <li class="col-sm-6 col-md-6 col-lg-6 py-4">
                    <div class="media">
                        <img class="rounded-circle shadow-lg" width="80" height="80" src="assets/images/dp-1.jpg" alt="image">
                        <div class="media-body px-4">
                            <h5>Sticky Band</h5>
                            <p>Bishop Avenue, New York</p>
                            <p>(23 reviews)</p>
                            <button class="btn btn-sm btn-primary" type="button">Edit</button>
                            <button class="btn btn-sm btn-danger" type="button">Remove</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Copyrights -->
    <div class="col-md-12">
        <div class="copyrights">© 2019 D-List. All Rights Reserved.</div>
    </div>
</div>
@endsection