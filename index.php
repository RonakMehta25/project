<html>
<head>
<script src="jquery-1.11.3.js"></script>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<script src="http://localhost/Xpresso/js-cookie-master/src/js.cookie.js"></script>
<title>My Memories</title>
</head>
<body>
<script type="text/javascript">
</script>
<script>
$(document).ready(function() {

$(".submit").click(function(){
 var user=$("#username").val();
 var pass=$("#password").val();
 //alert("user="+user);
 //alert("pass="+pass);
 $.ajax({
     type: "POST",
      url: "http://localhost/Xpresso/login.php?method=signin",
      data: {
		username:user,
		password:pass
      },
	  success: function(data, textStatus ){
	   //alert(data);
	   
	   if(data=="true")
	   {
	    //return true;
		//document.cookie="username="+user;
		//alert("name="+document.cookie);
		//$.cookie("username", user);
		$("#sub").click();
	   }
	   else
	   {
	    $("#incorrect").append("<p id='in'>The email or password you entered don't match.<p>");
		$("#in").css("color","red");
		$("#username").css("border-color","red");
		$("#password").css("border-color","red");
		//return false;
	   }
	  },
	  error: function(xhr, textStatus, errorThrown){
             alert("request failed"+errorThrown);
          }
 });
 });
 $("#username").focus(function(){
        $("#username").css("border-bottom","solid  2px #FF9900");
		 
    });
	$("#password").focus(function(){
	   
        $("#password").css("border-bottom","solid  2px #FF9900");
    });
 $("#username").blur(function(){
        $("#username").css("border-color","#33CC33");
		 $("#password").css("border-color","#33CC33");
    });
	$("#password").blur(function(){
	    $("#username").css("border-color","#33CC33");
        $("#password").css("border-color","#33CC33");
    });
	$("#signup").click(function(){
	   window.location.href = "http://localhost/Xpresso/signup.html";
	});

});

</script>

<h1>XPRESSO</h1>

<fieldset >

<legend>Login</legend>
<form   method="post" action="http://localhost/Xpresso/mainpage.html">
<p><input type="text" name="username" placeholder="Enter user email"  class="username" id="username"></p>
<p><input type="password" name="password" placeholder="password" class="username" id="password"></p>
<div id="incorrect"></div>
<input type="submit" name="submit" id="sub" >
</form>
<button type='button' class="submit">Login</button>


<p><button type="button" id="signup">Create Account</button></p>
</fieldset>

<style>
#contact{
 width:480px;
 margin-left:auto;
 margin-right:auto;
}
body{
background: url(back4.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover contain;
  -moz-background-size: cover contain;
  -o-background-size: cover contain;
  background-size: cover contain;
}
#signup{
cursor:pointer;
 font-size:30px;
display:block;
 background-color:#FF9900;
 width:500px;
 height:50px;
 color:#FFFFFF;
 border-radius:9px;
 font-family: 'Lobster', cursive;
}
#signup:hover{
 color:#FFFFFF;
 background-color:#E86C19;
}
input.forgot:hover{
background-color:#4A93B8;
cursor:pointer;
}
input.forgot{
 font-family: 'Lobster', cursive;
border-radius: 10px;
 background-color:#5CB8E6;

  margin-left:12px;
  color:#FFFFFF;
  font-size:18px;
  height:36px;
  width:150px;
}
h1{
 font-family: 'Lobster', cursive;
 color:#1A661A;
 
 text-align:center;
}
.submit:hover{
cursor:pointer;

 background-color:#53C153;
}
.submit{
font-family: 'Lobster', cursive;
height:36px;
border-radius: 10px;
font-size:18px;
  color:#FFFFFF;
  background:#5CD65C;
  display:block;
  margin-left:auto;
  margin-right:auto;
  float:left;
  width:80px;
}
p.field{
 margin-left:auto;
 margin-right:auto;
 text-align:right;
 float:left;
 font-weigth:bold;
 width:200px;
}
legend{
font-family: 'Lobster', cursive;
<!--background-color:yellow;-->
background-image: -webkit-gradient(
	linear,
	left top,
	right bottom,
	color-stop(0, #309C1D),
	color-stop(1, #39FF08)
);
background-image: -o-linear-gradient(right bottom, #309C1D 0%, #39FF08 100%);
background-image: -moz-linear-gradient(right bottom, #309C1D 0%, #39FF08 100%);
background-image: -webkit-linear-gradient(right bottom, #309C1D 0%, #39FF08 100%);
background-image: -ms-linear-gradient(right bottom, #309C1D 0%, #39FF08 100%);
background-image: linear-gradient(to right bottom, #309C1D 0%, #39FF08 100%);
width=200%;
 color:#FFFFFF;
 font-size:30px;
}
fieldset{
<!--background-color:#85FF5C;-->
background-image: -webkit-gradient(
	linear,
	left top,
	right bottom,
	color-stop(0, #A9ED9E),
	color-stop(1, #EFF5ED)
);
background-image: -o-linear-gradient(right bottom, #A9ED9E 0%, #EFF5ED 100%);
background-image: -moz-linear-gradient(right bottom, #A9ED9E 0%, #EFF5ED 100%);
background-image: -webkit-linear-gradient(right bottom, #A9ED9E 0%, #EFF5ED 100%);
background-image: -ms-linear-gradient(right bottom, #A9ED9E 0%, #EFF5ED 100%);
background-image: linear-gradient(to right bottom, #A9ED9E 0%, #EFF5ED 100%);
 margin-left:auto;
 margin-right:auto;
 width:250px;
 zoom: 1;
filter: alpha(opacity=50);
opacity: 0.7;
}
#sub{
 display:none;
}
input.username{
font-size:20px;
background:transparent;
box-shadow: none;
border-radius: none;
color:#33CC33;
padding: 10px;
border: none;
border-bottom: solid 2px #33CC33;
font-family: 'Lobster', cursive;
width:400px;
height:30px;
outline: none;
}
.username:focus{
outline: none;
border: none;
border-bottom:solid  2px #FF9900;

}
input:-webkit-autofill,

input:-webkit-autofill:hover,

input:-webkit-autofill:focus,

input:-webkit-autofill:active {

    transition: background-color 5000s ease-in-out 0s;

}

input:-webkit-autofill {

    -webkit-text-fill-color:#33CC33;

}
::-webkit-input-placeholder { /* WebKit browsers */
   color:#33CC33;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:#33CC33;
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:#33CC33;
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10+ */
  color:#33CC33;
}
</style>
</body>
</html>
