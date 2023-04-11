@extends('frontend.app')
@section('page')
		<div class="main-wrapper">
			<!--Title Bar -->
			<div id="titlebar" class="gradient">
				<div class="title-bar-inner">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2>Grid Layout</h2>
								<span>Explore New Places</span>
								<!-- Breadcrumbs -->
								<nav id="breadcrumbs">
									<ul>
										<li><a>Home</a></li>
										<li>Listings</li>
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
					<div class="row">
						<!-- Search -->
						<div class="col-md-12 grid-full-width page-search mb-3">
							<div class="main-search-input mt-0">
								<div class="col-lg-3 col-sm-6">
									<div class="form-group">
										<input type="text" placeholder="What are you looking for?" class="form-control">
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="form-group">
										<input type="text" placeholder="Location" class="form-control">
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<select class="custom-select my-1 mr-sm-2 new-select" id="inlineFormCustomSelectPref">
                           <option selected>Choose...</option>
                           <option value="1">Hotel</option>
                           <option value="2">Bar</option>
                           <option value="3">Food Courts</option>
                        </select>
								</div>
								<div class="col-lg-3 col-sm-6 text-right">
									<a class="btn main-search-btn btn-radius btn-lg btn-primary text-white"><span class="btn-inner--text">Search</span></a>
								</div>
							</div>
						</div>
						<!-- Search Section / End -->
						<div class="col-md-12">
							<!-- Sorting - Filtering Section -->
							<div class="row my-5">
								<div class="col-md-6">
									<!-- Layout Switcher -->
									<div class="layout-switcher">
										<a href="listings-grid-full-width.html" class="grid"> <span class="round-pill d-block"><i class="fa fa-th"></i></span></a>
										<a href="listings-list-full-width.html" class="list active"><span class="round-pill d-block"><i class="fa fa-align-justify"></i></span></a>
									</div>
								</div>
								<div class="col-md-6">
									<div class="fullwidth-filters">
									</div>
								</div>
							</div>
							<!-- Sorting - Filtering Section / End -->
							<div class="row">
								<!-- Listing Item -->
								<div class="col-lg-4 col-md-6 grid-layout-list mb-5">
									<div class="list-cap">
										<div class="list-cap-list">
											<div class="img-list">
												<img src="assets/images/most-img-1.jpg" alt="">
											</div>
											<div class="list-cap-content list-cap-content--style">
												<span class="badge badge-pill badge-primary text-uppercase mr-2">Now Open</span>
												<span class="badge badge-pill badge-primary text-uppercase badge-cat my-3">Eat & Drink</span>
												<!-- <DirectlistRating [rate]="list.rating"></DirectlistRating> -->
												<h4 class="list-cap-title"> <a href="listings-detail-one.html">Burger House</a></h4>
												<div class="address-bar">
													<p>4340 Cambridge Court Natural Dam, Arkansas</p>
												</div>
											</div>
											<span class="round-pill like-banner d-block bg-primary"><i class="fa fa-heart-o"></i></span>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 grid-layout-list mb-5">
									<div class="list-cap">
										<div class="list-cap-list">
											<div class="img-list">
												<img src="assets/images/most-img-2.jpg" alt="">
											</div>
											<div class="list-cap-content list-cap-content--style">
												<span class="badge badge-pill badge-primary text-uppercase mr-2">Now Open</span>
												<span class="badge badge-pill badge-primary text-uppercase badge-cat my-3">Eat & Drink</span>
												<!-- <DirectlistRating [rate]="list.rating"></DirectlistRating> -->
												<h4 class="list-cap-title"> <a href="listings-detail-one.html">Burger House</a></h4>
												<div class="address-bar">
													<p>4340 Cambridge Court Natural Dam, Arkansas</p>
												</div>
											</div>
											<span class="round-pill like-banner d-block bg-primary"><i class="fa fa-heart-o"></i></span>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 grid-layout-list mb-5">
									<div class="list-cap">
										<div class="list-cap-list">
											<div class="img-list">
												<img src="assets/images/most-img-3.jpg" alt="">
											</div>
											<div class="list-cap-content list-cap-content--style">
												<span class="badge badge-pill badge-primary text-uppercase mr-2">Now Open</span>
												<span class="badge badge-pill badge-primary text-uppercase badge-cat my-3">Eat & Drink</span>
												<!-- <DirectlistRating [rate]="list.rating"></DirectlistRating> -->
												<h4 class="list-cap-title"> <a href="listings-detail-one.html">Burger House</a></h4>
												<div class="address-bar">
													<p>4340 Cambridge Court Natural Dam, Arkansas</p>
												</div>
											</div>
											<span class="round-pill like-banner d-block bg-primary"><i class="fa fa-heart-o"></i></span>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 grid-layout-list mb-5">
									<div class="list-cap">
										<div class="list-cap-list">
											<div class="img-list">
												<img src="assets/images/most-img-4.jpg" alt="">
											</div>
											<div class="list-cap-content list-cap-content--style">
												<span class="badge badge-pill badge-primary text-uppercase mr-2">Now Open</span>
												<span class="badge badge-pill badge-primary text-uppercase badge-cat my-3">Eat & Drink</span>
												<!-- <DirectlistRating [rate]="list.rating"></DirectlistRating> -->
												<h4 class="list-cap-title"> <a href="listings-detail-one.html">Burger House</a></h4>
												<div class="address-bar">
													<p>4340 Cambridge Court Natural Dam, Arkansas</p>
												</div>
											</div>
											<span class="round-pill like-banner d-block bg-primary"><i class="fa fa-heart-o"></i></span>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 grid-layout-list mb-5">
									<div class="list-cap">
										<div class="list-cap-list">
											<div class="img-list">
												<img src="assets/images/most-img-3.jpg" alt="">
											</div>
											<div class="list-cap-content list-cap-content--style">
												<span class="badge badge-pill badge-primary text-uppercase mr-2">Now Open</span>
												<span class="badge badge-pill badge-primary text-uppercase badge-cat my-3">Eat & Drink</span>
												<!-- <DirectlistRating [rate]="list.rating"></DirectlistRating> -->
												<h4 class="list-cap-title"> <a href="listings-detail-one.html">Burger House</a></h4>
												<div class="address-bar">
													<p>4340 Cambridge Court Natural Dam, Arkansas</p>
												</div>
											</div>
											<span class="round-pill like-banner d-block bg-primary"><i class="fa fa-heart-o"></i></span>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 grid-layout-list mb-5">
									<div class="list-cap">
										<div class="list-cap-list">
											<div class="img-list">
												<img src="assets/images/most-img-2.jpg" alt="">
											</div>
											<div class="list-cap-content list-cap-content--style">
												<span class="badge badge-pill badge-primary text-uppercase mr-2">Now Open</span>
												<span class="badge badge-pill badge-primary text-uppercase badge-cat my-3">Eat & Drink</span>
												<!-- <DirectlistRating [rate]="list.rating"></DirectlistRating> -->
												<h4 class="list-cap-title"> <a href="listings-detail-one.html">Burger House</a></h4>
												<div class="address-bar">
													<p>4340 Cambridge Court Natural Dam, Arkansas</p>
												</div>
											</div>
											<span class="round-pill like-banner d-block bg-primary"><i class="fa fa-heart-o"></i></span>
										</div>
									</div>
								</div>
								<!-- Listing Item / End -->
							</div>
							<!-- Pagination -->
							<div class="clearfix"></div>
							<div class="row">
								<div class="col-md-12">
									<!-- Pagination -->
									<div class="mt-3">
										<nav aria-label="Page navigation">
											<ul class="pagination">
												<li class="page-item">
													<a class="page-link"><i class="fa fa-angle-left"></i></a>
												</li>
												<li class="page-item">
													<a class="page-link">1</a>
												</li>
												<li class="page-item active">
													<a class="page-link">2</a>
												</li>
												<li class="page-item">
													<a class="page-link">3</a>
												</li>
												<li class="page-item">
													<a class="page-link">4</a>
												</li>
												<li class="page-item">
													<a class="page-link">5</a>
												</li>
												<li class="page-item">
													<a class="page-link"><i class="fa fa-angle-right"></i></a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<!-- Pagination / End -->
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection