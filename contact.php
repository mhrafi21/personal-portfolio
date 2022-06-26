<?php include("includes/head.php") ?>
<?php include("includes/header.php") ?>


<main>
  <div class="container pt-5">
    <h2 class="text-dark">Contact</h2>
    <p class="text-muted ">Get in touch</p>
    <div class="row">
      <div class="col-lg-7 pe-5 pb-5 mb-5">
        <h5>Message me</h5>
        <form class="formm" action="">
          <div class="row">
            <div class="col-6">
              <input class="form-control py-2 mt-3  " type="text" name="name" id="inputt" placeholder="Your Name" required>
            </div>
            <div class="col-6">
              <input class="form-control py-2 mt-3 input" type="email" name="email" placeholder="Email" required>
            </div>
          </div>
          <input class="form-control py-2 mt-3 input" type="text" name="subject" id="" placeholder="Subject" required>
          <textarea class="form-control mt-3" name="" id="" cols="30" rows="10" required></textarea>
          <input class="btn btn-primary mt-3 px-3 py-2" value="Send Meassage" type="submit" name="submit">
        </form>
      </div>
      <div class="col-lg-5">
        <h5>Contact Info</h5>
        <p class="text-muted">Always avialable for working if the right project comes along, Feel free to contact with me.</p>
        <div>
          <div class="pt-4">
            <h5>Name</h5>
            <span class="text-muted">Mahdi Hasan Rafi</span>
          </div>
          <div class="pt-4">
            <h5>Call Me</h5>
            <span class="text-muted">01636144853</span>
          </div>
          <div class="pt-4">
            <h5>Email Me</h5>
            <span class="text-muted">rafi71078@gmail.com</span>
          </div>
          <div class="pt-4">
            <h5>Location</h5>
            <span class="text-muted">Nakla,Sherpur,<br>
              Bangladesh</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>




<?php include("includes/footer.php") ?>