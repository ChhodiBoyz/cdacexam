 <html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" href="bootstrap.min.css">
        <script>
            function invalid(){
                alert("user already exists");
            }
        </script>
        <script>
            function convert(){
                password=document.getElementById("pwd").value;
                rpassword=document.getElementById("rpwd").value;
                if(password==rpassword){
                password=md5(password);
                rpassword=md5(rpassword);
                document.getElementById("pwd").value=password;
                document.getElementById("rpwd").value=rpassword;
                return true;
                }else{
                    alert("password and repeat password does not match");
                    document.getElementById("pwd").value=null;
                    document.getElementById("rpwd").value=null;
                    return false;
                }
            }
        </script>
        <script lang="javascript" src="md5.js"></script>
        <script lang="javascript" src="base64.js"></script>
    </head>
    <body style="background-image: url(bg12.jpg);background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;"  >
        <div class="container" >
            <div id="tb" class="form-group"  > 
            <center>
                <br/>
                <br/>
            <form action="register.php" method="POST" onsubmit="return convert()">
            <table id="table" class="table table-striped table-hover table-condensed" style="width:60%;background-color: rgb(255,255,255,0.4);">
            <tr style="padding-bottom: 10px">
                    <th ><font color="white"><center><h1><b>Sign Up</b></h1></center></font></th>               
            </tr>
             <tr>
                 <th><font color="black">Please fill in this form to register as a buyer.</font></th>  </tr>       
             <tr>
                 <td><font color="black"><b>Registration Number:</b></font></td> </tr>
             <tr>
                <td><input type="text" class="form-control" placeholder="Enter Username" name="regno" required/></td>         
             </tr>
             <tr>
                <td><font color="black"><b>Password:</b></font></td> 
             </tr>
             <tr>
                <td><input type="password" class="form-control" placeholder="Enter Password" name="password" id="pwd" required/></td>      
             </tr>    
             <tr>
                <td><font color="black"><b>Repeat Password:</b></font></td>      
             </tr>
             <tr>
                <td><input type="password" class="form-control" placeholder="Enter Password again" name="repeatpassword"
                           id="rpwd" required/></td>      
             </tr>        
             <tr>
                <td ><font color="black"><b>By creating an account you agree to our</b></font><a href="#" style="color:blue"><b> Terms & Privacy</b></a>.</td>      
             </tr>            
             <tr>
                <td>
                    <input type="submit" id="login" value="Submit" class="btn btn-warning"/>
                    <input type="reset" id="login" value="Clear" class="btn btn-warning"/>
                </td>
            </tr>      
            <tr>
                 <?php if(isset($_GET['msg'])) 
                        { ?> <script> invalid(); </script><?php
                  }?>
            </tr>
         </table>
         </form>
         </center>
         </div>
        </div>
    </body>
</html>