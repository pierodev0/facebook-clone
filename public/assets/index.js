const inputFirstName = document.querySelector("#first_name");
const containerInputLogin = document.querySelectorAll(
  "#container-input-login input"
);

const inputLoginEmail = document.querySelector('#login_email')

inputLoginEmail.focus();

containerInputLogin.forEach((input) => {
  const inputAlert = input.parentElement.querySelector("i");

  input.addEventListener("blur", () => {
    if (input.value.length === 0) {
      input.classList.add("!border-red-500");
      inputAlert.classList.add("!block");
    }
  });

  input.addEventListener("focus", () => {
    if (input.classList.contains("!border-red-500")) {
      input.classList.remove("!border-red-500");
      inputAlert.classList.remove("!block");
    }
  });
});
