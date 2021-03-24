<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
       
            <tr>
                <th>User Name</th>
                <th>User Email Address</th>
                <th>Feedback</th>
                <th>Date</th>
				<!--th>Action</th-->
            </tr>
        </thead>
        <tbody>
            <?php if(sizeof($resData) > 0) {
                foreach($resData as $rs) { ?>

            <tr>
                <td><?php echo $rs['fullname']; ?></td>
                <td><?php echo $rs['email']; ?></td>
                <td><?php $feedback = nl2br($rs['feedback']);
                    if(strlen($feedback) < 40) {
                        echo $feedback;
                    } else {
                        echo substr($feedback,0,39).'...<a href="javascript:void(0);" onclick="readMore('.$rs['fb_id'].');" data-toggle="modal" data-target="#exampleModal">Read More</a>'; ?>
                        
                   
                    <input type="hidden" id="feedback-desc-<?php echo $rs['fb_id'] ?>" value="<?php echo $feedback; ?>" />
                    <?php  } ?>
                    </td>
                <td><?php echo date("d M Y h:i A",strtotime($rs['created_at'])); ?></td>
                <!--td><a href="<?php echo site_url('feedback/deleteFeedback/'.$rs['fb_id']); ?>" onclick="return confirm('Are you sure?');" class="btn btn-primary">Delete</a>
                </td-->
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
        <h5 class="modal-title" id="exampleModalLabel">Feedback expanded</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row p-3">
            <div class="col-sm" id="feedback-html">

               
               
            </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$('#feedback-html').html('');">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
function readMore(id) {

    $('#feedback-html').html($("#feedback-desc-"+id).val());
}
</script>