<title>cems</title>
<style>
/* styles.css */

/* Background image */
.bgImage {
    /* background-image: url(https://images.static-collegedunia.com/public/college_data/images/appImage/1622186295cover.jpg?tr=c-force); */
    background-size: cover;
    background-position: center center;
    height: 650px;
    margin-bottom: 25px;
    position: relative;
}

/* Navbar */
.navbar {
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    padding: 6px;
    /* position: absolute; */
    /* top: 0;
    left: 0; */
    width: 100%;
    display: flex;
    flex-direction:column;
}

.navbar-brand {
    color: #fff;
    font-size: 24px;
    font-weight: bold;
}
.navbar-brand > img{
    height: 90px;
    width:90px;
    border-radius:8%;
    margin-left:1px;
}

.navbar-nav {
    margin-right: 0;

}

.navbar-nav li {
    display: inline-block;
    margin-left: 20px;
}

.navbar-nav li a {
    color: #fff;
    font-weight: bold;
    text-decoration: none;
    transition: color 0.3s ease;
}

.navbar-nav li a:hover {
    color: #FFC107; /* Change color on hover */
}

/* Jumbotron */
.jumbotron {
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    color: #fff;
    padding: 30px 20px;
    text-align: center;
}

.jumbotron h1 {
    font-size: 38px;
    font-weight: bold;
    margin-bottom: 40px;
    /* margin-top: 200px; */
}

.jumbotron p {
    font-size: 20px;
    margin-bottom: 40px;
}

#myVideo {
  position: absolute;
  z-index: -1;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}


</style>
<header class="bgImage" > 
    <nav class="navbar" >
        <div class="container">
        <div class="navbar-header"><!--website name/title-->
               
                <a class = "navbar-brand">
                   <!-- <img src="https://media-exp1.licdn.com/dms/image/C561BAQHeUN_bRUbgDA/company-background_10000/0/1614940199571?e=2147483647&v=beta&t=3j4SaplGtsybbyEXRS_uQ68TTnYeoSt2zf1zLzZVHlI" alt="logo"> -->
                   <!-- <img src="https://play-lh.googleusercontent.com/-EJqwKnePtuqamfDPwuL-eGPH9GgT_9UaABXdiAqX0CFLYDDsewgcTgF946zmMw6JQ" alt="logo"> -->
                   <!-- <img src="../../CEMS/images/logo.png" alt="logo"> -->
                   <h1 class="logo">CEMS</h1>
                        <style>
                            .logo {
                                font-size: 40px;
                                font-weight: 800; */
                                font-family: 'Arial', sans-serif; /* Use a suitable font-family
                               
                            }
                            .navbar-brand > img {
                                /* height:140px; */
                            }

                        </style>
                </a>
        </div>
       
            <ul class="nav navbar-nav navbar-right"><!--navigation-->
                    <li><a href = "index.php"><strong>Home</strong></a></li>
                    <li><a href = "register.php"><strong>Register</strong></a></li>
                    <li><a href = "contact.php"><strong>Contact Us</strong></a></li>
                    <li><a href = "aboutus.php"><strong>About us</strong></a></li>
                    <li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "login_form.php">Login <span class = "glyphicon glyphicon-log-in"></span></a></li>
                
            </ul>


        </div><!--container div-->
    </nav>




    <!-- background video -->
    <video autoplay muted loop inline id="myVideo">
                                    <source src="../../CEMS/images/bgi.mp4" type="video/mp4">
                                    Your browser does not support HTML5 video.
    </video>





    <div class = "col-md-12">
        <div class = "container">
            <div class = "jumbotron"><!--jumbotron-->
                <h1 style= ""><strong>Explore<br></strong> Your Favorite Event with <br><strong>BGI</strong></h1><!--jumbotron heading-->
                <br><div class="browse d-md-flex col-md-14" >
                <div class="row">
                  
            </div>
        </div>
    </div>
</header>



