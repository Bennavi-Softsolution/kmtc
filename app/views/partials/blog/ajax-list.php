<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("blog/add");
$can_edit = ACL::is_allowed("blog/edit");
$can_view = ACL::is_allowed("blog/view");
$can_delete = ACL::is_allowed("blog/delete");
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
<tr>
    <th class="td-sno"><?php echo $counter; ?></th>
    <td class="td-text">
        <span <?php if($can_edit){ ?> data-value="<?php echo $data['text']; ?>" 
            data-pk="<?php echo $data['id'] ?>" 
            data-url="<?php print_link("blog/editfield/" . urlencode($data['id'])); ?>" 
            data-name="text" 
            data-title="Enter Text" 
            data-placement="left" 
            data-toggle="click" 
            data-type="text" 
            data-mode="popover" 
            data-showbuttons="left" 
            class="is-editable" <?php } ?>>
            <?php echo $data['text']; ?> 
        </span>
    </td>
    <td class="td-date">
        <span <?php if($can_edit){ ?> data-value="<?php echo $data['date']; ?>" 
            data-pk="<?php echo $data['id'] ?>" 
            data-url="<?php print_link("blog/editfield/" . urlencode($data['id'])); ?>" 
            data-name="date" 
            data-title="Enter Date" 
            data-placement="left" 
            data-toggle="click" 
            data-type="text" 
            data-mode="popover" 
            data-showbuttons="left" 
            class="is-editable" <?php } ?>>
            <?php echo $data['date']; ?> 
        </span>
    </td>
</tr>
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
