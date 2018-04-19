<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" />
    <title>Samantha Fritts</title>
</head>

<body>
    <!--NAVBAR  --------------------------------------------------------------->
    <nav class="navbar navbar-expand navbar-dark navBack">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="/myStory">My Story</a>
                <a class="nav-item nav-link active" href="/resume">Resume</a>
                <a class="nav-item nav-link active" href="/contact">Contact</a>
            </div>
        </div>
    </nav>
    <!--JUMBOTRON  ---------------------------------------------------------------->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <!--BIO  -------------------------------------------------------------------->
    <div class="container-fluid px-5">
        <div class="row">
            <div class="col">
                <!--MY STORY  --------------------------------------------------->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h1>THIS IS MY </br> STORY</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo voluptas nihil minima dignissimos asperiores, magnam, corporis cumque sit odit, nam officiis quos fugit accusamus voluptate labore voluptates. Consequuntur, quam, molestiae.</p>
                    </div>
                    <!--PARALLAX  ----------------------------------------------->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="backgroundPic">
                        </div>
                    </div>
                </div>
                <!--CIRCLE BUTTONS  --------------------------------------------->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="resumeCircle">
                            <a href="/resume">
                                <p>Resume</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="projectsCircle">
                            <a href="/projects">
                                <p>Projects</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="galleryCircle">
                            <a href="/gallery">
                                <p>Gallery</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!--CONTACT  ---------------------------------------------------->
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-12">
                                <h1>LET'S GET IN TOUCH</h1>
                            </div>
                        </div>
                        <!--PERSONAL INFO  ------------------------------------------>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <p>(956) 570-7311</p>
                                <p>4713 Quince Ave. McAllen, Tx, 78501</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-area">
                                            <form id="text" role="form" action="sendEmail" method="POST">
                                                <br style="clear:both">
                                                <div class="row">

                                                    <!--NAME  ------------------------------------------------------------->

                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                                        </div>
                                                    </div>

                                                    <!--NUMBER  ------------------------------------------------------------>

                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <!--EMAIL  ------------------------------------------------------------->

                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <!--COMMENT  ----------------------------------------------------------->

                                                    <div class="col-lg-12 col-md-12 col-sm-12">

                                                        <div class="form-group">
                                                            <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Comment" maxlength="140" rows="7"></textarea>
                                                        </div>
                                                        <button type="button" id="submit" name="submit" class="btn btn-outline-dark pull-right">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <p class="text-primary email-msg"></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--EMAIL  -------------------------------------------------->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
