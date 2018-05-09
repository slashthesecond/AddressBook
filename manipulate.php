<!DOCTYPE html>
<html>


  <?php include('connect.php'); ?>

  
  

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="add2.php" style="color:rgba(255,255,255,0.9);">Add Organisation</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="add.php" style="color:rgba(255,255,255,0.9);">Add Employee</a></li>

                </ul>
        </div>
        </div>
    </nav>
    <div class="contact-clean">
        <?php 
			if(isset($_GET['user'])){
				$query = ("select * from employee WHERE EmployeeID =".$_GET['user']);
			    $result_employee = mysqli_query($db, $query);
				$row = mysqli_fetch_assoc($result_employee);
				//print_r($row);exit;
		?>
        <form method="post">
            <h2 class="text-center">Edit Employee details</h2>
             <?php /*?><div class="form-group">  <select class="form-control" name="EmployeeID"; style="margin-bottom: 20px;">
                <?php while($row1 = mysqli_fetch_array($result_employee)):; ?>
                <option value=<?php echo $row1[0];?>><?php echo $row1[1]; ?></option>
                <?php endwhile; ?>
            </select></div><?php */?>
            <input type="hidden" value="<?php echo $row['EmployeeID']?>" name="emp_id">
            <?php /*?><div class="form-group"><input class="form-control" type="text" name="Addr" placeholder="Address Line 1" value="<?php echo $row['AddressLine1']?>" required></div><?php */?>
            <div class="form-group"><input class="form-control" type="text" name="AddressLine1" placeholder="Address line 1" required value="<?php echo $row['AddressLine1']?>"></div>
            <div class="form-group"><input class="form-control" type="text" name="AddressLine2" placeholder="Address line 2" required value="<?php echo $row['AddressLine2']?>"></div>
            <div class="form-group"><input class="form-control" type="text" name="Postcode" placeholder="Postcode" required value="<?php echo $row['Postcode']?>"></div>
            <div class="form-group"><input class="form-control" type="text" name="City" placeholder="City" required value="<?php echo $row['City']?>"></div>
            <div class="form-group"><input class="form-control" type="text" name="Phone" placeholder="Contact Number" required value="<?php echo $row['Phone']?>"></div>
            <div class="form-group"><button name="edit_employee" class="btn btn-primary" type="submit">Edit</button></div>
        </form>
		<?php
			}
			if(isset($_GET['org'])){
				$query = ("select * from organisation WHERE OrganisationID =".$_GET['org']);
			    $result_employee = mysqli_query($db, $query);
				$row = mysqli_fetch_assoc($result_employee);
		?>
          <form method="post">
             <h2 class="text-center">Edit Organisation</h2>
            <?php /*?><div class="form-group">  <select class="form-control" name="OrganisationID"; style="margin-bottom: 20px;">
                <?php while($row1 = mysqli_fetch_array($result_organisation)):; ?>
                <option value=<?php echo $row1[0];?>><?php echo $row1[1]; ?></option>
                <?php endwhile; ?>
            </select></div><?php */?>
            <input type="hidden" value="<?php echo $row['OrganisationID']?>" name="org_id">
             <div class="form-group"><input class="form-control" type="text" name="AddressLine1" placeholder="Address line 1" required value="<?php echo $row['AddressLine1']?>"></div>
            <div class="form-group"><input class="form-control" type="text" name="AddressLine2" placeholder="Address line 2" required value="<?php echo $row['AddressLine2']?>"></div>
            <div class="form-group"><input class="form-control" type="text" name="Postcode" placeholder="Postcode" required value="<?php echo $row['Postcode']?>"></div>
            <div class="form-group"><input class="form-control" type="text" name="City" placeholder="City" required value="<?php echo $row['City']?>"></div>
            <div class="form-group"><input class="form-control" type="text" name="Phone" placeholder="Contact Number" required value="<?php echo $row['Phone']?>"x></div>
           <div class="form-group"><button name="edit_organisation" class="btn btn-primary" type="submit">Edit</button></div>
        </form>
        <?php
			}
		?>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Table-with-search.js"></script>
</body>

</html>