const openBtn = document.querySelector("#openBtn");
const closeBtn = document.querySelector("#closeBtn");
const navBar = document.querySelector(".nav-bar");
const openBtnClose = document.querySelector(" .icons-btn .i-1");
const closeBtnOpen = document.querySelector(" .icons-btn .i-2");

openBtn.addEventListener("click", () => {
  navBar.classList.add("open");
  openBtnClose.classList.add("active")
  closeBtnOpen.classList.add('show');


  
})
closeBtn.addEventListener("click", () => {
  navBar.classList.remove("open");
    openBtnClose.classList.remove("active")
  closeBtnOpen.classList.remove('show');

  
})
// Portfolio
document.getElementsByClassName("btn")[1].addEventListener("click", function(){
  document.getElementsByClassName("img").src("img1.JPG");
  document.getElementsByClassName("img").src("img2.JPG");
  document.getElementsByClassName("img").src("img3.JPG");
  document.getElementsByClassName("img").src("img4.JPG");
})

// reveal
  function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible =200;
    console.log(elementVisible);

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      
    }
  }
}

window.addEventListener("scroll", reveal);


      // tabs
