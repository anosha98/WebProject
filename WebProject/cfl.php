<form method="post">
  <input type="text" name="user" placeholder="username">
  <input type="password" name="pass" placeholder="Password">
  <input type="submit" name="submit" value="login"> <br>
</form>
<?php
  $db = mysqli_connect('localhost','root','','info');
  
  if (isset($_POST['submit'])){
    $uname=$_POST['user'];
    $passwrd=$_POST['pass'];

    if($uname != " " && $passwrd != ""){
      $query = "select * from login where username = '".$uname."' and password = '".$passwrd."' ";

      $result = mysqli_query($db,$query);
      $row = mysqli_num_rows($result);
      if($row>0){
        session_start();
        $_SESSION['username'] = $uname;
        $_SESSION['password'] = $passwrd;
        header('Location:form.php');
      }
      else{
        echo"username or pass invalid!!";
      }

}
    }
  
?>