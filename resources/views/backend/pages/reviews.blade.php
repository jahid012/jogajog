@extends('backend.app')
@section('dashboard')
<div class="row">
    <!-- Listings -->
    <div class="col-lg-12 col-md-12">
        <div class="dashboard-list-box mb-5">
            <div class="db-tile ">
                <h4>Visitor Reviews</h4>
            </div>
            <ul class="row border-grid">
                <li class="col-sm-6 col-md-6 col-lg-6 py-4">
                    <div class="row list-img-wrap">
                        <div class="col-md-3 list-img">
                            <img src="assets/images/thumb-1.jpg" class="img-fluid rounded-circle shadow-lg" alt="image">
                        </div>
                        <div class="col-md-9">
                            <h5 class="text-primary">Jane Doe</h5>
                            <p>15 Minutes Ago</p>
                            <p class="mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor tortor ante, ut semper tellus congue a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus
                            </p>
                            <button class="btn btn-sm btn-primary" type="button">Reply</button>
                            <button class="btn btn-sm btn-danger" type="button">Delete</button>
                        </div>
                    </div>
                </li>
                <li class="col-sm-6 col-md-6 col-lg-6 py-4">
                    <div class="row list-img-wrap">
                        <div class="col-md-3 list-img">
                            <img src="assets/images/thumb-2.jpg" class="img-fluid rounded-circle shadow-lg" alt="image">
                        </div>
                        <div class="col-md-9">
                            <h5 class="text-primary">Ellis Molly</h5>
                            <p>2 Days Ago</p>
                            <p class="mb-4">
                                Consectetur adipiscing elit. Donec auctor tortor ante, ut semper tellus congue a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus lorem ipsum dolor sit amet
                            </p>
                            <button class="btn btn-sm btn-primary" type="button">Reply</button>
                            <button class="btn btn-sm btn-danger" type="button">Delete</button>
                        </div>
                    </div>
                </li>
                <li class="col-sm-6 col-md-6 col-lg-6 py-4">
                    <div class="row list-img-wrap">
                        <div class="col-md-3 list-img">
                            <img src="assets/images/thumb-3.jpg" class="img-fluid rounded-circle shadow-lg" alt="image">
                        </div>
                        <div class="col-md-9">
                            <h5 class="text-primary">Bethany</h5>
                            <p>4 Days Ago</p>
                            <p class="mb-4">
                                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor tortor ante, ut semper tellus congue a.
                            </p>
                            <button class="btn btn-sm btn-primary" type="button">Reply</button>
                            <button class="btn btn-sm btn-danger" type="button">Delete</button>
                        </div>
                    </div>
                </li>
                <li class="col-sm-6 col-md-6 col-lg-6 py-4">
                    <div class="row list-img-wrap">
                        <div class="col-md-3 list-img">
                            <img src="assets/images/thumb-4.jpg" class="img-fluid rounded-circle shadow-lg" alt="image">
                        </div>
                        <div class="col-md-9">
                            <h5 class="text-primary">Paige</h5>
                            <p>1 Week Ago</p>
                            <p class="mb-4">
                                Nascetur ridiculus mus lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor tortor ante, ut semper tellus congue a. Orci varius natoque penatibus et magnis dis parturient montes
                            </p>
                            <button class="btn btn-sm btn-primary" type="button">Reply</button>
                            <button class="btn btn-sm btn-danger" type="button">Delete</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection