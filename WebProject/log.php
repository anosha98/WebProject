

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
        header('Location:details.php');
      }
      else{
      header('Location:homelog.php?alert="Invalid Password"');      }

}
    }
  
?>