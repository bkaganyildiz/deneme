$(document).ready(function(){
     $("#signup").click(function(){  
          username=$("#username").val();
          password=$("#password").val();
          email=$("#email").val();
          $.ajax({
           type: "POST",
           url: "signup.php",
            data: "username="+username+"&password="+password+"&email="+email,
           success: function(html){
            alert(html);
            if(html=='true')    {
             //$("#add_err").html("right username or password");
             alert("You signed up succesfully. You can now login with your username & password.");
            }
            else    {

              document.getElementById("fail").innerHTML="Wrong! Try again.";
            }
           }
          });
        return false;
    });
});