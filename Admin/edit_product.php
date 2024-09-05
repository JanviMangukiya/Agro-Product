<!DOCTYPE html>
<html>
<head>
	<?php
        include_once "head.php";
		session_start();
    ?>
</head>
<script>
    $(document).ready(function(){
     //alert("hello");
	//  if(!isset($_GET("id")))
	//  {
    //   $('#img_upload').hide();
	//  }

    });
    function uploadimg(event)
    {
      // alert (event);
      $('#img_upload').show(1000);
      var reader = new FileReader();
      reader.onload = function()
      {
        var output = document.getElementById('img_upload');
        output.src = reader.result;
      }
      reader.readAsDataURL(event.target.files[0]);
    }
	function getsubcategory(value)
	{
		$.ajax({
			type: "post",
			url: "getsubcategory.php",
			data: {
				cat_id: value
			},
			success: function(data) {
				$('#subcategory_list').html(data);
			}
		});
	}
</script>

<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/logo1.png" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo1.jpg" alt="">
										<h3>Lea R. Frith</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo2.jpg" alt="">
										<h3>Erik L. Richards</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo3.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo4.jpg" alt="">
										<h3>Renee I. Hansen</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>Vicki M. Coleman</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/images/1.jpg" alt="" class="rounded-circle" height="40" width="40px">
						</span>
						<?php 
							if(isset($_SESSION['email']))
							{
								echo $_SESSION['email'];
							}
							?>
						<span class="user-name"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.php"><i class="dw dw-user1"></i> Profile</a>
						<!-- <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a> -->
						<a class="dropdown-item" href="login.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			<div class="github-link">
				<a href="https://github.com/dropways/deskapp" target="_blank"><img src="vendors/images/github.svg" alt=""></a>
			</div>
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>
				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>
    <!-- sidebar -->
	<?php
        include_once "sidebar.php";
    ?>
    <!-- sidebar-end -->
	<div class="mobile-menu-overlay"></div>
	<?php
		include_once 'dbcontroller.php';
		$obj= new DBcontroller();
		$query='select * from category';
		$fetch=$obj->fetchall($query);

		if(isset($_GET['id']))
		{
			$product_id=$_GET['id'];
			$query2="select c.category_id,category_name,s.subcategory_id,subcategory_name, p.* from category c , subcategory s ,product p where c.category_id=s.category_id and s.subcategory_id = p.subcategory_id and p.product_id='$product_id' order by p.product_name";
		  	$fetch2=$obj->fetchresult($query2);
		// echo "<pre>";
		// print_r($fetch2);
		// die();
		}
	?>
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<!-- horizontal Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">ADD PRODUCTS</h4>
						</div>
						<div class="pull-right">
							<a href="add_product.php" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>

					<form action="check_editproduct.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="" class="form-group">Category Name </label>
							<select class="form-control" name="category_id" id="">
								<option selected>select</option>
								<?php 
									foreach($fetch as $data)
									{
									if($data['category_id']==$fetch2['category_id'])
									{
										echo '
										<option value="'.$data['category_id'].'"selected>'.$data['category_name'].'</option>';
									}
									else
									{
									echo '<option value="'.$data['category_id'].'">'.$data['category_name'].'</option>';
									}
									}
								?>
							</select>
						</div>
						<div class="form-group">
							<label>SubCategory Name</label>
									<select class="form-control text-dark" id="subcategory_list" name="subcategory_id" placeholder="Category name" required>
									<option selected>Select SubCategory</option>
									<?php $query2 = "select * from subcategory";
									$result2 = $obj->runquery($query2);
									foreach ($result2 as $array2) { ?>
										<?php if ($fetch2['subcategory_id'] == $array2['subcategory_id']) { ?>
											<option selected value="<?php echo $array2['subcategory_id'] ?>">
											<?php echo $array2['subcategory_name'] ?></option>
										<?php } 
										elseif ($fetch2['subcategory_id'] != $array2['subcategory_id']) { ?>
											<option value="<?php echo $array2['subcategory_id'] ?>">
												<?php echo $array2['subcategory_name'] ?></option>

									<?php }
									}
								?>
							</select>
						</div>
						<div class="form-group">
							<label>Product Name</label>
							<input class="form-control" type="text" value="<?php echo $fetch2['product_name']?>" placeholder="Enter Product Name" name="product_name">
						</div>
						<div class="form-group">
							<label>Product Price</label>
							<input class="form-control" type="number" value="<?php echo $fetch2['product_price']?>" placeholder="Enter Product Price" name="product_price">
						</div>
						<div class="form-group">
							<label>Special Price</label>
							<input class="form-control" type="number" value="<?php echo $fetch2['special_price']?>" placeholder="Enter Product Special Price" name="special_price">
						</div>
						<div class="form-group">
							<label>Product Quantity</label>
							<input class="form-control" type="number" value="<?php echo $fetch2['qty']?>" placeholder="Enter Product Quantity" name="qty">
						</div>
						<div class="form-group">
							<label>Product Description</label>
							<input class="form-control" type="text" value="<?php echo $fetch2['product_des']?>" placeholder="Enter Product Description" name="product_des">
						</div>

						<input type="hidden" name="product_id" value="<?php echo $fetch2['product_id']?>">
						<div class="form-group">
							<label>Product Image</label>
							<input class="form-control" type="file" value="<?php echo $fetch2['product_img']?>" hidden="true" onchange="uploadimg(event)" id="file" name="image1"><br>
							<label for="file" class="btn btn-primary">Upload</label>
							<img src = "./productimages/convertimages/RC<?php echo $fetch2['product_img'] ?>" alt="" id="img_upload" height="100px" width="100px">
						
							
						</div>
						<div class="form-group">
							<label>Convert</label>
							<select class="form-control" type="text" id="" name="convert">
								<?php
									if($fetch2['convert']=="Y")
									{
										echo '<option>Select</option>
										<option value="Y" selected>Yes</option>
										<option value="N">No</option>';
									}
									else
									{
										echo '<option>Select</option>
										<option value="Y">Yes</option>
										<option value="N" selected>No</option>';
									}
								?>
							</select>
						</div>
						<div class="form-actions center">
							<button type="submit" class="btn btn-primary" name="submiteditproduct">SUBMIT</button>
						</div>	
					</form>

					<div class="collapse collapse-box" id="horizontal-basic-form1" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#horizontal-basic"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#horizontal-basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="horizontal-basic">
							<form>
								<div class="form-group">
									<label>Text</label>
									<input class="form-control" type="text" placeholder="Johnny Brown">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" value="bootstrap@example.com" type="email">
								</div>
								<div class="form-group">
									<label>URL</label>
									<input class="form-control" value="https://getbootstrap.com" type="url">
								</div>
								<div class="form-group">
									<label>Telephone</label>
									<input class="form-control" value="1-(111)-111-1111" type="tel">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" value="password" type="password">
								</div>
								<div class="form-group">
									<label>Readonly input</label>
									<input class="form-control" type="text" placeholder="Readonly input here…" readonly>
								</div>
								<div class="form-group">
									<label>Disabled input</label>
									<input type="text" class="form-control" placeholder="Disabled input" disabled="">
								</div>
							</form>
							</code></pre>
						</div>
					</div>
				</div>
				<!-- horizontal Basic Forms End -->
			</div>

			<!-- footer-start -->
            <?php
                include_once "footer.php";
            ?>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>