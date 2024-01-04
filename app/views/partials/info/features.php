<div class="container">
	<h4>Our Features</h4>
	<hr />
	<div>
	
	
	    	    <?php
           $featcontroller=new FeatureController;
    $db=$featcontroller->GetModel();
    $sql="SELECT * FROM feature ORDER BY rand() LIMIT 5";
    $aa=$db->rawQuery($sql);
    foreach($aa as $key=>$value){
   
    }
    ?>
      <?php foreach($aa as $key=>$value): ?>
	    
	                 <div class="accordion toggle-icons lg" id="toggleIcons">
								<div class="accordion-container">
									<div class="accordion-header" id="toggleIconsOne">
										<a  href="" class="" data-toggle="collapse" data-target="#toggleIconsCollapseOne" aria-expanded="true" aria-controls="toggleIconsCollapseOne">
											<?php echo$value['feature'] ?>
										</a>
									</div>
									<div id="toggleIconsCollapseOne" class="collapse show" aria-labelledby="toggleIconsOne" data-parent="#toggleIcons">
										<div class="accordion-body">
											<p><?php echo$value['description'] ?></p>
										</div>
									</div>
								</div>
	    
	       <?php endforeach;?>
	</div>
	

</div>