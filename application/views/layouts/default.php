<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/sketchy/bootstrap.min.css" rel="stylesheet" integrity="sha384-2kOE+STGAkgemIkUbGtoZ8dJLqfvJ/xzRnimSkQN7viOfwRvWseF7lqcuNXmjwrL" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/public/styles/main.css">
    <title>Basic Blog</title>
</head>

<body>
    <header class="header">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbars">
                <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link" href="/">
                            <h4 class="text-uppercase">Home</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/account/login">
                            <h4 class="text-uppercase">Login</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/account/register">
                            <h4 class="text-uppercase">Register</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/posts">
                            <h4 class="text-uppercase">Posts</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">
                            <h4 class="text-uppercase">Profile</h4>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="main_content">
    <?php echo $content; ?>
    </section>
    
    <hr>
    <footer class="footer bg-dark">
        <section class="top_footer danger">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <h4 class="text-uppercase text-success pt-2 pb-2"><i class="fab fa-twitter fa-2x text-white"></i> Lorem ipsum dolor sit amet, consectetur adipiscing.<strong class="text-uppercase text-primary"> <a href="#">HTTP//.COM</a></strong>
                        </h4>
                        <hr class="bg-light">
                    </div>
                </div>
            </div>
        </section>
        <section class="main_footer">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md-4">
                        <h4 class="text-uppercase text-white font-weight-bold pt-2 pb-2">TWITTER FEED</h4>
                        <ul class="nav%20tasks/register.phptur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
              </li>
              <li class=" nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-twitter fa-2x text-white pr-2"></i>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <h4 class="text-uppercase text-white font-weight-bold pt-2 pb-2">CONTACT FORM</h4>
                        <form class="p-3">
                            <div class="form-group">
                                <label for="inputEmail">Email address</label>
                                <input type="email" class="form-control" id="inputEmail">
                            </div>
                            <div class="form-group">
                                <label for="formControlTextarea">Message</label>
                                <textarea class="form-control" id="formControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <h4 class="text-uppercase text-white font-weight-bold pt-2 pb-2">ABOUT US</h4>
                        <p class="text-white-50 p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        <p class="text-white-50 p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>

                    </div>
                </div>
                <hr class="bg-light">
            </div>
        </section>
        <section class="bottom_footer">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between">
                            <div class="footer-info">
                                <h5 class="text-white"> 2020 BLOG. ALL RIGHTS RESERVED | TEMPLATE MADE BY IGOR NOSATOV.</h5>
                            </div>
                            <div class="social-icon">
                                <ul class="nav justify-content-end">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-twitter fa-2x text-warning"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-facebook-f fa-2x text-danger"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fab fa-vimeo-v fa-2x text-info"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>