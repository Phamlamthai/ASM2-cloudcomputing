<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		.login{
			float: right;
			width: 840px;
			font-size: 20px;
			margin-top: 200px;
			margin-bottom: 20px;
			}
		.header{
            height:66px;
            border:1px none solid black;
            background:pink
        }
        .header img{
            float:left
        }
        #Search{
            padding-top:10px
        }
        #Search input[type=text]{
            width:190px;
            height:30px
        }
        #Search input[type=submit]{
            height:26px;
        }
        .menu {
            height: 80px;
            
            text-align: center;
        }
            .menu img {
                position: relative;
                top: 10px;
                background-image: url(https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg)

            }
        .menu ul li{
            display:inline-table;
            text-align:center;
            list-style:none;
            color: white;
        }
        .menu ul li a{
            padding:15px;
            margin:7px;
            text-decoration:none;
            font-size:20px
        }
        .carousel-inner .item img {
		margin: auto;
	}
	
	.navbar-inverse{
		
	}
	.Search{
		margin-top:10px;
		float: right;
		margin-right: 125px;
	}
	.Form-input{
		border-radius: 30px;
	}
	body{
		background-image: url(https://c.wallhere.com/photos/4d/50/car_vehicle_Ferrari_Ferrari_488_Spider-987364.jpg!d);
	}
	</style>
	
</head>
<body>
<div>
		<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>	
				</button>	
			</div>

			<div class="collapse navbar-collapse" id="MyNavbar"> 
				<ul class="nav navbar-nav">
					<li><a href="http://localhost:8080/Website-CC/index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li><a href=""><span class="glyphicon glyphicon-gift"></span>Gift</a></li>
					<li><a href=""><span class="glyphicon glyphicon-shopping-cart"></span>Shopping-Cart</a></li>	
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="http://localhost:8080/Website-CC/Register.php"><span class="glyphicon glyphicon-user"></span>Sign-Up</a></li>
					<li><a href="http://localhost:8080/Website-CC/Login.php"><span class="glyphicon glyphicon-log-in"></span>Sign-in</a></li>
				</ul>ss
				<div class="Search">
					<form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
						<input class="form-control mr-sm-2" type="search" placeholder="Search for song..." style="width: 300px" name="Search">
						<input type="submit"name="search" value="Search" />
					</form>
				</div>
			</div>
		</div>
	</nav>
	<div class="LT">
		<div class="login">
			<form action="" method="POST">
			<table>	
			<tr>
				<td><input type="text" name="user_name" class="Form-input" placeholder="Username.."></td>
			</tr>
			<tr>
				<td><input type="Password" name="Password" class="Form-input" placeholder="Password...."></td>
			</tr>
			<tr>
				<td><input type="submit" name="Login" value="Login" class="Form-input"></td>
			</tr>	
			</table>
	        </form>
		</div>
	    <div class="foot"></div>
	</div>
<?php 
	$connect=mysqli_connect('3.132.234.157','Thaipl','160702','Thaipl');
	if (!$connect)
	{
		echo (" Not connect");
	}
//nếu click vào nút login thì mới thực hiện//
	if(isset($_POST['Login']))
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['Password'];
		/////muốn đăng nhập thì cần lấy đúng giái trị ở form nhập từ csdl
		$sql="SELECT * FROM user WHERE user_name='" . $user_name . "' AND password='" . $password . "'";
		// thực thi truy vấn
		$result=mysqli_query($connect,$sql);
		//trả về các kết quả là các dòng được truy vấn vào
		$row=mysqli_num_rows($result);
		// nếu row>0 thì kq trùng với 1 kq trong csdl
		if ($row>0)
		{
			echo "<script> alert('Login Successfuly')</script>";
    		echo "<script> window.open('index.php','_self') </script>";
	//đăng nhập thành công thì mới lưu acc vào biến toàn cục $_session
	///$_SESSION['Username']=$Username;
	///echo $_SESSION['Username'];
		}
		else
		{
			echo "<script> alert('Fail')</script>";
		}
	}
?>
</body>
</html>