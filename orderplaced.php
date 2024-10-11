<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order Placed</title>
	<style type="text/css">
		
		body{ color: whitesmoke;
              font-family: cursive;
              margin: 0;
              padding:0;
              text-align: center;
              background: linear-gradient(rgba(0, 0, 20, 0.5),rgba(0, 0, 20, 0.5)),url('image/12.jpg');
              background-size: cover;
              
		}
		.navbar {
 display: flex;
 align-items: right;
 justify-content: space-between;
 padding: 20px;
 background-color: teal;
 color: #fff;
}
.nav-links a {
 color: #fff;
}
.logo {
 font-size: 32px;
}
.menu {
 display: flex;
 gap: 1em;
 font-size: 18px;
}
.menu li:hover {
 background-color: #4c9e9e;
 border-radius: 5px;
 transition: 0.3s ease;
}
.menu li {
 padding: 5px 14px;
}
a {
 text-decoration: none;
}
li {
 list-style: none;
}
		button{
			color: green;
		}
.imgorder{
height: 200px;
width: 200px;
}
.button-33 {
  background-color: #c2fbd7;
  border-radius: 100px;
  box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
  color: green;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 16px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-33:hover {
  box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
  transform: scale(1.05) rotate(-1deg);
}
</style>

</head>
<body>
	<nav class="navbar">
     <div class="logo">SS BOUTIQUE</div>
     <ul class="nav-links">
       <div class="menu">
         <li><a href="welcome.php">Home</a></li>
         <li><a href="/">About</a></li>
         <li><a href="contact-form.html">Contact-Us</a></li>
         <li><a href="cart.php">Cart</a></li>
          <li><a href="logout.php">Logout</a></li>
       </div>
     </ul>
   </nav>
<center><img class= "imgorder" src="../Project(Boutique)/image/Success.png">
<h2> <i>Payment is Done Successfully!</i></h2>
<img class= "imgorder" src="../Project(Boutique)/image/package.png">
<h1>Your Order has been Placed </h1></center>
Click Here to Return to the Home Page
<p><a href="welcome.php"><button class="button-33" role="button" type="submit" value="Shop Now">Shop Now</button></a></p>
</body>
</html>