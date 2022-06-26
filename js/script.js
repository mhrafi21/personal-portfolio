const openBtn = document.querySelector("#openBtn");
const closeBtn = document.querySelector("#closeBtn");
const navBar = document.querySelector(".nav-bar");
const openBtnClose = document.querySelectorAll(".icons-btn .i-1")

openBtn.addEventListener("click", () => {
  navBar.classList.add("open");
  openBtn.classList.add("active");

  
})
closeBtn.addEventListener("click", () => {
  navBar.classList.remove("open");
   openBtnClose.classList.remove("active");
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
