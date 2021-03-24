
<?php if(sizeof($data) > 0) {
 foreach($data as $dt) { ?>
<tr>
                <td><?= $dt['fullname']; ?></td>
                <td><?= $dt['email']; ?></td>
                <td><?= date('d-m-Y',($dt['start_time'])/1000); ?></td>
                <td><?= date('d-m-Y',($dt['end_time'])/1000); ?></td>
                <td><?= $dt['title']; ?></td>
                <td><a href="<?php echo site_url('webportal/viewdetail/'.$dt['app_id']); ?>">View</a></td>
            </tr>

<?php } } else { ?>
    <tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table</td></tr>
<?php } ?>