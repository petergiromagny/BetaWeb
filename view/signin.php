<?php include '../isset/meta.php'; ?>

<html>
<head>
    <title>Beta Web</title>
</head>
<body>
<div id="main-container">

    <!-----------------------Header----------------------->
    <?php include 'header.php'?>

    <div id="container-sign">
        <div id="square-signin">
            <h1 class="title-signin mt-4">Login</h1>
            <form class="mb-4">
                <div class="form-group">
                    <label for="email" class="text-form">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password" class="text-form">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary btn-signin mt-4">Sign in</button>
            </form>
        </div>
    </div>


</div>
</body>
</html>
