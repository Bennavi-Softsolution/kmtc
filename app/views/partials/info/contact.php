<div class="container">
	<div class="jumbotron text-center">
		<h3>Get in touch KMTCtesta Support Team!</h3>
	</div>
	<div style="margin:40px 0">
		<div class="row">
			<div class="col-sm-5">
				<div class="panel-body panel">
					<?php $this::display_page_errors(); ?>
					<h4>Share Info With Us Via Email</h4>
					<hr />
					<form method="post" action="<?php print_link("info/contact"); ?>">
						<div class="form-group">
							<input type="text" class="form-control" required id="name" name="name" placeholder="Enter Your name *">
						</div>

						<div class="form-group">
							<input type="email" class="form-control" required id="email" name="email" placeholder="Enter Your email *">
						</div>

						<div class="form-group">
							<textarea class="form-control" id="msg" name="msg" rows="4" required placeholder="Enter your Message *"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>

				</div>
			</div>
			
							    	    <?php
           $contacontroller=new Contact_usController;
    $db=$contacontroller->GetModel();
    $sql="SELECT * FROM contact_us ORDER BY rand() LIMIT 10";
    $aa=$db->rawQuery($sql);
    foreach($aa as $key=>$value){
   
    }
    ?>
      <?php foreach($aa as $key=>$value): ?>

			<div class="col-sm-7">
				<div class="panel panel-body">
					<h4>Other Ways To Reach Us:</h4>
					<hr />

					<p>
						<b class="chead"><span class="material-icons"></span><?php echo $value['title'];?></b><br />
						<p class="adr clearfix">
		
							<span class="adr-group">
								<span class="street-address"><?php echo $value['subtitle'];?></span><br>
								<span class="postal-code"><?php echo $value['address'];?></span><br>
								<span class="country-name"><?php echo $value['location'];?></span>
							</span>
						</p>
					</p>
					<hr />
					<p>
						<b class="chead"><span class="material-icons">contact</span> Phone</b><br />
						<span class="editContent"> <?php echo $value['phone1'];?> / <?php echo $value['phone2'];?></span>
					</p>
					<hr />

					<p>
						<b class="chead"><span class="material-icons">email</span> Email</b><br />
						<a href="#" class="editContent"><?php echo $value['email'];?></a>
					</p>
				</div>
			</div>
		</div>
	</div>
<?php endforeach;?>

</div>