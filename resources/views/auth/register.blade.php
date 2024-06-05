<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Monitoring</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!-- loader-->
    <link href="{{ asset('public/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('public/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/icons.css') }}" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/app.css') }}" />
</head>

<body class="bg-register">
    <!-- wrapper -->
    <div class="wrapper">
        <div class="section-authentication-register d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card radius-15 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-xl-6">
                                <div class="card-body p-md-5">
                                    <div class="text-center">
                                        <img src="{{ asset('public/assets/images/logo-icon.png') }}" width="80"
                                            alt="">
                                        <h3 class="mt-4 font-weight-bold">Create an Account</h3>
                                    </div>
                                    <div class="">
                                        <div class="form-body">
                                            <form class="row g-3" method="POST" action="{{ route('register') }}">
                                                @csrf

                                                <div class="col-sm-12">
                                                    <label class="form-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="name">
                                                </div>

                                                <div class="col-12">
                                                    <label for="inputEmailAddress" class="form-label">Email
                                                        Address</label>
                                                    <input type="email" class="form-control" name="email"
                                                        id="inputEmailAddress">
                                                </div>

                                                <div class="col-sm-12">
                                                    <label class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat">
                                                </div>

                                                <div class="col-12">
                                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                                    <div class="input-group" id="show_hide_password">
                                                        <input type="password" name="password"
                                                            class="form-control border-end-0" id="inputChoosePassword"
                                                            placeholder="Enter Password"> <a href="javascript:;"
                                                            class="input-group-text bg-transparent"><i
                                                                class="bx bx-hide"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                                    <div class="input-group" id="show_hide_password">
                                                        <input type="password" name="password_confirmation"
                                                            class="form-control border-end-0" id="inputChoosePassword"
                                                            placeholder="Enter Password"> <a href="javascript:;"
                                                            class="input-group-text bg-transparent"><i
                                                                class="bx bx-hide"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary"><i
                                                                class="bx bx-user me-1"></i>Sign up</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6 bg-login-color d-flex align-items-center justify-content-center">
                                <img src="{{ asset('public/assets/images/login-images/register-frent-img.jpg') }}"
                                    class="img-fluid" alt="...">
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>

    <!--Password show & hide js -->
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
</body>

</html>
