<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>cems</title>
        <?php require 'utils/styles.php';?>
      
        <link rel="icon" href="../../CEMS/images/admin.png">
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1 style="color:#000080 ; font-size:42px ; font-style:bold "><strong>  Register your Favourite events:</strong></h1><!--body content title-->

            </div>
            
            
            <div class="container">
            <div class="col-md-12">
            </div>
            </div>
            
            <div class="row"><!--technical content-->
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="https://thumbs.dreamstime.com/b/programming-concept-artificial-intelligence-neural-network-coding-different-languages-process-learning-software-development-242502700.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                        
                            <h1 style="color:#003300 ; font-size:38px ;" ><u><strong>Technical Events</strong></u></h1><!--title-->
                            <p><!--content-->
                                EMBRACE YOUR TECHNICAL SKILLS BY PARTICIPATING IN OUR DIFFERENT TECHNICAL EVENTS!
                            </p>
                            
                            <br><br>
                        <?php $id=1;
                        echo
                             '<a class="btn btn-default"  href="viewEvent.php?id='.$id.'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View Technical Events</a>'
                        ?>
                             </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="https://wrostgame.com/wp-content/uploads/2021/07/wrostgame3-195.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1 style="color:#003300 ; font-size:38px ;"><strong><u>Gaming Events</u></strong></h1><!--title-->
                            <p><!--content-->
                                EMBRACE YOUR GAMING SKILLS BY PARTICIPATING IN OUR DIFFERENT GAMING EVENTS!
                            </p>
                            
                            <br><br>
                            <?php 
                            $id=2;
                            echo
                             '<a class="btn btn-default" href="viewEvent.php?id='.$id .'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View Gaming Events</a>'
                        ?>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="https://i.pinimg.com/originals/0c/aa/bc/0caabc1720999ea9c056156654d6631d.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1 style="color:#003300 ; font-size:38px ;"><strong><u>On-Stage Events</strong></u></h1><!--title-->
                            <p><!--content-->
                                EMBRACE YOUR CONFIDENCE BY PARTICIPATING IN OUR DIFFERENT ON-STAGE EVENTS!
                            </p>
                            
                            <br><br>
                            <?php 
                            $id=3;
                            echo
                             '<a class="btn btn-default" href="viewEvent.php?id='.$id .'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View On-Stage Events</a>'
                        ?>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>

                <!-- add style -->
                <style>

                    h1 {
                        margin-bottom: 20px;
                    }

                                        /* Hover effect for img-responsive class */
                    .img-responsive {
                        width: 100%;
                        border-radius: 10px; /* Rounded corners */
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Soft shadow effect */
                        transition: box-shadow 0.3s ease, transform 0.3s ease; /* Smooth transitions */
                        position: relative; /* Position for absolute elements inside */
                        overflow: hidden; /* Ensure child elements don't overflow */
                    }

                    .img-responsive:hover {
                        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Enhanced shadow on hover */
                        transform: scale(1.05); /* Scale up slightly on hover */
                    }

                    /* Border animation keyframes */
                    @keyframes borderExpand {
                        0% {
                            transform: scale(0);
                            opacity: 0;
                        }
                        100% {
                            transform: scale(2);
                            opacity: 1;
                        }
                    }

                    .img-responsive:hover::after {
                        content: '';
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        width: 100%;
                        height: 100%;
                        border-radius: 50%;
                        background-color: rgba(0, 0, 255, 0.3);
                        animation: borderExpand 0.5s cubic-bezier(0.6, 0, 0.4, 1) forwards;
                        z-index: -1;
                    }

                    /* Text animation on hover */
                    .subcontent h1 strong u {
                        display: inline-block;
                        transition: transform 0.3s ease;
                    }

                    .subcontent h1 strong u:hover {
                        transform: rotateY(180deg);
                    }




                    .btn {
                        background-color: #007bff; /* Blue button background color */
                        color: #fff; /* White text color */
                        border-radius: 5px; /* Rounded corners */
                        padding: 10px 20px; /* Padding inside the button */
                        margin-top: 20px; /* Space above the button */
                        transition: background-color 0.3s ease; /* Smooth transition on hover */
                    }

                    .btn:hover {
                        background-color: #0056b3; /* Darker blue on hover */
                    }

                
                    /* Additional styling for the link text */
                    a {
                        color: #007bff; /* Blue link color */
                        text-decoration: none; /* Remove underline */
                    }

                    a:hover {
                        text-decoration: underline; /* Underline on hover */
                    }

                </style>


                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/offstage.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1 style="color:#003300 ; font-size:38px ;"><strong><u>Off-Stage Events</u></strong></h1><!--title-->
                            <p><!--content-->
                                 EMBRACE YOUR TALENT BY PARTICIPATING IN OUR DIFFERENT OFF-STAGE EVENTS!
                            </p>
                            
                            
                            <br><br><br>
                            <?php 
                            $id=4;
                            echo
                             '<a class="btn btn-default" href="viewEvent.php?id='.$id .'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View Off-Stage Events</a>'
                        ?>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
  
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>