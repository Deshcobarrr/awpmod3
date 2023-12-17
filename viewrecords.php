
<?php
    $title = 'View Records';
    require ('includes/header.php');
    require_once 'includes/auth_check.php';
    require 'db/conn.php';
  

        //Get all Attendees
    $results = $crud->getAttendees();
?>


    <table class = "table">
        <tr>
            <th>#</th>
            <th>Attendee Name</th>
            <th>Date of Birth</th>
            <th>Specialty</th>
            <th>Email Address</th>
            <th>Contact Number</th>
            <th>Company Name</th>
            <th>Company Address</th>
            <th>Actions</th>
        </tr>

        <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $r['attendee_id'] ?></td>
                <td><?php echo $r['firstname'] . ' ' . $r['lastname'] ?></td>
                <td><?php echo $r['dateofbirth'] ?></td>
                <td><?php echo $r['name'] ?></td> <!-- Specialty Name -->
                <td><?php echo $r['emailaddress'] ?></td>
                <td><?php echo $r['contactnumber'] ?></td>
                <td><?php echo $r['compName'] ?></td>
                <td><?php echo $r['compAddress'] . ', ' . $r['compAddress2'] . ', ' . $r['compCity'] . ', ' . $r['compParish']?> </td>
                <td>
                    <a href= "view.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-primary">View</a>
                    <a href= "edit.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick ="return confirm ('Do you want to delete this record?');" href= "delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>

    </table>


    <br>
    <br>
    <br>
    <br>


<?php
    require ('includes/footer.php');
?>

</div>