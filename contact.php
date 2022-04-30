<!DOCTYPE html>
<html>
<head>

  <title>welcome guys</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/website.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>

<body>

  <!-- navbar starting code -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Technical Suggest</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="aboute.php">aboute</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="service.php">Services</a>
        </li>

         <li class="nav-item">
          <a class="nav-link" href="contact.php">contact</a>
        </li>

      </ul>

      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- navbar end -->

<div class="jumbotron">
  <h1>Technical Suggest Contact Page</h1>
  <p> Technical Suggest is the most popular Web devolouper for your services please contact</p>
</div>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact :)</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username:</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Email id:</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Mobile no:</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comments"></textarea>
      </div>

      <center><button type="submit" class="btn btn-primary">Submit</button></center>

    </form>    
  </div>
</section>


</body>
</html>