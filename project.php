<!DOCTYPE html>
<html>
<?PHP
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
$connect = mysqli_connect('localhost','root','');
mysqli_query($connect,'use login1');
$insert = 'insert into logindetails1 values(?,?)';
$stmt = mysqli_prepare($connect,$insert);
mysqli_stmt_bind_param($stmt,'ss',$_POST['mail'],$_POST['password']);
mysqli_stmt_execute($stmt);
?>
<head>
	<title>Grocery store by Tyrannus</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href ="img5.jpg"type=image/x-icon" class="image">s
	<!--Code for font awesome cdn-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- code for font awesome cdn-->
	<!-- code for linking css file-->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css"> 
	<script defer src="bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="text/javascript" defer src="bootstrap.js"></script>	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center fixed-top">
		<a href="#" class="logo navbar-brand text-primary"><i class="fa fa-shopping-basket"></i>grocery</a>
		<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#thetarget"> 
			<span class="navbar-toggler-icon"></span></button>
	<div class="container-fluid">
		<div class="collapse navbar-collapse" id="thetarget">
			<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link active" href="#home" >home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="#features" >features</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="#products" >products</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="#productcategories" >categories</a>
			</li>
			</ul>

</nav><br>
<div id="mycarousel" class="carousel slide carousel-fade" style="margin-top:15px" data-bs-ride="carousel">
	<ol class="carousel-indicators">
		<li class="active" data-bs-target="#mycarousel" data-bs-slide-to="0"></li>
		<li data-bs-target="#mycarousel" data-bs-slide-to="1"></li>
		<li data-bs-target="#mycarousel" data-bs-slide-to="2"></li>
		<li data-bs-target="#mycarousel" data-bs-slide-to="3"></li>
		<li data-bs-target="#mycarousel" data-bs-slide-to="4"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active" data-bs-interval="2000">
			<img src="img.jpg" class= " d-block w-100" alt=" " align="center">
			<div class="carousel-caption d-none d-md-block">
    <h5>Get! Best Products here....</h5>
    <p>A world famous website for the Grocery</p>
  </div>
		</div>
		<div class="carousel-item" data-bs-interval="2000">
			<img src="img2.jpeg" class= " img-fluid rounded d-block w-100" alt=" " align="center">
		</div>
		<div class="carousel-item" data-bs-interval="2000">
			<img src="img3.jpg" class= " img-fluid d-block w-100" alt=" " align="center">
		</div>
		<div class="carousel-item" data-bs-interval="2000">
			<img src="img4.jpg" class= " img-fluid d-block w-100" alt=" " align="center">
		</div>
		<div class="carousel-item" data-bs-interval="2000">
			<img src="img5.jpg" class= "img-fluid d-block w-100" alt=" " align="center">
		</div>
		<a href="#mycarousel" class="carousel-control-prev" data-bs-slide="prev" role="button">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a href="#mycarousel" class="carousel-control-next" data-bs-slide="next" role="button">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">next</span>
		</a>
	</div>
</div>
<br> <div class="list-group">
	<h4 align="center" id="home" class="bg-danger products">Home</h4>

  <a href="#homeneeds" class="list-group-item list-group-item-action active" aria-current="true">
    Home needs
  </a>
  <a href="#stationery" class="list-group-item list-group-item-action active products">Stationery</a>
  <a href="#foodstuff" class="list-group-item list-group-item-action active products">Food Stuffs</a>
  <a href="#vegetables" class="list-group-item list-group-item-action active products">Vegetables</a>
  <a href="#fruits" class="list-group-item list-group-item-action active products" tabindex="-1" aria-disabled="true">Fruits</a>
</div>
<br>
<div id="features">
	<h5 align="center">FEATURES</h5>
<p>No of items available are:<span class="bi bi-arrow-right-circle-fill icons products badge badge-dark text-dark">28</span></p>
	<p><i class="bi bi-arrow-right-circle-fill products"></i>Variety of products. All varieties of goods including other non-food items such as medicines, cosmetics, ready-made garments, household goods are sold out from supermarkets.</p>
	<p><i class="bi bi-arrow-right-circle-fill icons products"></i>Self-service. ...</p>
	<p><i class="bi bi-arrow-right-circle-fill icons products"></i>Cheap price. ...</p>
	<p><i class="bi bi-arrow-right-circle-fill icons products"></i>Limited services to customers. ...</p>
	<p><i class="bi bi-arrow-right-circle-fill icons products"></i>Separate departments</p>
</div>
<br>
<div class="bg-info">
	<h5 id="products" align="center"><b>PRODUCTS</b></h5>
<p align="center">we are having different products here</p>
</div>
	<div class="row">
      <div class="card text-center col-3">
  			<div class="card-header">
    		Onion
 			</div>
  			<div class="card-body">
    			<h5 class="card-title">Onion $65.0/- per kg</h5>
    			<div class="img-wrapper productsr img-fluid"><img src="onion.jpeg"></div>
    			<p class="card-text products">Globe-shaped onions may be white, yellow, or red. They have strong flavour and are used chiefly for soups, stews, and other prepared dishes and for frying.</p>
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
	  </div>
      <div class="card text-center col-3">
  			<div class="card-header">
    		Jam
 			</div>
  			<div class="card-body">
    			<h5 class="card-title">$100/-</h5>
    			<div class="img-wrapper products"><img src="jam.jpeg"></div>
    			<p class="card-text products">Eating fruit jams can help boost the health of the heart by providing a range of vitamins, minerals, antioxidants, and fiber. Therefore, the nutrient-rich jams could reduce the risk of stroke, heart attack, and all other potential cardiovascular diseases.</p>
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
	  </div>
      <div class="card text-center col-3">
  			<div class="card-header">
    		Cucumber
 			 </div>
  			<div class="card-body">
    			<h5 class="card-title">$100/-</h5>
    			<div class="img-wrapper products"><img src="cucumber.jpeg"></div>
    			<p class="card-text products">All that water in cucumbers can help keep you hydrated. Plus, the fiber boost they give you helps you stay regular and avoid constipation. The vitamin K helps blood clot and keep your bones healthy.</p>
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			 </div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			 </div>
	  </div>
    <div class="card text-center col-3">
  			<div class="card-header">
    		Chicken
 			 </div>
  			<div class="card-body">
    			<h5 class="card-title">$100/- per kg</h5>
    			<div class="img-wrapper products"><img src="chicken.jpeg"></div>
    			<p class="card-text products">A food rich in protein, chicken can help with weight management and reduce the risk of heart disease. Chicken contains the amino acid tryptophan, which has been linked to higher levels of serotonin (the “feel good” hormone) in our brains.</p>
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			 </div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			 </div>
	</div>
</div>
<br>
	<div class="row">
      <div class="card text-center col-3">
  			<div class="card-header">
    		Milk
 			 </div>
  			<div class="card-body">
    			<h5 class="card-title">$100/- per litre</h5>
    			<div class="img-wrapper products"><img src="milk.jpeg"></div>div>
    			<p class="card-text products">Milk: Health benefits, nutrition, and risks
Milk provides protein and a range of vitamins and minerals, including calcium, which is vital for bone health. However, other foods can also provide these nutrients. Experts recommend that people at risk of cardiovascular disease and those who seek to control their weight avoid consuming full fat milk.</p>
   				 <a href="purchase1.php" class="btn btn-primary">Click here to purchase</a>
 			 </div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			 </div>
	  </div>
     <div class="card text-center col-3">
  			<div class="card-header">
    		Egg
 			 </div>
  			<div class="card-body">
    			<h5 class="card-title">$100/- per dozen</h5>
    			<div class="img-wrapper products"><img src="egg.jpeg"></div>
    			<p class="card-text products">it's OK to eat one whole egg, including the egg yolk, every day if you don't have cardiovascular disease and you do have a healthy level of blood cholesterol. Or you can mix two egg whites with every egg yolk to give yourself more protein.</p>
   				 <a href="purchase1.php" class="btn btn-primary">Click here to purchase</a>
 			 </div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			 </div>
	  </div>
      <div class="card text-center col-3">
  			<div class="card-header products">
    		Chocolates
 			 </div>
  			<div class="card-body">
    			<h5 class="card-title products">$100/- per packet</h5>
    			<img src="chocolate.jpeg">
    			<p class="card-text products">Increases heart health: The antioxidants in dark chocolate have been shown to lower blood pressure, reduce the risk of clotting and increase blood circulation to the heart, thus lowering the risks of stroke, coronary heart disease and death from heart disease.</p>
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
	  </div>
	  <div class="card text-center col-3">
  			<div class="card-header products">
    		Chocolates
 			 </div>
  			<div class="card-body">
    			<h5 class="card-title products">$100/- per kg</h5>
    			<img src="carrot.jpeg">
    			<p class="card-text products"> Carrots are root vegetables that were first grown in Afghanistan around 900 AD. Orange may be their best-known color, but they also come in other hues, including purple, yellow, red, and white. Early carrots were purple or yellow.</p>
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
	  </div>

  </div><br><br><br>
  <div id="categories" class="row">
  	<h4 id="productcategories" align="center" class="products">Product categories</h4>
  	<h5 id="homeneeds" align="center" class='products'>Homeneeds</h5>
 <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="homeneeds1.jpg">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>
 <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="homeneeds2.jpeg">
   				 <a href="purchase.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>
  <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="homeneeds3.png">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>
  <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="homeneeds6.jpeg">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>

  </div>
   </div><br><br><br>
  <div id="categories" class="row">
  
  	<h5 id="stationery" align="center" class="products">Stationery</h5>
 <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="stationery1.png">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>
 <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="stationery2.jpg">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>
  <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="stationery3.jpg">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>
  <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="stationery4.png">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>

  </div>
  <br><br><br>
   <div id="categories" class="row">
  
  	<h5 id="foodstuff" align="center" class="products">Food Stuffs</h5>
 <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="foodstuff1.jpeg">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>
 <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="foodstuff2.jpeg">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>
  <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="foodstuff3.jpeg">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>
  <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="foodstuff4.jpg">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>

  </div><br><br><br>
  <div id="categories" class="row">
  
  	<h5 id="vegetables" align="center" class="products">vegetables</h5>
 <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="vegetables1.jpeg">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>
 <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="vegetables2.jpeg">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>
  <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="vegetables3.jpeg">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>
  <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="vegetables4.jpeg">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>

  </div><br><br><br>
  <div id="categories" class="row">
  
  	<h5 id="fruits" align="center">Fruits</h5>
 <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="oraange.jpeg">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>
 <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="pineapplereal.jpeg">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>
  <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="pineappple.jpeg">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>
  <div class="card text-center col-3">
  			<div class="card-body">
    			<img src="pomogranete.jpeg">
   				 <a href="purchase1.php" class="btn btn-primary products">Click here to purchase</a>
 			</div>
  			<div class="card-footer text-muted products">
    			More than 50 people ordered in last 10 days
 			</div>
 </div>
  </div>
</div>
<br>
<br>
<div class="bg-danger">
  <br><br>
<marquee><h4>Thanks for Visiting our Website</h4></marquee>
</div>
</body>
</html>


