<head>
  <style>
    * {
    box-sizing: border-box;
}

body {
    font-family: 'Public Sans';
}

.container {
    width: 1170px;
    padding-right: 15px;
    padding-left: 15px;
    margin: auto;
}

/* Start Landing Page */

.landing-page {
    position: relative;
    background-color: #FFF;
}

.landing-page .header-area {
    display: flex;
    padding: 25px 0 0;
    position: relative;
}

.landing-page .header-area .logo {
    text-transform: uppercase;
    font-style: italic;
    margin-top: 10px;
    font-size: 19px;
    width: 300px;
    color: #5d5d5d;
}

.landing-page .header-area .links {
    list-style: none;
    padding: 0;
    margin: 0;
    width: 100%;
    text-align: right;
}

.landing-page .header-area .links li {
    display: inline-block;
    margin-left: 30px;
    color: #5d5d5d;
    cursor: pointer;
}

.landing-page .header-area .links li:last-child {
    border: 0;
    border-radius: 20px;
    padding: 10px 18px;
    color: #FFF;
    background-color: #6c63ff;
}

.landing-page .info {
    width: 35%;
    float: left;
    margin-top: 130px;
}

.landing-page .info h1 {
    font-size: 44px;
    margin: 0 0 20px;
    line-height: 1.4;
    color: #5d5d5d;
}

.landing-page .info p {
    margin: 0;
    line-height: 1.6;
    font-size: 15px;
    color: #5d5d5d;
}

.landing-page .info button {
    border: 0;
    border-radius: 20px;
    padding: 12px 30px;
    margin-top: 30px;
    cursor: pointer;
    color: #FFF;
    background-color: #6c63ff;
}

.landing-page .image {
    width: 50%;
    float: right;
    margin-top: 35px;
}

.landing-page .image img {
    max-width: 100%;
}

.clearfix {
  clear: both;
}
.demo{
  animation: 1s ease-out 0s 1 slideInLeft;
}

</style>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
<title>Nidhi Soft : Landing Page</title>
</head>
<div class="landing-page">
  <div class="container">
    <div class="header-area">
      <div class="logo" onClick="reloadDiv()">Nidhi <b>Software</b></div>
      <ul class="links">
        <!-- <li>Home</li>
        <li>About Us</li>
        <li>Work</li>
        <li>Info</li>-->
        <!-- <li><a href="../soft/cpadmin.php">Login</a></li>  -->
        <li onClick="myFunction()">Login</li>
      </ul>
    </div>
    <div class="info" id="demo">
    <h1>Looking For Inspiration</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus odit nihil ullam nesciunt quidem iste, Repellendus odit nihil</p>
      <button>DEMO</button>
    </div>
    <div class="image">
      <img src="https://i.postimg.cc/65QxYYzh/001234.png">
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<script>
  function myFunction(){
    $( "#demo" ).load( "login.php" );
  }

  function reloadDiv()
  {
    $('#demo').load(self)
  }

  var attempt = 5; // Variable to count number of attempts.
// Below function Executes on click of login button.

</script>