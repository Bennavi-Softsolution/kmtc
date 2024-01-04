<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("test_papers/add");
$can_edit = ACL::is_allowed("test_papers/edit");
$can_view = ACL::is_allowed("test_papers/view");
$can_delete = ACL::is_allowed("test_papers/delete");
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
<div class="col-sm-4">
    <div class="bg-light p-2 mb-3 animated bounceIn">
        <div class="mb-2">  
            <span <?php if($can_edit){ ?> data-value="<?php echo $data['name']; ?>" 
                data-pk="<?php echo $data['id'] ?>" 
                data-url="<?php print_link("test_papers/editfield/" . urlencode($data['id'])); ?>" 
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
        <div class="mb-2">  <?php Html :: page_link_file($data['file']); ?></div>
        <div class="mb-2">  
            <span <?php if($can_edit){ ?> data-flatpickr="{ minDate: '', maxDate: ''}" 
                data-value="<?php echo $data['date']; ?>" 
                data-pk="<?php echo $data['id'] ?>" 
                data-url="<?php print_link("test_papers/editfield/" . urlencode($data['id'])); ?>" 
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
        <div class="mb-2">  
            <span <?php if($can_edit){ ?> data-value="<?php echo $data['writer']; ?>" 
                data-pk="<?php echo $data['id'] ?>" 
                data-url="<?php print_link("test_papers/editfield/" . urlencode($data['id'])); ?>" 
                data-name="writer" 
                data-title="Enter Writer" 
                data-placement="left" 
                data-toggle="click" 
                data-type="text" 
                data-mode="popover" 
                data-showbuttons="left" 
                class="is-editable" <?php } ?>>
                <span class="font-weight-light text-muted ">
                    Writer:  
                </span>
                <?php echo $data['writer']; ?> 
            </span>
        </div>
        <div class="td-btn">
            <?php if($can_view){ ?>
            <a class="btn btn-sm btn-success has-tooltip page-modal" title="View Record" href="<?php print_link("test_papers/view/$rec_id"); ?>">
                <i class="icon-eye"></i> View
            </a>
            <?php } ?>
            <?php if($can_edit){ ?>
            <a class="btn btn-sm btn-info has-tooltip page-modal" title="Edit This Record" href="<?php print_link("test_papers/edit/$rec_id"); ?>">
                <i class="icon-pencil"></i> Edit
            </a>
            <?php } ?>
            <?php if($can_delete){ ?>
            <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("test_papers/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
