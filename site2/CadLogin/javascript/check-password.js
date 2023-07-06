const Pass1 = document.querySelector(".form input[type='password']");
const Pass2 = document.querySelector(".form .conPass input[type='password']");
const btn = document.querySelector(".form .password button");

btn.onclick = () => {
  if (Pass1.value !== Pass2.value) {
    console.log("errado");
  } else {
    console.log("certo");
  }
};
