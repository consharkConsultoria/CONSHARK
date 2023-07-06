const pswrdField = document.querySelector(".form.login input[type='password']");
const toggleIcon = document.querySelector(".form.login .field i");

toggleIcon.addEventListener('click', () => {
  if (pswrdField.type === "password") {
    pswrdField.type = "text";
    toggleIcon.classList.add("active");
  } else {
    pswrdField.type = "password";
    toggleIcon.classList.remove("active");
  }
});
