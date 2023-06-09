@extends('frontend.app')
@section('page')
<div class="main-wrapper">
    <div id="titlebar" class="gradient">
        <div class="title-bar-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Blog Listing</h2>
                        <span>Explore your search places</span>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a>Home</a></li>
                                <li>Blog</li>
                                <li>List</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="title-overlay"></div>
    </div>
    <!-- Content -->
    <div class="content">
        <div class="container">
            <!-- Blog Posts -->
            <div class="blog-page">
                <div class="row">
                    <div class="col-lg-9 col-md-8 padding-right-30">
                        <!-- Blog Post -->
                        <div class="card card-lift--hover shadow border-0 mb-4">
                            <img class="img-fluid" src="assets/images/dp-3.jpg" alt="image">
                            <div class="card-body py-4">
                                <h5 class="text-primary">Take a Look at Hotels for All Budgets</h5>
                                <p class="text-primary">22 August 2018</p>
                                <p class="description mt-3">Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque</p>
                                <a class="btn btn-primary" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="card card-lift--hover shadow border-0 mb-4">
                            <img alt="image" class="img-fluid" src="assets/images/dp-4.jpg">
                            <div class="card-body py-4">
                                <h5 class="text-primary">Take a Look at Hotels for All Budgets</h5>
                                <p class="text-primary">22 August 2018</p>
                                <p class="description mt-3">Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque</p>
                                <a class="btn btn-primary" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="card card-lift--hover shadow border-0 mb-4">
                            <img alt="image" class="img-fluid" src="assets/images/dp-2.jpg">
                            <div class="card-body py-4">
                                <h5 class="text-primary">Take a Look at Hotels for All Budgets</h5>
                                <p class="text-primary">22 August 2018</p>
                                <p class="description mt-3">Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque</p>
                                <a class="btn btn-primary" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Posts / End -->
                    <!-- Widgets -->
                    <div class="col-lg-3 col-md-4">
                        <div class="sidebar right">
                            <!-- Widget -->
                            <div class="widget">
                                <div class="form-group">
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Search" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="widget margin-top-40">
                                <h3>Popular Posts</h3>
                                <ul class="widget-tabs">
                                    <!-- Post #1 -->
                                    <li>
                                        <div class="widget-content">
                                            <div class="widget-thumb">
                                                <a href="#"><img src="assets/images/bw-1.jpg" alt="image"></a>
                                            </div>
                                            <div class="widget-text">
                                                <h5><a href="#">Hotels for All Budgets </a></h5>
                                                <span>October 26, 2016</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                    <!-- Post #2 -->
                                    <li>
                                        <div class="widget-content">
                                            <div class="widget-thumb">
                                                <a href="#"><img src="assets/images/bw-2.jpg" alt="image"></a>
                                            </div>
                                            <div class="widget-text">
                                                <h5><a href="#">The 50 Greatest Street Arts In London</a></h5>
                                                <span>November 9, 2016</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                    <!-- Post #3 -->
                                    <li>
                                        <div class="widget-content">
                                            <div class="widget-thumb">
                                                <a href="3.html"><img src="assets/images/bw-3.jpg" alt="image"></a>
                                            </div>
                                            <div class="widget-text">
                                                <h5><a href="#">The Best Cofee Shops In Sydney Neighborhoods</a></h5>
                                                <span>November 12, 2016</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Widget / End-->
                            <!-- Widget -->
                            <div class="widget margin-top-40">
                                <h3 class="margin-bottom-25">Social</h3>
                                <div class="btn-wrapper">
                                    <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip" data-original-title="Follow us">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="Like us">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-dribbble btn-lg btn-round" data-toggle="tooltip" data-original-title="Follow us">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                    <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Star on Github">
                                        <i class="fa fa-github"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Widget / End-->
                            <div class="clearfix"></div>
                            <div class="margin-bottom-40"></div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar / End -->
            </div>
        </div>
    </div>
</div>
@endsection