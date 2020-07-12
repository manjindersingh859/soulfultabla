<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact us</title>
    <?php
    include 'common_files/CommonImports.php';
    ?>
    <!-- <link rel="stylesheet" type="text/css" href="css/form.css"> -->
    <style>

        h2{
            margin-top: 5%;
             font-size:33px ;
              font-weight: bold;
        }
      
    </style>
</head>

<body>
    <?php
    include 'common_files/nav.php';
    ?>

    <!--Section: Contact v.2-->
    <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">  Contact us  </h2>


        <div class="container-fluid" style="margin-top: 4%;">
            <div class="row">
                <div class="col-md-2"></div>
                <!--Grid column-->
                <div class="col-md-5 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="controller/contact.php" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Your name</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Your email</label>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message">Your message</label>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>

                    <div class="text-center text-md-left">
                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 text-center" style="margin-top: 3%;">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p style="font-size: 20px;">Punjab, PIN 144210, INDIA</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p style="font-size: 20px;">Ph. 8288853457</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p style="font-size: 20px;">pskpsk.s5@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
                <div class="col-md-2"></div>
            </div>
        </div>

    </section>
    <!--Section: Contact v.2-->

</body>

</html>