		<!-- Header of Admin Panel -->
		<header class="header-global bg-primary">
			<nav id="navbar-main" class="navbar fixed-top navbar-main bg-primary navbar-expand-lg navbar-transparent navbar-light headroom">
				<div class="container-fluid">
					<div class="logo">
						<a href="#"><img src="{{asset('assets/images/logo-white.png')}}" class="img-fluid" alt=""></a>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
					<div class="navbar-collapse collapse" id="navbar_global">
						<div class="navbar-collapse-header">
							<div class="row">
								<div class="col-6 collapse-brand">
									<div id="logo">
										<a href="{{route('home')}}"><img src="{{asset('assets/images/logo-white.png')}}" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="col-6 collapse-close">
									<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                           <span></span>
                           <span></span>
                           </button>
								</div>
							</div>
						</div>
                        @include('backend.components.navigation')
						<ul class="navbar-nav ml-lg-auto c-align-left">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbar-primary_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/images/thumb-4.jpg')}}" class="img-fluid rounded-circle shadow-lg mr-1" width="40" height="50" alt="">Ethan Moore</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-primary_dropdown_1">
									<a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a>
									<a class="dropdown-item" href="#">Settings</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Logout</a>
								</div>
							</li>
						</ul>
						<a href="{{route('dashboard.listings.create')}}" class="btn btn-neutral btn-icon btn-radius">Add Listing <i class="fa fa-plus"></i></a>
					</div>
				</div>
			</nav>
		</header>