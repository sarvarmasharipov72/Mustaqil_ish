<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div>
        <?php
        include("navbar.php")
        ?>
    </div>
    <div>
        <img src="../img/title.jpg" alt="" width="100%" height="300px">
    </div>
    <div class="air">
        <div class="air-fluid">
            <div>
                <div>
                    <h1>
                        Booking Form
                    </h1>
                </div>
                <div class="past">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quisquam, suscipit rem quod quos at eos.
                </div>
            </div>
            <div class="air-child">
                <h3 >SEARCH FOR FLIGHTS</h3>
                <div class="row">
                    <div class="col">
                        <div>
                            <h6>Name</h6>
                            <input class="form-control input" type="text" placeholder="Name">
                        </div>
                        <br>
                        <div>
                            <h6>From</h6>
                            <select class="form-control input">
                                <option value="category1">Italy</option>
                                <option value="category2">Francia</option>
                                <option value="category3">Spain</option>
                                <option value="category4">United Kingdom</option>
                                <option value="category5">German</option>
                            </select>
                        </div><br>
                        <div>
                            <h6>Adults</h6>
                            <select class="form-control input">
                                <option value="category1">01</option>
                                <option value="category2">02</option>
                                <option value="category3">03</option>
                                <option value="category4">04</option>
                                <option value="category5">05</option>
                                <option value="category6">06</option>
                            </select>
                        </div><br>
                        <div>
                            <h6>Travel Class</h6>
                            <select class="form-control input">
                                <option value="category1">Economy class</option>
                                <option value="category2">Premium Economy</option>
                                <option value="category3">Business class</option>
                                <option value="category4">First Class</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <h6>E-mail</h6>
                            <input class="form-control input" type="email" placeholder="Ex: hello@mail.com">
                        </div><br>
                        <div>
                            <h6>To</h6>
                            <select class="form-control input">
                                <option value="category1">Francia</option>
                                <option value="category2">Italy</option>
                                <option value="category3">Spain</option>
                                <option value="category4">United Kingdom</option>
                                <option value="category5">German</option>
                            </select>
                        </div><br>
                        <div>
                            <h6>Children</h6>
                            <select class="form-control input">
                                <option value="category1">01</option>
                                <option value="category2">02</option>
                                <option value="category3">03</option>
                                <option value="category4">04</option>
                                <option value="category5">05</option>
                                <option value="category6">06</option>
                            </select>
                        </div><br>
                        <div>
                            <h6>Departure On</h6>
                            <input class="form-control input" type="date">
                        </div>
                    </div>
                </div><br>
                <div>
                    <h6>Journey type</h6>
                    <select class="form-control input">
                        <option value="category1">One Way</option>
                        <option value="category2">Round trip</option>
                    </select>
                </div>
                <div><br>
                <button type="button" class="btn btn-danger">Search Now</button>
                </div>
            </div>
        </div>
    </div>
    <div>
        <?php include("footer.php")
        ?>
    </div>
</body>
</html>