<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        body {
            background-image: linear-gradient(to red, yellow, black);
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- form databse connection -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $message = $_POST['message'];


        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "miniproject";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Die if connection was not successful
        if (!$conn) {
            die("Sorry we failed to connect: " . mysqli_connect_error());
        } else {
            // Submit these to a database
            // Sql query to be executed 
            $sql = "INSERT INTO `contact` (`email`, `message`) VALUES ('$email', '$message')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your message has been sent successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
            } else {
                // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
            }

        }

    }
    ?>
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
    <!-- form body -->
    <fieldset>
        <div class="container my-4">
            <legend>
                <h1>
                    <center>Help us in creating a brighter future!</center>
                </h1>
            </legend>
            <hr>
        </div>
    </fieldset>
    <form action="contact.php" method="post">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <p class="lead">Drop your enquires here.</p>
            </div>
        </div>
        <div class="mb-3  mx-5 my-5">
            <label for="exampleFormControlInput1" class="form-label" name="email">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"
                name="email">
        </div>
        <div class="mb-3 mx-5 my-5">
            <label for="exampleFormControlTextarea1" class="form-label" name="message">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="message"></textarea>
        </div>
        <div class="footer">
            <button type="submit" class="btn btn-primary mx-5">Submit</button>
        </div>
    </form>
    <center>
        <div class="jumbotron jumbotron-fluid my-5">
            <div class="container">
                <h1 class="display-4 my-5" style="text-align: center;">Connect with us on Social Media</h1>

                <!-- Twitter -->
                <a style="color: #55acee;" href="#!" role="button" target="_blank"><i class="bi bi-instagram mx-4"><img
                            src="whatsapp.png" height="40px"></img></i></a>
                <a style="color: #55acee;" href="#!" role="button" target="_blank"><i class="bi bi-instagram mx-4"><img
                            src="instagram.png" height="40px"></img></i></a>
                <a style="color: #55acee;" href="https://www.facebook.com/BCCSITAMARHI" role="button" target="_blank"><i
                        class="bi bi-instagram mx-4"><img src="facebook.png" height="40px"></img></i></a>
                <a style="color: #55acee;" href="#!" role="button" target="_blank"><i class="bi bi-instagram mx-4"><img
                            src="twitter.png" height="40px"></img></i></a>

                <!-- Google -->
                <a style="color: #dd4b39;" href="#!" role="button"><i class="fab fa-google fa-lg"></i></a>

                <!-- Instagram -->
                <a style="color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram fa-lg"></i></a>
            </div>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>