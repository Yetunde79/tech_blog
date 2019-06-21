<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <?php add_theme_support( 'title-tag' ); ?>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body>


<main class="summary">

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-3">

        <header>
            <section id="navbar">
           
                <nav id="sidebar">
                    <ul class="list-unstyled components">

                        <li class="active">
                            <a href="/index.php">Home</a>
                        </li>

                        <li>
                            <a href="/about.php">About</a>
                        </li>   

                        <li>
                            <a href="/blog">Blog</a>
                        </li>

                        <li>
                            <a href="/contact.php">Contact</a>
                        </li>

                        <li>
                            <a href="/resume.pdf" target="_blank">Resume</a>
                        </li>

                    </ul>

                </nav>
            </section>

        </header>
</div>          
         

<div class="col-xs-12 col-sm-9 ">
  <div class="blog-header">
    <a href="<?php echo get_bloginfo("wpurl"); ?>"><h1 class="blog-title"><?php echo get_bloginfo("name"); ?></h1></a>
    <p class="lead blog-description"><?php echo get_bloginfo("description"); ?></p>
  </div>

