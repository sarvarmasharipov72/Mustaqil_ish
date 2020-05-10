<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="banner">
        <!--navbar-->
        <?php
        include("php/db.php");
        include("php/navbar.php");
        $hotels = $connect->query('SELECT * FROM `hotels` LIMIT 4')->fetchAll();
        $cities=$connect->query('SELECT * FROM `cities` LIMIT 8')->fetchAll();
       ?>
        <!--/navbar-->
        <!--main-->
            <div class="div">
                <h1>
                    The Best Hotels
                </h1>
                <div class="row">
                    <?php foreach($hotels AS $index => $item): ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img class="img" src="<?php echo $item['img']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item['title']; ?></h5>
                                <p class="card-text"><?php echo $item['text']; ?></p>
                                <a href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                
        <!--/main-->
    </div>
    <!--Help-->
    <div class="help">
        <div class="help-fluid">
            <div>
                <h1>
                    Help
                </h1>
            </div>
            <div class="row">
                <div class="col">
                    <div class="circle">
                        <img class="mx-auto d-block " src="img/plane.svg" alt="">
                    </div>
                    <div>
                        <h4>Air Tickets</h4>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia! <br>
                        <a href="php/air.php">Read More</a>
                    </div>
                </div>
                <div class="col">
                    <div class="circle">
                        <img class="mx-auto d-block" src="img/hotel.svg" alt="">
                    </div>
                    <div>
                        <h4>Hotel Bookings</h4>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia! <br>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col">
                    <div class="circle">
                        <img class="mx-auto d-block" src="img/like.svg" alt="">
                    </div>
                    <div>
                        <h4>Tourist Guide</h4>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia! <br>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Help-->
    <!--popular content-->
    <div class="popular">
        <div class="popular-fluid">
            <h1>Popular Destination</h1>
            <div>
                <p class="past">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem sint delectus reiciendis molestiae nisi maiores fuga vero alias nihil omnis!</p>
            </div>
            <div>
                <div class="row">
                <?php foreach($cities AS $index => $item): ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img class="img" src="<?php echo $item['img']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item['name']; ?></h5>
                                <p class="card-text"><?php echo $item['text']; ?></p>
                                <a href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <!--
                    <div class="col">
                        <div class="card">
                            <img class="img" src="img/barselona.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Barselona</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate eos cum, eaque non tempora expedita?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="img" src="img/berlin.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Berlin</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, neque.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="img" src="img/madrid.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Madrid</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="img" src="img/paris.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Paris</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod architecto illo, molestias earum possimus nulla quas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row1">
                    <div class="col">
                        <div class="card">
                            <img class="img" src="img/rim.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Rim</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat autem soluta ut aspernatur?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="img" src="img/dubai.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Dubai</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sunt numquam!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="img" src="img/liverpool.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">liverpool</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, possimus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="img" src="img/brasilia.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Brasilia</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, est beatae?</p>
                            </div>
                        </div>  
                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="img" src="img/manaco.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Manoco</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam perferendis pariatur autem! Temporibus?</p>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <!--/popular content-->
    <!--footer-->
    <?php include("php/footer.php") ?>
    <!--/footer-->
</body>
</html>