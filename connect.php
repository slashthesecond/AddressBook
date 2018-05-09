	<?php

session_start();

// connect to database

$db = mysqli_connect();
$errors = array();

$OrganisationID = "";
$Organisationname = "";
$EmployeeID = "";
$Forename = "";
$Surname = "";
$AddressLine1 = "";
$AddressLine2 = "";
$Postcode = "";
$City = "";
$Phone = "";



if (isset($_POST['edit_organisation'])) {
	
   
	$org_id = mysqli_real_escape_string($db, $_POST['org_id']);
	$AddressLine1 = mysqli_real_escape_string($db, $_POST['AddressLine1']);
	$AddressLine2 = mysqli_real_escape_string($db, $_POST['AddressLine2']);
	$Postcode = mysqli_real_escape_string($db, $_POST['Postcode']);
	$City = mysqli_real_escape_string($db, $_POST['City']);
	$Phone = mysqli_real_escape_string($db, $_POST['Phone']);
	
	
		$query = "UPDATE organisation SET
        AddressLine1 = '".$AddressLine1."', AddressLine2 = '".$AddressLine2."', Postcode = '".$Postcode."', City = '".$City."', Phone = '".$Phone."' WHERE OrganisationID = ".$org_id." ";

	    
    $return = mysqli_query($db, $query);  

	
				if($return){

					echo 'Altered!';
				}else{
					echo 'Something went wrong. Please try again'; 
				}		
		}

		if (isset($_POST['edit_employee'])) {
	
   
	$emp_id = mysqli_real_escape_string($db, $_POST['emp_id']);
	$AddressLine1 = mysqli_real_escape_string($db, $_POST['AddressLine1']);
	$AddressLine2 = mysqli_real_escape_string($db, $_POST['AddressLine2']);
	$Postcode = mysqli_real_escape_string($db, $_POST['Postcode']);
	$City = mysqli_real_escape_string($db, $_POST['City']);
	$Phone = mysqli_real_escape_string($db, $_POST['Phone']);
	
	
		$query = "UPDATE employee SET
        AddressLine1 = '".$AddressLine1."', AddressLine2 = '".$AddressLine2."', Postcode = '".$Postcode."', City = '".$City."', Phone = '".$Phone."' WHERE EmployeeID = ".$emp_id." ";

	    
    $return = mysqli_query($db, $query);  

	
				if($return){

					echo 'Altered!';
				}else{
					echo 'Something went wrong. Please try again'; 
				}		
		}

if (isset($_GET['remove_organisation'])) {
	
//echo 'here';exit;
	
	/*$OrganisationID = mysqli_real_escape_string($db, $_POST['OrganisationID']);
	if ($OrganisationID== ""){
		array_push($errors, "Organisation Name field is empty ");
	}*/

	
		$query = "DELETE FROM organisation
        WHERE OrganisationID = '".$_GET['remove_organisation']."'";

	    
    $return = mysqli_query($db, $query);  

	
				if($return){

					echo 'Deleted!';
				}else{
					echo 'Something went wrong. Please try again'; 
				}		
		}

if (isset($_GET['remove_employee'])) {
	

	
	/*$EmployeeID = mysqli_real_escape_string($db, $_POST['EmployeeID']);
	if ($EmployeeID== ""){
		array_push($errors, "Employee ID field is empty ");
	}*/

	
		$query = "DELETE FROM employee
        WHERE EmployeeID = '".$_GET['remove_employee']."'";

	    
    $return = mysqli_query($db, $query);  

	
				if($return){

					echo 'Deleted!';
				}else{
					echo 'Something went wrong. Please try again'; 
                }		
		}

if (isset($_POST['add_employee'])) {
	// receive all input values from the form

	$OrganisationID = mysqli_real_escape_string($db, $_POST['OrganisationID']);
	if ($OrganisationID == ""){
		array_push($errors, "Forename field is empty ");
	}
	
	$Forename = mysqli_real_escape_string($db, $_POST['Forename']);
	if ($Forename == ""){
		array_push($errors, "Forename field is empty ");
	}

	$Surname = mysqli_real_escape_string($db, $_POST['Surname']);
	if ($Surname == ""){
		array_push($errors, "Surname field is empty ");
	}
	$AddressLine1 = mysqli_real_escape_string($db, $_POST['AddressLine1']);
	if ($AddressLine1 == ""){
		array_push( $errors, "Address line one field is empty ");
	}
    $AddressLine2 = mysqli_real_escape_string($db, $_POST['AddressLine2']);
	if ($AddressLine2 == ""){
		array_push( $errors, "Address line two field is empty ");
	}
    $Postcode = mysqli_real_escape_string($db, $_POST['Postcode']);
	if ($Postcode == ""){
		array_push($errors, "Postcode field is empty ");
	}
      $City = mysqli_real_escape_string($db, $_POST['City']);
	if ($City == ""){
		array_push($errors, "City field is empty ");
	}
    
      $Phone = mysqli_real_escape_string($db, $_POST['Phone']);
	if ($Phone == ""){
		array_push($errors, "Phone field is empty ");
	}

		$query = "INSERT INTO employee (OrganisationID, Forename, Surname, AddressLine1, AddressLine2, Postcode, City, Phone)

		VALUES( '$OrganisationID', '$Forename', '$Surname', '$AddressLine1', '$AddressLine2', '$Postcode', '$City', '$Phone')";

	    
    $return = mysqli_query($db, $query);  

	
				if($return){

					echo 'Successful!';
				}else{
					echo 'Something went wrong. Please try again'; 
				}

			
		}

if (isset($_POST['add_organisation'])) {
	// receive all input values from the form
	
	$Organisationname = mysqli_real_escape_string($db, $_POST['Organisationname']);
	if ($Organisationname == ""){
		array_push($errors, "Forename field is empty ");
	}

	$AddressLine1 = mysqli_real_escape_string($db, $_POST['AddressLine1']);
	if ($AddressLine1 == ""){
		array_push( $errors, "Address line one field is empty ");
	}
    $AddressLine2 = mysqli_real_escape_string($db, $_POST['AddressLine2']);
	if ($AddressLine2 == ""){
		array_push( $errors, "Address line two field is empty ");
	}
    $Postcode = mysqli_real_escape_string($db, $_POST['Postcode']);
	if ($Postcode == ""){
		array_push($errors, "Postcode field is empty ");
	}
      $City = mysqli_real_escape_string($db, $_POST['City']);
	if ($City == ""){
		array_push($errors, "City field is empty ");
	}
    
      $Phone = mysqli_real_escape_string($db, $_POST['Phone']);
	if ($Phone == ""){
		array_push($errors, "Phone field is empty ");
	}

		$query = "INSERT INTO organisation (Organisationname, AddressLine1, AddressLine2, Postcode, City, Phone)

		VALUES( '$Organisationname', '$AddressLine1', '$AddressLine2', '$Postcode', '$City', '$Phone')";

	    
    $return = mysqli_query($db, $query);  

	
				if($return){

					echo 'Successful!';
				}else{
					echo 'Something went wrong. Please try again'; 
				}

			
		
	
	
	}
?>
