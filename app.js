//form tim kiem
function openSearch(){
    document.getElementById("formTimKiem").style.display="block";
}

function closeSearch(){
    document.getElementById("formTimKiem").style.display="none";
}

// che do sang toi
const ball = document.querySelector(".mode-ball");
const items = document.querySelectorAll(
  "#content,.movie-list-title,#navbar,#sidebar,.left-menu-icon,.mode"
);

ball.addEventListener("click", () => {
  items.forEach((item) => {
    item.classList.mode("active");
  });
  ball.classList.mode("active");
});

// Mũi tên điều hướng
const arrows = document.querySelectorAll(".arrow");
const movieLists = document.querySelectorAll(".movie-list");

arrows.forEach((arrow, i) => {
  const itemNumber = movieLists[i].querySelectorAll("img").length;
  let clickCounter = 0;
  arrow.addEventListener("click", () => {
    const ratio = Math.floor(window.innerWidth / 270);
    clickCounter++;
    if (itemNumber - (4 + clickCounter) + (4 - ratio) >= 0) {
      movieLists[i].style.transform = `translateX(${
        movieLists[i].computedStyleMap().get("transform")[0].x.value - 300
      }px)`;
    } else {
      movieLists[i].style.transform = "translateX(0)";
      clickCounter = 0;
    }
  });

  console.log(Math.floor(window.innerWidth / 270));
});


