<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<div>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <h4 ><div>
                        <?php echo "Welcome ".USER_NAME."!!"?>
                    </div></h4>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                </div>
                <div class="col-md-4 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_questionsanswers();  ?>
                    <a class="animated zoomIn record-count alert alert-info"  href="<?php print_link("questions_answers/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="icon-globe"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Questions Answers</div>
                                    <div class="progress mt-2">
                                        <?php 
                                        $perc = ($rec_count / 10000) * 100 ;
                                        ?>
                                        <div class="progress-bar bg-light text-dark" role="progressbar" aria-valuenow="<?php echo $rec_count; ?>" aria-valuemin="0" aria-valuemax="10000" style="width:<?php echo $perc ?>%">
                                            <span class="progress-label"><?php echo round($perc,2); ?>%</span>
                                        </div>
                                    </div>
                                    <small class="small desc">Questions and Answers</small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_searchnotes();  ?>
                    <a class="animated zoomIn record-count <?php echo ($rec_count==0 ? 'card bg-danger text-white' : 'card bg-success text-white'); ?>"  href="<?php print_link("search_notes/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="icon-notebook "></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Search Notes</div>
                                    <div class="progress mt-2">
                                        <?php 
                                        $perc = ($rec_count / 10000) * 100 ;
                                        ?>
                                        <div class="progress-bar bg-light text-dark" role="progressbar" aria-valuenow="<?php echo $rec_count; ?>" aria-valuemin="0" aria-valuemax="10000" style="width:<?php echo $perc ?>%">
                                            <span class="progress-label"><?php echo round($perc,2); ?>%</span>
                                        </div>
                                    </div>
                                    <small class="small desc">Get KMTC Notes</small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_kmtctestpapers();  ?>
                    <a class="animated zoomIn record-count alert alert-info"  href="<?php print_link("kmtc_test_papers/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="icon-layers "></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Kmtc Test Papers</div>
                                    <div class="progress mt-2">
                                        <?php 
                                        $perc = ($rec_count / 10000) * 100 ;
                                        ?>
                                        <div class="progress-bar bg-light text-dark" role="progressbar" aria-valuenow="<?php echo $rec_count; ?>" aria-valuemin="0" aria-valuemax="10000" style="width:<?php echo $perc ?>%">
                                            <span class="progress-label"><?php echo round($perc,2); ?>%</span>
                                        </div>
                                    </div>
                                    <small class="small desc">General KMTC Test Papers</small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <div class=""><h5>
                        <b>
                            Read Latest Notices:
                        </b>
                    </h5>
                    <hr>
                        <?php
                        $notecontroller=new NoticeController;
                        $db=$notecontroller->GetModel();
                        $sql="SELECT * FROM notice ORDER BY id DESC LIMIT 5";
                        $aa=$db->rawQuery($sql);
                        foreach($aa as $key=>$value){
                        }
                        ?>
                        <?php foreach($aa as $key=>$value): ?>
                        <!-- Card start -->
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title"><?php echo $value['title'];?></div>
                            </div>
                            <div class="card-body">
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-12">
                                        <!-- Card start -->
                                        <div class="card highlight">
                                            <div class="card-body">
                                                <div style="color:green;"><b>Hello <?php echo USER_NAME;?>!</b></div>
                                                <div><?php echo $value['message'];?></div>
                                                <?php echo $value['link'];?>
                                            </div>
                                        </div>
                                        <!-- Card end -->
                                        Date:<?php echo $value['date'];?> By: <?php echo $value['author'];?>
                                    </div>
                                </div>
                                <!-- Row end -->
                                <!-- Code Syntax -->
                            </div>
                        </div>
                        <!-- Card end -->
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
