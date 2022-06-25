const openBtn = document.querySelector("#openBtn");
const closeBtn = document.querySelector("#closeBtn");
const closeBtnShow = document.querySelector(".n-icon .n-icon-2");
const openBtnClose = document.querySelector(".n-icon .n-icon-1");
const navBar = document.querySelector(".nav-bar");

openBtn.addEventListener("click", () => {
  navBar.classList.add("open");
  closeBtnShow.classList.add("show");
  openBtnClose.classList.add("hide");
  
})
closeBtn.addEventListener("click", () => {
  navBar.classList.remove("open");
  closeBtnShow.classList.remove("show");
  openBtnClose.classList.remove("hide");
  
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
