// Toggle class active

const navbarNav = document.querySelector(".navbar-nav");
//Ketika list porto di klik
document.querySelector("#list").onclick = () => {
  navbarNav.classList.toggle("active");
};

//klik di luar sidebar untuk hilangkan nav

const list = document.querySelector("#list");

document.addEventListener("click", function (e) {
  if (!list.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});
