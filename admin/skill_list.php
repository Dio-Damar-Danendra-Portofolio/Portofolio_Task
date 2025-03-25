<?php 
   require_once "../connection.php";
   $querySkill = mysqli_query($conn, "SELECT skills.*, categories.category_name FROM skills LEFT JOIN categories ON skills.category_id = categories.id;");
   $rowSkill = mysqli_fetch_all($querySkill, MYSQLI_ASSOC);

   if (isset($_POST['delete_button'])) {
    $id = $_GET['idDelete'];
    $queryDeleteSkill = mysqli_query($conn, "DELETE FROM skills WHERE id = $id");
    header("Location: ../admin/skill_list.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>My Skills - Portfolio Manager</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "inc/header.php"; ?>
    <main>
        <div class="container-fluid fixed-center">
        <di class="row d-flex flex-wrap justify-content-center align-self-sm-center vh-100">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h5>My Skills</h5>
                    <div class="table table-responsive">
                        <a href="add_edit_skill.php" class="btn btn-primary mb-2">Add Skill</a>
                        <table class="table table-striped table-bordered text-center" id="myTable">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Skill Type</th>
                                <th>Skill Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                                foreach ($rowSkill as $skill) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $skill['skill_type']; ?></td>
                                <td><?php echo $skill['category_name']; ?></td>
                                <td>
                                    <a href="add_edit_skill.php?idEdit=<?php echo $skill['id']?>" class="btn btn-success btn-sm">Edit Skill</a>
                                    <a href="add_edit_skill.php?idDelete=<?php echo $skill['id']?>" name="delete_button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete this data?');">Delete Skill</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </main>
    <?php include "inc/footer.php"; ?>
</body>
</html>
