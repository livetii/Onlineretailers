<?php
  session_start();
  global $username;

  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);

  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
  $_SESSION['login'] = false;
  $_SESSION['validate'] = false;
  if(isset($_SESSION['authcode']) && isset($_SESSION['username']) && isset($_SESSION['password'])){
    if($_REQUEST['username'] == 'livet' && $_REQUEST['password'] == '123'
     && strtolower($_REQUEST['authcode']) == $_SESSION['authcode']){
        $_SESSION['login'] = true;
      echo '<script>document.location.href = "http://localhost/ajaxdemo/project/Onlineretailers/index.php"</script>';
    }else{
      if($_REQUEST['username'] != '' && $_REQUEST['password'] != ''
       && strtolower($_REQUEST['authcode']) != ''){
        $_SESSION['validate'] = true;
        echo "<script type='text/javascript' language='javascript'>alert('输入错误！');
        document.location.href='http://localhost/ajaxdemo/project/Onlineretailers/index.php';</script>";
      }
      else header("Location: http://localhost/ajaxdemo/project/Onlineretailers/index.php");
    }
    exit();
  }
?>