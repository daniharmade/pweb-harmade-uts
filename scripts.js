// Gallery
const gallery = document.querySelector(".gallery");
const jumbo = document.querySelector(".jumbo");
const thumbs = document.querySelectorAll(".thumb");

gallery.addEventListener("click", function (e) {
  //CEK APAKAH YANG DI CLICK ADALAH THUMBS
  if (e.target.className == "thumb") {
    jumbo.src = e.target.src;
    jumbo.classList.add("fade");
    setTimeout(function () {
      jumbo.classList.remove("fade");
    }, 500);

    //MELAKUKAN LOOPING CLASS THUMB AGAR ACTIVE NYA HILANG SETELAH DICLICK
    thumbs.forEach(function (thumb) {
      if (thumb.classList.contains("active")) {
        thumb.classList.remove("active");
      }
    });
    e.target.classList.add("active");
  }
});

//HUMBERGER RESPONSIVE
const humberger = document.getElementById("humberger");
const menuList = document.getElementById("menu-list");

humberger.addEventListener("click", () => {
  menuList.classList.toggle("hidden");
});

var typed = new Typed(".typing-text", {
  strings: ["Network Engineer", "Web Developer", "Technology"],
  loop: true,
  typeSpeed: 50,
  backSpeed: 25,
  backDelay: 500,
});
