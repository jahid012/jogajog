@push('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="https://christianbayer.github.io/image-uploader/dist/image-uploader.min.css" rel="stylesheet">
<style>
.summernote .btn-default{
    color: #4a4a4a;
    background-color: #ffffff;
    border-color: #ffffff;
}
</style>
@endpush
@extends('backend.app')
@section('dashboard')
    <div class="row">
        <div class="col-lg-12">
            <div id="add-listing">
                <!-- Section -->
                <form method="post" enctype="multipart/form-data" action="{{route('dashboard.listings.store')}}">
                <div class="add-listing-section mb-4">
                    <!-- Headline -->
                    <div class="add-listing-headline">
                        <h3> Basic Informations</h3>
                    </div>
                    <!-- Title -->
                    <div class="row with-forms">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="listing_name" placeholder="Listing Name" class="form-control form-control-alternative">
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                    <div class="row with-forms">
                        <!-- Status -->
                        <div class="col-md-6">
                            <select name="category" class="custom-select form-control-alternative mb-3">
                     <option label="blank">Select Category</option>
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
                                <input name="keywords" type="text" placeholder="Keywords" class="form-control form-control-alternative">
                            </div>
                        </div>
                    </div>
                    <!-- Row / End -->
                </div>
                <!-- Section / End -->
                <div class="add-listing-section mb-4">
                    <!-- Headline -->
                    <div class="add-listing-headline">
                        <h3>Thumbnails</h3>
                    </div>
                    <div class="submit-section">
                            <div class="upload-thumbnail" style="padding-top: .5rem;"></div>
                    </div>
                </div>
                <!-- Section -->
                <div class="add-listing-section mb-4">
                    <!-- Headline -->
                    <div class="add-listing-headline">
                        <h3> Location</h3>
                    </div>
                    <div class="submit-section">
                        <!-- Row -->
                        <div class="row with-forms">
                            <!-- City -->
                            <div class="col-md-6">
                                <select name="location" class="custom-select form-control-alternative mb-3">
                        <option label="blank">Select City</option>
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
                                    <input name="street" type="text" placeholder="e.g. 964 School Street" class="form-control form-control-alternative">
                                </div>
                            </div>
                            <!-- City -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="state" type="text" placeholder="State" class="form-control form-control-alternative">
                                </div>
                            </div>
                            <!-- Zip-Code -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="zipcode" type="text" placeholder="Zip Code" class="form-control form-control-alternative">
                                </div>
                            </div>
                        </div>
                        <!-- Row / End -->
                    </div>
                </div>
                <!-- Section / End -->
                <!-- Section -->
            
                <!-- Section / End -->
                <!-- Section -->
                <div class="add-listing-section mb-4">
                    <!-- Headline -->
                    <div class="add-listing-headline">
                        <h3> Details</h3>
                    </div>
                    <div class="form summernote mb-3">
                        <textarea id="summernote" name="details"></textarea>
                    </div>
                    <!-- Row -->
                    <div class="row with-forms">
                        <!-- Phone -->
                        <div class="col-md-4">
                            <input name="phone" type="text" placeholder="Phone" class="form-control form-control-alternative">
                        </div>
                        <!-- Website -->
                        <div class="col-md-4">
                            <input name="website" type="text" placeholder="Website" class="form-control form-control-alternative">
                        </div>
                        <!-- Email Address -->
                        <div class="col-md-4">
                            <input name="email" type="text" placeholder="E-mail" class="form-control form-control-alternative">
                        </div>
                    </div>
                    <!-- Row / End -->
                    <!-- Row -->
                    <div class="row with-forms">
                        <!-- Phone -->
                        <div class="col-md-4">
                            <h5 class="fb-input"><i class="fa fa-facebook-square"></i> Facebook <span>(optional)</span></h5>
                            <input name="facebook" type="text" class="form-control form-control-alternative" placeholder="https://www.facebook.com/">
                        </div>
                        <!-- Website -->
                        <div class="col-md-4">
                            <h5 class="twitter-input"><i class="fa fa-twitter"></i> YouTube <span>(optional)</span></h5>
                            <input name="youtube" type="text" class="form-control form-control-alternative" placeholder="https://www.twitter.com/">
                        </div>

                    </div>
                    <!-- Row / End -->
                    <!-- Checkboxes -->
                    <h5 class="margin-top-30 margin-bottom-10">Amenities <span>(optional)</span></h5>
                    <div class="checkboxes in-row margin-bottom-20">
                        <input id="check-a" type="checkbox" name="amenities">
                        <label for="check-a">Elevator in building</label>
                        <input id="check-b" type="checkbox" name="amenities">
                        <label for="check-b">Friendly workspace</label>
                        <input id="check-c" type="checkbox" name="amenities">
                        <label for="check-c">Instant Book</label>
                        <input id="check-d" type="checkbox" name="amenities">
                        <label for="check-d">Wireless Internet</label>
                        <input id="check-e" type="checkbox" name="amenities">
                        <label for="check-e">Free parking on premises</label>
                        <input id="check-f" type="checkbox" name="amenities">
                        <label for="check-f">Free parking on street</label>
                        <input id="check-g" type="checkbox" name="amenities">
                        <label for="check-g">Smoking allowed</label>
                        <input id="check-h" type="checkbox" name="amenities">
                        <label for="check-h">Events</label>
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
                        <label class="switch"><input name="opening_hour_status" type="checkbox" checked><span class="slider round"></span></label>
                    </div>
                    <!-- Switcher ON-OFF Content -->
                    <div class="switcher-content">
                        <!-- Day -->
                        <div class="row opening-day">
                            <div class="col-md-2">
                                <h5>Monday</h5>
                            </div>
                            <div class="col-md-5">
                                <select name="opening_time" class="custom-select form-control-alternative mb-3" data-placeholder="Opening Time">
                        <option label="Opening Time"></option>
                        <option>Closed</option>
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
                                <select name="closing_time" class="custom-select form-control-alternative mb-3" data-placeholder="Closing Time">
                        <option label="Closing Time"></option>
                        <option>Closed</option>
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
                        <!-- Day / End -->
                        <!-- Day -->
                        
                    </div>
                    <!-- Switcher ON-OFF Content / End -->
                </div>
                <!-- Section / End -->
                <!-- Section -->
                <div class="add-listing-section mb-4">
                    <!-- Headline -->
                    <div class="add-listing-headline mb-0">
                        <h3> Pricing</h3>
                        <!-- Switcher -->
                        <label class="switch"><input name="pricing_status" type="checkbox" checked><span class="slider round"></span></label>
                    </div>
                    <!-- Switcher ON-OFF Content -->
                    <div class="switcher-content">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="pricing-list-container">
                                    <tr class="pricing-list-item pattern">
                                        <td>
                                            <div class="fm-input pricing-name"><input name="pricing_title" type="text" placeholder="Title" class="form-control form-control-alternative" /></div>
                                            <div class="fm-input pricing-ingredients"><input name="pricing_description" type="text" placeholder="Description" class="form-control form-control-alternative" /></div>
                                            <div class="fm-input pricing-price"><input type="text" name="pricing_price" placeholder="Price" class="form-control form-control-alternative" /></div>
                                        </td>
                                    </tr>
                                </table>
                                <div class="mt-3"> 
                                    <a href="#" class="btn btn-primary">Add Item</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Switcher ON-OFF Content / End -->
                </div>
                <!-- Section / End -->
                <button type="submit" class="btn btn-danger">Preview <i class="fa fa-arrow-circle-right"></i></button>
                @csrf
                </form>
            </div>
        </div>
        <!-- Copyrights -->
        <div class="col-md-12">
            <div class="copyrights">© 2019 D-List. All Rights Reserved.</div>
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript" src="https://christianbayer.github.io/image-uploader/dist/image-uploader.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$(document).ready(function() {
    $('#summernote').summernote({
        placeholder: 'Enter Your Details Here',

        minHeight: 320,

    });
});    
$('.upload-thumbnail').imageUploader();
</script>

@endpush