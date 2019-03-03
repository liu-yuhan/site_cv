<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600'>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <title>Profile Yuhan LIU</title>
  </head>

  <body>
    <nav id="top" class="navbar navbar-expand-lg  navbar-dark bg-dark ">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                                 aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand text text-danger alert alert-danger py-0 mb-0" href="#">CV under construction</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class=" nav navbar-nav mr-auto mt-2 mt-lg-1 ">
                  <li class="nav-item active mx-5">
                    <a class="navHightlight nav-link" href="#aboutMe">About Me</a>
                  </li>
                  <li class="nav-item mr-5 ">
                    <a  class="navHightlight nav-link"  href="#ProjectAndSkills">Projects Gallery</a>
                  </li>
                  <li class="nav-item mr-5">
                    <a  class="navHightlight nav-link"  href="#Education">Experience</a>
                  </li>
                  <li class="nav-item mr-5">
                    <a class="navHightlight nav-link"  href="#Contact">Contact</a>
                  </li>
              </ul>
              <span >
                <a href="https://github.com/liu-yuhan" target="_blank" class="fab fa-github" style="font-size: 2em; color: white;"></a>
              </span>
              <span class="ml-4 mr-4" >
                <a href="https://www.linkedin.com/in/yuhan-liu-b179a0b5/" target="_blank" class="fab fa-linkedin" style="font-size: 2em; color:#0077B5;" ></a>
              </span>
            </div>
          </div>
    </nav>
<!-- -------------------------------- END NAVBAR-------------------------------- -->
    <div class=" row banner d-none d-sm-block" >
      <img  class=" mx-auto d-block res-img" src="images/banner1920.jpg" alt="banner image" >
    </div>
<!-- ---------------------END BANNER---------------------- -->
    <section id="aboutMe" title="click on logos to have more details." >
      <div id="skillsContainer" class="row text-left mx-auto my-1 container" >
        <div id="selfPresentation" class="col-sm-8  pt-3" >
          <h1>About Me</h1>
          <p> Hello! I am Yuhan Liu. Welcome on my homepage!<br><br>
                I am a junior developer, I'm currently looking for intership and job opportunities in Paris.<br><br>
                I'm immediately available for a full time position.<br><br>
                I'm currently attending a year-long coding program at Coding Academy by Epitech.<br><br>
                <!-- insert hyperlink -->
                I'm mainly interested in PHP and full-stack web development, I have a preference for backend development.
                 I'm excited for any new opportunity as I aim to be a versatile developer, even beyond web development.<br><br>
                Feel free to contact me using the contact form.
                <!-- insert hyperlink -->
          </p>
        </div class='col-sm-3'>
            <img src="images/face-icon.png" alt="face-icon" height="200px" width="200px">
        <div>
        </div>
      </div>
    </section>
<!-- -----------------------------End self presentation section ------------------------------ -->
    <section id="ProjectAndSkills" class="my-1" >
      <div class="row d-flex mt-4 col-12"  >
        <div class="col-12 col-sm-12  p-auto mb-3 text-center  ">
        <h1>Projects Gallery</h1>
          <div class="row col-12 col-sm-12 mx-auto">
<!-- skill buttons -->
            <div class="skillsBtnZones row col-sm-3">
              <div id="" class="col-sm-6 list-group float" style="margin-top:72px;">
                <button type="button" id="btnC" class="btnsSkills list-group-item  border border-secondary"> C </button>
                <button type="button" id="btnHtml" class="btnsSkills list-group-item  border border-secondary" > HTML </button>
                <button type="button" id="btnCss" class="btnsSkills list-group-item  border border-secondary"> CSS </button>
                <button type="button" id="btnBootstrap" class="btnsSkills list-group-item  border border-secondary"> BOOTSTRAP </button>
                <button type="button" id="btnJavascript" class="btnsSkills list-group-item border border-secondary"> JAVASCRIPT </button>
                <button type="button" id="btnJquery" class="btnsSkills list-group-item  border border-secondary"> JQUERY </button>
              </div>
              <div id="" class="col-sm-6 list-group float" style="margin-top:72px;">
                <button type="button" id="btnTwig" class="btnsSkills list-group-item  border border-secondary"> TWIG </button>
                <button type="button" id="btnPhp" class="btnsSkills list-group-item  border border-secondary"> PHP </button>
                <button type="button" id="btnSymfony" class="btnsSkills list-group-item  border border-secondary"> SYMFONY </button>
                <button type="button" id="btnLaravel" class="btnsSkills list-group-item  border border-secondary"> LARAVEL </button>
                <button type="button" id="btnMysql" class="btnsSkills list-group-item border border-secondary"> MYSQL </button>
              </div>
            </div>

<!-- project buttons -->
            <div class=" col-12 col-sm-9 mx-auto"  >
              <div class="col-10">
                <button id="btnProjectPUBG" class="col-3 col-sm-2 btn btn-outline-success btn-lg mt-2 "  href="#sliderProjectPUBG"  type="button" >PUBG </button>
                <button id="btnProjectSapin"  class="col-3  col-sm-2 btn btn-outline-success btn-lg mt-2" type="button">C Tree</button>
                <button id="btnProjecCV" class="col-3  col-sm-2 btn btn-outline-success btn-lg mt-2" type="button" >CV</button>
                ---- click to browse projects !
              </div>
            <!--Cover image for  project-skill section -->
              <div class="border border-dark mt-3 col-10  " style="height:auto">
                <div class="carousel-inner my-auto project-skill ">
                  <div id="coverImg" class="carousel-item active my-auto ">
                    <img class="d-block w-100" src="images/project-skill.jpeg" alt="cover img" s>
                      <div class="carousel-caption" style="font-size: 50px;">
                        <p>click buttons above for details</p>
                      </div>
                  </div>
                </div>
<!-- gif for  C-sapin-->
                <div id="sliderProjectSapin" class="carousel-inner my-auto project-skill" style="display:none">
                  <span>
                    <a href="https://github.com/liu-yuhan/sapin.git" target="_blank" class="fab fa-github" style="font-size: 3em; color:black"></a>
                  </span>
                  <div class="carousel-item active my-auto mx-auto"   style="width:80%">
                    <img class="my-3 d-block w-100" src="images/Sapin.gif" alt="gif for sapin projet">
                  </div>
                </div>
<!--slider for project PUBG-->
                <div id="sliderProjectPUBG" class="project-skill" style="display:none" >
                <span>
                  <a href="https://github.com/liu-yuhan/Laravel_PUBG.git" target="_blank" class="fab fa-github" style="font-size: 3em; color:black"></a>
                </span>
                  <div id="sliderProjectPUBGContent" class="carousel slide my-auto" data-ride="carousel"  >
                    <ol class="carousel-indicators">
                      <li data-target="#sliderProjectPUBG1" data-slide-to="0" class="active"></li>
                      <li data-target="#sliderProjectPUBG2" data-slide-to="1"></li>
                      <li data-target="#sliderProjectPUBG3" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner my-auto">
                      <div id="sliderProjectPUBG1"class="carousel-item my-auto active">
                        <img class="d-block w-100" src="images/project-pubg/players_dashboard.png" alt="First slide">
                      </div>
                      <div  id="sliderProjectPUBG2" class="carousel-item my-auto" >
                        <img class="d-block w-100" src="images/project-pubg/match_dashboard.png" alt="Second slide">
                      </div>
                      <div  id="sliderProjectPUBG3" class="carousel-item my-auto" >
                        <img class="d-block w-100" src="images/project-pubg/pubg-index.png" alt="Third slide" >
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#sliderProjectPUBGContent" role="button" data-slide="prev" >
                      <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#sliderProjectPUBGContent" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
<!-- temp tester for cv slider-->
                <div id="projetCV" class="carousel-inner my-auto project-skill" style="display:none">
                  <span>
                    <a href="https://github.com/liu-yuhan/sapin.git" target="_blank" class="fab fa-github" style="font-size: 3em; color:black"></a>
                  </span>
                  <div class="carousel-item active my-auto mx-auto"   style="width:80%">
                    <img class="my-3 d-block w-100" src="images/soon.jpg" alt="projetCV">
                  </div>
                </div>
              </div>

<!-- END SLIDER ZONE -->
          </div>
        </div>
      </div>
    </div>
    </section>
<!---------------------------------------   END PROJECTS SECTION------------------------------------>
    <section id="Education" class="row" >
      <div class="timeline mx-auto text-center ">
      <h1>Experience<br><br></h1>
        <div class="entry">
          <div class="title">
            <h3>June 2018- Present</h3>
            <p>Formation Coding Academy by Epitech</p>
            <img src="images/coding-academy-trans.png" alt="logo Coding-academy" style="height:100px; ">
          </div>
          <div class="body">
            <p>Intensive teaching of versatile developer skills, projects based, with an active
                pedagogy like School 42.</p>
          </div>
        </div>
        <div class="entry">
          <div class="title">
            <h3>2015 - 2018</h3>
            <p>Misc. </p>
          </div>
          <div class="body">
            <p>Various positions in marketing and tourism.</p>
            <ul>
              <li> Personal Shoper · Marketing Assistant at Caissa international · Marketing Assistant at Yoyoer Voyage </li>
            </ul>
          </div>
        </div>
        <div class="entry">
          <div class="title">
            <h3>2010 - 2015</h3>
            <p>Université de Picardie Jules Vernes, Amiens, France</p>
          </div>
          <div class="body">
            <p> Master in net-economy management.</p>
          </div>
        </div>
      </div>
    </section>
<!---------------------------------------   END EDUCATION SECTION------------------------------------>
        <section id="Contact" class="" >
    <div class="row">
        <div class="my-2 mx-auto">
            <h1 class="mx-auto">Contact</h1>
        </div>
    </div>

      <form class="container rounded border border-danger mb-5" name="contactForm" action="mail.php" method="post">
        <div class="form-group row mt-5 ">
          <label for="txtName" class="col-sm-2 control-label mt-2">Subject</label>
            <input type="text" class="form-control col-sm-8" name="subject" placeholder="subject">
        </div>
        <div class="form-group row ">
          <label for="txtEmail" class="control-label col-sm-2 " >Email</label>
          <input type="email" class="form-control col-sm-8" name="email" placeholder="email">
        </div>
        <div class="form-group row">
          <label for="txtMessage" class="control-label col-sm-2">Message</label>
          <textarea type="text" class="form-control col-sm-8" name="message" placeholder="message"></textarea>
        </div>
        <div class="row mb-3">
        <button type="submit" class="btn btn-outline-warning btn-lg  mx-auto " name="submit">Send</button>
        </div>
      </form>
</section>
<!-- ---------------------END CONTACT SECTION---------------------- -->
  <section id="float-btn" class="scrollUp fixed-bottom">
    <div class="row">
      <a href="#top" class="ml-auto">
          <button id="btnBackToTop" class="scrollUp oi oi-chevron-top btn btn-danger btn-lg" >
              back to top </button>
      </a>

          </div>
  </section>
  <!-- ---------------------END SCROLL BTN---------------------- -->
    </div>
    <script src="cv.js"> </script>
  </body>

  </html>
