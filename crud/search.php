<?php
include "db_conn.php";

if(isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM crud WHERE full_name LIKE '%$search%' OR stud_no LIKE '%$search%' OR depart LIKE '%$search%' OR yr_lvl LIKE '%$search%' OR section LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM crud";
}
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>

<style>
    .narrow-search-box {
        max-width: 200px; /* Adjust the width as needed */
    }
</style>



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
DashBoard
</nav>

  <div class="row">
    <div class="container">
      <?php
      if (isset($_GET["msg"])) {
        $msg = $_GET["msg"];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        ' . $msg . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
      ?>

      <form action="" method="GET" class="mb-3">
        <div class="input-group">

        <input type="text" class="form-control narrow-search-box" placeholder="Search Name/Stud ID" name="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : '' ?>">
          <button class="btn btn-primary" type="submit">Search</button>
          <a href="add_new.php" class="btn btn-dark">Add</a>
        </div>
      </form>

      <table class="table table-hover text-center">
        <thead class="table-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Full Name</th>
            <th scope="col">Student No.</th>
            <th scope="col">Department</th>
            <th scope="col">Year Level</th>
            <th scope="col">Section</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <td><?php echo $row["id"] ?></td>
              <td><?php echo $row["full_name"] ?></td>
              <td><?php echo $row["stud_no"] ?></td>
              <td><?php echo $row["depart"] ?></td>
              <td><?php echo $row["yr_lvl"] ?></td>
              <td><?php echo $row["section"] ?></td>
              

              <td>
                <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash me-3"></i></a>
                <a href="casereport.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-list fs-5"></i></a>

              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
