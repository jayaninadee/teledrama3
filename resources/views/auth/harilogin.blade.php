<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jayani
 * Date: 11/6/2019
 * Time: 2:52 PM
 */
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Drama TV Application</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Food Recipes Application">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="assets/css/main.cba69814a806ecc7945a.css" rel="stylesheet">
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100 bg-plum-plate bg-animation">
            <div class="d-flex h-100 justify-content-center align-items-center">
                <div class="mx-auto app-login-box col-md-8">
                    <div class="app-logo-inverse mx-auto mb-3"></div>
                    <div class="modal-dialog w-100 mx-auto">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="h5 modal-title text-center">
                                    <h4 class="mt-2">
                                        <div>Welcome,</div>
                                        <span>Please sign in to your account below.</span>
                                    </h4>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <input name="email"
                                                       id="exampleEmail"
                                                       placeholder="Email here..."
                                                       type="email"
                                                       class="form-control"></div>
                                            @if ($errors->has('email'))
                                            <p class="help is-danger">
                                                {{ $errors->first('email') }}
                                            </p>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <input name="password"
                                                       id="examplePassword"
                                                       placeholder="Password here..."
                                                       type="password"
                                                       class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="position-relative form-check"><input name="check" id="exampleCheck"
                                                                                     type="checkbox"
                                                                                     class="form-check-input"><label
                                                for="exampleCheck" class="form-check-label">Keep me logged in</label>
                                    </div>
                                    <div class="modal-footer clearfix">

                                        <div class="float-right">
                                            <button type="submit" class="btn btn-primary btn-lg" >Login to Dashboard</button>
                                        </div>
                                    </div>
                                </form>
<!--                                <div class="divider"></div>-->
<!--                                <h6 class="mb-0">No account? <a href="javascript:void(0);" class="text-primary">Sign up-->
<!--                                        now</a></h6>-->
                            </div>

                        </div>
                    </div>
                    <div class="text-center text-white opacity-8 mt-3">Copyright © 2019 <a style="color: white" href=""
                                                                                           target="_blank">Commercial
                            Technologies Plus</a> All right reserved
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="assets/scripts/main.cba69814a806ecc7945a.js"></script>

</body>

</html>
