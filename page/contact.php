<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- Utilisation all phones -->

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"><!-- Font default -->
    <link rel="stylesheet" href="../css/bootstrap.min.css"><!-- Link css bootstrap -->
    <link rel="stylesheet" href="../css/contact.css"><!-- Link css pure -->

    <title>Contact</title>

</head>

<body>

  <!--##### NAVBAR ############################################################-->
  <!--#########################################################################-->
  <!--#########################################################################-->
  <nav class="navbar navbar-fixed-top">
    <div class="container-fluid">

      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand ColorWhite" href="#"><img class="logo" src="../images/oneday.png" alt="Logo One Day In Boulogne s/Mer"></a>
        <a class="navbar-brand ColorWhite" href="../_index.php">ONE DAY IN BOULOGNE S/MER</a>

      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right lienContact">
          <li ><a class="ColorWhite" href="../_index.php#iti" >ITINERAIRE</a></li>
          <li ><a class="ColorWhite" href="page/contact.php" >CONTACT</a></li>
        </ul>

      </div><!-- /.navbar-collapse -->

    </div>
  </nav>

      <div class="container-fluid"><!-- START CONTAINER-FLUID -->

        <div class="row">
          <div class="col-xs-12 text-center">
              <br class="espaceAncre" >
              <h1 class="titre">CONTACT</h1>
              <hr class="star-light center-block"></hr>
              <br>
          </div>

          <div class="col-xs-12 text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10102.805734455496!2d1.609209!3d50.725478!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc2c44275e85ab%3A0xdf0e375f6f269142!2s10+Rue+des+Carreaux%2C+62200+Boulogne-sur-Mer%2C+France!5e0!3m2!1sen!2sfr!4v1482399854375" width="800" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>                </div>
          </div>

          <div class="col-xs-12">
            <br>
            <hr class="star-light center-block"></hr>
            <br>
          </div>

          <div class="col-lg-8 col-lg-offset-2 text-center">
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label class="labelContact">Nom</label>
                  <input type="text" class="form-control" placeholder="Nom">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label class="labelContact">Email</label>
                  <input type="email" class="form-control" placeholder="Email">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label class="labelContact">Numéro de téléphone</label>
                  <input type="tel" class="form-control" placeholder="Numéro de téléphone">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label class="labelContact">Message</label>
                  <textarea rows="5" class="form-control" placeholder="Message"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <br>

              <div id="success"></div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div><!-- END CONTAINER-FLUID -->


<!--##### FOOTER ############################################################-->
<!--#########################################################################-->
<!--#########################################################################-->
<footer class="col-xs-12 ">

<div class="col-xs-12" id="textFooter">

    <p class="text-center debutFooter"> SUIVEZ-NOUS </p>
    <br>
    <ul class="social text-center" >
        <li>
            <a href="#"> <i class=" fa fa-facebook" >   </i> </a>
        </li>
        <li>
            <a href="#"> <i class="fa fa-twitter">   </i> </a>
        </li>
        <li>
            <a href="#"> <i class="fa fa-google-plus">   </i> </a>
        </li>
        <li>
            <a href="#"> <i class="fa fa-pinterest">   </i> </a>
        </li>
        <li>
            <a href="#"> <i class="fa fa-youtube">   </i> </a>
        </li>
    </ul>
<br>

  <p class="text-center finFooter">Copyright &copy; One Day Boulogne sur Mer. Imaginé par l'équipe <a href="http://www.simplon.co" rel="nofollow">Hackredit</a>
    <br><br>Présentation <a href="http://localhost/one_day/">One Day</a></p>
  </div>
           </div>
        </div>
    </div>
</div>


</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><!-- Link Jquery -->
    <script src="https://use.fontawesome.com/93a4498e97.js"></script><!-- Link data based of icons -->
    <script src="../js/bootstrap.min.js"></script><!-- Link js pure -->

</body>

</html>
