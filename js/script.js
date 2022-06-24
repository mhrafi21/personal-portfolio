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


      var swiper = new Swiper(".mySwiper", {
        slidesPerView: "2",
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });

      // tabs
