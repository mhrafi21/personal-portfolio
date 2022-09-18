
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

// sticky-nav
const tNav = document.querySelector("#t-nav");
window.addEventListener("scroll", () => {
  if ( window.scrollY > 20) {
    tNav.classList.add("active");
  } else {
      tNav.classList.remove("active");
  }
})

// sticky-nav

    //counter
   
const counters = document.querySelectorAll(".counter");
const speed = 20;

counters.forEach(counter => {
  const updateCounter = () => {
    const target = +counter.getAttribute("data-target");
    const count = +counter.innerText;
    const inc = target / speed; 
    if (count < target) {
      counter.innerText = Math.ceil(count + inc);
      setTimeout(updateCounter,50)
    } else {
      counter.innerText = target;
    }
  }
  updateCounter();
})