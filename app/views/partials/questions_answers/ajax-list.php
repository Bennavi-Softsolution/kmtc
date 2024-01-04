<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("questions_answers/add");
$can_edit = ACL::is_allowed("questions_answers/edit");
$can_view = ACL::is_allowed("questions_answers/view");
$can_delete = ACL::is_allowed("questions_answers/delete");
?>
<?php
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$field_name = $this->route->field_name;
$field_value = $this->route->field_value;
$view_data = $this->view_data;
$records = $view_data->records;
$record_count = $view_data->record_count;
$total_records = $view_data->total_records;
if (!empty($records)) {
?>
<!--record-->
<?php
$counter = 0;
foreach($records as $data){
$rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
$counter++;
?>
<div class="col-sm-12">
    <div class="bg-light p-2 mb-3 animated zoomIn" style="border-radius:20px;">
        <div class="card">
            <div class="card-body">
                <!-- question starts here-->
                <h6>
                    <div class="mb-2">  
                        <span <?php if($can_edit){ ?> data-value="<?php echo $data['Quiz']; ?>" 
                            data-pk="<?php echo $data['id'] ?>" 
                            data-url="<?php print_link("questions_answers/editfield/" . urlencode($data['id'])); ?>" 
                            data-name="Quiz" 
                            data-title="Enter Quiz" 
                            data-placement="left" 
                            data-toggle="click" 
                            data-type="text" 
                            data-mode="popover" 
                            data-showbuttons="left" 
                            class="is-editable" <?php } ?>>
                            <span class="font-weight-light text-muted d-block">
                                Quiz
                            </span>
                            <?php echo $data['Quiz']; ?> 
                        </span>
                    </div>
                </h6>
                <!--Questions ends here-->  
                <!--Question image starts here-->
                <div class="mb-2">  <?php Html :: page_img($data['Quiz_image'],300,300,1); ?></div>
                <!--Question image ends here-->
                <!--Question answer starts here-->  
                <p >
                    <div class="mb-2 highlight">  
                        <span <?php if($can_edit){ ?> data-value="<?php echo $data['Answer']; ?>" 
                            data-pk="<?php echo $data['id'] ?>" 
                            data-url="<?php print_link("questions_answers/editfield/" . urlencode($data['id'])); ?>" 
                            data-name="Answer" 
                            data-title="Enter Answer" 
                            data-placement="left" 
                            data-toggle="click" 
                            data-type="text" 
                            data-mode="popover" 
                            data-showbuttons="left" 
                            class="is-editable" <?php } ?>>
                            <span class="font-weight-light text-muted d-block">
                                Answer
                            </span>
                            <?php echo $data['Answer']; ?> 
                        </span>
                    </div>
                </p>
                <!--Question answer ends here-->
                <!--anwers image starts here-->
                <div class="mb-2">  <?php Html :: page_img($data['Answer_image'],300,300,1); ?></div>
                <!--answer image ends here-->
            </div>
        </div>
        <div class="mb-2">  
            <span <?php if($can_edit){ ?> data-value="<?php echo $data['class']; ?>" 
                data-pk="<?php echo $data['id'] ?>" 
                data-url="<?php print_link("questions_answers/editfield/" . urlencode($data['id'])); ?>" 
                data-name="class" 
                data-title="Enter Class" 
                data-placement="left" 
                data-toggle="click" 
                data-type="text" 
                data-mode="popover" 
                data-showbuttons="left" 
                class="is-editable" <?php } ?>>
                <span class="font-weight-light text-muted d-block">
                    Class
                </span>
                <?php echo $data['class']; ?> 
            </span>
        </div>
        <div class="mb-2">  
            <span <?php if($can_edit){ ?> data-value="<?php echo $data['unit']; ?>" 
                data-pk="<?php echo $data['id'] ?>" 
                data-url="<?php print_link("questions_answers/editfield/" . urlencode($data['id'])); ?>" 
                data-name="unit" 
                data-title="Enter Unit" 
                data-placement="left" 
                data-toggle="click" 
                data-type="text" 
                data-mode="popover" 
                data-showbuttons="left" 
                class="is-editable" <?php } ?>>
                <span class="font-weight-light text-muted d-block">
                    Unit
                </span>
                <?php echo $data['unit']; ?> 
            </span>
        </div>
        <div class="mb-2">  
            <span <?php if($can_edit){ ?> data-flatpickr="{ minDate: '', maxDate: ''}" 
                data-value="<?php echo $data['Date']; ?>" 
                data-pk="<?php echo $data['id'] ?>" 
                data-url="<?php print_link("questions_answers/editfield/" . urlencode($data['id'])); ?>" 
                data-name="Date" 
                data-title="Enter Date" 
                data-placement="left" 
                data-toggle="click" 
                data-type="flatdatetimepicker" 
                data-mode="popover" 
                data-showbuttons="left" 
                class="is-editable" <?php } ?>>
                <span class="font-weight-light text-muted d-block">
                    Date
                </span>
                <?php echo $data['Date']; ?> 
            </span>
        </div>
        <div class="td-btn">
            <?php if($can_view){ ?>
            <a class="btn btn-sm btn-success has-tooltip page-modal" title="View Record" href="<?php print_link("questions_answers/view/$rec_id"); ?>">
                <i class="icon-eye"></i> View
            </a>
            <?php } ?>
            <?php if($can_edit){ ?>
            <a class="btn btn-sm btn-info has-tooltip page-modal" title="Edit This Record" href="<?php print_link("questions_answers/edit/$rec_id"); ?>">
                <i class="icon-pencil"></i> Edit
            </a>
            <?php } ?>
            <?php if($can_delete){ ?>
            <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("questions_answers/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
<?php
} else {
?>
<td class="no-record-found col-12" colspan="100">
    <h4 class="text-muted text-center ">
        No Record Found
    </h4>
</td>
<?php
}
?>
