<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/Css/index.css?date=<?php echo time() ?>">
    <title>JQUERY EXERCISES</title>
</head>

<body>
    <!-- <h1 class=" teste text-light">olaaaaaaaaaaaaaaaa</h1>
    <button class="btn btn-primary button-teste" value="1">Hello, world!</button> -->
    <!-- <div class="moon">
        <div class="circle"></div>
    </div> -->

    <!-- login -->
    <div class="container d-flex justify-content-center align-tems-center mt-5 pt-5">
        <div class="login-box mt-5 mb-5 pt-5">
            <h2 class="teste">Login</h2>
            <form>
                <div class="user-box">
                    <input type="text" name="" required="">
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="" required="">
                    <label>Password</label>
                </div>
                <!-- <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Click me!
                    </a> -->
                <div class="container d-flex justify-content-around buttons mb-3">
                    <button class="btn btn-primary button-teste-numero" value="1">Numero</button>
                    <button class="btn btn-primary button-teste-texto" name="Funcionou">Texto</button>
                </div>
                <div class="container d-flex justify-content-around buttons">
                    <button class="btn btn-primary button-teste-fadein" value="1">Fade in</button>
                    <button class="btn btn-primary button-teste-fadeout" value="1">Fade out</button>
                </div>
            </form>
        </div>
    </div>

    <!-- desktop fade -->
    <div class="container justify-content-around card-desktop">
        <div class="card img1" style="width: 18rem;">
            <img class="card-img-top" src="https://cdn.pixabay.com/photo/2022/07/25/15/18/cat-7344042_960_720.jpg" alt="Card image cap">
        </div>
        <div class="card img2" style="width: 18rem;">
            <img class="card-img-top" src="https://cdn.pixabay.com/photo/2020/04/30/03/26/rufous-5111261_960_720.jpg" alt="Card image cap">
        </div>
        <div class="card img3" style="width: 18rem;">
            <img class="card-img-top" src="https://cdn.pixabay.com/photo/2022/07/26/13/55/egg-7345934_960_720.jpg" alt="Card image cap">
        </div>
    </div>
    <div class="container justify-content-around mt-3 card-desktop">
        <button class="btn btn-primary button-fade1" value="1">Fade</button>
        <button class="btn btn-primary button-fade2" value="1">Fade</button>
        <button class="btn btn-primary button-fade3" value="1">Fade</button>
    </div>

    <!-- Mobile fade -->
    <div class="container justify-content-center mt-3 card-mobile">
        <div class="card img1" style="width: 18rem;">
            <img class="card-img-top" src="https://cdn.pixabay.com/photo/2022/07/25/15/18/cat-7344042_960_720.jpg" alt="Card image cap">
        </div>
    </div>
    <div class="container justify-content-center mt-3 card-mobile">
        <button class="btn btn-primary button-fade1" value="1">Fade</button>
    </div>
    <div class="container justify-content-center mt-3 card-mobile">
        <div class="card img2" style="width: 18rem;">
            <img class="card-img-top" src="https://cdn.pixabay.com/photo/2020/04/30/03/26/rufous-5111261_960_720.jpg" alt="Card image cap">
        </div>
    </div>
    <div class="container justify-content-center mt-3 card-mobile">
        <button class="btn btn-primary button-fade2" value="1">Fade</button>
    </div>
    <div class="container justify-content-center mt-3 card-mobile">
        <div class="card img3" style="width: 18rem;">
            <img class="card-img-top" src="https://cdn.pixabay.com/photo/2022/07/26/13/55/egg-7345934_960_720.jpg" alt="Card image cap">
        </div>
    </div>
    <div class="container justify-content-center mt-3 card-mobile">
        <button class="btn btn-primary button-fade3" value="1">Fade</button>
    </div>

    <!-- img switch -->
    <div class="container justify-content-center mt-5 card-desktop">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top img-troca" src="Assets/Img/cachorro.jfif" alt="Card image cap">
        </div>
    </div>
    <div class="container justify-content-center mt-3 card-desktop">
        <button class="btn btn-primary button-troca" type="button">Switch</button>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./Assets/Js/index.js"></script>
</body>

</html>