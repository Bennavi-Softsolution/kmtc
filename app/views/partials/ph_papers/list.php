<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("ph_papers/add");
$can_edit = ACL::is_allowed("ph_papers/edit");
$can_view = ACL::is_allowed("ph_papers/view");
$can_delete = ACL::is_allowed("ph_papers/delete");
?>
<?php
$comp_model = new SharedController;
$page_element_id = "list-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data From Controller
$view_data = $this->view_data;
$records = $view_data->records;
$record_count = $view_data->record_count;
$total_records = $view_data->total_records;
$field_name = $this->route->field_name;
$field_value = $this->route->field_value;
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_footer = $this->show_footer;
$show_pagination = $this->show_pagination;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="list"  data-display-type="grid" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Public Health Test Papers</h4>
                </div>
                <div class="col-sm-3 ">
                    <?php if($can_add){ ?>
                    <?php $modal_id = "modal-" . random_str(); ?>
                    <button data-toggle="modal" data-target="#<?php  echo $modal_id ?>"  class="btn btn btn-primary my-1">
                        <i class="icon-plus"></i>                                   
                        Add New Ph Papers 
                    </button>
                    <div data-backdrop="true" id="<?php  echo $modal_id ?>" class="modal fade"  role="dialog" aria-labelledby="<?php  echo $modal_id ?>" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body p-0 reset-grids">
                                    <div class=" ">
                                        <?php  
                                        $this->render_page("ph_papers/add"); 
                                        ?>
                                    </div>
                                </div>
                                <div style="top: 5px; right:5px; z-index: 999;" class="position-absolute">
                                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">&times;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('ph_papers'); ?>" method="get">
                        <div class="input-group">
                            <input value="<?php echo get_value('search'); ?>" class="form-control" type="text" name="search"  placeholder="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary"><i class="icon-magnifier"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 comp-grid">
                        <div class="">
                            <!-- Page bread crumbs components-->
                            <?php
                            if(!empty($field_name) || !empty($_GET['search'])){
                            ?>
                            <hr class="sm d-block d-sm-none" />
                            <nav class="page-header-breadcrumbs mt-2" aria-label="breadcrumb">
                                <ul class="breadcrumb m-0 p-1">
                                    <?php
                                    if(!empty($field_name)){
                                    ?>
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none" href="<?php print_link('ph_papers'); ?>">
                                            <i class="icon-arrow-left"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <?php echo (get_value("tag") ? get_value("tag")  :  make_readable($field_name)); ?>
                                    </li>
                                    <li  class="breadcrumb-item active text-capitalize font-weight-bold">
                                        <?php echo (get_value("label") ? get_value("label")  :  make_readable(urldecode($field_value))); ?>
                                    </li>
                                    <?php 
                                    }   
                                    ?>
                                    <?php
                                    if(get_value("search")){
                                    ?>
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none" href="<?php print_link('ph_papers'); ?>">
                                            <i class="icon-arrow-left"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item text-capitalize">
                                        Search
                                    </li>
                                    <li  class="breadcrumb-item active text-capitalize font-weight-bold"><?php echo get_value("search"); ?></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </nav>
                            <!--End of Page bread crumbs components-->
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <div  class="">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-12 comp-grid">
                        <?php $this :: display_page_errors(); ?>
                        <div  class=" animated fadeIn page-content">
                            <div id="ph_papers-list-records">
                                <?php
                                if(!empty($records)){
                                ?>
                                <div id="page-report-body">
                                    <div class="row sm-gutters page-data" id="page-data-<?php echo $page_element_id; ?>">
                                        <!--record-->
                                        <?php
                                        $counter = 0;
                                        foreach($records as $data){
                                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                                        $counter++;
                                        ?>
                                        <div class="col-sm-4">
                                            <div class="p-2 mb-3 animated bounceIn">
                                                <!--new document design starts here-->
                                                <div class="card" style="background-image:url('assets/images/new.png');background-size:cover;">
                                                    <div class="card-header">
                                                        <!--title starts here-->
                                                        <div class="card-title">
                                                            <div class="mb-2">  
                                                                <span <?php if($can_edit){ ?> data-value="<?php echo $data['name']; ?>" 
                                                                    data-pk="<?php echo $data['id'] ?>" 
                                                                    data-url="<?php print_link("ph_papers/editfield/" . urlencode($data['id'])); ?>" 
                                                                    data-name="name" 
                                                                    data-title="Enter Name" 
                                                                    data-placement="left" 
                                                                    data-toggle="click" 
                                                                    data-type="text" 
                                                                    data-mode="popover" 
                                                                    data-showbuttons="left" 
                                                                    class="is-editable" <?php } ?>>
                                                                    <span class="font-weight-light text-muted ">
                                                                        Name:  
                                                                    </span>
                                                                    <?php echo $data['name']; ?> 
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <!--title ends here-->
                                                        <!--Document subtitle starts here-->
                                                        <div class="card-sub-title">
                                                            <div class="mb-2">  
                                                                <span <?php if($can_edit){ ?> data-value="<?php echo $data['unit']; ?>" 
                                                                    data-pk="<?php echo $data['id'] ?>" 
                                                                    data-url="<?php print_link("ph_papers/editfield/" . urlencode($data['id'])); ?>" 
                                                                    data-name="unit" 
                                                                    data-title="Enter Unit" 
                                                                    data-placement="left" 
                                                                    data-toggle="click" 
                                                                    data-type="text" 
                                                                    data-mode="popover" 
                                                                    data-showbuttons="left" 
                                                                    class="is-editable" <?php } ?>>
                                                                    <span class="font-weight-light text-muted ">
                                                                        Unit:  
                                                                    </span>
                                                                    <?php echo $data['unit']; ?> 
                                                                </span>
                                                            </div>
                                                            <div class="mb-2">  
                                                                <span <?php if($can_edit){ ?> data-value="<?php echo $data['code']; ?>" 
                                                                    data-pk="<?php echo $data['id'] ?>" 
                                                                    data-url="<?php print_link("ph_papers/editfield/" . urlencode($data['id'])); ?>" 
                                                                    data-name="code" 
                                                                    data-title="Enter Code" 
                                                                    data-placement="left" 
                                                                    data-toggle="click" 
                                                                    data-type="text" 
                                                                    data-mode="popover" 
                                                                    data-showbuttons="left" 
                                                                    class="is-editable" <?php } ?>>
                                                                    <span class="font-weight-light text-muted ">
                                                                        Code:  
                                                                    </span>
                                                                    <?php echo $data['code']; ?> 
                                                                </span>
                                                            </div>
                                                            <div class="mb-2">  
                                                                <span <?php if($can_edit){ ?> data-flatpickr="{ minDate: '', maxDate: ''}" 
                                                                    data-value="<?php echo $data['date']; ?>" 
                                                                    data-pk="<?php echo $data['id'] ?>" 
                                                                    data-url="<?php print_link("ph_papers/editfield/" . urlencode($data['id'])); ?>" 
                                                                    data-name="date" 
                                                                    data-title="Enter Date" 
                                                                    data-placement="left" 
                                                                    data-toggle="click" 
                                                                    data-type="flatdatetimepicker" 
                                                                    data-mode="popover" 
                                                                    data-showbuttons="left" 
                                                                    class="is-editable" <?php } ?>>
                                                                    <span class="font-weight-light text-muted ">
                                                                        Date:  
                                                                    </span>
                                                                    <?php echo $data['date']; ?> 
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <!--Document subtitle ends here-->
                                                    </div>
                                                    <div class="card-body">
                                                        <b>Click Below to Download</b>
                                                        <div class="mb-2">  <?php Html :: page_link_file($data['file']); ?></div>
                                                    </div>
                                                </div>
                                                <!--new dowument design ends here-->
                                                <div class="td-btn">
                                                    <?php if($can_view){ ?>
                                                    <a class="btn btn-sm btn-success has-tooltip page-modal" title="View Record" href="<?php print_link("ph_papers/view/$rec_id"); ?>">
                                                        <i class="icon-eye"></i> View
                                                    </a>
                                                    <?php } ?>
                                                    <?php if($can_edit){ ?>
                                                    <a class="btn btn-sm btn-info has-tooltip page-modal" title="Edit This Record" href="<?php print_link("ph_papers/edit/$rec_id"); ?>">
                                                        <i class="icon-pencil"></i> Edit
                                                    </a>
                                                    <?php } ?>
                                                    <?php if($can_delete){ ?>
                                                    <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("ph_papers/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                        <i class="icon-close"></i>
                                                        Delete
                                                    </a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                        }
                                        ?>
                                        <!--endrecord-->
                                    </div>
                                    <div class="row sm-gutters search-data" id="search-data-<?php echo $page_element_id; ?>"></div>
                                    <div>
                                    </div>
                                </div>
                                <?php
                                if($show_footer == true){
                                ?>
                                <div class=" border-top mt-2">
                                    <div class="row justify-content-center">    
                                        <div class="col-md-auto">   
                                        </div>
                                        <div class="col">   
                                            <?php
                                            if($show_pagination == true){
                                            $pager = new Pagination($total_records, $record_count);
                                            $pager->route = $this->route;
                                            $pager->show_page_count = true;
                                            $pager->show_record_count = true;
                                            $pager->show_page_limit =true;
                                            $pager->limit_count = $this->limit_count;
                                            $pager->show_page_number_list = true;
                                            $pager->pager_link_range=5;
                                            $pager->render();
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                }
                                else{
                                ?>
                                <div class="text-muted  animated bounce p-3">
                                    <h4><i class="icon-ban"></i> No test paper found</h4>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
