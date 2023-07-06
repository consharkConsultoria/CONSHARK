<?php 
  @session_start();
  include_once "config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }else{

    //TA MEIO ERRADO, MAS DA PRA ARRUMAR DPS
      $msg = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = $_SESSION[unique_id]");
      $row = mysqli_fetch_assoc($msg);
    
      if($row['clienteOuAdm'] == "adm"){
        $adm_id = $_SESSION['unique_id'];
        $_SESSION['unique_id'] = $adm_id;
        echo $adm_id;
      }else{
        $_SESSION['unique_id'] = 849033943;
      }
    
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
      </header>
      <div class="search">
        <span class="text">Selecione um cliente</span>
        <input type="text" placeholder="Digite um nome para procura...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>