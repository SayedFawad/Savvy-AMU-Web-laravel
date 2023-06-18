<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>User login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src='https://www.google.com/recaptcha/api.js'></script>

        <link rel="stylesheet" type="text/css" href="css/style.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>

 <script type="text/javascript">
$().ready(function () {
    $("#loginForm").validate({
        rules: {
            username: "required",
            password: "required"
            
        },
        messages: {
            username: "* Username",
            password: "* Password"
            
        }
    });
});
</script>

<style type="text/css">
#loginForm label.error {
  padding-left:8px;
  background-color:#ffffff;
  width: auto;
  display: inline;
  }
</style>

             <!-- Styles -->
        <style>
         
              body{
          background-color:#eef;
         }
             
         #div{
          background-color: #fff;
          width:600px;
          height:350px;
          z-index: -1;
          border-color:gray;
          border:0.5px;
          box-shadow: 0px 0px 2px gray;
          border-radius:5px;
         }
              
              #button{
                width: 100px;
                height: 33px;
                background-color: #eee;
                text-align:center;
                color:#000;


              }

              .inputs
              {
                color:black;
                border:1px 1px;
                
                width: 300px;
                height: 30px;

                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                
                margin: 0;


              }




        </style>



    </head>
    <body>
           <center>
            <div id="div">
              <br />
              <br />
              <br />
              <br />
           
              <form action="/admin_home" id="loginForm" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
               
                <table>
                   <tr> 
                       <td> Username: </td> <td><input type="text" name="username" id="username" class="inputs"> </td>
                    </tr>
                    <tr>
                       <td> Password: </td> <td> <input type="password" name="password" id="password" class="inputs"></td>
                   </tr>
                    <tr>
                   
                        <td>  </td>
                        <td><div class="g-recaptcha" data-sitekey="6LecfDMUAAAAAGjxAvSYfQTU2Cyy7JcnfwTv7XSs"></div></td>
                   </tr>
                   <tr>
                        <td>  </td>
                        <td><input type="submit" id="button" name="login" value="login" > </td>
                   </tr>
                </table>


             </form>

           <!-- <div> <a href="insertForm"> Create New User </a> </div> -->

         </div>
         </center>

    </body>
</html>
