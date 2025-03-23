<?php 
            $page = isset($_GET['page']) ? $_GET['page'] : 'index';
            $file = "content/{$page}.php";

                if (file_exists($file)) {
                    $content = file_get_contents($file); 
                    
                } else { 
                $content = "<div class=\"row d-flex flex-wrap justify-content-center align-self-sm-center vh-100 bg-danger\">
                    <div class=\"col-xl-12 align-self-xl-center bg-danger\">
                        <h1 class=\"text-white text-center align-items-baseline\">Page not available...</h1>
                    </div>
                </div>";
             } ?>
<?php 
   require "../connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Portofolio Manager</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row p-2 bg-warning d-flex flex-wrap justify-content-center align-self-center">
                <div class="col-md-2 p-2">
                    <a href="/" class="text-decoration-none">
                        <img src="" alt="logo" loading="eager">
                    </a>
                </div>
                    <div class="col-md-2 p-2">
                        <a href="index.php" class="btn btn-primary btn-md">Home</a>
                    </div>
                    <div class="col-md-2 p-2">
                        <a href="?page=project_list" class="btn btn-primary btn-md">Projects</a>
                    </div>
                    <div class="col-md-2 p-2">
                        <a href="?page=skill_list" class="btn btn-primary btn-md">Skills</a>
                    </div>
                    <div class="col-md-2 p-2">
                        <a href="?page=portfolio_list" class="btn btn-primary btn-md">Portfolio</a>
                    </div>
                    <div class="col-md-2 p-2">
                        <a href="../index.php" class="btn btn-primary btn-md">Viewer</a>
                    </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid fixed-center">
            <?php echo $content; ?>
        </div>
    </main>
    <footer>
        <div class="container-fluid">
            <div class="row p-2 bg-warning d-flex flex-wrap justify-content-center align-self-center">
                <div class="col-lg-8 text-center bg-warning w-100 align-items-center">
                    <h4>&copy; <?php echo date('Y'); ?> Dio Damar Danendra</h4>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>