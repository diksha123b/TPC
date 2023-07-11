<?php
include "connection.php";




// Get the form data
if(isset($_POST["submit_addjob"]))
{
    session_start();
    // $email = $_POST['email'];
    // $password = $_POST['pwd'];
    
    // $_SESSION['email'] = $email; 

    $al_company= $_POST['company_name'];
    $al_postion=$_POST['position'];
    $al_location=$_POST['location'];
    $al_ctc=$_POST['ctc'];
    $buffer_field=$_POST['field'];
    $al_field=implode(",",$buffer_field);
    $al_doj=$_POST['doj'];
    $al_dol=$_POST['dol'];
    

// Use the email variable in your code
    // echo "Welcome, $email!";

    $sql = "INSERT INTO alumni (al_name, email, password, contact, cpi, company, field, position, location, ctc, doj, dol)
    VALUES ('".$GLOBALS['al_name']."', '".$GLOBALS['al_email']."','". $GLOBALS['al_password']."','".$GLOBALS['al_contact']."','".$GLOBALS['al_cpi']."','".$GLOBALS['al_company']."','".$GLOBALS['al_field']."','".$GLOBALS['al_postion']."','".$GLOBALS['al_location']."','".$GLOBALS['al_ctc']."','".$GLOBALS['al_doj']."','".$GLOBALS['al_dol']."';)
    ON DUPLICATE KEY UPDATE
        company = IF(company IS NULL, VALUES('$al_company'), company),
        field = IF(field IS NULL, VALUES('$al_field'), field),
        position = IF(position IS NULL, VALUES('$al_position'), position),
        location = IF(location IS NULL, VALUES('$al_location'), location),
        ctc = IF(ctc IS NULL, VALUES(ctc), ctc),
        doj = IF(doj IS NULL, VALUES('$al_doj'), doj),
        dol = IF(dol IS NULL, VALUES('$al_dol'), dol)";
    
    $result = mysqli_query($con, $sql);

    if ($result) 
    {
        // Success message
        //header("Location: check\alumnihome.php");
        exit();
        
    } 
    else 
    {
        // Error message
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($con);
}
?>

?>