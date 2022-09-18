<?php include("includes/head.php") ?>
<?php include("includes/header.php") ?>

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
          <div class=" p-3 border d-flex align-items-center justify-content-center">
            <div>
              <small class="fw-normal fs-3">Working Hour</small>
              <div class="fs-1 text-muted counter" data-target="5000">0</div>

            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-3">
          <div class=" p-3 border d-flex align-items-center justify-content-center">
            <div>
              <small class="fw-normal fs-3"> Happy Clients</small>
              <div class="fs-1 text-muted counter" data-target="100">0</div>

            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-3">
          <div class=" p-3 border d-flex align-items-center justify-content-center">
            <div>
              <small class="fw-normal fs-3"> Award Won</small>
              <div class="fs-1 text-muted counter" data-target="10">0</div>
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
        <div class="col-lg-6 py-3 ">
          <i class="fa-solid fa-dumpster text-primary fs-1 py-2"></i>
          <h5>Ecommerce</h5>
          <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore debitis quia delectus magnam soluta odit quam dolorum sapiente, similique est?</p>
        </div>
        <div class="col-lg-6 py-3">
          <i class="fa-solid fa-pen text-primary fs-1 py-2"></i>
          <h5>Front-End</h5>
          <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore debitis quia delectus magnam soluta odit quam dolorum sapiente, similique est?</p>
        </div>
        <div class="col-lg-6 py-3">
          <i class="fa-solid fa-desktop text-primary fs-1 py-2"></i>
          <h5>Back-end</h5>
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