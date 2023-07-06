const pswrdField = document.querySelector(".form input[type='password']");
const toggleIcon = document.querySelector(".form .password .field i");

toggleIcon.onclick = () => {
  if (pswrdField.type === "password") {
    pswrdField.type = "text";
    toggleIcon.classList.add("active");
  } else {
    pswrdField.type = "password";
    toggleIcon.classList.remove("active");
  }
};
const pswrdField2 = document.querySelector(".form .conPass input[type='password']");
const toggleIcon2 = document.querySelector(".form .password .conPass i");
toggleIcon2.onclick = () => {
  if (pswrdField2.type === "password") {
    pswrdField2.type = "text";
    toggleIcon2.classList.add("active");
  } else {
    pswrdField2.type = "password";
    toggleIcon2.classList.remove("active");
  }
};
