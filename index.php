<?php
$home = 'active';
include('layout/front/header.php'); 
?>




<!-- Header -->
<!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap" rel="stylesheet">
 
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/722644a5fc.js" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="styles.css">
<header id="header" class="header">
    <div class="header-content">
    <section id="title">

<div class="container-fluid">




  <!-- Title -->

  <div class="row">

    <div class="col-lg-6">
      <h1>Easy Remote Learning for Private Tutors and Students</h1>
      
    </div>


<div class="col-lg-6">

      <img class="title-image" src="assets/images/computer.png" alt="computer-mockup">
    </div>

  </div>
</div>
</section>
    </div> <!-- end of header-content -->
</header> <!-- end of header -->
<!-- end of header -->



  <!-- About -->


  <section id="testimonials">


    <div id="testimonials-carousel" class="carousel slide" data-ride="false">
      <div class=" carousel-inner">
        <div class="carousel-item active">
          <h1> Are you are Private Tutor? </h1>
          <p> This is Platform built for you and your students to make teaching easy!</p>

        </div>


  </section>

<!-- Features -->

<section id="features">
    <div class="row">
      <div class="features-box col-lg-4">
        <i class="icon fas fa-check-circle fa-4x"></i>
        <h3>What can you do?</h3>
        <p>Students can discuss about their work or ask any general questions. </p>
        <p>Teachers can create a personalised quiz for their students and send feedback. </p>
        <p>Students and teachers have thier own folders where they can write notes. </p>

      </div>



      <div class="features-box col-lg-4">
      <i class="icon fas fa-question fa-4x"></i>
        <h3>How can you use this service?</h3>
        <p>Students & Tutors can register.</p>
        <p>At the moment there is only the basic plan available which is free of charge.</p>
        <p>The will be more plans available soon. These are Advance and Premium Plans.</p>
    

      </div>

      <div class="features-box col-lg-4">
      <i class="icon fas fa-school fa-4x"></i>
        <h3>Who is this for?</h3>
        <p>This service is specifically for Tutors and Students.</p>
        <p>Tutors who teach from Key stage 3 to A-levels can use this platform.</p>
        <p>Tutors can use this platform howevr they want. This could be a addition to thier one-to-one tutoring sessions with thier students.</p>
      </div>

    </div>


  </section>

  <!-- Pricing -->

  <section id="pricing">

    <h2>Choose a suitable plan</h2>
    <p>Simple and affordable price plans.</p>



    <div class="row">

      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Basic</h3>
          </div>
          <div class="card-body">
            <h2>Free</h2>
            <p>Disscussion board</p>
            <p>Tutors can create a quiz and give feedback</p>
            <p>Create notes</p>
            <a href="register.php" class="btn btn-lg btn-block btn-dark">Register</a>
    
          </div>
        </div>
      </div>



      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Advance</h3>
          </div>
          <div class="card-body">
            <h2>£15 / mo</h2>
            <p>Basic Plan Included</p>
            <p>Generate Quiz Questions</p>
            <p>Eductaional Videos</p>
            <button class="btn btn-lg btn-block btn-dark"type="button">Coming Soon</button>
          </div>
        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-12">
        <div class="card">
          <div class="card-header">
            <h3>Premium</h3>
          </div>
          <div class="card-body">
            <h2>£30 / mo</h2>
            <p>Basic and Advance Plans included</p>
            <p>Check student Progress</p>
            <p>Create/generate assessments</p>
            <p></p>
            <button class="btn btn-lg btn-block btn-dark" type="button">Coming Soon</button>
          </div>
        </div>
      </div>


  </section>




  <!-- Footer -->

  <footer id="footer">

    <p>© Copyright Remote Tutoring 2022</p>

  </footer>


</footer>


<?php include('layout/front/footer.php'); ?>