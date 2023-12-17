
<?php
    $title = 'HOME';
    require ('includes/header.php');
    require 'db/conn.php';
    

    $results = $crud->getSpecialties();
    //$results2 = $crud->getParish();
?>


<h1 class = "text-center"> Conference Registration </h1>



<form method= "POST" action= "success.php">
    
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name= "firstname">
        </div>

    <br>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname"> 
        </div>
    <br>

        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob"> 
        </div>
    <br>

        <div class="form-inline">
            <label class="specialty" for="specialty">Area of Expertise</label>
                <select class="form-control" id="specialty" name="specialty">
                <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value = "<?php echo $r['specialty_id']?>"> <?php echo $r['name']?></option>

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
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
    <br>

        <div class="form-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>
    <br>

    <div class="form-group">
            <label for="compName">Company Name</label>
            <input type="text" class="form-control" id="compName" name="compName">
        </div>
    <br>
        
        <div class="form-group">
            <label for="compAddress">Company Address</label>
            <input type="text" class="form-control" id="compAddress" placeholder="1234 Main St" name="compAddress">
        </div>
    <br>

        <div class="form-group">
            <label for="compAddress2">Address 2</label>
            <input type="text" class="form-control" id="compAddress2" placeholder="Apartment, studio, or floor" name="compAddress2">
        </div>
    <br>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="compCity">City</label>
            <input type="text" class="form-control" id="compCity" name="compCity">
        </div>
    <br>
        <div class="form-group col-md-4">
            <label for="compParish">Parish</label>
            <select id="compParish" class="form-control" name="compParish">

            
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
        </div>

    <br>
        <div class="form-group col-md-2">
            <label for="compZip">Zip</label>
            <input type="text" class="form-control" id="compZip" name="compZip">
            </div>
        </div>

    <br>

    <div class="custom-file">
            <div class="form-group col-md-6">
            <label for="avatar">Upload Image - JPG, PNG, etc. (Optional)</label>
            <input type="file" accept="image/*" class="form-control" id="avatar" name="avatar">
            <!-- <label class="custom-file-label" for="avatar">Choose File</label> -->
            <small id="phoneHelp" class="form-text text-danger">(File Upload is Optional)</small>
        </div>
        
    <br>

    <button type="submit" name= "submit" class="btn btn-primary">Submit</button>
    <br>
    
    <br>

</form>

<br><br><br>

<?php
    require ('includes/footer.php');
?>

</div>