<!DOCTYPE html>
<html>

  <?php include('connect.php'); ?>

  <?php $query = ("select * from employee");
  $result_employee = mysqli_query($db, $query);
  ?>

  <?php $query = ("select * from organisation");
  $result_organisation = mysqli_query($db, $query);
  ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md" style="background-color:#367ed2;">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="color:rgba(255,255,255,0.9);">Address Book</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                   <li class="nav-item" role="presentation"><a class="nav-link" href="organisation.php" style="color:rgba(255,255,255,0.9);">Organisation</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="employee.php" style="color:rgba(255,255,255,0.9);">Employee</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="workswhere.php" style="color:rgba(255,255,255,0.9);">Who works where?</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="add2.php" style="color:rgba(255,255,255,0.9);">Add Organisation</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="add.php" style="color:rgba(255,255,255,0.9);">Add Employee</a></li>
                    
                </ul>
        </div>
        </div>
    </nav>
    <div class="contact-clean">
        <form method="post">
            <h2 class="text-center">Add Employee to an Organisation </h2>

                <select class="form-control" name="OrganisationID"; style="margin-bottom: 20px;">

                <?php while($row1 = mysqli_fetch_array($result_organisation)):; ?>
                <option value=<?php echo $row1[0];?>><?php echo $row1[1]; ?></option>
                <?php endwhile; ?>

                </select>

            <div class="form-group"><input class="form-control" type="text" name="Forename" placeholder="Forename" required></div>
            <div class="form-group"><input class="form-control" type="text" name="Surname" placeholder="Surname" required></div>
            <div class="form-group"><input class="form-control" type="text" name="AddressLine1" placeholder="Address Line 1" required></div>
            <div class="form-group"><input class="form-control" type="text" name="AddressLine2" placeholder="Address Line 2" required></div>
            <div class="form-group"><input class="form-control" type="text" name="Postcode" placeholder="Postcode" required></div>
            <div class="form-group"><input class="form-control" type="text" name="City" placeholder="City" required></div>
            <div class="form-group"><input class="form-control" type="text" name="Phone" placeholder="Phone" required></div>
            <div class="form-group"><button class="btn btn-primary" name="add_employee" type="submit">Add</button></div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Table-with-search.js"></script>
</body>

</html>