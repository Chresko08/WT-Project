<!DOCTYPE html>
<html>

  <head>
    <title>Introduction . getgoing</title>
    <?php include("includes.php") ?>
  </head>

  <body class="bg-dark text-white">

    <?php include "topPanel.php"; ?>
    <?php include "photos.php"; ?>
    <br>
    <div class="form-group px-3">
      <label for="idea">Share your business idea with us and we will help you.</label>
      <textarea class="form-control" id="idea" rows="5" placeholder="Write here"></textarea>
      <br>
      <div class="row">
        <div class="col-md-4 text-center"><input class="form-control form-control-lg" type="email" id="email" placeholder="Email Address" required></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <br>
      <button type="submit" class="btn btn-success btn-lg">Submit</button>
    </div>
  </body>

</html>