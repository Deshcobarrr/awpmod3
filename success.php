<?php
    $title = 'Success';
    require_once ('includes/header.php');
    require_once ('db/conn.php');
    require_once ('sendemail.php');

    if(isset($_POST['submit']))
        {
            //extract values from the $_POST array
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $dob = $_POST['dob'];
            $specialty = $_POST['specialty'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $compName = $_POST['compName'];
            $compAddress = $_POST['compAddress'];
            $compAddress2 = $_POST['compAddress2'];
            $compCity = $_POST['compCity'];
            $compParish = $_POST['compParish'];
            $compZip = $_POST['compZip'];
            //$avatar = $_POST['avatar'];


            // $orig_file = $_FILES["avatar"]["tmp_name"];
            // $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
            // $target_dir = 'uploads/';
            // $destination = $target_dir . $phone . $ext;
            // move_uploaded_file($orig_file,$destination);

            // exit();

            //call function to insert and track if success or not
           $isSsuccess = $crud->insertAttendees($fname, $lname, $dob, $specialty, $email, $phone, $compName, $compAddress, $compAddress2, $compCity, $compParish, $compZip,$destination);
           $specialtyName = $crud->getSpecialtiesById($specialty);

            if($isSsuccess)
                {
                    SendEmail::SendMail($email, 'Welcome to IT Conference 2023', 'You have successfully registered for this year\'s IT Conference');
                    //echo '<h1 class="text-center" style= "color:green">YOU HAVE BEEN REGISTERED!</h1>';
                    include 'includes/successmessage.php';
                }

            else
                {
                    include 'includes/errormessage.php';
                }

        }

?>

<!-- <h1 class="text-center" style= "color:green">YOU HAVE BEEN REGISTERED!</h1> -->

<!-- GET METHOD -->
   <!-- <div class="card" style="width: 25rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php //echo $_GET['firstname'] . ' ' . $_GET['lastname']; ?>
                </h5>

            <h6 class="card-subtitle mb-2 text-muted">
                <?php //echo $_GET['specialty'];?>
            </h6>


            <p class="card-text">
                Date of Birth: <?php //echo $_GET['dob'];?>
            </p>

            <p class="card-text">
                Contact Number: <?php //echo $_GET['phone'];?>
            </p>

            <p class="card-text">
                Email Address: <?php //echo $_GET['email'];?>
            </p>


            <p class="card-text">
                Company Name: <?php //echo $_GET['compName']?>
            </p>


            <p class="card-text">
                Company Address: <?php //echo $_GET['compAddress'] . ', ' . $_GET['compAddress2']?>
            </p>

            <p class="card-text">
                <?php //echo $_GET['compCity']. ', ' . $_GET['compParish'] . ', ' . $_GET['compZip']?>
            </p>


        </div>
    </div> -->


    <img src="<?php echo $destination; ?>" class="rounded-circle" style="width: 20%; height: 20% "/>


    <div class="card" style="width: 25rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname'] . ' ' . $_POST['lastname'] ?>
                </h5>


            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $specialtyName['name'];?>
            </h6>


            <p class="card-text">
                Date of Birth: <?php echo $_POST['dob'];?>
            </p>

            <p class="card-text">
                Contact Number: <?php echo $_POST['phone'];?>
            </p>

            <p class="card-text">
                Email Address: <?php echo $_POST['email'];?>
            </p>


            <p class="card-text">
                Company Name: <?php echo $_POST['compName']?>
            </p>


            <p class="card-text">
                Company Address: <?php echo $_POST['compAddress'] . ', ' . $_POST['compAddress2']?>
            </p>

            <p class="card-text">
                <?php echo $_POST['compCity']. ', ' . $_POST['compParish'] . ', ' . $_POST['compZip']?>
            </p>


        </div>
    </div>



    <br>
    <br>

<?php
    require ('includes/footer.php');
?>