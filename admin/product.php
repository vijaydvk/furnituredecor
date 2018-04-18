<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	
	<style>
	body {
    font-family: "Roboto",sans-serif;

}
</style>
	
	
	<link href="css/responsive.css" rel="stylesheet">
</head>
<body>
 <div contentEditable="true"> 
 </div>
 
 	<div class="container">

<?php if(isset($_GET["active"]))
{
$check=1;	
}

else
{
$check=0;
}
?>
  <ul class="nav nav-tabs">
    <li <?php if($check==0) echo 'class="active"'; ?>><a data-toggle="tab" href="#menu1">Add Product</a></li>
    <li <?php if($check==1) echo 'class="active"'; ?>><a data-toggle="tab" href="#menu2">OrderList</a></li>
    <li><a data-toggle="tab" href="#menu3">Edit Product(shown)</a></li>
	 <li><a data-toggle="tab" href="#menu4">Edit Product(hide)</a></li>
	 <li><a data-toggle="tab" href="#menu5">Bulk order</a></li>
  </ul>

  <div class="tab-content">

    <div id="menu1" <?php if($check==0) echo 'class="tab-pane fade in active" '; else echo 'class="tab-pane fade in"'; ?> >
<div class="review-payment">
				<h2>Product Details</h2>
			</div>

			<div class="table-responsive cart_info">
		
											
	<div class="contact-form col-sm-8">			 
 
<form method="post" action="addproduct.php" enctype="multipart/form-data" class="contact-form row">
<div class="form-group col-md-6">	Category:			<select name="cat" class="form-control">
										<option value="sofas">sofas</option>
										<option value="dinningtables">dinning tables</option>
										<option value="dinningchairs">dinning chairs</option>
										<option value="coffeetables">coffeetables</option>
										<option value="workstationchairs">workstation chairs</option>
										<option value="executivechairs">Executive chairs</option>
										<option value="visitorschairs">visitors chairs</option>

									</select><br><br></div>
<div class="form-group col-md-6">	Product Details Image:<input type="file" name="path" id="path" class="form-control" style="border:none;" required><br><br></div>

<script>



function readImage(file) {
  
    var reader = new FileReader();
    var image  = new Image();
    var tru=0;
    reader.readAsDataURL(file);  
    reader.onload = function(_file) {
        image.src    = _file.target.result;              // url.createObjectURL(file);
        image.onload = function() {
            var w = this.width,
                h = this.height,
                t = file.type;                           // ext only: // file.type.split('/')[1],
                if((w<=600)&&(h<=400))
				{
					tru=1;
				}
				 if(tru==0)
                 {
	              alert("Better to select Proper size selected image width"+w+"height"+h);
				  document.getElementById("path").value = "";
                 }	
        };
        image.onerror= function() {
            alert('Invalid file type: '+ file.type);
			
        };  
 
    };
    
}
$("#path").change(function (e) {
  
    var F = this.files;
    if(F && F[0]) for(var i=0; i<F.length; i++) readImage( F[i] );
});


</script>
				
<div class="form-group col-md-6">   Price:<input type="text" name="price" class="form-control" required /><br><br></div>
<div class="form-group col-md-6">	Stock:<input type="text" name="stock" class="form-control" required /><br><br></div>
								Description:	<textarea name="details" cols="100" rows="10" class="form-group col-md-12" required></textarea>
									<input type="submit" name ="submit" Value="Add" class="btn btn-primary pull-right" /><br><br>

										
</form>
</div>
			</div>
			
				
    </div>
    <div id="menu2" <?php if($check==1) echo 'class="tab-pane fade in active"'; else echo 'class="tab-pane fade in"'; ?>>


			<div class="table-responsive cart_info">
			
			
			<section id="cart_items">
		<div class="container">

			<div class="review-payment">
				<h2>Order Status</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Orderno</td>
							<td class="description">Billing address</td>
							<td class="price">Note</td>
							<td class="quantity">Date</td>
							<td  class="price">View</td>
						</tr>
					</thead>
					<tbody>
												<?php
									
						            include('../connection.php');
									$ntot=0;
										if(!isset($_GET['start']))
										$start=0;
									else
									$start=$_GET['start'];
									$lim=2;

                                    try {	
									
		
										$sql = $conn->prepare("SELECT * FROM po limit $start,$lim");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC))
										{
											
										$id=$result["pono"];
										
										
										$name=$result["address"];
										
		
										
										$path=$result["note"];
										$price=$result["date"];
										
										
														echo '<tr id="re'.$id.'">';
															echo '<td class="cart_product">';
															echo '<p>'.$id.'</p>';
															echo '</td>';
															echo '<td class="cart_description">';
															echo '<p>'.$name.'</p>';
															echo '</td>';
															echo '<td class="cart_price">';
															echo '<p>'.$path.'</p>';
															echo '</td>';
															echo '<td class="cart_quantity">';
															echo '<p>'.date("l, F j, Y, g:i A", strtotime($price)).'</p>';
															echo '</td>';
															echo '<td>';
															echo '<a href="productorderlist.php?id='.$id.'">View Details</a><br>';
															echo '<a href="example_003.php?id='.$id.'">Generate PDF</a><br>';
															echo '<a href="delete.php?id='.$id.'">Delete</a>';
															echo '</td>';
														echo '</tr>';
								
										
										}
										$sql = $conn->prepare("SELECT * FROM po ");
										$sql->execute();
										
										$count=$sql->rowCount();
										
										$page=$count/$lim;
										
										$float = floatval($page); //Convert the string to a float
                                        if($float && intval($float) != $float) // Check if the converted int is same as the float value...
                                        {
                                          $page=$page+1;
                                        }

									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
						?>
					</tbody>
				</table>
				
					<?php
										$page=intval($page);
									    echo '<div class="pagination-area">';
							            echo '<ul class="pagination">';
											for($i=0;$i<$page;$i++)
											{
												$new=$lim*$i;
												$disp11=$i+1;
												
												$ac=$start/$lim;
												$ac=$ac+1;
												
                                            if($disp11==$ac)
                                               echo '<li><a href="product.php?start='.$new.'&active=1" class="active">'.$disp11.'</a></li>';											
											else	
								            echo '<li><a href="product.php?start='.$new.'&active=1">'.$disp11.'</a></li>';
											}
                   							echo '</ul>';
						                   echo '</div>';
											
											?>

			</div>
			
			

		</div>
	</section> <!--/#cart_items-->
		
				

			</div>
			
		
																
    </div>
	
	
	
	  <div id="menu3" class="tab-pane fade">


			<div class="table-responsive cart_info">
			
			
			<section id="cart_items">
		<div class="container">

			<div class="review-payment">
				<h2>Edit Product(Shown)</h2>
				
			</div>
			
			<div class="form-group col-md-6">	Category:			<select name="cat" class="form-control" onchange="disp()" id="cat">
			                            <option>-----</option>
										<option value="sofas">sofas</option>
										<option value="dinning tables">dinning tables</option>
										<option value="dinning chairs">dinning chairs</option>
										<option value="coffee tables">coffee tables</option>
										<option value="workstation chairs">workstation chairs</option>
										<option value="executive chairs">Executive chairs</option>
										<option value="visitors chairs">visitors chairs</option>

									</select></div></div>
									<script>
									function disp()
									{
										var name=document.getElementById("cat").value;
										xhttp = new XMLHttpRequest();
										xhttp.onreadystatechange = function() {
										if (this.readyState == 4 && this.status == 200) {
										document.getElementById("txtHint").innerHTML =this.responseText;
												}
										};
										xhttp.open("GET", "getproduct.php?q="+name, true);
										xhttp.send();
									
                                    }
									
									
									
									
	function rem(val,n)
    {
     if(n==1)
	 {
	 var g="fa"+val;
	 document.getElementById(g).innerHTML="Hided";
     document.getElementById(g).style.color="red";
	 }
	 else
	 {
	 
	  var h="sa"+val;
		  document.getElementById(h).innerHTML="Visible";
		   document.getElementById(h).style.color="red";
	 }

		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

               }
        };
        xmlhttp.open("GET","updateproduct.php?q="+val+"&p="+n,true);
        xmlhttp.send();

      
	
	
	
	}
									</script>
			<div id="txtHint">
<?php
									
									
						




									try {	
									
			
										$sql = $conn->prepare("SELECT * FROM product where visble='0'");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){
											
										$result1=$result["path"];	
										$id=$result["id"];
										$price=$result["price"];
										$disp=$result["name"];
										$resultee = substr($disp, 0, 20);
										$disp=$resultee.'-'.$result["category"];
										
										
										echo '<div class="col-sm-4">';
							            echo '<div class="product-image-wrapper">';
								        echo '<div class="single-products">';
										echo '<div class="productinfo text-center">';
									    $new123=str_replace("admin/","",$result1);
																		
										 echo "<img src='".$new123."' height='228' width='328'/>";
									    
										//echo '<img src="'$result1'" alt="" />';
										echo '<h2>₹'.$price.'</h2>';
										echo '<p >'.$disp.'</p>';
									
										echo '</div>';
								        echo '</div>';
								        echo '<div class="choose">';
									    echo '<ul class="nav nav-pills nav-justified">';
								
										echo '<li onclick="rem('.$id.','.'1'.')" style="cursor:pointer"><a><i class="fa fa-plus-square"></i><p id="fa'.$id.'">Hide</p></a></li>';
										echo '<li><a href="editproduct.php?id='.$id.'"><i class="fa fa-plus-square"></i>Edit</a></li>';
									    echo '</ul>';
								        echo '</div>';
							            echo '</div>';
						                echo '</div>';
											
											
											
											
											
											
										
											
																			
											
										}

									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
									?>
						
			
			</div>

		</div>
	</section> <!--/#cart_items-->
		
				

			</div>
			
			
				  <div id="menu4" class="tab-pane fade">


			<div class="table-responsive cart_info">
			
			
			<section id="cart_items">
		<div class="container">

			<div class="review-payment">
				<h2>Edit Product(Shown)</h2>
				
			</div>
			
			<div class="form-group col-md-6">	Category:			<select name="cat" class="form-control" onchange="disp1()" id="cat1">
										<option value="sofas">sofas</option>
										<option value="dinning tables">dinning tables</option>
										<option value="dinning chairs">dinning chairs</option>
										<option value="coffee tables">coffee tables</option>
										<option value="workstation chairs">workstation chairs</option>
										<option value="executive chairs">Executive chairs</option>
										<option value="visitors chairs">visitors chairs</option>

									</select></div></div>
									<script>
									function disp1()
									{
										var name=document.getElementById("cat1").value;
																				 xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint1").innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "getproducthi.php?q="+name, true);
  xhttp.send();
									
                                    }
									
									
									
									
	
									</script>
			<div id="txtHint1">
<?php
									
									
						




									try {	
									
			
										$sql = $conn->prepare("SELECT * FROM product where visble='1'");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){
											
										$result1=$result["path"];	
										$id=$result["id"];
										$price=$result["price"];
										$disp=$result["name"];
										$resultee = substr($disp, 0, 20);
										$disp=$resultee.'-'.$result["category"];
										
										
										echo '<div class="col-sm-4">';
							            echo '<div class="product-image-wrapper">';
								        echo '<div class="single-products">';
										echo '<div class="productinfo text-center">';
									    $new123=str_replace("admin/","",$result1);
																		
										 echo "<img src='".$new123."' height='228' width='328'/>";
									    
										//echo '<img src="'$result1'" alt="" />';
										echo '<h2>₹'.$price.'</h2>';
										echo '<p >'.$disp.'</p>';
									
										echo '</div>';
								        echo '</div>';
								        echo '<div class="choose">';
									    echo '<ul class="nav nav-pills nav-justified">';
								
										echo '<li onclick="rem('.$id.','.'0'.')" style="cursor:pointer"><a><i class="fa fa-plus-square"></i><p id="sa'.$id.'">Show</p></a></li>';
										echo '<li><a href="editproduct.php?id='.$id.'"><i class="fa fa-plus-square"></i>Edit</a></li>';
									    echo '</ul>';
								        echo '</div>';
							            echo '</div>';
						                echo '</div>';
											
											
											
											
											
											
										
											
																			
											
										}

									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
									?>
						
			
			</div>

		</div>
	</section> <!--/#cart_items-->
		
				

			</div>
<div id="menu5" class="tab-pane fade">
  <div class="review-payment">
				<h2>Bulk Order</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed" style="border:none">
					<thead>
						<tr class="cart_menu">
							<td class="image">Orderno</td>
							<td class="description">Category</td>
							<td class="price">Sku</td>
							<td class="quantity">Quantity</td>							
							<td class="description">Name</td>
							<td class="description">Email</td>
							<td class="description">Contact</td>
							<td class="description">Companyname</td>
							<td class="description">City</td>
							<td class="description">Pincode</td>
							<td class="description">Date</td>							
						</tr>
					</thead>
					<tbody>
												<?php
									
									

									$ntot=0;
									if(!isset($_GET['start']))
										$start=0;
									else
									$start=$_GET['start'];
									$lim=10;
                                    $nid=array();
									$cc=0;
                                    try {	
									

										$sql = $conn->prepare("SELECT * FROM bulkorder limit $start,$lim");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC))
										{
											
										$id=$result["id"];
										$nid[$cc]=$id;
										$cc++;
										$category=$result["category"];										
		                                $date=$result["time"];										
										$sku=$result["sku"];
										$qty=$result["qty"];
										$name=$result["name"];
										$email=$result["email"];
										$contact=$result["contact"];
										$companyname=$result["companyname"];
										$city=$result["city"];
										$pincode=$result["pincode"];
										
										
														echo '<tr id="re'.$id.'">';
															echo '<td class="cart_product" style="border-top:none;">';
															echo '<p>'.$id.'</p>';
															echo '</td>';
														
															echo '<td class="cart_price">';
															echo '<p>'.$category.'</p>';
															echo '</td>';
															echo '<td class="cart_price">';
															echo '<p>'.$sku.'</p>';
															echo '</td>';
															echo '<td class="cart_price">';
															echo '<p>'.$qty.'</p>';
															echo '</td>';
															echo '<td class="cart_price">';
															echo '<p>'.$name.'</p>';
															echo '</td>';
															echo '<td class="cart_price">';
															echo '<p>'.$email.'</p>';
															echo '</td>';
															echo '<td class="cart_price">';
															echo '<p>'.$contact.'</p>';
															echo '</td>';
															echo '<td class="cart_price">';
															echo '<p>'.$companyname.'</p>';
															echo '</td>';
															echo '<td class="cart_price">';
															echo '<p>'.$city.'</p>';
															echo '</td>';
															echo '<td class="cart_price">';
															echo '<p>'.$pincode.'</p>';
															echo '</td>';
															echo '<td class="cart_price">';
															echo '<p>'.$date.'</p>';
															echo '</td>';
														echo '</tr>';
														
														
														
			
														
														
														
														
														
														
														
														
														
										}		
										
														
									  	$sql = $conn->prepare("SELECT * FROM bulkorder");
										$sql->execute();
										
										$count=$sql->rowCount();
										
										$page=$count/$lim;
										
										$float = floatval($page); //Convert the string to a float
                                        if($float && intval($float) != $float) // Check if the converted int is same as the float value...
                                        {
                                          $page=$page+1;
                                        }
										
										}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
						?>
					</tbody>
				</table>
				
				

			</div>
			
				<?php
										$page=intval($page);
									    echo '<div class="pagination-area">';
							            echo '<ul class="pagination">';
											for($i=0;$i<$page;$i++)
											{
												$new=$lim*$i;
												$disp11=$i+1;
												
												$ac=$start/$lim;
												$ac=$ac+1;
												
                                            if($disp11==$ac)
                                               echo '<li><a href="product.php?start='.$new.'" class="active">'.$disp11.'</a></li>';											
											else	
								            echo '<li><a href="product.php?start='.$new.'">'.$disp11.'</a></li>';
											}
                   							echo '</ul>';
						                   echo '</div>';
											
											?>
											
											
											
																
    </div>
			
		
																
    </div>
 
	
 
 </div>
 </div>
 

</body>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
 

	


	
  <link rel="stylesheet" href="pop/new3.css">
  <script src="pop/jquery.min.js"></script>
  <script src="pop/new3.css"></script>	
</html>