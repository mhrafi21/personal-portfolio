<?php include("includes/head.php") ?>
<div class=" w-100">
  <div class="container">
    <nav class="s-nav ">
      <a class="fs-1 fw-bolder text-primary" href="">RAFI</a>
      <ul class="nav-bar ">
        <li><img class="p-img img-fluid" src="./img/hero.jpg" alt=""></li>
        <li class="t-info">
          <h3 class="text-center">Mahdi Hasan</h3>
          <p class="text-center">Web developer</p>
        </li>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>

      <div class=" icons-btn">
        <i id="openBtn" class="fa-solid fa-bars i-1"></i>
        <i id="closeBtn" class="fa-solid fa-xmark i-2"></i>
      </div>

    </nav>
  </div>
</div>
<header>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <p class="text-muted fs-5">Web Developer</p>
        <h1 class="text-dark fw-bolder">Mahdi Hasan</h1>
        <p class="text-gray py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod temporibus qui molestiae repellendus sit eos earum omnis sed hic adipisci amet architecto dicta fuga soluta dolores, ducimus perferendis provident reprehenderit!</p>
        <div class=" d-flex gap-3">
          <a class="btn btn-primary btn-outline-white border-primary px-4 py-2 cv-btn" href="" download="test.pdf" role="button">Download CV</a>
          <a class="btn btn-white border px-4 py-2 contact-btn" href="contact.php">Contact</a>
        </div>
      </div>
      <div class="col-lg-6 text-center ">
        <img src="./img/profile.png" alt="">
      </div>
    </div>
  </div>
</header>
<main>
  <section class="pt-5">
    <div class="container">
      <div class="row ">
        <div class="col-lg-4 mt-3">
          <div class="border p-3 d-flex align-items-center justify-content-center">
            <div>
              <small class="fw-bolder">Working Hour</small>
              <p class="fs-1 text-muted">200+</p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-3">
          <div class="border p-3 d-flex align-items-center justify-content-center">
            <div>
              <small class="fw-bolder"> Happy Clients</small>
              <p class="fs-1 text-muted">500+</p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-3">
          <div class="border p-3 d-flex align-items-center justify-content-center">
            <div>
              <small class="fw-bolder"> Award Won</small>
              <p class="fs-1 text-muted">17+</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-5 ">
    <div class="container">
      <h2 class="text-dark">What I Do</h2>
      <div class="row">
        <div class="col-lg-6 py-3">
          <i class="fa-solid fa-dumpster text-primary fs-1 py-2"></i>
          <h5>Ecommerce</h5>
          <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore debitis quia delectus magnam soluta odit quam dolorum sapiente, similique est?</p>
        </div>
        <div class="col-lg-6 py-3">
          <i class="fa-solid fa-pen text-primary fs-1 py-2"></i>
          <h5>Ecommerce</h5>
          <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore debitis quia delectus magnam soluta odit quam dolorum sapiente, similique est?</p>
        </div>
        <div class="col-lg-6 py-3">
          <i class="fa-solid fa-desktop text-primary fs-1 py-2"></i>
          <h5>Ecommerce</h5>
          <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore debitis quia delectus magnam soluta odit quam dolorum sapiente, similique est?</p>
        </div>
        <div class="col-lg-6 py-3 ">
          <i class="fa-solid fa-flag text-primary fs-1 py-2"></i>
          <h5>Management</h5>
          <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore debitis quia delectus magnam soluta odit quam dolorum sapiente, similique est?</p>
        </div>
      </div>
    </div>
  </section>
</main>




<?php include("includes/footer.php") ?>