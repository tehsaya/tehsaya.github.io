
<html lang="en">
  <head>
    <title>Eternal Sunshire</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <titleEternal Sunshire -- Home</title>
<link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="_/components/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/mystyle.css" rel="stylesheet">
    <link href="_/css/animate.css" rel="stylesheet">
<script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
    <script src="_/js/wow.js"></script>
    <script>
 new WOW().init();
</script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head >
  <body id="home">

   <section class="container">
   
    <div class="content row">
       <?php include '_/components/php/header.php' ; ?>
       <?php include '_/components/php/snippet-carousel.php' ; ?>

      <section class="main col col-lg-8">
       <?php include '_/components/php/article-intro.php' ; ?>
       <?php include '_/components/php/article-exercise.php' ; ?>

        <section class="wow bounce" data-wow-duration="2s"  data-wow-iteration="5">Hello! Xin chào các bạn !!!</section>
      </section> 
      <section class="sidebar col col-lg-4">
         <?php include '_/components/php/aside-register.php' ; ?>
         <?php include '_/components/php/aside-accordion.php' ; ?>

      </section>

    </div>
     <?php include '_/components/php/footer.php' ; ?>
    </section> <!-- container -->
    
  </body>
</html>