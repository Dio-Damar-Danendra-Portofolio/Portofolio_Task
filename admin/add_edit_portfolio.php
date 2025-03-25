<?php 
    require_once "../connection.php";
    if (isset($_POST['save_button'])) {
        $portfolio_name = $_POST['portfolio_name'];
        $portfolio_link = $_POST['portfolio_link'];
        $portfolio_image = $_FILES['portfolio_image'];
    
        if ($portfolio_image['error'] == 0) {
              $file_name = basename($portfolio_image['name']);
              $file_location = "../uploads/".$file_name;
              move_uploaded_file($portfolio_image['tmp_name'], $file_location);
    
              $insert = mysqli_query($conn, "INSERT INTO portfolio (portfolio_name, portfolio_link, portfolio_image) VALUES ('$portfolio_name', '$portfolio_link', '$file_name');");
    
              if ($insert) {
                header("Location: ../admin/portfolio_list.php");
              }
        }
      }
    
      if (isset($_GET['idEdit']) && $_GET['idEdit']) {
          $id = $_GET['idEdit'];
          $queryEdit = mysqli_query($conn, "SELECT * FROM portfolio WHERE id = $id");
          $rowEdit = mysqli_fetch_assoc($queryEdit);
    
          if (isset($_POST['edit_button'])) {
            if (isset($_GET['idEdit'])) {
              $id = $_GET['idEdit'];
              $portfolio_name = $_POST['portfolio_name'];
              $portfolio_link = $_POST['portfolio_link'];
              $portfolio_image = $_FILES['portfolio_image'];
              // var_dump($foto);
        
              if ($portfolio_image['error'] == 0) {
                $file_name = uniqid() . "_" .basename($portfolio_image['name']);
                $file_location = "../uploads/".$file_name;
                // move_uploaded_file($logo['tmp_name'], $filePath);
                if (move_uploaded_file($portfolio_image['tmp_name'], $file_location)){
                  $qCheck = mysqli_query($conn, "SELECT portfolio_image FROM portfolio WHERE id = $id;");
                  $rowFile = mysqli_fetch_assoc($qCheck);
                  if ($rowFile && file_exists("../assets/uploads/" . $rowFile['portfolio_image'])) {
                      unlink("../uploads/" . $rowFile['portfolio_image']);
                  }
                  $fillQUpdatePortfolio = "portfolio_image='$file_name'";
                } else {
                    echo "Upload failed... Try again...";
                }
              }
              $queryUpdatePortfolio = mysqli_query($conn, "UPDATE portfolio SET portfolio_name='$portfolio_name', portfolio_link='$portfolio_link', $fillQUpdatePortfolio WHERE id = $id;");
              header("Location: ../admin/portfolio_list.php");
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
    <title><?php echo isset($_GET['idEdit']) ? 'Edit' : 'Add' ?> Portfolio - Portofolio Manager</title>
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
              <h5 class="card-title"><?php echo isset($_GET['idEdit']) ? 'Edit' : 'Add' ?> Portfolio</h5>
              <form action="" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label class="form-label" for="portfolio_name">Name: </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="portfolio_name" id="portfolio_name" placeholder="Please enter your portfolio name!" required value="<?= isset($_GET['idEdit']) && $_GET['idEdit'] ? $rowEdit['portfolio_name'] : ''; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label class="form-label" for="portfolio_link">Link: </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="portfolio_link" id="portfolio_link" placeholder="Please enter your portfolio link!" required value="<?= isset($_GET['idEdit']) && $_GET['idEdit'] ? $rowEdit['portfolio_link'] : ''; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label class="form-label" for="portfolio_image" >Portfolio Image: </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="portfolio_image" id="portfolio_image" required value="<?= isset($_GET['idEdit']) && $_GET['idEdit'] ? $rowEdit['portfolio_image'] : ''; ?>">
                        <?php if (isset($_GET['idEdit']) && $_GET['idEdit']) { ?>
                      <img src="../uploads/<?php echo $rowEdit['portfolio_image'] ?>" alt="Image Not Available">
                    <?php }?> 
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