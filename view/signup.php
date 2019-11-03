<?php include '../isset/meta.php' ?>

<html>
<head>
    <title>Beta Web</title>
</head>
<body>
<div id="main-container">

    <!-----------------------Header----------------------->
    <?php include 'header.php'?>

    <div id="container-sign">
        <div id="square-signup">
            <h1 class="title-signin">Sign up</h1>
            <form class="mt-5">
                <div class="row mb-4">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
                <div class="form-group mb-4">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Confirm password">
                    </div>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Accept condition of the BetaWeb Products and Pivacy</label>

                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                    <label class="custom-control-label" for="customSwitch2">Subscribe to the BetaWeb Newsletter</label>
                </div>
                <button type="submit" class="btn btn-primary btn-signin">Sign in</button>
            </form>
        </div>
    </div>


</div>
</body>
</html>
