<?php 
     $title = 'view record'; 
     require_once 'includes/header.php';
     require_once 'includes/auth_check.php';
     require_once 'db/conn.php';
     
     // Get attendee by id
     if(!isset($_GET['id'])){
       
     } else{
      $id = $_GET['id'];
      $result = $crud->getAttendeeDetails($id);
        // echo"<h1 class='text-danger'>Pease chech details and try again</h1>";
     
?>

<!-- <div class="card" style="width: 18rem;">
       <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
         <h5 class="card-title">
         <?php //echo  $result['firstname'] .'' .  $result['lastname']; ?>
         </h5>
         <h6 class="card-subtitle mb-2 text-muted">
             <?php // echo  $result['name']; ?>
         </h6>
         <p class="card-text">
           Date of Birth: <?php // echo  $result['dateofbirth']; ?>
         </p>
         <p class="card-text">
           Email Address: <?php // echo  $result['emailaddress']; ?>
         </p>
         <p class="card-text">
           Contact Number: <?php // echo  $result['contactnumber']; ?>

     </div>
  </div> -->


  <img src="<?php echo empty ($result['avatar_path']) ? "uploads/blank.png" : $result['avatar_path'] ; ?>" class="rounded-circle" style="width: 25%; height: 25%"/>

  <div class="card" style="width: 18rem;">
       <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
         <h5 class="card-title">
         <?php echo $result['firstname'] . '' . $result['lastname']; ?>
         </h5>
         <h6 class="card-subtitle mb-2 text-muted">
             <?php  echo $result['name']; ?>
         </h6>
         <p class="card-text">
           Date of Birth: <?php  echo $result['dateofbirth']; ?>
         </p>
         <p class="card-text">
           Email Address: <?php  echo $result['emailaddress']; ?>
         </p>
         <p class="card-text">
           Contact Number: <?php  echo $result['contactnumber']; ?>

     </div>
 </div>  
<br/>
<br/>
            <a href="viewrecords.php" class="btn btn-info">Back to List</a>
            <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
            <a onclick="return confirm('Are you sure you want to delete');" href="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>

     <?php } ?> 
    
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>