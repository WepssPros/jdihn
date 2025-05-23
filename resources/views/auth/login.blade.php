@extends('layouts.auth')
@section('auth-content')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center"
    style="background:url(../../admin/assets/images/big/auth-bg.jpg) no-repeat center center;">
    <div class="auth-box">
        <div id="loginform">
            <div class="logo">
                <span class="db"><img src="{{asset('../../admin/assets/images/logo-icon.png')}}" alt="logo" /></span>
                <h5 class="font-medium m-b-20">Masuk Kedalam Admin</h5>
            </div>
            <!-- Form -->
            <div class="row">
                <div class="col-12">
                    <form class="form-horizontal m-t-20" id="loginform" action="{{route('login')}}" method="post">
                        @csrf

                        {{-- <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                            </div>
                            <input type="text" id="nomor_berkas" name="nomor_berkas"
                                class="form-control form-control-lg" placeholder="BKS/../....../...../" required>

                            <script>
                                // Mendapatkan elemen input
                                    var nomorBerkasInput = document.getElementById("nomor_berkas");
                            
                                    // Mendengarkan peristiwa "input" pada elemen
                                    nomorBerkasInput.addEventListener("input", function () {
                                        var value = nomorBerkasInput.value;
                            
                                        // Menerapkan format saat panjang input mencapai 2, 9, 10, dan 13 karakter
                                        if (value.length === 3 || value.length === 9 || value.length === 10 || value.length === 13) {
                                            value += "/";
                                            nomorBerkasInput.value = value;
                                        }
                                    });
                            </script>
                        </div>  --}}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-lg" placeholder="Email" name="email"
                                aria-label="Email" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                            </div>
                            <input type="password" class="form-control form-control-lg" placeholder="Password"
                                name="password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember
                                        me</label>
                                    <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i
                                            class="fa fa-lock m-r-5"></i>
                                        Forgot pwd?</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-info" type="submit">Masuk</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                <div class="social">
                                    <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip"
                                        title="" data-original-title="Login with Facebook"> <i aria-hidden="true"
                                            class="fab  fa-facebook"></i> </a>
                                    <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip"
                                        title="" data-original-title="Login with Google"> <i aria-hidden="true"
                                            class="fab  fa-google-plus"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-b-0 m-t-10">
                            <div class="col-sm-12 text-center">
                                Don't have an account? <a href="{{route('register')}}" class="text-info m-l-5"><b>Sign
                                        Up</b></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="recoverform">
            <div class="logo">
                <span class="db"><img src="../../assets/images/logo-icon.png" alt="logo" /></span>
                <h5 class="font-medium m-b-20">Recover Password</h5>
                <span>Enter your Email and instructions will be sent to you!</span>
            </div>
            <div class="row m-t-20">
                <!-- Form -->
                <form class="col-12" action="index.html">
                    <!-- email -->
                    <div class="form-group row">
                        <div class="col-12">
                            <input class="form-control form-control-lg" type="email" required="" placeholder="Username">
                        </div>
                    </div>
                    <!-- pwd -->
                    <div class="row m-t-20">
                        <div class="col-12">
                            <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection