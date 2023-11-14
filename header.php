<!DOCTYPE html>
<html style="margin: unset !important;" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css">
    <title>Entobel</title>
    <?php wp_head(); ?>
</head>
<body>

  <div id="header">
        <div class="fixed">
        <nav class="navbar navbar-expand-lg  relative">
        <div class="container-fluid  ">
            <nav class="navbar header_navbar-icon">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                </div>
            </nav>
              <div class="collapse header_collapses" id="navbarToggleExternalContent">
                <div class="p-4">
                    <ul class="navbar-nav">
                        <?php wp_menu('primary-menu'); ?>
                        </ul>
                </div>
            </div>
            <a class="" <?php printf('href="%1$s"',get_bloginfo('url')); ?>>
                <img src="<?php echo get_field('logo_header','option')['url'] ?>" alt="Logo" width="120" class="d-inline-block align-text-top">
            </a>
            <div class="collapse navbar-collapse header_collapse" id="navbarNav">
                <ul class="navbar-nav">
                <?php wp_menu('primary-menu'); ?>
                        </ul>
            </div>
        </div>
      </nav>
        </div>
       

      
    </div>
  

    <style>
    @media (max-width: 992px){
      .header_collapse{
        display: none !important;
      }
    }
    </style>
</body>
</html>