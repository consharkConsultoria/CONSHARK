<?php 
  @session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body class="index">
  <div class="wrapper">
    <section class="form signup">
      <header>Cadastro</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nome</label>
            <input type="text" name="fname" placeholder="Nome" required>
          </div>
          <div class="field input">
            <label>Sobrenome</label>
            <input type="text" name="lname" placeholder="Sobrenome" required>
          </div>
        </div>

        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="Email" required>
        </div>
        
        <div class="phone">
          <div class="field input">
            <label>Telefone</label>
            <input type="text" name="tel" placeholder="Telefone" required>
          </div>
        </div>

        <div class="password">
          <div class="field input">
            <label>Senha</label>
            <input type="password" name="password" placeholder="Senha" required>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field conPass input">
            <label>Confirme sua senha</label>
            <input type="password" name="password" placeholder="Confirme a senha" required>
            <i class="fas fa-eye"></i>
          </div>
        </div>
        <div class="field image">
        <label for='selecao-arquivo'>Selecionar uma imagem &#187;</label>
        <input type="file" id='selecao-arquivo' name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Cadastrar">
        </div>
      </form>
      <div class="link">Já tem uma conta? <a href="login.php">Login</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
