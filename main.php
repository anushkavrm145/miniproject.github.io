<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
            </div>
            </form>
        </div>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="bcc_carousel1.jpg" height="750px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="bcc_carousel2.jpg" height="750px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="bcc_carousel3.jpg" height="750px" class="d-block w-100" alt="...">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container my-4">
        <center>
            <h1>Our Celebration</h1>
        </center>
    </div>
    <div class="container my-4">
        <div class="card-group">
            <div class="card mx-4">
                <img src="bcc_card1.jpg" height="450px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Teacher's Day Celebration</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore nulla
                        repellendus, odio autem incidunt nobis neque, recusandae doloribus fugit suscipit porro labore
                        sequi iste quam! Eos ducimus dolor</p>
                    <a href="https://scontent.fblr2-2.fna.fbcdn.net/v/t39.30808-6/305557940_1738266726553789_628154924254734558_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=DhAV9-PWi-kAX-KtPgR&_nc_ht=scontent.fblr2-2.fna&oh=00_AfDsJGKLYDDC6Ga_T2_5A_vwmRlvJkMcLDabo5md7KmFeQ&oe=63980824"
                        target=”_blank” class="btn btn-primary">View Full Image</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">5 Sept 2022</small>
                </div>
            </div>
            <div class="card mx-4">
                <img src="bcc_card3.jpg" height="450px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Saraswati Puja Celebration</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore nulla
                        repellendus, odio autem incidunt nobis neque, recusandae doloribus fugit suscipit porro labore
                        sequi iste quam! Eos ducimus dolor</p>
                    <a href="https://scontent.fblr2-2.fna.fbcdn.net/v/t39.30808-6/273430214_1589071318139998_2132243212240899354_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=t13yTBLT7IwAX-ll6Ug&_nc_ht=scontent.fblr2-2.fna&oh=00_AfBvAozJSM9k1YVt_MehFkXdRZp9hYVHLnyRVE6TuZlb7Q&oe=6397E7F9"
                        target=”_blank” class="btn btn-primary">View Full Image</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">6 Feb 2022 </small>
                </div>
            </div>
            <div class="card mx-4">
                <img src="bcc_Card2.jpg" height="450px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Children's Day Celebration</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore nulla
                        repellendus, odio autem incidunt nobis neque, recusandae doloribus fugit suscipit porro labore
                        sequi iste quam! Eos ducimus dolor</p>
                    <a href="https://scontent.fblr2-2.fna.fbcdn.net/v/t39.30808-6/255370970_1532986003748530_1984897083562118591_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=174925&_nc_ohc=NRiiK25eVZcAX-sjzFb&_nc_ht=scontent.fblr2-2.fna&oh=00_AfDwWF4mtTwt8HcAzYn6xcIfgx6PHbas8CjoQvYRCOrqgA&oe=639864C8"
                        target=”_blank” class="btn btn-primary">View Full Image</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">14 Nov 2021</small>
                </div>
            </div>
        </div>
    </div>
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