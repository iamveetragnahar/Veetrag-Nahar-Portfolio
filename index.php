<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Veetrag Nahar Portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
   <link rel="icon" type="image/x-icon" href="images/veet.jpg">


   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      
.servicesa .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:1.5rem;
   align-items: flex-start;
}

.servicesa .box-container .box{
   padding:3rem 2rem;
   border:var(--border-light);

}

.servicesa .box-container .box i{
   font-size: 4rem;
   margin-bottom: 2rem;
}

.servicesa .box-container .box h3{
   margin:1rem 0;
   font-size: 2rem;
   padding:1.5rem;
   background-color: var(--yellow);
   font-weight: normal;
}

.servicesa .box-container .box p{
   line-height: 2;
   font-size: 1.7rem;
}

.servicesa .box-container .box:hover{
   background-color: var(--black);
}

.servicesa .box-container .box:hover i{
   color:var(--white);
}

.servicesa .box-container .box:hover p{
   color:var(--white);
}
</style>

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Projects  </a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#portfolio">Projects</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="https://www.facebook.com/iamveetragnahar/" class="fab fa-facebook-f"></a>
      <a href="https://twitter.com/iamveetragnahar" class="fab fa-twitter"></a>
      <a href="https://www.instagram.com/iamveetragnahar/" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/iamveetragnahar/" class="fab fa-linkedin"></a>
      <a href="https://github.com/veetragnahar/" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/veet.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">Hey! I am Veetrag Nahar</h3>
      <span data-aos="fade-up">web designer & Software developer</span>
      <p data-aos="fade-up">4th Year B.Tech Computer Science student at Institute of Engineering and Science, IPS Academy,Indore with excellent academic record and keen interest and practical exposure in the field of Information Technology, especially web development and applications.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>About Me</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">My name is Veetrag Nahar, and i am from Indore, India. Presently, 4th Year B.Tech Computer Science student at Institute of Engineering and Science, IPS Academy,Indore with excellent academic record and keen interest and practical exposure in the field of Information Technology, especially web development and applications. I am looking for opportunity in the same field. My strengths are my positive attitude, punctuality, and interpersonal skills. My weakness is my emotional nature. This is all about me.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span>Veetrag Nahar</h3>
         <h3 data-aos="zoom-in"> <span>email : </span> veetragnahr@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Indore, India </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +91-6260898334</h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 19 years </h3>
         <h3 data-aos="zoom-in"> <span>linkedin : </span><a href="https://www.linkedin.com/in/iamveetragnahar/">iamveetragnahar</a></h3>
      </div>

      <a href="veetrag nahar resume.docx" class="btn" data-aos="fade-up" Download>Download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3 style="width:95%;"><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3 style="width:80%;"><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3 style="width:70%;"><span>JavaScript</span> <span>70%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3 style="width:65%;"><span>ReactJS</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3 style="width:75%;"><span>PHP</span> <span>75%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3 style="width:85%;"><span>MySQL</span> <span>85%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3 style="width:85%;"><span>C/C++</span> <span>85%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3 style="width:75%;"><span>Java</span> <span>75%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3 style="width:70%;"><span>Python</span> <span>70%</span></h3> </div>
      
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2023 )</span>
               <h3>Computer Science Engineering</h3>
               <p>Pursuing my B.tech in Computer Science and Engineering from Institute of Engineering and Science, IPS academy, Indore.</p>
               <b style="font-size:20px;">CGPA - 9.51/10</B>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2018 - 2019 )</span>
               <h3>Higher Scondary School</h3>
               <p>Completed My Higher secondsry schooling(Class 12th)with the stream of Physics, Chemistry and Mathematics from Adarsh Bal Vinay Mandir, Indore.</p>
               <b style="font-size:20px;">Percentage - 83%</B>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2016 - 2017 )</span>
               <h3>Secondary School</h3>
               <p>Completed My Secondsry schooling(Class 10th)from Adarsh Bal Vinay Mandir, Indore.</p>
               <b style="font-size:20px;">Percentage - 89%</B></div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2022-Present )</span>
               <h3>Web developer, ONGC</h3>
               <p>working as a web developer at India's Biggest PSU- ONGC.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2020)</span>
               <h3>Google IT automation with Python</h3>
               <p>Completed a specialization course on Google IT automation with Python offered by Google via Coursera. </p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2020)</span>
               
               <h3>Google IT Support</h3>
               <p>Completed a specialization course on Google IT Support offered by Google via Co  ursera. </p></div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>web development</h3>
         
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>graphic design</h3>
         
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3 style="font-size:15px;">Software development and Management</h3>
         
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-chart-line"></i>
         <h3>seo marketing</h3>
         
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bullhorn"></i>
         <h3>digital marketing</h3>
         
      </div>

      <div class="box" data-aos="zoom-in">
      <i class="fa fa-book"></i>
      <h3 style="font-size:18px;">Teaching Emerging Technologies</h3>
         
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="servicesa" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>Projects</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
            <h3>Sorting Visualizer</h3>
            <p> Deeveloped a web based Platform to visualize the sorting process.</p>
         
      </div>

      <div class="box" data-aos="zoom-in">
         
         <h3>Dekstop Application</h3>
         <p> Deeveloped a application to order the food.</p>
         
      </div>

      <div class="box" data-aos="zoom-in">
                 <h3>Spotify Clone</h3>
                 <p>Developed a clone of famous platform Spotify by using Web Technologies.</p>
         
      </div>

      <div class="box" data-aos="zoom-in">
                  <h3>Airline Reservation System</h3>
                  <p> To book an airline services developed a platform using mainly Java.</p>   

         
      </div>

      <div class="box" data-aos="zoom-in">
                <h3 style="font-size:18px;">Vechile Parking Management System.</h3>
                <p style="font-size:12px;">To manage the problem of parking, I developed this application.</p>
         
      </div>

      <div class="box" data-aos="zoom-in">
      <h3>Tic-Tac-Toe</h3>
      <p style="font-size:16px;"> Due to also interset in game development, I developed tic-tac-toe game.</p>
         
      </div>

   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="Please enter your valuable message here......" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+91-6260898334</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p><a href="mailto:veetragnahr@gmail.com">veetragnahr@gmail.com</a></p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Indore, india - 452010</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Veetrag Nahar</span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>