<?php

require 'db/conn.php';

//Get values from POST operation
if(isset($_POST['submit']))
        {
            //Extract values from the $_POST array
            $id = $_POST['id'];
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

            //Call CRUD Function
            $result= $crud-> editAttendee($id, $fname, $lname, $dob, $specialty, $email, $phone, $compName, $compAddress, $compAddress2, $compCity, $compParish, $compZip);

            //Redirect to list
            if($result)
                {
                    header("Location: viewrecords.php");
                }
                else{
                    include 'includes/errormessage.php';
                }

        }

        else{
            echo 'error';
        }




?>