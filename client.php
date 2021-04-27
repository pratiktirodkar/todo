 <?php
      $conn=mysqli_connect('localhost','root','','list');
      if (mysqli_connect_errno()) 
      {
        echo "error";
      }
      else
      {

        echo "connected";
        echo "<br>";
      }
      session_start();
      
      echo "<br>";
      if(isset($_POST['login']))
      {

            $n=$_POST['username'];
             $p=$_POST['password'];
             $pass=password_hash($p,PASSWORD_DEFAULT);
             
             $query="SELECT  name,password FROM tp where name='{$n}'";
             $result=mysqli_query($conn,$query);
             $user=mysqli_fetch_all($result,MYSQLI_ASSOC);
             
             if($user){
             if(password_verify($p, $user[0]['password']))
             {
                  $_SESSION['username']=$n;
                  header('Location: todo.php');
                   echo "successfully logged in";


             }
             else
             {
                   echo "enter correct password";

             }
           }
           else
           {
             echo "sign up first";
           }
      }
      if(isset($_POST['signup']))
      {

             $n=$_POST['username'];
             $p=$_POST['password'];
             $pass=password_hash($p, PASSWORD_DEFAULT);
             $query="SELECT name FROM tp where name='{$n}'";
             $result=mysqli_query($conn,$query);
             $user=mysqli_fetch_all($result,MYSQLI_ASSOC);
             if($user){
              echo "exist";
             }
             else
             {  
              $query1= "INSERT INTO tp(`name`,`password`) VALUES('$n','$pass')";
                $result=mysqli_query($conn,$query1);

                $tq="CREATE TABLE IF NOT EXISTS $n(
                  `id` int(11) AUTO_INCREMENT,
                  `tasks` varchar(255),
                  `priority` tinyint(20) DEFAULT '0',
                  `completed` tinyint(20) DEFAULT '0',
                  PRIMARY KEY (`id`))";
                
                  $table=mysqli_query($conn,$tq);

              
              echo "Signed Up Successfully ";
             }
        }         
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript">
  	function val(){
  		if (document.log.username.value=="") {
  			alert("Please Enter Username");
  			document.log.username.focus();
  			return false;
  		}
  		if (document.log.password.value=="") {
  			alert("Please Enter Password");
  			document.log.password.focus();
  			return false;
  		}
  	}
  </script>
</head>
<body>
  <div class="container-fluid col-md-4 card card-outline-info mt-4" style="border: 2px solid #aeaeae;">
      <div class="card-header" style="background-color: #FF4765">
                <h5 class="m-b-0"><center>Login To Your List</center></h5>
      </div>
    <div class="card-block col-md-12 mt-5">
      <center>
        <form action ="client.php" method="POST" class="form-group" name="log" onsubmit="val()">
          <p>
            <LABEL>Username :</LABEL>
            <input type="text" id="user" name="username">
          </p>
          <!-- <p>
            <LABEL>E-mail :</LABEL>
            <input type="text" id="email" name="email">
          </p> -->
          <p>
            <LABEL>Password :</LABEL>
            <input type="password" id="password" name="password">
          </p>
           <p class="form-row">
            <center>
            <input type="submit" id="btn" value="Login" name="login" class="btn btn-primary">
            <input type="submit" id="btn" value="Signup" name="signup" class="btn btn-success">
          </center>
          </p>      
        </form>
      </center> 
    </div>
  </div>
</body>
</html>