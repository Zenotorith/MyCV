<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resumé Website</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Font-Awesome CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


    <!-- Header Section -->
    <section id="header">

        <div class="container text-center">
            <div class="user-box">
                <img src="img/1.jpg" alt="">
                <h1>Dương Hoàng Khôi</h1>
                <p>Fresher Front End Developer</p>
            </div>
        </div>
        <div class="scroll-btn">
            <div class="scroll-bar"><a href="#about"><span> </span></a></div>
        </div>

    </section>


    <!-- User Information Section -->
    <section id="user-info">

        <div class="nav-bar">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="img/Harry-X-logo.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#top">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">ABOUT ME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#resume">RESUMÉ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#services" tabindex="-1" aria-disabled="true">SERVICES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact" tabindex="-1" aria-disabled="true">CONTACT</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        </div>

        <!-- About -->
        <div  id="about" class="about container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="img/2.jpg" alt="" class="profile-img">
                </div>
                <div class="col-md-6">
                    <h3>WHO AM I?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing 
                        elit. Donec quis urna elit. Cras semper, nisl sed auctor sagittis, 
                        risus quam elementum libero, non lobortis lorem risus id mauris. In ipsum dolor, 
                        ultrices vitae sagittis sed, vulputate quis ipsum. Aliquam eros sem, mollis non euismod a, 
                        fringilla non sem. Suspendisse at urna fermentum, lobortis urna a, semper leo. Suspendisse volutpat sed nibh vel sagittis. 
                        Nunc eleifend lacus nec varius facilisis. Nunc facilisis cursus augue ac facilisis. Ut tempus ligula at aliquam imperdiet. 
                        Nunc egestas libero quam, non pretium lectus luctus eget.
                    </p>
                    <div class="skills-bar">
                        <p>Adobe Photoshop</p>
                        <div class="progress">
                            <div class="progress-bar" style="width: 30%">30%</div>
                        </div>

                        <p>HTML5 CSS3</p>
                        <div class="progress">
                            <div class="progress-bar" style="width: 55%">55%</div>
                        </div>

                        <p>Basic JavaScript</p>
                        <div class="progress">
                            <div class="progress-bar" style="width: 90%">90%</div>
                        </div>

                        <p>ECMAScript 6</p>
                        <div class="progress">
                            <div class="progress-bar" style="width: 40%">40%</div>
                        </div>

                        <p>React Js</p>
                        <div class="progress">
                            <div class="progress-bar" style="width: 35%">35%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social Icons -->
        <div class="social-icons">
            <ul>
                <a href=""><li><i class="fa fa-facebook"></i></li></a>
                <a href=""><li><i class="fa fa-twitter"></i></li></a>
                <a href=""><li><i class="fa fa-reddit"></i></li></a>
                <a href=""><li><i class="fa fa-github"></i></li></a>
            </ul>
        </div>

        <!-- Resumé -->
        <div class="resume" id="resume">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-center">My Experiences</h3>
                        <ul class="timeline">
                            <li>
                                <h4><span>September 2021 - </span> Training Fieldtrip Course</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing 
                                    elit. Donec quis urna elit. Cras semper, nisl sed auctor sagittis, 
                                    risus quam elementum libero, non lobortis lorem risus id mauris.<br>
                                <b>Company: </b> - FPT Information System <br>
                                <b>Duration: </b> - 3 months [Sep 2021 to Dec 2021] <br>
                                <b>Location: </b> - District 7, Creative Street <br>
                                </p>
                            </li>

                            <li>
                                <h4><span>January 2023 - </span> Graduateed at University of Greenwich</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing 
                                    elit. Donec quis urna elit. Cras semper, nisl sed auctor sagittis, 
                                    risus quam elementum libero, non lobortis lorem risus id mauris.<br>
                                <b>Company: </b> - FPT Information System <br>
                                <b>Duration: </b> - 3 months [Sep 2021 to Dec 2021] <br>
                                <b>Location: </b> - District 7, Creative Street <br>
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <h3 class="text-center">My Education</h3>
                        <ul class="timeline">
                            <li>
                                <h4><span>December 2021 - </span> Training Course Certificate</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing 
                                    elit. Donec quis urna elit. Cras semper, nisl sed auctor sagittis, 
                                    risus quam elementum libero, non lobortis lorem risus id mauris.<br>
                                <b>Institute: </b> - FPT Information System<br>
                                <b>Session: </b> - 3 months [Sep 2021 to Dec 2021] <br>
                                <b>Aggregate: </b> - 80% <br>
                                </p>
                            </li>

                            <li>
                                <h4><span>January 2023 - </span> Graduateed at University of Greenwich Vietnam</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing 
                                    elit. Donec quis urna elit. Cras semper, nisl sed auctor sagittis, 
                                    risus quam elementum libero, non lobortis lorem risus id mauris.<br>
                                <b>Institute: </b> - University of Greenwich Vietnam <br>
                                <b>Session: </b> - 2019 - 2023 <br>
                                <b>Aggregate: </b> - Merit <br>
                                </p>
                            </li>

                            <li>
                                <h4><span>June 2024 - </span> Graduateed Bachelor at University of Greenwich Vietnam</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing 
                                    elit. Donec quis urna elit. Cras semper, nisl sed auctor sagittis, 
                                    risus quam elementum libero, non lobortis lorem risus id mauris.<br>
                                <b>Institute: </b> - University of Greenwich Vietnam <br>
                                <b>Session: </b> - 2019 - 2024 <br>
                                <b>Aggregate: </b> - Distinction <br>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services -->
        <div class="services" id="services">
            <div class="container">
                <h1 class="text-center">My Offered Services</h1>
                <p class="text-center">Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="services-box">
                            <i class="fa fa-desktop"></i><span>Web-content</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing 
                                    elit. Donec quis urna elit. Cras semper, nisl sed auctor sagittis, 
                                    risus quam elementum libero, non lobortis lorem risus id mauris.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="services-box">
                            <i class="fa fa-line-chart"></i><span>System Analysis</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing 
                                    elit. Donec quis urna elit. Cras semper, nisl sed auctor sagittis, 
                                    risus quam elementum libero, non lobortis lorem risus id mauris.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="services-box">
                            <i class="fa fa-laptop"></i><span>Developer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing 
                                    elit. Donec quis urna elit. Cras semper, nisl sed auctor sagittis, 
                                    risus quam elementum libero, non lobortis lorem risus id mauris.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="contact" id="contact">
            <div class="container text-center">
                <h1>Contact Me</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Maecenas vehicula enim non sapien aliquam fermentum sed et libero. Nulla a nibh quam. Quisque quis hendrerit.</p>
                <div class="row">
                    <div class="col-md-4">
                        <i class="fa fa-phone"></i>
                        <p>+84 562249850</p>
                    </div>

                    <div class="col-md-4">
                        <i class="fa fa-envelope"></i>
                        <p>hoangkhoiduong24@gmail.com</p>
                    </div>

                    <div class="col-md-4">
                        <i class="fa fa-internet-explorer"></i>
                        <p>www.sss.com</p>
                    </div>
                </div>

                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i>Download My Resumé</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-rocket"></i>Hire Me</button>
            </div>
            <div class="footer text-center">
                <p>Made with <i class="fa fa-heart-o"></i> by myself</p>
            </div>
        </div>

    </section>

    <!-- Smooth Scroll -->
    <script src="smooth-scroll.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>