

 <div id="footer" class="p-3 bg-primary text-white fixed-bottom">
        <?php
        echo "<p class='text-center'>Copyright &copy; 2020-" . date("Y") . " Glassford Beckford Conference Attendance System</p>";
        ?>
    </div> 




<!-- <div id="footer">
     <?php //echo 'copyright ' . date('y');?> 
</div>  -->
</div>     
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#dob" ).datepicker( {
      changeMonth: true,
      changeYear: true,
      yearRange: "-120:+0",
      dateFormat:"yy-mm-dd"
  } );
} );

  </script>
  </body>
</html>