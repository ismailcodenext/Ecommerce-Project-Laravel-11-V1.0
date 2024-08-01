@extends('layout.sidenav-layout')
@section('title', 'Profile')
@section('content')


<div class="container" style="padding-top: 20px;">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="wrapper">
                <h4>User Profile</h4>
                <hr />
                <div class="container-fluid m-0 p-0">
                    <div class="row m-0 p-0">
                        <div class="col-md-4 p-2">
                            <label>Email Address</label>
                            <input id="email" placeholder="User Email" class="form-control test_form_input" type="email"
                                readonly />
                        </div>

                        <div class="col-md-4 p-2">
                            <label>Name</label>
                            <input id="firstName" placeholder="First Name" class="form-control test_form_input"
                                type="text" />
                        </div>

                        <div class="col-md-4 p-2">
                            <label>Mobile Number</label>
                            <input id="mobile" placeholder="Mobile" class="form-control test_form_input"
                                type="number" />
                        </div>

                        <div class="col-md-4 p-2">
                            <label>Password</label>
                            <div class="input-group">
                                <input id="password" placeholder="New Password" class="form-control test_form_input"
                                    type="password" />
                                <div class="input-group-append input-icon" onclick="togglePassword('password')">
                                    <i class="fa fa-eye" id="password_icon"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 p-2">
                            <label>Confirm Password</label>
                            <div class="input-group">
                                <input id="password_confirmation" placeholder="Confirm Password"
                                    class="form-control test_form_input" type="password" />
                                <div class="input-group-append input-icon"
                                    onclick="togglePassword('password_confirmation')">
                                    <i class="fa fa-eye" id="password_confirmation_icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 p-0">
                    <div class="col-md-4 p-2">
                        <button onclick="onUpdate()" class="btn mt-3 w-100 update_btn">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<style>
    .input-icon {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }

    .input-group {
        position: relative;
    }

    .input-group input {
        padding-right: 30px;
    }
</style>

<script>

    function togglePassword(fieldId) {
        const passwordField = document.getElementById(fieldId);
        const icon = document.getElementById(fieldId + '_icon');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }


    getProfile();
    async function getProfile() {
        try {
            showLoader();
            let res = await axios.get("/api/user-profile", HeaderToken());
            hideLoader();
            document.getElementById('email').value = res.data['email'];
            document.getElementById('firstName').value = res.data['name'];
            document.getElementById('mobile').value = res.data['mobile'];
            document.getElementById('password').value = res.data['password'];

        } catch (e) {
            unauthorized(e.response.status);
        }
    }

    async function onUpdate() {
        let PostBody = {
            "email": document.getElementById('email').value,
            "name": document.getElementById('firstName').value,
            "mobile": document.getElementById('mobile').value,
            "password": document.getElementById('password').value,
            "password_confirmation": document.getElementById('password_confirmation').value,
        };
        showLoader();
        let res = await axios.post("/api/user-update", PostBody, HeaderToken());
        hideLoader();
        if (res.data['status'] === "success") {
            successToast(res.data['message']);
            await getProfile();
        } else {
            successToast(res.data['message']);
        }
    }
</script>

@endsection