<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES ('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website create by Us</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/648975cacc26a871b0226f53/1h2sf88dt';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>CARE</strong>4U </a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#doctors">Doctors</a>
        <a href="#appointment">Appointment</a>
        <a href="loginReg.php">Login/Register</a>
        <a href="#review">Review</a>
        <a href="#blogs">Blogs</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>We take care of your healthy life</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="#appointment" class="btn"> Appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>available hospitals</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>About</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>Take the world's best quality treatment</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus nesciunt.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> Our <span>Services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Free checkups</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>Expert doctors</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>Medicines</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>Bed facility</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>Total care</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/doc-1.jpg" alt="">
            <h3>Doctor 1</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>Doctor 2</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>Doctor 3</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>Doctor 4</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>Doctor 5</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-6.jpg" alt="">
            <h3>Doctor 6</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            
            </div>
        </div>
        <div class="box">
            <img src="image/doc-7.jpg" alt="">
            <h3>Doctor 7</h3>
            <span>intern doctor</span>
            <div class="share">                
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/doc-8.jpg" alt="">
            <h3>Doctor 8</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/doc-9.jpg" alt="">
            <h3>Doctor 9</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- Login/Register Section Starts -->

<!-- Login/Register Section Ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>Appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>Make Appointment</h3>
            <input type="text"   name="name"   placeholder="your name" class="box">
            <input type="number" name="number" placeholder="your number" class="box">
            <input type="email"  name="email"  placeholder="your email" class="box">
            <input type="date"   name="date"   class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> Client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/patient1.png" alt="">
            <h3>Patient 1</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

        <div class="box">
            <img src="image/patient 2.png" alt="">
            <h3>Patient 2</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

        <div class="box">
            <img src="image/patient 3.jpg" alt="">
            <h3>Patient 3</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 14 june, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Student </a>
                </div>
                <h3> Doctor's blog title goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 14 june, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Student </a>
                </div>
                <h3> Doctor's blog title goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 14 june, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Student </a>
                </div>
                <h3> Doctor's blog title goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-4.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 14 june, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Student </a>
                </div>
                <h3> Doctor's blog title goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-5.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 14 june, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Student </a>
                </div>
                <h3> Doctor's blog title goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-6.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 14 june, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Student </a>
                </div>
                <h3> Doctor's blog title goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
<div class="container_contact">
<div class="section-title">
<h2>Contact</h2>
</div>
</div>
<div>
    <!-- Map -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.293875311003!2d85.3684148252429!3d24.02069992848691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f49c36b1388d7d%3A0xe245eea52c82ac55!2sUCET%20VBU%20Hazaribag!5e0!3m2!1sen!2sin!4v1686678783037!5m2!1sen!2sin" 
        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>

</div>
<div class="container_contact">
<div class="row mt-5">
<div class="col-lg-6">
<div class="row">
<div class="col-md-12">
<div class="info-box">
<i class="bx bx-map"></i>
<h3>Our Address</h3>
<p>University College of Engineering and Technology, Hazaribag, Jharkhand, 835301</p>
</div>
</div>
<div class="col-md-6">
<div class="info-box mt-4">
<i class="bx bx-envelope"></i>
<h3>Email Us</h3>
<p>info@example.com<br>contact@example.com</p>
</div>
</div>
<div class="col-md-6">
<div class="info-box mt-4">
<i class="bx bx-phone-call"></i>
<h3>Call Us</h3>
<p>+91 5589 55488 55<br>+91 6678 254445 41</p>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
<div class="row">
<div class="col-md-6 form-group">
<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
</div>
<div class="col-md-6 form-group mt-3 mt-md-0">
<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
</div>
</div>
<div class="form-group mt-3">
<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
</div>
<div class="form-group mt-3">
<textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
</div>
<div class="my-3">
<div class="loading">Loading</div>
<div class="error-message"></div>
<div class="sent-message">Your message has been sent. Thank you!</div>
</div>
<div class="text-center"><button type="submit">Send Message</button></div>
</form> -->
</div>
</div>
</div>
</section><!-- End Contact Section -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> Home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> About </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> Services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> Doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> Appointment </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> Review </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> Blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> Dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Cardiology </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Ambulance service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91 688238801 </a>
            <a href="#"> <i class="fas fa-phone"></i> +91 782546978 </a>
            <a href="#"> <i class="fas fa-envelope"></i> student1@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> student2@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> sindoor, Hazaribag </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <!-- <a href="#"> <i class="fab fa-faceappointment-f"></i> faceappointment </a> -->
            <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> Facebook </a>
            <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> Pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>Student</span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>

