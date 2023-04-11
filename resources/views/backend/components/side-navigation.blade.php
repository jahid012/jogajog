<!-- Sidebar of Admin Panel -->
<div class="app-admin-sidebar">
    <div class="db-admin">
        <div class="dashboard-nav">
            <div class="dashboard-nav-inner">
                <ul data-submenu-title="Main">
                    <li class="active">
                        <a href="{{route('dashboard')}}"><i class="fa fa-tachometer"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.message.index')}}"><i class="fa fa-inbox"></i> Messages <span class="nav-tag messages">2</span></a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.booking.index')}}"><i class=" fa fa-calendar"></i> Bookings</a>
                    </li>
                </ul>
                <ul data-submenu-title="Listings">
                    <li>
                        <a href="{{route('dashboard.mylisting.index')}}"><i class="fa fa-calendar-check-o"></i> My Listing</a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.review.index')}}"><i class="fa fa-star"></i> Reviews</a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.bookmark.index')}}"><i class="fa fa-bookmark"></i> Bookmarks</a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.listings.create')}}"><i class="fa fa-calendar-plus-o"></i> Add Listing</a>
                    </li>
                </ul>
                <ul data-submenu-title="Account">
                    <li>
                        <a href="{{route('profile.edit')}}"><i class="fa fa-user"></i> My Profile</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <a class="db-trigger">
        <i class="fa fa-reorder"></i>
    </a>
</div>