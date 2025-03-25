<?php 
    require_once "../connection.php";

    $queryCategory = mysqli_query($conn, "SELECT * FROM categories");
    $rowCategory = mysqli_fetch_all($queryCategory, MYSQLI_ASSOC);

    if (isset($_POST['save_button'])) {
        $skill_type = $_POST['skill_type'];
        $category_id = $_POST['category_id'];
    
        $insert = mysqli_query($conn, "INSERT INTO skills (skill_type, category_id) VALUES ('$skill_type', '$category_id');");
    
        if ($insert) {
          header("Location: ../admin/skill_list.php");
        }
    }
    
      if (isset($_GET['idEdit'])) {
          $id = $_GET['idEdit'];
          $queryEdit = mysqli_query($conn, "SELECT * FROM skills WHERE id = $id");
          $rowEdit = mysqli_fetch_assoc($queryEdit);
    
          if (isset($_POST['edit_button'])) {
            if (isset($_GET['idEdit'])) {
              $id = $_GET['idEdit'];
              $skill_type = $_POST['skill_type'];
              $category_id = mysqli_insert_id($conn); $_POST['category_id'];
        
              $queryUpdateSkill = mysqli_query($conn, "UPDATE skills SET skill_type='$skill_type', category_id='$category_id' WHERE id = $id;");
              header("Location: ../admin/skill_list.php");
            }
          }
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
    <title><?php echo isset($_GET['idEdit']) ? 'Edit' : 'Add' ?> Skill - Portofolio Manager</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "inc/header.php"; ?>
    <main>
        <div class="container-fluid fixed-center">
        <div class="row d-flex flex-wrap justify-content-center align-self-sm-center vh-100">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo isset($_GET['idEdit']) ? 'Edit' : 'Add' ?> Skill</h5>
              <form action="" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label class="form-label" for="skill_type">Skill Type: </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="skill_type" id="skill_type" placeholder="Please enter your skill type!" required value="<?= isset($_GET['idEdit']) && $_GET['idEdit'] ? $rowEdit['skill_type'] : ''; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label class="form-label" for="category_id">Category: </label>
                    </div>
                    <div class="col-sm-10">
                        <select class="form-select" name="category_id" id="category_id" required>
                        <?php foreach ($rowCategory as $categories) { ?>
                          <option value="<?php echo $categories['id']?>"><?php echo $categories['category_name']?></option>
                        <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                <div class="col-md-2">
                  <?php if (isset($_GET['idEdit'])) { ?>
                    <button type="submit" class="btn btn-md btn-primary" name="edit_button">Edit</button>
                  <?php }  else { ?>
                    <button type="submit" class="btn btn-md btn-primary" name="save_button">Save</button>
                    <?php } ?>
                  </div>
                  <div class="col-md-4">
                    <button class="btn btn-md btn-info" type="reset" name="reset_button">Reset</button>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </main>
    <?php include "inc/footer.php"; ?>
</body>
</html>