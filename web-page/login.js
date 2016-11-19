$(document).ready(function(){
     $("#login").click(function(){  
          username=$("#name").val();
          password=$("#word").val();
          $.ajax({
           type: "POST",
           url: "login.php",
            data: "name="+username+"&pwd="+password,
           success: function(html){
            if(html=='true')    {
             //$("#add_err").html("right username or password");
             alert("Welcome bro!");
            }
            else    {

              document.getElementById("fail").innerHTML="Wrong! Try again.";
            }
           }
          });
        return false;
    });
});