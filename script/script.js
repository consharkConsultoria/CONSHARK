  /////////////MENU BURGUER////////////
  const menuBurguer = document.querySelector('.burguer');
  const menu = document.querySelector('.menu');
  
    menuBurguer.addEventListener('click', () => {
    menu.classList.toggle('show');
  });


/////////////DIGITAÇÃO//////////////////
function typeWriter(digitacao) {
    const textoArray = digitacao.innerText.split('');
    digitacao.innerText = '';
    textoArray.forEach((letra, i) => {
      setTimeout(() => digitacao.innerText += letra, 100 * i);
    });
  }

  const texto = document.querySelector('.paragrafo');
  typeWriter(texto);

  



  function typeWriter1(digitacao1) {
    const textoArray = digitacao1.innerText.split('');
    digitacao1.innerText = '';
    textoArray.forEach((letra, i) => {
      setTimeout(() => digitacao1.innerText += letra, 100 * i);
    });
  }

  const texto1 = document.querySelector('.paragrafo1');
  typeWriter1(texto1);


  //////SESSÃO 2

  $('.tooltip').on('mouseover', function() {
    var mouse = event.pageX;
    $(this).append("<style>.tooltip::after { left: " + mouse + "px; }</style>");
  });
  
  $('.tooltip').on('mouseout', function() {
    $('.tooltip style').remove();
  });





