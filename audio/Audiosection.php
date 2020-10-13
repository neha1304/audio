<?php

require './connect.php';
echo "connected";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/findbook.css">

    <title>find book</title>
    <style>
        label {
            font-size: 1.3rem;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>

    <div class=" jumbotron col-12 ">
        <h1>Audio Books Section</h1>
    </div>
    <!--  method="POST" -->

    <!-- <div class="container col-11"> -->
    <form class="form-inline" action="#">
        <div class="input-group col-lg-3 m-2">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Education</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">

                <option value="nursery">Nursery</option>
                <option value="junior">Junior</option>
                <option value="senior">Senior</option>

            </select>
        </div>
        <div class="input-group col-lg-3 m-2">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">category</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">

                <option value="poems">Poems</option>
                <option value="short stories">Short stories</option>

            </select>
        </div>

        <div class="input-group col-lg-3 m-2">
            <div class="input-group-prepend ">
                <label class="input-group-text" for="inputGroupSelect01">Language</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">

                <option value="english">English</option>
                <option value="hindi">Hindi </option>
                <option value="marathi">Marathi </option>

            </select>
        </div>

        <button type="submit" value="submit" name="submit" class="input-group  col-lg-1 col-3 offset-4 offset-md-1 btn btn-light " data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Search</button>

        <div class="collapse mt-4" id="collapseExample">
            <div class="container col-10">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6  my-3">
                        <div class="card">
                            <div class="card-block">
                                <img src="./img/thumbnail.png" class="img-fluid">
                            </div>
                            <div class="card-title">
                                <h5>title :</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-6  my-3">
                        <div class="card">
                            <div class="card-block">
                                <img src="./img/thumbnail.png" class="img-fluid">
                            </div>
                            <div class="card-title">
                                <h5>title :</h5>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6 col-xs-6  my-3">
                        <div class="card">
                            <div class="card-block">
                                <img src="./img/thumbnail.png" class="img-fluid">
                            </div>
                            <div class="card-title">
                                <h5>title :</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 my-3">
                        <div class="card">
                            <div class="card-block">
                                <img src="./img/thumbnail.png" class="img-fluid">
                            </div>
                            <div class="card-title">
                                <h5>title :</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>


</html>