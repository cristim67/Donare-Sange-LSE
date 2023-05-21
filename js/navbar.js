const onViewSection = [
  document.querySelector("#afis"),
  document.querySelector("#calendar"),
  document.querySelector("#recomandari"),
  document.querySelector("#informatii"),
  document.querySelector("#despre"),
];
let rect = new Array(5);
let isInViewport = new Array(5);
for (let element = 0; element < rect.lenght; element++) {
  rect[element].getBoundingClientRect();
  isInViewport[element] =
    rect[element].top >= 0 &&
    rect[element].left >= 0 &&
    rect[element].bottom <=
      (window.innerHeight || document.documentElement.clientHeight) &&
    rect[element].right <=
      (window.innerWidth || document.documentElement.clientWidth);
}

const sectiuni = [
  "#afis",
  "#calendar",
  "#recomandari",
  "#informatii",
  "#despre",
];

const handleNavbar = (id) => {
  location.href = sectiuni[id];
};
