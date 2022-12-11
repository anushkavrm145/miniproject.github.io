<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1535905557558-afc4877a26fc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80');
        }

        tbody {
            color: white;
            text-decoration: double;
        }

        <style type="text/css">.well {
            background: none;
            height: 320px;
        }

        .table {
            margin: auto;
            width: 75% !important;
        }

        .table-scroll tbody {
            position: absolute;
            overflow-y: scroll;
            height: 550px;
        }

        .table-scroll tr {
            width: 85%;
            table-layout: fixed;
            display: inline-table;
        }

        .table-scroll thead>tr>th {
            border: none;
        }
    </style>
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
    <div class="container my-2">
        <center>
            <h1 style="color: white; font-family: 'Aclonica';">Grade Level Courses</h1>
            <hr>
            <br>
        </center>
    </div>
    <div class="col-xs-8 col-xs-offset-2 well">
        <center>
            <table class="table  table-scroll">
                <thead>
                    <tr style="background-color: antiquewhite;">
                        <th scope="col">CLASS</th>
                        <th scope="col">SUBJECTS</th>
                        <th scope="col">SLOT</th>
                        <th scope="col">FEE(monthly)</th>
                    </tr>
                </thead>
                <tbody style="font-weight: 500;">
                    <tr>
                        <th scope="row">Kindergarten</th>
                        <td>Complete</td>
                        <td>25</td>
                        <td> ₹100</td>
                    </tr>
                    <tr>
                        <th scope="row">I</th>
                        <td>complete</td>
                        <td>25</td>
                        <td> ₹200</td>

                    </tr>
                    <tr>
                        <th scope="row">I</th>
                        <td>complete</td>
                        <td>25</td>
                        <td> ₹200</td>

                    </tr>
                    <tr>
                        <th scope="row">I</th>
                        <td>complete</td>
                        <td>25</td>
                        <td> ₹200</td>

                    </tr>
                    <tr>
                        <th scope="row">I</th>
                        <td>complete</td>
                        <td>25</td>
                        <td> ₹200</td>

                    </tr>
                    <tr>
                        <th scope="row">I</th>
                        <td>complete</td>
                        <td>25</td>
                        <td> ₹200</td>

                    </tr>
                    <tr>
                        <th scope="row">I</th>
                        <td>complete</td>
                        <td>25</td>
                        <td> ₹200</td>

                    </tr>
                    <tr>
                        <th scope="row">II</th>
                        <td>complete</td>
                        <td>25</td>
                        <td> ₹300</td>

                    </tr>
                    <tr>
                        <th scope="row">III</th>
                        <td>complete</td>
                        <td>25</td>
                        <td> ₹300</td>

                    </tr>
                    <tr>
                        <th scope="row">IV</th>
                        <td>complete</td>
                        <td>25</td>
                        <td> ₹400</td>

                    </tr>
                    <tr>
                        <th scope="row">V</th>
                        <td>complete</td>
                        <td>25</td>
                        <td> ₹500</td>

                    </tr>
                    <tr>
                        <th scope="row">V</th>
                        <td>complete</td>
                        <td>25</td>
                        <td> ₹500</td>

                    </tr>
                    <tr>
                        <th scope="row">VI</th>
                        <td>complete</td>
                        <td>25</td>
                        <td> ₹600</td>

                    </tr>
                    <tr>
                        <th scope="row">VII</th>
                        <td>complete</td>
                        <td>25</td>
                        <td> ₹600</td>

                    </tr>
                    <tr>
                        <th scope="row">VIII</th>
                        <td>complete</td>
                        <td>25</td>
                        <td> ₹800</td>

                    </tr>
                    <tr>
                        <th scope="row">IX</th>
                        <td>complete</td>
                        <td>25</td>
                        <td> ₹900</td>

                    </tr>
                    <tr>
                        <th scope="row">X</th>
                        <td>complete</td>
                        <td>25</td>
                        <td> ₹1,000</td>

                    </tr>
                </tbody>
            </table>
        </center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>