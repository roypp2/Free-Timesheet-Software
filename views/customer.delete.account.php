<?php $temp = $data['result_data']; ?>
<?php for ($x = 0; $x< count($temp); $x++) { ?>
<input type="hidden" id="cid" name="cid" value="<?php echo $temp[$x]['id']; ?>" />
<h5 class="card-title">Are you sure you want to delete this user?</h5>
<h6>Name <span class="badge bg-secondary"><?php echo $temp[$x]['first_name']." ".$temp[$x]['last_name']; ?></span></h6>
<h6>Email <span class="badge bg-secondary"><?php echo $temp[$x]['email']; ?></span></h6>
<?php } ?>
