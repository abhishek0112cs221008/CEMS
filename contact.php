<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>cems</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1 style="color:#003300 ; font-size:38px ;"><strong>Contact Us</strong></h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="container">
                <div class="col-md-6 contacts">
                    <h1 style="color:#000080 ; font-size:42px ; font-style:bold "><span class="glyphicon glyphicon-user"></span> College</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: info@bistbpl.in<br>
    
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 9109954681
                    </p>
                </div>
                <div class="col-md-6 contacts">
                    <h1 style="color:#000080 ; font-size:42px ; font-style:bold "><span class="glyphicon glyphicon-user"></span> Abhishek </h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: abhishek@gmail.com<br>
    
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 8770321224
                    </p>
                </div>
                
            </div>
			
            
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>


<style>
    /* General styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    color: #333;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1000px;
    margin: 10;
    padding: 20px;
}

.col-md-12 {
    text-align: center;
    margin-bottom: 30px;
}

hr.divider {
    border: none;
    border-top: 2px solid #3498db; /* Border color */
    margin: 20px 0;
}

/* Contact section styling */
.contacts {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    transition: transform 0.3s ease;
}

.contacts:hover {
    transform: translateY(-5px); /* Hover effect */
}

h1, h2 {
    color: #3498db; /* Title color */
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 15px;
    transition: color 0.3s ease;
}

h2 {
    font-size: 28px;
    margin-bottom: 10px; /* Increased margin for better spacing */
}

p {
    margin-bottom: 20px; /* Increased margin for better spacing */
    line-height: 1.5; /* Improved line height for readability */
}

strong {
    font-weight: bold;
}

/* Animations */
.animated {
    animation-duration: 1s;
    animation-fill-mode: both;
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translate3d(0, -100%, 0);
    }
    to {
        opacity: 1;
        transform: none;
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translate3d(-100%, 0, 0);
    }
    to {
        opacity: 1;
        transform: none;
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translate3d(100%, 0, 0);
    }
    to {
        opacity: 1;
        transform: none;
    }
}

</style>