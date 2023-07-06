<?php 
  @session_start();
  require "../CadLogin/php/config.php";
  if(isset($_SESSION['unique_id'])){
    header("location: ../boot/index.php");
    //header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body class="index">
  <div class="wrapper">
    <section class="form login">
      <header>Login</header>
      <form action="php/login.php" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="Email" required>
        </div>
        <div class="field input">
          <label>Senha</label>
          <input type="password" name="password" placeholder="Senha" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Login">
        </div>
      </form>
      <div class="link">Não possui uma conta? <a href="index.php">Cadastre-se</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hideLogin.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
