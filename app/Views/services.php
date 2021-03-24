<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
        <td colspan="3"><a href="<?php echo site_url('services/addNewService'); ?>" data-toggle="modal" data-target="#exampleModal">Add New Service</a></td>

        </tr>
            <tr>
                <th>Title</th>
                <th>Active</th>
				<th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php if(sizeof($resData) > 0) {
            foreach($resData as $rs) { ?>

        <tr>
            <td><?php echo $rs['title']; ?></td>
            <td class="text-center">
                <label class="switch">
                <input type="checkbox" <?php echo ($rs['is_active'] == 1) ? "checked" : ""; ?> value="<?php echo $rs['is_active'] ?>" onchange="changeActiveStatus('<?php echo $rs['id']; ?>',this);">
                    <span class="slider round"></span>
                </label>
            </td>
            <td><a href="<?php echo site_url('services/editService/'.$rs['id']); ?>" class="btn btn-primary">Edit</a>
            <a href="<?php echo site_url('services/deleteService/'.$rs['id']); ?>" onclick="return confirm('Are you sure?');" class="btn btn-primary">Delete</a>
            </td>
        </tr>
            <?php } } else { ?>
                <tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table</td></tr>

            <?php } ?>
							</tbody>
						  </table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row p-3 small-font">
            <div class="col-sm">
            <span id="span-msg" class="text-info"></span><br>

                <label class="mt-1">Service Title</label>
                <input type="text" placeholder="Enter title" class="form-control small-font" id="title" name="title" required/>
                
               
            </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="addNewService();">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>

function addNewService() {

  if($("#title").val() == "" ) {
    $("#span-msg").html("Please enter title.");
    return false;
  } else{
    $("#span-msg").html("");
  }

  $.ajax({
		url:'<?php echo site_url('services/addNewService'); ?>',
		type: 'POST',  // http method
		data: { 'title' : $("#title").val()},  // data to submit
		success: function (response) {
        if(response == "exists" ){
          $("#span-msg").html("Service already exists.");
        }else if(response != "error") {
          $("#span-msg").html("Service added successfully.");
          window.location.href = "<?= site_url("services/editService/") ?>"+response;
        } else {
          $("#span-msg").html("Something went wrong.");
        }
			
		},
		error: function (jqXhr, textStatus, errorMessage) {
      console.log(errorMessage);
            alert("something went wrong");
			
		}
});

}
</script>


