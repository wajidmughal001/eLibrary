<?php 
include("header.php");
?>
<!--contact form started-->
<div class="container">
        <!--Section: Contact v.2-->
        <section class="section text-center" style="color: green;">

            <br><br>
            <!--Section heading-->
            <h2 class="section-heading h1 pt-4">Contact us</h2>
            <br>
            <!--Section description-->
            <p class="section-description">
              For any information and query please fill the form below and our support team will contact you shortly.
            </p>
            <br><br>
            <div class="row">

                <!--Grid column-->
                <div class="col-md-8 col-xl-9">
                    <form id ="contact-form" name="contact-form" action="mail.php" method="POST"  onsubmit="return validateForm()" >
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="">Your name</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email" class="">Your email</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
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
                                    <textarea type="text" id="message" name="message" class="form-control"></textarea>
                                    <label for="message">Your message</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->
                    </form>
                    <div class="center-on-small-only">
                        <a class="btn btn-success form-control" onclick="validateForm()" style="color: white">Send</a>
                    </div> <div class="status" id="status"></div>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-4 col-xl-3">
                    <ul class="contact-icons">

                        <li><i class="fa fa-house"></i>
                            <p>Islamabad, Pakistan</p>
                        </li>
                        <li><i class="fa fa-phone fa-2x"></i>
                            <p>+ 92 123 11 22 345</p>
                        </li>
                        <li><i class="fa fa-envelope fa-2x"></i>
                            <p>elibrary@email.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
        </section>
        <!--Section: Contact v.2-->
    </div>
    <br>
<?php 
include("footer.php");
?>

<!--Contact form end-->
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>
  </body>
</html>