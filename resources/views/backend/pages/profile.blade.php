@extends('backend.app')
@section('dashboard')
<div class="row">
    <!-- Profile -->
    <div class="col-lg-6 col-md-12">
        <div class="dashboard-list-box mb-5">
            <div class="dashboard-list-box-static">
                <h4 class="mb-3">Profile Details</h4>
                <!-- Avatar -->
                <!-- Details -->
                <div class="my-profile">
                    <div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="form-group">
                            <input type="text" placeholder="First Name" class="form-control form-control-alternative">
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <input type="text" placeholder="Last Name" class="form-control form-control-alternative">
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <input type="text" placeholder="State" class="form-control form-control-alternative">
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <input type="text" placeholder="City" class="form-control form-control-alternative">
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <input type="text" placeholder="Phone" class="form-control form-control-alternative">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="E-mail" class="form-control form-control-alternative">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Twitter" class="form-control form-control-alternative">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Facebook" class="form-control form-control-alternative">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Google +" class="form-control form-control-alternative">
                    </div>
                    <label>About</label>
                    <textarea class="form-control form-control-alternative mb-4" name="notes" id="notes" cols="30" rows="10">Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper</textarea>
                </div>
                <button class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
    <!-- Change Password -->
    <div class="col-lg-6 col-md-12">
        <div class="dashboard-list-box mb-5">
            <div class="dashboard-list-box-static">
                <h4 class="mb-3">Change Password</h4>
                <!-- Change Password -->
                <div class="my-profile">
                    <div class="form-group">
                        <input type="password" placeholder="Current Password" class="form-control form-control-alternative">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="New Password" class="form-control form-control-alternative">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Retype New Password" class="form-control form-control-alternative">
                    </div>
                    <button class="btn btn-primary">Change Password</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyrights -->
    <div class="col-md-12">
        <div class="copyrights">© 2019 D-List. All Rights Reserved.</div>
    </div>
</div>
@endsection