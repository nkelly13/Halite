<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/header.php'; ?>

    <title>Email Selection</title>

    <link href="lib/bootstrap.min.css" rel="stylesheet">
    <link href="style/general.css" rel="stylesheet">
    <style>
        h4 {
            font-weight: 400;
        }
    </style>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <div class="container">
        <div class="pageContent">
            <div class="row">
                <div class="col-sm-12">
                    <div id="messageBox"></div>
                    <div id="verify">
                        <h1>One Last Step...</h1>
                        <h4>You need to enter your preferred email.</h4>
                        <h4>We’ll use the domain of your email address to identify your university or company so you can easily see how you rank against others in your organization. We’ll also email you about bot submission events like compilation errors. You can opt out of these at any time.</h4>
                        <?php include 'includes/email_github_form.php'; ?>
                        <p id="or">Or</p>
                        <?php include 'includes/email_custom_form.php'; ?>
                    </div>
                    <div id="change">
                        <h1>Email Change</h1>
                        <h4>Please enter your preferred email.</h4>
                        <h4>We’ll use the domain of your email address to identify your university or company so you can easily see how you rank against others in your organization. We’ll also email you about bot submission events like compilation errors. You can opt out of these at any time.</h4>
                    </div>
                    <div id="wait">
                        <h2>We've sent you a verification email and are waiting for you to click the link in it. This email may land in your spam folder.</h2>
                        <h4>If you've already verified your email, head to our <a href="index.php">homepage</a>. If you're having problems with registration, please email us at halite@halite.io.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsrender/0.9.83/jsrender.min.js"></script>
    <script src="script/backend.js"></script>
    <script src="script/email.js"></script>
</body>

</html>
