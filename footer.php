
<div id ="footer" class="p-3 mb-2 bg-primary text-white fixed-bottom container-fluid ">


<p class="text-center"> Copyright &copy; - IT Conference Attendance System
    <?php 
       echo date("Y"); 
       ?></p>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>
        $( function() 
        {
            $( "#dob" ).datepicker(
            {
                changeMonth: true,
                changeYear: true,
                yearRange: "-50:+0"
            });
        });
        </script>


</body>
</html>