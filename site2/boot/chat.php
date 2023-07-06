<?php 
  @session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: ../CadLogin/login.php");
  }
  if (isset($_GET['adm_id'])) {
    $adm_id = $_GET['adm_id'];
    $_SESSION['adm_id'] = $adm_id;
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          // $user_id = 849033943;
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: ../boot/index.php");
            //header("location: ../CadLogin/users.php");

            // <?php require ('../CadLogin/users.php');? >   
          }
        ?>
        
        <img src="../CadLogin/php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Digite aqui..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat.js"></script>

</body>
</html>
