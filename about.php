<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .social-link {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            border-radius: 50%;
            transition: all 0.3s;
            font-size: 0.9rem;
        }

        .social-link:hover,
        .social-link:focus {
            background: #ddd;
            text-decoration: none;
            color: #555;
        }

        h1 {
            font-family: "Sofia", sans-serif;
        }
    </style>
</head>

<body>


    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="bcc.jpeg" height="40px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/miniproject/?#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="contact.php">Contact us</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Courses
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="grade.php">Grade Std</a></li>
                            <li><a class="dropdown-item" href="degree.php">Degree Std</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <!-- login as admin -->
                    <!-- <button class="btn btn-outline-primary mx-2" type="button" data-bs-toggle="modal"
                        data-bs-target="#resultLoginModal">
                        Result login
                    </button> -->
                    <button class="btn btn-outline-primary mx-2" type="button">
                        <a href="logout.php">Logout</a>
                    </button>
                    <!-- Modal -->
                    <!-- Modal -->
                    <!-- <div class="modal fade" id="resultLoginModal" tabindex="-1" aria-labelledby="resultLoginLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="resultLoginModalLabel">Admin Login</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Roll No:</label>
                                            <input type="number" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" value="select">Example select</label>
                                            <select class="form-control" id="exampleFormControlSelect1"
                                                placeholder="select">
                                                <option>G-I</option>
                                                <option>G-II</option>
                                                <option>G-IV</option>
                                                <option>G-V</option>
                                                <option>G-VI</option>
                                                <option>G-VII</option>
                                                <option>G-VIII</option>
                                                <option>G-IX</option>
                                                <option>G-X</option>
                                                <option>D-H</option>
                                                <option>D-B.Sc.</option>
                                            </select>
                                         </div>
                                    </div> 
                                </form> 
                            </div> 
                        </div> -->
                </form>
            </div>

        </div>

    </nav>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="bg.jpg" height="450px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>What are we? What do we do?</h1>
                    <p>Find all about us below.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="bg-white ">
        <div class="container ">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                    <h2 class="font-weight-light">+2,10,Arts...you name it, we offer it</h2>
                    <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Voluptate nam cum praesentium expedita non ex soluta quas tempore
                        modi aut explicabo natus a consectetur, labore inventore cumque ipsum neque necessitatibus
                        quaerat excepturi quos? Iure ipsum nemo ab eum, cupiditate minima doloremque sequi aspernatur
                        totam ut omnis id dolor eligendi quia.</p><a href="#"
                        class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
                </div>
                <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="about_2.png" height="200px" alt=""
                        class="img-fluid mb-4 mb-lg-0"></div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 px-5 mx-auto"><img src="about_1.png" alt="" class="img-fluid mb-4 mb-lg-0"></div>
                <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                    <h2 class="font-weight-light">Community of over 20+ faithful students</h2>
                    <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum, dolor sit amet
                        consectetur adipisicing elit. Officiis numquam consequuntur, magnam expedita non rerum. Labore
                        culpa quae modi. Assumenda aliquam et dolorem illum amet tempora fugit enim veniam nihil
                        voluptatum quod laboriosam, vitae recusandae dolorum voluptatibus numquam velit, dolores,
                        molestiae minus commodi? Similique sed excepturi ipsam error numquam et.
                    </p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
                </div>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                    <h2 class="font-weight-light">Get upto 50% discount on any available courses</h2>
                    <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Voluptate nam cum praesentium expedita non ex soluta quas tempore
                        modi aut explicabo natus a consectetur, labore inventore cumque ipsum neque necessitatibus
                        quaerat excepturi quos? Iure ipsum nemo ab eum, cupiditate minima doloremque sequi aspernatur
                        totam ut omnis id dolor eligendi quia.</p><a href="#"
                        class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
                </div>
                <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="about_3.png" height="200px" alt=""
                        class="img-fluid mb-4 mb-lg-0"></div>
            </div>
        </div>
    </div>

    <div class="bg-light py-5">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-lg-5">
                    <h2 class="display-4 font-weight-light">Our team</h2>
                    <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>

            <div class="row text-center">
                <!-- Team item-->
                <div class="col-1 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img
                            src="https://bootstrapious.com/i/snippets/sn-about/avatar-4.png" alt="" width="100"
                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Nita Kumari</h5><span class="small text-uppercase text-muted">Director</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-facebook-f"><img src="whatsapp.png" height="30px" alt=""></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"><img
                                            src="instagram.png" height="30px" alt=""></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"><img
                                            src="facebook.png" height="30px" alt=""></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"><img
                                            src="twitter.png" height="30px" alt=""></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class=" col-1 col-sm-6 mb-5   ">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img
                            src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="100"
                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Ram Kumar Verma</h5><span
                            class="small text-uppercase text-muted">Founder</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-facebook-f"><img src="whatsapp.png" height="30px" alt=""></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"><img
                                            src="instagram.png" height="30px" alt=""></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"><img
                                            src="facebook.png" height="30px" alt=""></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"><img
                                            src="twitter.png" height="30px" alt=""></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End-->



            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Visit us at.</h1>
            <p class="lead">Landmark: front of maheshwari bhawan, ahead of bhartiya chatrawash.</p>
        </div>
    </div>
    <section class="maps2 cid-qJ2WqADchJ float" id="maps2-a">
        <div class="mapouter">
            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                    marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=26.56943423629425, 85.52108103191033&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                    href="https://mcpedls.com/">minecraft download</a></div>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    width: 100%;
                    height: 400px;
                }

                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    width: 100%;
                    height: 400px;
                }

                .gmap_iframe {
                    height: 400px !important;
                }
            </style>
        </div>
    </section>
    <footer class="bg-light pb-5">
        <div class="container text-center">
            <p class="font-italic text-muted mb-0">&copy; Copyrights BCC.com All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>