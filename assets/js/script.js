const signupButton = document.getElementById("signup");
const loginButton = document.getElementById("login");
const container = document.getElementById("container");

signupButton.addEventListener("click",() => {
    container.classList.add("right-panel-active");
});
loginButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});

