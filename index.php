<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
			  <style>
				  .content-wrapper{
					  background-color:#A3DDC7;
				  }
				  
			  </style>
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
						  <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="images/slider-1.jpg" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/slider-2.jpg" alt="Second slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/slider-3.jpg" alt="Third slide">
		                  </div>
						  <div class="item">
		                    <img src="images/slider-4.jpg" alt="Third slide">
		                  </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>
<!--		            <h2>Monthly Top Sellers</h2>-->
<!--		       		--><?php
//		       			$month = date('m');
//		       			$conn = $pdo->open();
//
//		       			try{
//		       			 	$inc = 3;
//						    $stmt = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 6");
//						    $stmt->execute();
//						    foreach ($stmt as $row) {
//						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
//						    	$inc = ($inc == 3) ? 1 : $inc + 1;
//	       						if($inc == 1) echo "<div class='row'>";
//	       						echo "
//	       							<div class='col-sm-4'>
//	       								<div class='box box-solid'>
//		       								<div class='box-body prod-body'>
//		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
//		       									<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
//		       								</div>
//		       								<div class='box-footer'>
//		       									<b>&#36; ".number_format($row['price'], 2)."</b>
//		       								</div>
//	       								</div>
//	       							</div>
//	       						";
//	       						if($inc == 3) echo "</div>";
//						    }
//						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>";
//							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
//						}
//						catch(PDOException $e){
//							echo "There is some problem in connection: " . $e->getMessage();
//						}
//
//						$pdo->close();
//
//		       		?><!-- -->
<!--	        	</div>-->
<!--	        	<div class="col-sm-9">-->
		            <h2>All Products</h2>
		       		<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT *, products.name AS prodname, category.name AS catname, products.id AS prodid FROM products LEFT JOIN category ON category.id=products.category_id");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
		       								</div>
		       								<div class='box-footer'>
		       									<b>&#36; ".number_format($row['price'], 2)."</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>

	  <!-- Footer -->
	  <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 footer">
            <h5 class="white-text">E-commerce Project</h5>
            <p class="grey-text text-lighten-4">Kakoli<br>Banani<br><a href="tel:+8801951312854" class="footer-contact-number">+8801951312854</a></p><br>
          </div>
          <div class="col-md-6">
            <h5 class="white-text"></h5>
            <ul class="social">
              <li><a href="https://www.facebook.com/....../" target="blank" title="Facebook"><img src="images/facebook-icon.png"></a></li>
              <li><a href="https://www.instagram.com/....../" target="blank" title="Instagram"><img src="images/instagram-icon.png"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        <h5>Copyright © 2021 Mukti, Ejaz</h5>
        </div>
      </div>
   </footer>
<!-- Close Footer -->
<style>
	.col-md-6.footer {
    margin-top: 25px;
}

.page-footer{
	margin-top:40px;
	background-color: #FF9498;
	padding:20px 0px 0px 0px;
	font-weight: 100;
	font-family: rubik;
}
.footer-copyright{
	background-color: #A3DDC7;
	padding:30px;
	border-top:1px solid #dddddd;
}
.footer-contact-number{
	font-weight: bold;
	color: red ;
}
.social{
	margin-left: 115px;
}
.page-footer ul{
	text-decoration:none;
	list-style:none;
}
.social img{
	height:65px;
}
.footer-copyright h5 {
    margin-left: 250px;
}
</style>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>