<!DOCTYPE html>

  <?php include('connect.php'); ?>

  <?php $query = ("select * from employee");
  $result_employee = mysqli_query($db, $query);
  ?>
   
    <?php $query = ("SELECT employee.EmployeeID, employee.Forename, employee.Surname, organisation.Organisationname, organisation.OrganisationID
    FROM employee
    INNER JOIN organisation
    ON employee.organisationID=organisation.OrganisationID;");
  $result_works = mysqli_query($db, $query);
  ?>

  
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Who works where?</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md" style="background-color:#367ed2; margin-bottom: 20px;">
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
    </nav><div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What you looking for?">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
             <thead>
                          
                <tr>
                    <h1> Workplaces and employees </h1>
                    
                    <td>Workplace</td>                    
                    <td>Employee Forename</td>
                    <td>Employee Surname</td>
                    <td>Employee ID </td>
                    <td>Organisation ID</td>

                </tr>
           </thead>
           <?php

           while ($row = mysqli_fetch_assoc($result_works))
           {
                echo '
  <tr>
  
                    <td>'.$row["Organisationname"].'</td>
                      <td>'.$row["Forename"].'</td>
                       <td>'.$row["Surname"].'</td>
                     <td>'.$row["EmployeeID"].'</td>
                      <td>'.$row["OrganisationID"].'</td>
 
                </tr>
                ';
           }
           ?>
</table>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Table-with-search.js"></script>
</body>

</html>