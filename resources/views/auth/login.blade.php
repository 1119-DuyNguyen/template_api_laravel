<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Đăng nhập</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('backend/assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('backend/assets/modules/bootstrap-social/bootstrap-social.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/components.css')}}">

</head>

<body class="sidebar-gone">
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        {{--                        <img src="{{asset('p')}}" alt="logo" width="100"--}}
                        {{--                             class="shadow-light rounded-circle">--}}
                    </div>

                    <div class="card card-primary">
                        <div class="card-header"><h4>Đăng nhập</h4></div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('web.login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" value="{{old('email')}}" class="form-control"
                                           name="email"
                                           placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Mật khẩu</label>
                                        <div class="float-right">
                                            <a href="auth-forgot-password.html" class="text-small">
                                                {{--                                                Quên mật khẩu?--}}
                                            </a>
                                        </div>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password"
                                           tabindex="2" required="">
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>

                                {{--                                <div class="form-group">--}}
                                {{--                                    <div class="custom-control custom-checkbox">--}}
                                {{--                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">--}}
                                {{--                                        <label class="custom-control-label" for="remember-me">Remember Me</label>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Đăng nhập
                                    </button>
                                </div>
                            </form>


                        </div>
                    </div>
                    {{--                    <div class="mt-5 text-muted text-center">--}}
                    {{--                        Don't have an account? <a href="auth-register.html">Create One</a>--}}
                    {{--                    </div>--}}

                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="{{asset('backend/assets/modules/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/popper.js')}}"></script>
<script src="{{asset('backend/assets/modules/tooltip.js')}}"></script>
<script src="{{asset('backend/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/moment.min.js')}}"></script>
<script src="{{asset('backend/assets/js/stisla.js')}}"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="{{asset('backend/assets/js/scripts.js')}}"></script>
<script src="{{asset('backend/assets/js/custom.js')}}"></script>

</body>
</html>
@section('title')
    {{--    {{$settings->site_name}} || Login--}}
@endsection



@section('content')

    {{--    custom button tab--}}
    <style>
        .wsus__login_reg_area .nav-item .nav-link {
            border-radius: 0px;
        }

        .wsus__login_reg_area .nav-item:first-child .nav-link {
            border-radius: 5px 0px 0px 5px;
        }

        .wsus__login_reg_area .nav-item:last-child .nav-link {
            border-radius: 0px 5px 5px 0px;
        }
    </style>

    <!--============================
       LOGIN/REGISTER PAGE START
    ==============================-->
    <section id="wsus__login_register">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__login_reg_area">
                        <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active " id="pills-home-tab2" data-bs-toggle="pill"
                                        data-bs-target="#pills-homes" type="button" role="tab"
                                        aria-controls="pills-homes"
                                        aria-selected="true">login
                                </button>
                            </li>
                            <li class="nav-item " role="presentation">
                                <button class="nav-link" id="pills-profile-tab2" data-bs-toggle="pill"
                                        data-bs-target="#pills-profiles" type="button" role="tab"
                                        aria-controls="pills-profiles" aria-selected="true">signup
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent2">
                            <div class="tab-pane fade show active" id="pills-homes" role="tabpanel"
                                 aria-labelledby="pills-home-tab2">
                                <div class="wsus__login">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="wsus__login_input">
                                            <i class="fas fa-user-tie"></i>
                                            <input id="email" type="email" value="{{old('email')}}" name="email"
                                                   placeholder="Email">
                                        </div>

                                        <div class="wsus__login_input">
                                            <i class="fas fa-key"></i>
                                            <input id="password" type="password" name="password" placeholder="Password">
                                        </div>


                                        <div class="wsus__login_save">
                                            <div class="form-check form-switch">
                                                <input id="remember_me" name="remember" class="form-check-input"
                                                       type="checkbox"
                                                       id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Remember
                                                    me</label>
                                            </div>
                                            {{--                                            <a class="forget_p" href="{{ route('password.request') }}">forget password--}}
                                            {{--                                                ?</a>--}}
                                        </div>

                                        <button class="common_btn" type="submit">login</button>
                                        {{-- <p class="social_text">Sign in with social account</p>
                                        <ul class="wsus__login_link">
                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul> --}}
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profiles" role="tabpanel"
                                 aria-labelledby="pills-profile-tab2">
                                <div class="wsus__login">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="wsus__login_input">
                                            <i class="fas fa-user-tie"></i>
                                            <input id="name" name="name" value="{{old('name')}}" type="text"
                                                   placeholder="Name">
                                        </div>


                                        <div class="wsus__login_input">
                                            <i class="far fa-envelope"></i>
                                            <input id="email" type="email" name="email" value="{{old('email')}}"
                                                   type="text" placeholder="Email">
                                        </div>


                                        <div class="wsus__login_input">
                                            <i class="fas fa-key"></i>
                                            <input id="password" name="password" type="password" placeholder="Password">
                                        </div>


                                        <div class="wsus__login_input">
                                            <i class="fas fa-key"></i>
                                            <input id="password_confirmation" type="password"
                                                   name="password_confirmation" placeholder="Confirm Password">
                                        </div>

                                        <button class="common_btn mt-4" type="submit">signup</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
       LOGIN/REGISTER PAGE END
    ==============================-->
@endsection

@push('scripts')
    {{--    <script>--}}
    {{--        var forms = document.querySelectorAll("#wsus__login_register form");--}}
    {{--        // console.log(forms)--}}

    {{--        //init span error message--}}
    {{--        forms.forEach(form => {--}}
    {{--            let inputs = form.querySelectorAll('input');--}}
    {{--            inputs.forEach(input => {--}}
    {{--                let parent = input.parentElement;--}}
    {{--                let span = document.createElement('div');--}}
    {{--                span.innerHTML = `--}}
    {{--                    <span class="text-danger error-text ${input.name}_error"--}}
    {{--                    style="color: red"></span>`;--}}

    {{--                parent.insertAdjacentHTML('afterend', span.outerHTML);--}}
    {{--            })--}}
    {{--            form.addEventListener('submit', function (e) {--}}
    {{--                e.preventDefault();--}}

    {{--                var all = $(this).serialize();--}}
    {{--                $.ajax({--}}
    {{--                    url: $(this).attr('action'),--}}
    {{--                    type: "POST",--}}
    {{--                    data: all,--}}
    {{--                    beforeSend: function () {--}}

    {{--                        $(document).find('span.error-text').text('');--}}
    {{--                    },--}}
    {{--                    statusCode: {--}}
    {{--                        422: function(responseObject, textStatus, jqXHR) {--}}
    {{--                            // validation error fails--}}
    {{--                            if(responseObject.responseJSON)--}}
    {{--                            {--}}
    {{--                                let errors=responseObject.responseJSON.errors;--}}
    {{--                                if(errors){--}}
    {{--                                    for (const [prefix, value] of Object.entries(errors)) {--}}
    {{--                                        let span=form.querySelector('span.' + prefix + '_error');--}}
    {{--                                        span.innerText=value--}}

    {{--                                        let input = form.querySelector('input[name=' + prefix + ']');--}}
    {{--                                        input.focus();--}}
    {{--                                    }--}}

    {{--                                }--}}
    {{--                            }--}}

    {{--                        },--}}
    {{--                        503: function(responseObject, textStatus, errorThrown) {--}}
    {{--                            // Service Unavailable (503)--}}
    {{--                            // This code will be executed if the server returns a 503 response--}}
    {{--                        }--}}
    {{--                    },--}}
    {{--                    success: function (data) {--}}

    {{--                            window.location.replace(--}}
    {{--                                '{{Redirect::intended(route("home"))->getTargetUrl()}}'--}}
    {{--                            );--}}
    {{--                        // } else if (data == 2) {--}}
    {{--                        //--}}
    {{--                        //     $("#show_error").hide().html("Invalid login details");--}}
    {{--                        // }--}}

    {{--                    }--}}
    {{--                    ,--}}
    {{--                    errors: function (data) {--}}

    {{--                    }--}}
    {{--                })--}}

    {{--            });--}}

    {{--        })--}}


    {{--    </script>--}}

@endpush
