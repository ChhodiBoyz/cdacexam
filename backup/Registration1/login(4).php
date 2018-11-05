<html>
    <head>
        <title>Log In</title>
        <script lang="javascript" src="md5.js"></script>
        <script lang="javascript" src="base64.js"></script>
        <script>
            function invalid(){
                alert("invalid username or password");
            }
        </script>
        <script>
            function convert(){
                password=document.getElementById("pwd").value;
                password=md5(password);
                //password=Base64.encode(password);
                document.getElementById("pwd").value=password;
            }
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body style="background-image: url(bg12.jpg);background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;">
        <br/>
        <br/>
        <br/>
        <div class="container" style="width : 70%" >
            <div class="form-group"> 
            <center>
            <form action="login.php" method="POST" onsubmit="convert()">        
            <table class="table table-striped table-hover table-condensed" style="width:60%;background-color: rgb(255,255,255,0.4)">
            <tr style="padding-bottom: 10px">
                    <th ><font><center><h1>Log In</h1></center></font></th>               
            </tr>
             <tr>
                <td><font size="6px" color="black">Registration Number:</font></td>     
             </tr>
             <tr>
                <td><input type="text" class="form-control" placeholder="Enter Registration Number" name="regno"/></td>         
             </tr>
             <tr>
                 <td><font size="6px"  color="black">Password:</font></td>
             </tr>
             <tr>
                <td><input type="password" class="form-control" placeholder="Enter Password" id="pwd" name="pwd"/></td>         
             </tr>  
            <tr> 
                <td style="text-align : center">
                    <input type="submit" id="login" value="Sign In" class="btn btn-warning"/>
                    <center>
                        <br/>
                    <a data-toggle="modal" href="#myModal"><u><font color="blue" size="5px"><b>Forgot Password</b></font></u></a>
                    <a href="buyer_register.php" style="padding-left: 30px"><u><b><font color="blue" size="5px">Don't have an account?</font></b></u></a>
                    </center>     
                </td>
            </tr>      
         </table>
         </form>
         </center>
            </div>
            </div>
            <?php if(isset($_GET['msg'])) 
                { ?> <script> invalid(); </script><?php
                    }?>
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
              <form action="mail.php" method="post">
          <table class="table table-striped table-hover table-condensed">
            <tr>
                <td>E-mail</td>
                <td><input type="email" name="email" placeholder="Enter your e-mail"/></td>
            </tr> 
              <tr>
                  <td></td> 
                  <td>
                  <input type="submit" class="btn btn-warning" value="submit"/>
                  </td>
              </tr>
        </table>
            </form>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    </body>
</html>