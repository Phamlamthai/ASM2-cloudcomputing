<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	.carousel-inner .item img {
		margin: auto;
	}
	.navbar-inverse{
		
	}
	.A{
		background-color: skyblue;
	}
	.Search{
		margin-top:10px;
		float: right;
		margin-right: 125px;
	}
	.song-group ul li{
		list-style: none;
	}
	.song-group{
		margin-left: 20px;
	}
	.card-img-top{
		border-radius: 20px;
	}
	@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

* {
  font-family: Open Sans;
}

section {
  width: 100%;
  display: inline-block;
  background: skyblue;
  height: 50vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}

.footer-distributed{
  background: #666;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 40%;
}

/* The company logo */

.footer-distributed h3{
  color:  #ffffff;
  font: normal 36px 'Open Sans', cursive;
  margin: 0;
}

.footer-distributed h3 span{
  color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
  color:  #ffffff;
  margin: 20px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a{
  display:inline-block;
  line-height: 1.8;
  font-weight:400;
  text-decoration: none;
  color:  inherit;
}

.footer-distributed .footer-company-name{
  color:  #222;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
  width: 35%;
}

.footer-distributed .footer-center i{
  background-color:  #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p{
  display: inline-block;
  color: #ffffff;
  font-weight:400;
  vertical-align: middle;
  margin:0;
}

.footer-distributed .footer-center p span{
  display:block;
  font-weight: normal;
  font-size:14px;
  line-height:2;
}

.footer-distributed .footer-center p a{
  color:  lightseagreen;
  text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
  width: 20%;
}

.footer-distributed .footer-company-about{
  line-height: 20px;
  color:  #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span{
  display: block;
  color:  #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons{
  margin-top: 25px;
}

.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color:  #33383b;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

  .footer-distributed{
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i{
    margin-left: 0;
  }

}
Run Pen

Resources
</style>
<body>


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
					<li><a href="https://baomoi.com/"><span class="glyphicon glyphicon-asterisk"></span>Breaking New</a></li>
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
	<div class="A">
		<h3 style="text-align: center; font-size:45px; color: blueviolet; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;"><span>CAR-STORE</span></h3>
	</div>
	

	<div id=Mycarousel class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#Mycarousel" data-slide-to="0" class="active"></li>
			<li data-target="#Mycarousel" data-slide-to="1"></li>
			<li data-target="#Mycarousel" data-slide-to="2"></li>
		</ol>
		<!---Wrapper for slide-->
		<div class="carousel-inner">
			<div class="item active">
				<img src="Image/car1.jpg"  class="img-rounded"style="width: 1920px;height:530px; " alt=" LOS">
			</div>

			<div class="item">
				<img src="Image/car4.jpg" style="width: 1920px;height:530px;"alt="OLS">
			</div>
			<div class="item">
				<img src="Image/car3.jpg" style="width: 1920px;height:530px;"alt="LSS">
			</div>
		</div>
		<!-- left and right controls-->
		<a class="left carousel-control" href="#Mycarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#Mycarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
<h3 style="text-align:center;color: blueviolet; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">Beautiful Toy Car Model</h3>
	
		<?php
		$connect =mysqli_connect('localhost','root','','toys');
		if(!$connect){
			echo "Not connect";
		}
		?>
		<?php
		$sql="SELECT * FROM product";
		$result=mysqli_query($connect,$sql);
		////trả về kết quả dưới dạng 1 mảng
		while($row_song=mysqli_fetch_array($result))
		{
			$song_id=$row_song['product_id'];
			$song_name=$row_song['product_name'];
			$song_img=$row_song['product_img'];
			$song_price=$row_song['product_price'];
			
		?>
			<div class="song-group">
					<div class="col-md-3 col-sm-6 col-12">
						<ul>
							<li><h5 style="text-align: center;color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue"><b><?php echo "$song_name"?></b> </h5></li>
							<li><img class="card-img-top"src="Image/<?php echo "$song_img"?>"class="rounded-cirlce" style="margin: auto;width: 250px;height: 200px;"></li>
									<a href="detail.php?product_id=<?php echo $song_id?>" class="btn btn-primary"> Detail</a>
									
						</ul>
					</div>
			</div>
		<?php
		}
		?> 
		 <section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h3>Quick links</h3>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h3>Quick links</h3>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h3>Quick links</h3>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
            <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        </hr>
      </div>  
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p><u><a href="https://www.nationaltransaction.com/">Thaiplbhaf200110@fpt.edu.vn</a></u></p>
          <p class="h6" style="text-align:center;">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank"></a></p>
        </div>
        </hr>
      </div>  
    </div>
  </section>
  <!-- ./Footer -->
</body>
</html>