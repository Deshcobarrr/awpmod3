<?php

require_once 'includes/auth_check.php';
require 'db/conn.php';

//Get values from POST operation
if(!$_GET['id'])
    {
        //echo 'error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }
    else {
        $id = $_GET['id'];

        //Call Delete function
        $result = $crud->deleteAttendee($id);

        //Redirect to list
        if($result)
                {
                    header("Location: viewrecords.php");
                }
            else
                {
                    include 'includes/errormessage.php';
                }

        }

    ?>