<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
<style>
form {
    border: 1px solid #f1f1f1;
	border-radius: 5px;
	margin-top: 70px;
	margin-left: 450px;
	margin-right: 450px;
    background-color: hsla(0, 0%, 100% , .40);

}

input[type=text] {
    width: 60%;
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #ccc;
	margin-top: 20px;
	margin-left: 60px;
	margin-right: 50px;
	background-color: hsla(0, 0%, 100% , .60);
	color: #666;
	border-radius: 5px;

}
input[type=password] {
    width: 60%;
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    margin-left: 60px;
	margin-right: 50px;
	background-color: hsla(0, 0%, 100% , .60);
	border-radius: 5px;
	color: #666;
}

button {
    background-color: #FFF;
    color: #000;
	font-size: 1.5em;
    padding: 10px 15px;
    border: none;
    width: 70%;
	margin-top: 30px;
	margin-left:60px;
	margin-right: 50px;
	margin-bottom: 10px;
	border-radius: 5px;


}

button:hover {
	opacity: 0.8;
	font-family: Arial, Helvetica, sans-serif;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

.body{

	 background-image: url('img/backlogin.jpg');
	 background-size: cover;


	}
h1 {
	margin-top: 110px;
	margin-bottom: 0px;
	color: #333;
	font-family: 'Dancing Script', cursive;
	font-size: 90px;
	}

h3 {
	margin-top: 0px;
	color: #333;
	font-size: 20px;
	font-family: 'Exo', sans-serif;
	}
</style>
<body class="body">



<form  method="post" action="check_login.php">
  <div class="container">
    <label><b></b></label>

    <input type="text" placeholder="Username" name="txtusername" required id="txtusername">

    <label><b>
    </b></label>
    <input type="password" placeholder="Password" name="txtpassword" required id="txtpassword">

    <button type="submit">Login</button>

 </div>


</form>

<center>
<h1>Rice</h1>
<h3>- V A R I E T I E S -</h3>
</center>



</body>
</html>
