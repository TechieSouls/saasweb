<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
       
            <tr>
                <th>Sr. No.</th>
                <th>Photo</th>
                <th>User Name</th>
                <th>User Email Address</th>
                <th>Phone Number</th>
                <th>Created On</th>
				<!--th>Action</th-->
            </tr>
        </thead>
        <tbody>
            <?php if(sizeof($resData) > 0) {
                foreach($resData as $key=>$rs) { ?>

            <tr>
                <td><?php echo $key+1; ?></td>
                <td> <img src="<?php echo ($rs['photo'] == "") ? base_url('public/assets/images/profile-pic.jpg') :rs['photo']; ?>"  width="90"/></td>
                <td><?php echo $rs['fullname']; ?></td>
                <td><?php echo $rs['email']; ?></td>
                <td><?php echo $rs['countryCode']."-".$rs['phoneNumber']; ?></td>
                <td><?php echo date("d M Y h:i A",strtotime($rs['created_at'])); ?></td>
            </tr>
                <?php } } else { ?>
                    <tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table</td></tr>

                <?php } ?>
    </tbody>
</table>