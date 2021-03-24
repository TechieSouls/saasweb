<div class="card-group w-100">
<div class="card">
  <div class="card-body">
    <div class="row">
    <div class="col-sm-12 text-center">
            <h5 class="mb-0">Contact User Info</h5>
        </div>
    </div>
    <hr>

  <div class="row">
      <div class="col-sm-4">
         <h6 class="mb-0">User Name</h6>
      </div>
      <div class="col-sm-8 text-secondary"><?= $data['fullname']; ?></div>
   </div>
   <hr>
   <div class="row">
      <div class="col-sm-4">
         <h6 class="mb-0">Email Address</h6>
      </div>
      <div class="col-sm-8 text-secondary"><?= $data['email']; ?></div>
   </div>
   <hr>
   <div class="row">
      <div class="col-sm-4">
         <h6 class="mb-0">Phone Number</h6>
      </div>
      <div class="col-sm-8 text-secondary"><?= $data['phoneNumber']; ?></div>
   </div>
   <hr>
   <div class="row">
    <div class="col-sm-12 text-center">
            <h5 class="mb-0">Appointment Info</h5>
        </div>
    </div>
    <hr>
   <div class="row">
      <div class="col-sm-4">
         <h6 class="mb-0">Start Date</h6>
      </div>
      <div class="col-sm-8 text-secondary"><?= date('d-m-Y',($data['start_time'])/1000); ?></div>
   </div>
   <hr>
   <div class="row">
      <div class="col-sm-4">
         <h6 class="mb-0">End Date</h6>
      </div>
      <div class="col-sm-8 text-secondary"><?= date('d-m-Y',($data['end_time'])/1000); ?></div>
   </div>
   
  </div>
</div>
<div class="card">
   
    <div class="card-body">
    <div class="row">
    <div class="col-sm-12" data-target="#modalIMG" data-toggle="modal" style="cursor:pointer;">
    <?php if($data['photo'] != '') { ?>
    <img class="card-img-top" src="<?= $data['photo']; ?>" alt="Card image cap">
        <?php } else if($data['gender'] == 'female') { ?>
            <img class="card-img-top" src="<?= base_url('public/assets/images/user-female.png'); ?>" alt="Card image cap">

        <?php } else if($data['gender'] == 'male') { ?>
            <img class="card-img-top" src="<?= base_url('public/assets/images/user-male.png'); ?>" alt="Card image cap">
        <?php } ?>
        </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-sm-12">
    <div class="col-sm-12 text-center"><h5 class="mb-0"><?= $data['title']; ?></h5></div>
    </div>
    </div>
    </div>
</div>
<div class="card">
   
<div class="card-body">
<div class="row">
    <div class="col-sm-12 text-center">
            <h5 class="mb-0">Healing User Info</h5>
        </div>
    </div>
    <hr>

   <div class="row">
      <div class="col-sm-4">
         <h6 class="mb-0">Full Name</h6>
      </div>
      <div class="col-sm-8 text-secondary"><?= $data['full_name']; ?></div>
   </div>
   <hr>

   <div class="row">
      <div class="col-sm-4">
         <h6 class="mb-0">Gender</h6>
      </div>
      <div class="col-sm-8 text-secondary"><?= $data['gender']; ?></div>
   </div>
   <hr>

   <div class="row">
      <div class="col-sm-4">
         <h6 class="mb-0">Address</h6>
      </div>
      <div class="col-sm-8 text-secondary"><?= $data['address']; ?><?= ", ".$data['city']; ?><?= ", ".$data['state']; ?><?= ", ".$data['country']; ?></div>
   </div>
   <hr>



   <div class="row">
      <div class="col-sm-4">
         <h6 class="mb-0">Problem Description</h6>
      </div>
      <div class="col-sm-8 text-secondary"><?= $data['problem_description']; ?></div>
   </div>


</div>
</div>
</div>



    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG" role="dialog" tabindex="-1">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body mb-0 p-0">
				<img src="<?php if($data['photo'] != '') { 
                echo $data['photo']; 
            } else if($data['gender'] == 'female') { 
                echo base_url('public/assets/images/user-female.png'); 
            } else if($data['gender'] == 'male') { 
                echo base_url('public/assets/images/user-male.png'); 
            } ?>" alt="" style="width:100%">
			</div>
			<div class="modal-footer">
            <div><a href="<?php if($data['photo'] != '') { 
                echo $data['photo']; 
            } else if($data['gender'] == 'female') { 
                echo base_url('public/assets/images/user-female.png'); 
            } else if($data['gender'] == 'male') { 
                echo base_url('public/assets/images/user-male.png'); 
            } ?>" download class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" >Download</a></div>
				<button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
			</div>
		</div>
	</div>
</div>
<style>

.modal,body.modal-open {
    padding-right: 0!important
}

body.modal-open {
    overflow: auto
}

body.scrollable {
    overflow-y: auto
}

.modal-footer {
	display: flex;
	justify-content: flex-start;
	.btn {
		position: absolute;
		right: 10px;
	}
}


</style>


