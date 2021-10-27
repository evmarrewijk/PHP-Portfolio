<?php
  echo "
  <!doctype html>
  <html lang='nl'>

    <head>
      <!-- Required meta tags -->
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>

      <!-- Bootstrap CSS -->
      <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>

      <link rel='stylesheet' href='css/style.css'>
      <link rel='stylesheet' href='css/dark.css'>
      <!-- CSS Icons-->
      <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
      
      <title>Portfolio || Home</title>
    </head>

    <body>
      <nav class='navbar fixed-top navbar-expand-lg bg-dark navbar-dark'>
        <!-- Brand/logo but is just used for my name -->
        <a class='navbar-brand' href='#'>Eduardo van Marrewijk</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarTogglerDemo02' aria-controls='navbarTogglerDemo02' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>

        <!-- Links -->
        <div class='collapse navbar-collapse' id='navbarTogglerDemo02'>
          <ul class='navbar-nav mr-auto mt-2 mt-lg-0'>
            <li class='nav-item active'>
              <a class='nav-link' href='#'>Home</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='#skills'>Vaardigheden</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link ' href='#projects'>Projecten</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link ' href='#about'>Over mij</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='#contact'>Contact</a>
            </li>
            <li>
              <button class='btn btn-primary switch_theme'>Wissel Thema</button>
            </li>
          </ul>
        </div>
      </nav>

    <header>
      <div class='jumbotron jumbotron-fluid vh-100 mb-0 text-center'>
        <div class='container'>
          <h1 class='display-4'>Eduardo van Marrewijk</h1>
          <p class='lead'>Student ROC Mondriaan | Software Developer</p>
        </div>
      </div>
    </header>
      <!-- Skills -->

      <div>
        <h2 class='text-light text-center' id='skills' style='margin-top: 50px;'>Vaardigheden</h2>
        <div class='card-deck'>
          <div class='container'>
            <div class='row'>
              <div class='col-md-6 col-lg-3'>
                <div class='card'>
                  <img src='img/HTML5.png' class='card-img-top img-fluid' alt='HTML5 Logo'>
                  <div class='card-body'>
                    <h3 class='card-title'>HTML5</h3>
                  </div>
                </div>
              </div>
              <div class='col-md-6 col-lg-3'>
                <div class='card'>
                  <img src='img/css-logo.png' class='card-img-top img-fluid' alt='CSS Logo'>
                  <div class='card-body'>
                    <h3 class='card-title'>CSS</h3>
                  </div>
                </div>
              </div>
              <div class='col-md-6 col-lg-3'>
                <div class='card'>
                  <img src='img/bootstrap-social-logo.png' class='card-img-top img-fluid' alt='Bootstrap Logo'>
                  <div class='card-body'>
                    <h3 class='card-title'>Bootstrap</h3>
                  </div>
                </div>
              </div>
              <div class='col-md-6 col-lg-3'>
                <div class='card'>
                  <img src='img/js-logo.png' class='card-img-top img-fluid' alt='JS Logo'>
                  <div class='card-body'>
                    <h3 class='card-title'>JS</h3>
                  </div>
                </div>
              </div>
              <div class='col-md-6 col-lg-3'>
                <div class='card'>
                  <img src='img/Csharp-logo.png' class='card-img-top img-fluid' alt='C# Logo'>
                  <div class='card-body'>
                    <h3 class='card-title'>C#</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        ";
        require_once "php-connect.php";

 $projecten = $conn->prepare("SELECT * FROM project");
 $projecten->execute();
 echo " <div id='projects'>
        <h2 class='text-light text-center'>Projecten</h2>";
 foreach ($projecten as $project)
 {
   // Spaghetti code fix later
    echo"<div class='card-deck'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-6 col-lg-3'>
            <div class='card'>
            ";
             echo "<img src=" . $project["image"] . " " . "class='card-img-top img-fluid' alt='Tic Tac Toe icon'>
             <div class='card-body'>
             ";
             echo "<h3 class='card-title'>" . $project["title"] . "</h3>";
             echo "<p class='card-text'>" . $project["description"] . "</p>";
             echo "<a href=" . $project["pofolink"] . " " . "class='btn btn-primary'>Ga</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    ";
 }
echo "</div>" ;

        echo "
      <!-- Projects -->
     

      <!-- About -->
      <div id='about' class='text-center text-light'>
        <h2>Over Mij</h2>
        <p>
          Ik ben Eduardo van Marrewijk, ik ben 20 jaar oud en een student op ROC Mondriaan die een opleiding volgt genaamd: Software Developer
        </p>
        <p>
          Ik kreeg interesse in programmeren rond 2015 toen ik op mijn vmbo in een programmeer groep kwam van 5 personen waar ik met arduino's en met Khan Academy mocht werken.
        </p>
        <p>
          Ik hou van zeilen en van gamen.
        </p>
        <p>
          Ik werk momenteel bij BMRoses waar ik alle computers beheer en website beheer.
        </p>
        <img src='img/me.jpg' class='rounded mx-auto d-block about-img' alt='Image of me'>
      </div>

      <!-- Contact -->
      <div class='div-contact id='#contact'>
<section class='mb-4'>

    
    <h2 class='h1-responsive font-weight-bold text-center my-4'>Contact</h2>
    <div class='row'>

        
        <div class='col-md-9 mb-md-0 mb-5'>
            <form id='contact-form' name='contact-form' action='mail.php' method='POST'>

                
                <div class='row'>

                    
                    <div class='col-md-6'>
                        <div class='md-form mb-0'>
                            <input type='text' id='name' name='name' class='form-control'>
                            <label for='name' class=''>Uw Naam</label>
                        </div>
                    </div>
                    

                    
                    <div class='col-md-6'>
                        <div class='md-form mb-0'>
                            <input type='text' id='email' name='email' class='form-control'>
                            <label for='email' class=''>Uw Email</label>
                        </div>
                    </div>
                    

                </div>
                

                
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='md-form mb-0'>
                            <input type='text' id='subject' name='subject' class='form-control'>
                            <label for='subject' class=''>Onderwerp</label>
                        </div>
                    </div>
                </div>
                

                
                <div class='row'>

                    
                    <div class='col-md-12'>

                        <div class='md-form'>
                            <textarea type='text' id='message' name='message' rows='2' class='form-control md-textarea'></textarea>
                            <label for='message'>Uw Bericht</label>
                        </div>

                    </div>
                </div>
                

            </form>

            <div class='text-center text-md-left'>
                <a class='btn btn-primary' onclick='document.querySelector('contact-form').submit();'>Stuur</a>
            </div>
            <div class='status'></div>
        </div>
        

        
        <div class='col-md-3 text-center'>
            <ul class='list-unstyled mb-0'>
                <li><i class='fas fa-map-marker-alt fa-2x'></i>
                    <p>Oostgaag 9, Maasland</p>
                </li>

                <li><i class='fas fa-phone mt-4 fa-2x'></i>
                    <p>(+31) 6 15 48 84 84</p>
                </li>

                <li><i class='fas fa-envelope mt-4 fa-2x'></i>
                    <p>easvanmarrewijk@gmail.com</p>
                </li>
            </ul>
        </div>
        

    </div>
</div>
</section>

      <script src='js/main.js'></script>
      <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
      <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx' crossorigin='anonymous'></script>

  </html>

  ";
?>
