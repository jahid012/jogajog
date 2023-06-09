@extends('frontend.app')
@section('page')
<div class="main-wrapper">
    <!--Title Bar -->
    <div id="titlebar" class="gradient">
        <div class="title-bar-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Add your Listing</h2>
                        <span>Explore your search places</span>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a>Home</a></li>
                                <li>Add Listing</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="title-overlay"></div>
    </div>
    <div class="content">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-inner--icon"><i class="fa fa-thumbs-o-up"></i></span>
                        <span class="alert-inner--text"><strong>Don't Have an Account?</strong> If you don't have an account you can create one</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                    </div>
                    <div id="add-listing" class="separated-form">
                        <!-- Section -->
                        <div class="add-listing-section mb-4">
                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3> Basic Informations</h3>
                            </div>
                            <!-- Title -->
                            <div class="row with-forms">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Title" class="form-control form-control-alternative">
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row with-forms">
                                <!-- Status -->
                                <div class="col-md-6">
                                    <select class="custom-select form-control-alternative">
                            <option selected>Category</option>
                            <option>Eat & Drink</option>
                            <option>Shops</option>
                            <option>Hotels</option>
                            <option>Restaurants</option>
                            <option>Fitness</option>
                            <option>Events</option>
                         </select>
                                </div>
                                <!-- Type -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Keywords" class="form-control form-control-alternative">
                                    </div>
                                </div>
                            </div>
                            <!-- Row / End -->
                        </div>
                        <!-- Section / End -->
                        <!-- Section -->
                        <div class="add-listing-section mb-4">
                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3>Location</h3>
                            </div>
                            <div class="submit-section">
                                <!-- Row -->
                                <div class="row with-forms">
                                    <!-- City -->
                                    <div class="col-md-6">
                                        <select class="custom-select form-control-alternative">
                               <option selected>City</option>
                               <option>New York</option>
                               <option>Los Angeles</option>
                               <option>Chicago</option>
                               <option>Houston</option>
                               <option>Phoenix</option>
                               <option>San Diego</option>
                               <option>Austin</option>
                            </select>
                                    </div>
                                    <!-- Address -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Address" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                    <!-- City -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="State" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                    <!-- Zip-Code -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Zip Code" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                </div>
                                <!-- Row / End -->
                            </div>
                        </div>
                        <!-- Section / End -->
                        <!-- Section -->
                        <div class="add-listing-section mb-4">
                            <!-- Dropzone -->
                            <!-- <dropzone class="dropzone-container" [message]="'Click or drag images here to upload'"></dropzone> -->
                        </div>
                        <!-- Section / End -->
                        <!-- Section -->
                        <div class="add-listing-section mb-4">
                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3> Details</h3>
                            </div>
                            <!-- Description -->
                            <div class="form">
                                <h5>Description</h5>
                                <textarea class="WYSIWYG form-control form-control-alternative" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
                            </div>
                            <!-- Row -->
                            <div class="row with-forms">
                                <!-- Phone -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Phone" class="form-control form-control-alternative">
                                    </div>
                                </div>
                                <!-- Website -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Website" class="form-control form-control-alternative">
                                    </div>
                                </div>
                                <!-- Email Address -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="E-mail" class="form-control form-control-alternative">
                                    </div>
                                </div>
                            </div>
                            <!-- Row / End -->
                            <!-- Row -->
                            <div class="row with-forms">
                                <!-- Phone -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Facebook" class="form-control form-control-alternative">
                                    </div>
                                </div>
                                <!-- Website -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="https://www.twitter.com/" class="form-control form-control-alternative">
                                    </div>
                                </div>
                                <!-- Email Address -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="https://plus.google.com" class="form-control form-control-alternative">
                                    </div>
                                </div>
                            </div>
                            <!-- Row / End -->
                            <!-- Checkboxes -->
                            <h5 class="margin-top-30 margin-bottom-10">Amenities <span>(optional)</span></h5>
                            <div class="checkboxes checkbox-group in-row margin-bottom-20">
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input class="custom-control-input" id="customCheck1" type="checkbox">
                                    <label class="custom-control-label" for="customCheck1">
                         <span>Elevator</span>
                         </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input class="custom-control-input" id="customCheck2" type="checkbox">
                                    <label class="custom-control-label" for="customCheck2">
                         <span>Friendly workspace</span>
                         </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input class="custom-control-input" id="customCheck3" type="checkbox">
                                    <label class="custom-control-label" for="customCheck3">
                         <span>Instant Book</span>
                         </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input class="custom-control-input" id="customCheck4" type="checkbox">
                                    <label class="custom-control-label" for="customCheck4">
                         <span>Wireless Internet</span>
                         </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input class="custom-control-input" id="customCheck5" type="checkbox">
                                    <label class="custom-control-label" for="customCheck5">
                         <span>Free parking on premises</span>
                         </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input class="custom-control-input" id="customCheck6" type="checkbox">
                                    <label class="custom-control-label" for="customCheck6">
                         <span>Free parking on street</span>
                         </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input class="custom-control-input" id="customCheck7" type="checkbox">
                                    <label class="custom-control-label" for="customCheck7">
                         <span>Smoking allowed</span>
                         </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input class="custom-control-input" id="customCheck8" type="checkbox">
                                    <label class="custom-control-label" for="customCheck8">
                         <span>Events</span>
                         </label>
                                </div>
                            </div>
                            <!-- Checkboxes / End -->
                        </div>
                        <!-- Section / End -->
                        <!-- Section -->
                        <div class="add-listing-section mb-4">
                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3> Opening Hours</h3>
                                <!-- Switcher -->
                                <label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                            </div>
                            <!-- Switcher ON-OFF Content -->
                            <div class="switcher-content">
                                <!-- Day -->
                                <div class="row opening-day">
                                    <div class="col-md-2">
                                        <h5>Monday</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="custom-select form-control-alternative">
                               <option selected>Closed</option>
                               <option>1 AM</option>
                               <option>2 AM</option>
                               <option>3 AM</option>
                               <option>4 AM</option>
                               <option>5 AM</option>
                               <option>6 AM</option>
                               <option>7 AM</option>
                               <option>8 AM</option>
                               <option>9 AM</option>
                               <option>10 AM</option>
                               <option>11 AM</option>
                               <option>12 AM</option>
                               <option>1 PM</option>
                               <option>2 PM</option>
                               <option>3 PM</option>
                               <option>4 PM</option>
                               <option>5 PM</option>
                               <option>6 PM</option>
                               <option>7 PM</option>
                               <option>8 PM</option>
                               <option>9 PM</option>
                               <option>10 PM</option>
                               <option>11 PM</option>
                               <option>12 PM</option>
                            </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="custom-select form-control-alternative">
                               <option selected>Closed</option>
                               <option>1 AM</option>
                               <option>2 AM</option>
                               <option>3 AM</option>
                               <option>4 AM</option>
                               <option>5 AM</option>
                               <option>6 AM</option>
                               <option>7 AM</option>
                               <option>8 AM</option>
                               <option>9 AM</option>
                               <option>10 AM</option>
                               <option>11 AM</option>
                               <option>12 AM</option>
                               <option>1 PM</option>
                               <option>2 PM</option>
                               <option>3 PM</option>
                               <option>4 PM</option>
                               <option>5 PM</option>
                               <option>6 PM</option>
                               <option>7 PM</option>
                               <option>8 PM</option>
                               <option>9 PM</option>
                               <option>10 PM</option>
                               <option>11 PM</option>
                               <option>12 PM</option>
                            </select>
                                    </div>
                                </div>
                                <div class="row opening-day">
                                    <div class="col-md-2">
                                        <h5>Tuesday</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="custom-select form-control-alternative">
                               <option selected>Closed</option>
                               <option>1 AM</option>
                               <option>2 AM</option>
                               <option>3 AM</option>
                               <option>4 AM</option>
                               <option>5 AM</option>
                               <option>6 AM</option>
                               <option>7 AM</option>
                               <option>8 AM</option>
                               <option>9 AM</option>
                               <option>10 AM</option>
                               <option>11 AM</option>
                               <option>12 AM</option>
                               <option>1 PM</option>
                               <option>2 PM</option>
                               <option>3 PM</option>
                               <option>4 PM</option>
                               <option>5 PM</option>
                               <option>6 PM</option>
                               <option>7 PM</option>
                               <option>8 PM</option>
                               <option>9 PM</option>
                               <option>10 PM</option>
                               <option>11 PM</option>
                               <option>12 PM</option>
                            </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="custom-select form-control-alternative">
                               <option selected>Wednesday</option>
                               <option>1 AM</option>
                               <option>2 AM</option>
                               <option>3 AM</option>
                               <option>4 AM</option>
                               <option>5 AM</option>
                               <option>6 AM</option>
                               <option>7 AM</option>
                               <option>8 AM</option>
                               <option>9 AM</option>
                               <option>10 AM</option>
                               <option>11 AM</option>
                               <option>12 AM</option>
                               <option>1 PM</option>
                               <option>2 PM</option>
                               <option>3 PM</option>
                               <option>4 PM</option>
                               <option>5 PM</option>
                               <option>6 PM</option>
                               <option>7 PM</option>
                               <option>8 PM</option>
                               <option>9 PM</option>
                               <option>10 PM</option>
                               <option>11 PM</option>
                               <option>12 PM</option>
                            </select>
                                    </div>
                                </div>
                                <div class="row opening-day">
                                    <div class="col-md-2">
                                        <h5>Thursday</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="custom-select form-control-alternative">
                               <option selected>Closed</option>
                               <option>1 AM</option>
                               <option>2 AM</option>
                               <option>3 AM</option>
                               <option>4 AM</option>
                               <option>5 AM</option>
                               <option>6 AM</option>
                               <option>7 AM</option>
                               <option>8 AM</option>
                               <option>9 AM</option>
                               <option>10 AM</option>
                               <option>11 AM</option>
                               <option>12 AM</option>
                               <option>1 PM</option>
                               <option>2 PM</option>
                               <option>3 PM</option>
                               <option>4 PM</option>
                               <option>5 PM</option>
                               <option>6 PM</option>
                               <option>7 PM</option>
                               <option>8 PM</option>
                               <option>9 PM</option>
                               <option>10 PM</option>
                               <option>11 PM</option>
                               <option>12 PM</option>
                            </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="custom-select form-control-alternative">
                               <option selected>Closed</option>
                               <option>1 AM</option>
                               <option>2 AM</option>
                               <option>3 AM</option>
                               <option>4 AM</option>
                               <option>5 AM</option>
                               <option>6 AM</option>
                               <option>7 AM</option>
                               <option>8 AM</option>
                               <option>9 AM</option>
                               <option>10 AM</option>
                               <option>11 AM</option>
                               <option>12 AM</option>
                               <option>1 PM</option>
                               <option>2 PM</option>
                               <option>3 PM</option>
                               <option>4 PM</option>
                               <option>5 PM</option>
                               <option>6 PM</option>
                               <option>7 PM</option>
                               <option>8 PM</option>
                               <option>9 PM</option>
                               <option>10 PM</option>
                               <option>11 PM</option>
                               <option>12 PM</option>
                            </select>
                                    </div>
                                </div>
                                <div class="row opening-day">
                                    <div class="col-md-2">
                                        <h5>Friday</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="custom-select form-control-alternative">
                               <option selected>Closed</option>
                               <option>1 AM</option>
                               <option>2 AM</option>
                               <option>3 AM</option>
                               <option>4 AM</option>
                               <option>5 AM</option>
                               <option>6 AM</option>
                               <option>7 AM</option>
                               <option>8 AM</option>
                               <option>9 AM</option>
                               <option>10 AM</option>
                               <option>11 AM</option>
                               <option>12 AM</option>
                               <option>1 PM</option>
                               <option>2 PM</option>
                               <option>3 PM</option>
                               <option>4 PM</option>
                               <option>5 PM</option>
                               <option>6 PM</option>
                               <option>7 PM</option>
                               <option>8 PM</option>
                               <option>9 PM</option>
                               <option>10 PM</option>
                               <option>11 PM</option>
                               <option>12 PM</option>
                            </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="custom-select form-control-alternative">
                               <option selected>Closed</option>
                               <option>1 AM</option>
                               <option>2 AM</option>
                               <option>3 AM</option>
                               <option>4 AM</option>
                               <option>5 AM</option>
                               <option>6 AM</option>
                               <option>7 AM</option>
                               <option>8 AM</option>
                               <option>9 AM</option>
                               <option>10 AM</option>
                               <option>11 AM</option>
                               <option>12 AM</option>
                               <option>1 PM</option>
                               <option>2 PM</option>
                               <option>3 PM</option>
                               <option>4 PM</option>
                               <option>5 PM</option>
                               <option>6 PM</option>
                               <option>7 PM</option>
                               <option>8 PM</option>
                               <option>9 PM</option>
                               <option>10 PM</option>
                               <option>11 PM</option>
                               <option>12 PM</option>
                            </select>
                                    </div>
                                </div>
                                <div class="row opening-day">
                                    <div class="col-md-2">
                                        <h5>Sturday</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="custom-select form-control-alternative">
                               <option selected>Closed</option>
                               <option>1 AM</option>
                               <option>2 AM</option>
                               <option>3 AM</option>
                               <option>4 AM</option>
                               <option>5 AM</option>
                               <option>6 AM</option>
                               <option>7 AM</option>
                               <option>8 AM</option>
                               <option>9 AM</option>
                               <option>10 AM</option>
                               <option>11 AM</option>
                               <option>12 AM</option>
                               <option>1 PM</option>
                               <option>2 PM</option>
                               <option>3 PM</option>
                               <option>4 PM</option>
                               <option>5 PM</option>
                               <option>6 PM</option>
                               <option>7 PM</option>
                               <option>8 PM</option>
                               <option>9 PM</option>
                               <option>10 PM</option>
                               <option>11 PM</option>
                               <option>12 PM</option>
                            </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="custom-select form-control-alternative">
                               <option selected>Closed</option>
                               <option>1 AM</option>
                               <option>2 AM</option>
                               <option>3 AM</option>
                               <option>4 AM</option>
                               <option>5 AM</option>
                               <option>6 AM</option>
                               <option>7 AM</option>
                               <option>8 AM</option>
                               <option>9 AM</option>
                               <option>10 AM</option>
                               <option>11 AM</option>
                               <option>12 AM</option>
                               <option>1 PM</option>
                               <option>2 PM</option>
                               <option>3 PM</option>
                               <option>4 PM</option>
                               <option>5 PM</option>
                               <option>6 PM</option>
                               <option>7 PM</option>
                               <option>8 PM</option>
                               <option>9 PM</option>
                               <option>10 PM</option>
                               <option>11 PM</option>
                               <option>12 PM</option>
                            </select>
                                    </div>
                                </div>
                                <div class="row opening-day">
                                    <div class="col-md-2">
                                        <h5>Sunday</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="custom-select form-control-alternative">
                               <option selected>Closed</option>
                               <option>1 AM</option>
                               <option>2 AM</option>
                               <option>3 AM</option>
                               <option>4 AM</option>
                               <option>5 AM</option>
                               <option>6 AM</option>
                               <option>7 AM</option>
                               <option>8 AM</option>
                               <option>9 AM</option>
                               <option>10 AM</option>
                               <option>11 AM</option>
                               <option>12 AM</option>
                               <option>1 PM</option>
                               <option>2 PM</option>
                               <option>3 PM</option>
                               <option>4 PM</option>
                               <option>5 PM</option>
                               <option>6 PM</option>
                               <option>7 PM</option>
                               <option>8 PM</option>
                               <option>9 PM</option>
                               <option>10 PM</option>
                               <option>11 PM</option>
                               <option>12 PM</option>
                            </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="custom-select form-control-alternative">
                               <option selected>Closed</option>
                               <option>1 AM</option>
                               <option>2 AM</option>
                               <option>3 AM</option>
                               <option>4 AM</option>
                               <option>5 AM</option>
                               <option>6 AM</option>
                               <option>7 AM</option>
                               <option>8 AM</option>
                               <option>9 AM</option>
                               <option>10 AM</option>
                               <option>11 AM</option>
                               <option>12 AM</option>
                               <option>1 PM</option>
                               <option>2 PM</option>
                               <option>3 PM</option>
                               <option>4 PM</option>
                               <option>5 PM</option>
                               <option>6 PM</option>
                               <option>7 PM</option>
                               <option>8 PM</option>
                               <option>9 PM</option>
                               <option>10 PM</option>
                               <option>11 PM</option>
                               <option>12 PM</option>
                            </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Switcher ON-OFF Content / End -->
                        </div>
                        <!-- Section / End -->
                        <!-- Section -->
                        <div class="add-listing-section mb-4">
                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3> Pricing</h3>
                                <!-- Switcher -->
                                <label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                            </div>
                            <!-- Switcher ON-OFF Content -->
                            <div class="switcher-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="pricing-list-container">
                                            <tr class="pricing-list-item pattern">
                                                <td>
                                                    <div class="fm-input pricing-name">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Title" class="form-control form-control-alternative">
                                                        </div>
                                                    </div>
                                                    <div class="fm-input pricing-ingredients">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Price" class="form-control form-control-alternative">
                                                        </div>
                                                    </div>
                                                    <div class="fm-input pricing-price">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Price" class="form-control form-control-alternative">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        <button class="btn btn-1 btn-primary" type="button">Add Item</button>
                                        <button class="btn btn-1 btn-primary" type="button">Add Category</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Switcher ON-OFF Content / End -->
                        </div>
                        <!-- Section / End -->
                        <button class="btn btn-lg btn-primary mt-4" type="button">Add Listing</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection