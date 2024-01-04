
<!--About this testa software starts here-->
	<div class="container-fluid">
	    	
	    	<h4>About Testa</h4>
	<hr />
<h6>Answers About KMTC Testa?</h6>
	    
	    	    <?php
           $aboutscontroller=new AboutController;
    $db=$aboutscontroller->GetModel();
    $sql="SELECT * FROM about ORDER BY rand() LIMIT 10";
    $aa=$db->rawQuery($sql);
    foreach($aa as $key=>$value){
   
    }
    ?>
      <?php foreach($aa as $key=>$value): ?>
	    
	                 <div class="accordion toggle-icons lg" id="toggleIcons">
								<div class="accordion-container">
									<div class="accordion-header" id="toggleIconsOne">
										<a  href="" class="" data-toggle="collapse" data-target="#toggleIconsCollapseOne" aria-expanded="true" aria-controls="toggleIconsCollapseOne">
											<?php echo$value['question'] ?>
										</a>
									</div>
									<div id="toggleIconsCollapseOne" class="collapse show" aria-labelledby="toggleIconsOne" data-parent="#toggleIcons">
										<div class="accordion-body">
											<p><?php echo$value['answer'] ?></p>
										</div>
									</div>
								</div>
	    
	       <?php endforeach;?>
	    
	
	
	</div>
	<!--About this testa software ends here-->