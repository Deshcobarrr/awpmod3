
<?php
    $title = 'Edit Record';
    require ('includes/header.php');
    require_once 'includes/auth_check.php';
    require 'db/conn.php';

    $results = $crud->getSpecialties();
    
    if(!isset($_GET['id']))
        {
            //echo 'error';
            include 'includes/errormessage.php';
            header("Location: viewrecords.php");
        }
        else {
            $id = $_GET['id'];
            $attendee = $crud->getAttendeeDetails($id);
        


    $attendee = $crud->getAttendeeDetails($id);
?>


<h1 class = "text-center"> Edit Record </h1>



<form method= "POST" action= "editpost.php">
        <input type = "hidden" name = "id" value= "<?php echo $attendee['attendee_id'] ?>" />

        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" value= "<?php echo $attendee['firstname']?>" id="firstname" name= "firstname">
        </div>

    <br>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" value= "<?php echo $attendee['lastname']?>" id="lastname" name="lastname"> 
        </div>
    <br>

        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" value= "<?php echo $attendee['dateofbirth']?>" id="dob" name="dob"> 
        </div>
    <br>

        <div class="form-inline">
            <label class="specialty" for="specialty">Area of Expertise</label>
                <select class="form-control" value= "<?php echo $attendee['specialty_id']?>" id="specialty" name="specialty">

                <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value = "<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] == $attendee['specialty_id']) echo 'selected' ?>> 
                        <?php echo $r['name']?>
                    </option>

                <?php }?>

                   <!-- <option selected>N/A</option>
                    <option value= "1">Database Administrator</option>
                    <option>Network Administrator</option>
                    <option>Programmer</option>
                    <option>Other</option>-->
                    
                </select>
        </div>
    <br>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" value= "<?php echo $attendee['emailaddress']?>" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
    <br>

        <div class="form-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" value= "<?php echo $attendee['contactnumber']?>" id="phone" aria-describedby="phoneHelp" name="phone">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>
    <br>

    <div class="form-group">
            <label for="compName">Company Name</label>
            <input type="text" class="form-control" value= "<?php echo $attendee['compName']?>" id="compName" name="compName">
        </div>
    <br>
        
        <div class="form-group">
            <label for="compAddress">Company Address</label>
            <input type="text" class="form-control" value= "<?php echo $attendee['compAddress']?>" id="compAddress" name="compAddress">
        </div>
    <br>

        <div class="form-group">
            <label for="compAddress2">Address 2</label>
            <input type="text" class="form-control" value= "<?php echo $attendee['compAddress2']?>" id="compAddress2" name="compAddress2">
        </div>
    <br>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="compCity">City</label>
            <input type="text" class="form-control" value= "<?php echo $attendee['compCity']?>" id="compCity" name="compCity">
        </div>
    <br>
        <!-- <div class="form-group col-md-4">
            <label for="compParish">Parish</label>
            <select id="compParish" class="form-control" value= "<?php echo $attendee['compParish']?>" name="compParish">

                <option selected>Choose...</option>
                <option>Kingston</option>
                <option>St. Andrew</option>
                <option>St. Catherine</option>
                <option>Clarendon</option>
                <option>Manchester</option>
                <option>St. Elizabeth</option>
                <option>Westmoreland</option>
                <option>Hanover</option>
                <option>St. James</option>
                <option>Trelawny</option>
                <option>St. Ann</option>
                <option>St. Mary</option>
                <option>Portland</option>
                <option>St. Thomas</option>
            </select>
        </div> -->

    <br>
        <div class="form-group col-md-2">
            <label for="compZip">Zip</label>
            <input type="text" class="form-control" value= "<?php echo $attendee['compZip']?>" id="compZip" name="compZip">
            </div>
        </div>

    <br>
    <a href= "viewrecords.php" class="btn btn-info">Cancel</a>
    <button type="submit" name= "submit" class="btn btn-success">Save Changes</button>
    <br>
    <br>

</form>

<?php } ?>

<br>
<br>
<br>
<br>

<?php
    require ('includes/footer.php');
?>

</div>