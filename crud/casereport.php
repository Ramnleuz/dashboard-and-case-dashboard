<?php
include "db_conn.php";
$id = $_GET['id'];


if (isset($_POST["submit"])) {
   $full_name = $_POST['full_name'];
   $stud_no = $_POST['stud_no'];
   $depart = $_POST['depart'];
   $yr_lvl = $_POST['yr_lvl'];
   $section = $_POST['section'];
   $offense = $_POST['offense'];
   $offense_no = $_POST['offense_no'];
   $sunction = $_POST['sunction'];
   

   $sql = "UPDATE `crud` SET `full_name`='$full_name',
   `stud_no`='$stud_no',`depart`='$depart',`yr_lvl`='$yr_lvl',`section`='$section',`offense`='$offense',`offense_no`='$offense_no',`sunction`='$sunction' WHERE id=$id";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: indexcase.php?msg=Data Updated successfully");
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

   <title>PHP CRUD Application</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      CASE REPORT
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Edit User Information</h3>
         <p class="text-muted">Click update after chaging any information</p>
      </div>

        <?php
           
            $sql = "SELECT * FROM `crud` WHERE id = $id LIMIT 1";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
        ?>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Full Name:</label>
                  <input type="text" class="form-control" name="full_name" value="<?php echo $row['full_name'] ?>">
               </div>

            <div class="col">
                  <label class="form-label">Student Number:</label>
                  <input type="text" class="form-control" name="stud_no" value="<?php echo $row['stud_no'] ?>">
               </div>
            </div>

            

        <div class="row mb-3">
            <div class="col">
            <label  class="form-label" value="<?php echo $row['depart'] ?>">Department:</label>
            <select class="form-select" name="depart">
            <option value="" hidden>Select an option</option>
            <option value="BSCS">BSCS</option>
            <option value="BSTM">BSTM</option>
            <option value="BS-CRIM">BS-CRIM</option>
            </select>
            </div>
            <div class="col">
            <label class="form-label" value="<?php echo $row['yr_lvl'] ?>">Year Level:</label>
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
                  <input type="text" class="form-control" name="section" placeholder="Input Stud No." value="<?php echo $row['section'] ?>">
               </div>
            
            <div class="row mb-3">
    <div class="col">
        <label class="form-label">Offenses:</label>
        <select class="form-select" name="offense">
            <option value="" hidden>Select an option</option>
            <option value="MINOR - Non wearing of the proper uniform.">MINOR - Non wearing of the proper uniform</option>
            <option value="MINOR - Inappropriate attire inside the campus.">MINOR - Inappropriate attire inside the campus</option>
            <option value="MINOR - Sporting of colored or high-lighted hair.">MINOR - Sporting of colored or high-lighted hair.</option>
            <option value="MINOR - Non_wearing of official school ID and landyard.">MINOR - Non_wearing of official school ID and landyard.</option>
            <option value="MINOR - Non-adherence to classroom rules of decipline.">MINOR - Non-adherence to classroom rules of decipline.</option>
            <option value="MINOR - Comments, acts or gestures to offend/insult members of the school/ academic community.">MINOR - Comments, acts or gestures to offend/insult members of the school/ academic community.</option>
            <option value="MINOR - Intrusion into the privacy of areas designated for the exclusive use of the other gender.">MINOR - Intrusion into the privacy of areas designated for the exclusive use of the other gender.</option>
            <option value="MINOR - Bringing food or eating inside of classroom/laboratory.">MINOR - Bringing food or eating inside of classroom/laboratory.</option>
            <option value="MINOR - Throwing/leaving trash in all other areas except in trash cans.">MINOR - Throwing/leaving trash in all other areas except in trash cans.</option>
            <option value="MINOR - Unauthorized posting of announcement and similar materials without the approval of OSASS.">MINOR - Unauthorized posting of announcement and similar materials without the approval of OSASS.</option>
            <option value="MINOR - Posting of announcement and similar materials on non-designated areas.">MINOR - Posting of announcement and similar materials on non-designated areas.</option>
            <option value="MINOR - Using school facilities without prior permits from authorities concerned.">MINOR - Using school facilities without prior permits from authorities concerned.</option>
            <option value="MINOR - Unauthorized charging of electronics gadgets.">MINOR - Unauthorized charging of electronics gadgets.</option>
            <option value="MINOR - Inviting guest from outside without securing a permit fromt the Dean of OSASS.">MINOR - Inviting guest from outside without securing a permit fromt the Dean of OSASS.</option>
            <option value="MAJOR - Cheating in any form.">MAJOR - Cheating in any form.</option>
            <option value="MAJOR - Smoking and possession of cigarettes within 50 meters if the College Premises with wearing uniform and ID.">"MAJOR - Smoking and possession of cigarettes within 50 meters if the College Premises with wearing uniform and ID.</option>
            <option value="MAJOR - All forms of Gambling.">MAJOR - All forms of Gambling.</option>
            <option value="MAJOR - Possesion and drinking of liquor/ alcoholic beverges.">MAJOR - Possesion and drinking of liquor/ alcoholic beverges.</option>
            <option value="MAJOR - Entering the Collages premisses under the influence of alcohol and other intoxicants.">MAJOR - Entering the Collages premisses under the influence of alcohol and other intoxicants.</option>
            <option value="MAJOR - Bringing in, carrying possession, or use peohibited or regulated drugs or chemicals without proper prescription.">MAJOR - Bringing in, carrying possession, or use peohibited or regulated drugs or chemicals without proper prescription.</option>
            <option value="MAJOR - Extortion and/or mulcting money from fellow students or any member of the community.">MAJOR - Extortion and/or mulcting money from fellow students or any member of the community.</option>
            <option value="MAJOR - Unauthorized possession of the fire-arms and/or deadly weapons.">MAJOR - Unauthorized possession of the fire-arms and/or deadly weapons.</option>
            <option value="MAJOR - Gross disrespect or discourtesy.">MAJOR - Gross disrespect or discourtesy.</option>
            <option value="MAJOR - Immoral, indecent, malicoius and scandalous.">MAJOR - Immoral, indecent, malicoius and scandalous.</option>
            <option value="MAJOR - Public display of affection including but not limited to petting and necking, torrid kissing etc.">MAJOR - Public display of affection including but not limited to petting and necking, torrid kissing etc.</option>
            <option value="MAJOR - Possession/distribution in any form of pornographic materials.">MAJOR - Possession/distribution in any form of pornographic materials.</option>
            <option value="MAJOR - Forging of school records ot the other forms of related misrepresentation.">MAJOR - Forging of school records ot the other forms of related misrepresentation.</option>
            <option value="MAJOR - Lending of ID/registration form or using another's ID/registration form.">MAJOR - Lending of ID/registration form or using another's ID/registration form.</option>
            <option value="MAJOR - Using two or more Official ID's.">MAJOR - Using two or more Official ID's.</option>
            <option value="MAJOR - Leding of Official ID/registration form to an outsider.">MAJOR - Leding of Official ID/registration form to an outsider.</option>
            <option value="MAJOR - Tampering, multilating of Official ID.">MAJOR - Tampering, multilating of Official ID.</option>
            <option value="MAJOR - Thief and robbery in any form.">MAJOR - Thief and robbery in any form.</option>
            <option value="MAJOR - A student convicted by the court of any crime involving.">MAJOR - A student convicted by the court of any crime involving.</option>
            <option value="MAJOR - Any form of hazing, physical initiation, or any activity.">MAJOR - Any form of hazing, physical initiation, or any activity.</option>
            <option value="MAJOR - Coercing another student to join any group or organization.">MAJOR - Coercing another student to join any group or organization.</option>
            <option value="MAJOR - Bullying in any form and modality.">MAJOR - Bullying in any form and modality.</option>
            <option value="MAJOR - Acts that prevent, coerce, force, or intimidate other from entering the campus of attending classes or the other school functions.">MAJOR - Acts that prevent, coerce, force, or intimidate other from entering the campus of attending classes or the other school functions.</option>
            <option value="MAJOR - Unauthorized presence of the students by 9:00pm inside the campus.">MAJOR - Unauthorized presence of the students by 9:00pm inside the campus.</option>
            <option value="MAJOR - Vandalism or causing deliberate damage to property belonging to the College/community.">MAJOR - Vandalism or causing deliberate damage to property belonging to the College/community.</option>
            <option value="MAJOR - Engaging in brawls, fisfights, or any troublecausing acts in school related activities.">MAJOR - Engaging in brawls, fisfights, or any troublecausing acts in school related activities.</option>
            <option value="MAJOR - Holding of meetings, rallies and assemblies inside the the campus and with misrepresentation without securing a permit from OSASS.">MAJOR - Holding of meetings, rallies and assemblies inside the the campus and with misrepresentation without securing a permit from OSASS.</option>
         
            


        </select>
    </div>

    <div class="row mb-3">
    <div class="col">
        <label class="form-label">Number of offense:</label>
        <select class="form-select" name="offense_no">
            <option value="" hidden>Select an option</option>
            <option value="1st offense">1st offense</option>
            <option value="2nd offense">2nd offense</option>
            <option value="3rd offense">3rd offense</option>
        </select>
    </div>

            <div class="col">
                  <label class="form-label">Sunction:</label>
                  <input type="text" class="form-control" name="sunction" value="<?php echo $row['sunction'] ?>">
               </div>
            </div>

    </div>
</div>


            <div>
               <button type="submit" class="btn btn-success" name="submit">Update</button>
               <a href="indexcase.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>

  </body>
</html>