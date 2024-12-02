<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <base href="http://127.0.0.1:5500/"> -->
  <!-- <base href="http://<?=$_SERVER['SERVER_NAME']?>/agriden/"> -->
  <base href="http://<?=$_SERVER['SERVER_NAME']?>/">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- <link href="./assets/css/global.css" rel="stylesheet" type="text/css" /> -->
  <title>Home</title>

  <style>

body{
  /* background-image: url("./php/home/COVER.png"); */
  background-image: url("./COVER.png");
  background-size:cover;
}
.cover{

 padding: 86px 40px;
}


.description{
 width: 540px;
 margin-top: 40px;
}

.credits{
 margin-top: 400px;
}

.description  h1{
font-size: 4.0rem;
font-weight: 750;
line-height: 0.9;
margin-bottom: 0;
}

.description  span{
 font-size: 1.5rem;
 line-height: 1.8;
}

.description  p{
 font-size: 1.3rem;
 line-height: 1.8;
 font-weight: bold;
}


.credits{
 font-size: 1rem;
 font-weight: 700;
}

.primary{
  color: #004D47
}

  </style>
</head>
<img>
<section>
  <div class="container cover">
    <div class="row">
      <div class="col-12 d-flex justify-content-center ">
        <div>
          <figure>
            <!-- <img src="./php/home/Logo.png" alt="logo" /> -->
            <img src="./Logo.png" alt="logo" />
          </figure>
          <div>
          </div>
        </div>
      </div>
      <div class="row description primary">
        <div class="col-12 ">
          <div>
            <h1>Website Under Construction</h1>
            <span><b>Per qualsiasi informazione scrivere a</b></span>
            <div>
              <p>info@agriden.it</p>
            </div>
          </div>
        </div>
        <div class="col-12 credits">
          <div>
            <span>
              Credits: I-factory.biz
            </span>
          </div>
        </div>
      </div>
    </div>

</section>


<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>