<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $full_name = $_POST['full_name'];
   $stud_no = $_POST['stud_no'];
   $depart = $_POST['depart'];
   $yr_lvl = $_POST['yr_lvl'];
   $section = $_POST['section'];

   $sql = "INSERT INTO `crud`(`id`,`full_name`,`stud_no`,`depart`,`yr_lvl`,`section`) 
   VALUES (NULL,'$full_name','$stud_no','$depart','$yr_lvl','$section')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: search.php?msg=New record created successfully");
   }
   else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>Enroll Student</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      PHP Complete CRUD Application
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Enroll Student</h3>
         <p class="text-muted">Complete the form below to add a student</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Full Name:</label>
                  <input type="text" class="form-control" name="full_name" placeholder="Input Name">
               </div>

            <div class="col">
                  <label class="form-label">Student Number:</label>
                  <input type="text" class="form-control" name="stud_no" placeholder="Input Stud No.">
               </div>
            </div>

            <div class="row mb-3">
            <div class="col">
        <label class="form-label">Department:</label>
        <select class="form-select" name="depart">
            <option value="" hidden>Select an option</option>
            <option value="BSCS">BSCS</option>
            <option value="BSTM">BSTM</option>
            <option value="BS-CRIM">BS-CRIM</option>
        </select>
    </div>

    <div class="col">
        <label class="form-label">Year Level:</label>
        <select class="form-select" name="yr_lvl">
            <option value="" hidden>Select an option</option>
            <option value="1ST">1ST</option>
            <option value="2ND">2ND</option>
            <option value="3RD">3RD</option>
            <option value="4TH">4TH</option>
        </select>
    </div>

    <div class="col">
                  <label class="form-label">Section:</label>
                  <input type="text" class="form-control" name="section" placeholder="Input Stud No.">
               </div>

</div>


            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>

  </body>
</html>