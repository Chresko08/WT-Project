<html>
    <head>
        <title>Introduction . getgoing</title>
        <?php include("includes.php") ?>
    </head>
    <body class="bg-dark text-white">

        <?php include "topPanel.php"; ?>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center"><input class="form-control form-control-lg" type="email" id="email" placeholder="Email ID" required=""></div>
                <div class="col-md-4"></div>
            </div>
            <br>   
            <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center"><input class="form-control form-control-lg" type="password" id="pwd" placeholder="Password" required=""></div>
                    <div class="col-md-4"></div>
            </div>
            <br>   
            <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center"><button type="submit" class="btn btn-success btn-lg" onclick="myFunction()">Sign in</button></div>
                    <div class="col-md-4"></div>
            </div>
        </div>

    </body>
</html>