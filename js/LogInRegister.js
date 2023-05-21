const register = document.getElementById("register");
const regInp = document.getElementById("regInp");
const content = document.getElementById("content");
const arrRegInp = document.querySelectorAll("#regInp");
const logLabel = document.getElementById("logLabel");
const regLabel = document.getElementById("regLabel");
const regBtn = document.getElementById("buttonReg");
const logInp = document.querySelectorAll("#logInp");

var windowWidth = window.innerWidth;
var windowHeight = window.innerHeight;

// --------------------------------------------------

// Functions -> start

function arrNONE() {
  arrRegInp.forEach((element) => {
    element.style.transform = "translateY(0%)";
    element.style.display = "none";
  });
}

function logInpDis() {
  logInp.forEach((element) => {
    element.style.opacity = "0";
  });
}

function logInpApp() {
  logInp.forEach((element) => {
    element.style.opacity = "1";
  });
}

// functions -> end

// --------------------------------------------------

// Events -> start

register.addEventListener("click", () => {
  if (windowWidth <= 600) {
    register.style.transform = "translateY(-30%)";
  } else {
    register.style.transform = "translateY(-35%)";
  }

  arrRegInp.forEach((element) => {
    element.style.transform = "translateY(0%)";
    element.style.display = "block";
  });

  content.classList.add("active");
  regInp.style.transform = "translateY(0%)";
  regLabel.style.marginBottom = "0px";
  regBtn.style.marginTop = "0px";
  setTimeout(logInpDis, 700);
});

logLabel.addEventListener("click", () => {
  register.style.transform = "translateY(0%)";
  content.classList.remove("active");
  regLabel.style.marginBottom = "80px";
  setTimeout(arrNONE, 1000);
  regBtn.style.marginTop = "200px";
  setTimeout(logInpApp, 160);
});

// Events -> end
