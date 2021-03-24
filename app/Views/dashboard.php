<div class="main-content-wrap sidenav-open d-flex flex-column">
	<!-- ============ Body content start ============= -->
	<div class="main-content">
		<div class="breadcrumb">
			<h1 class="mr-2">Welcome back!</h1>
			<ul>
				<li><a href="">Dashboard</a></li>
				<li><?php echo date("d F Y"); ?></li>
			</ul>
		</div>
		<div class="separator-breadcrumb border-top"></div>
		<div class="row mb-4">
			<div class="col-md-3 col-lg-3">
				<div class="card mb-4 o-hidden">
					<div class="card-body ul-card__widget-chart">
						<div class="ul-widget__chart-info">
							<h5 class="heading">Core</h5>
							<div class="ul-widget__chart-number">
								<h2 class="t-font-boldest">$1000</h2><small class="text-muted">46% compared to last year</small>
							</div>
						</div>
						<div id="basicArea-chart"></div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-lg-3">
				<div class="card mb-4 o-hidden">
					<div class="card-body ul-card__widget-chart">
						<div class="ul-widget__chart-info">
							<h5 class="heading">Self</h5>
							<div class="ul-widget__chart-number">
								<h2 class="t-font-boldest">$500</h2><small class="text-muted">46% compared to last year</small>
							</div>
						</div>
						<div id="basicArea-chart2"></div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-lg-3">
				<div class="card mb-4 o-hidden">
					<div class="card-body ul-card__widget-chart">
						<div class="ul-widget__chart-info">
							<h5 class="heading">Group</h5>
							<div class="ul-widget__chart-number">
								<h2 class="t-font-boldest">$44,909</h2><small class="text-muted">46% compared to last year</small>
							</div>
						</div>
						<div id="basicArea-chart3"></div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-lg-3">
				<div class="card mb-4 o-hidden">
					<div class="card-body ul-card__widget-chart">
						<div class="ul-widget__chart-info">
							<h5 class="heading">Overview</h5>
							<div class="ul-widget__chart-number">
								<h2 class="t-font-boldest">$500</h2><small class="text-muted">46% compared to last year</small>
							</div>
						</div>
						<div id="basicArea-chart4"></div>
					</div>
				</div>
			</div>
			<!-- table-->
			<div class="col-lg-7 col-xl-7 mt-4">
				<div class="card">
					<div class="card-body">
						<div class="ul-widget__head v-margin">
							<div class="ul-widget__head-label">
								<h3 class="ul-widget__head-title"></h3>
							</div>
							<button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
							<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
							</div>
						</div>
						<div class="ul-widget-body">
							<div class="ul-widget3">
								<div class="ul-widget6__item--table">
									<table class="table">
										<thead>
											<tr class="ul-widget6__tr--sticky-th">
												<th scope="col">#</th>
												<th scope="col"></th>
												<th scope="col">Survey Code</th>
												<th scope="col">Status</th>
												<th scope="col">Actions</th>
											</tr>
										</thead>
										<tbody>
											<!-- start tr-->
											<tr>
												<th scope="row">
													<label class="checkbox checkbox-outline-info">
														<input type="checkbox" checked="" /><span class="checkmark"></span>
													</label>
												</th>
												<td><span>
														<div class="ul-widget_user-card">
															<div class="ul-widget4__img"><img id="userDropdown" src="<?php echo base_url(); ?>/public/assets/images/profile-pic.jpg" alt="" /></div>
														</div>
													</span></td>
												<td>CN7749486</td>
												<td><span class="badge badge-outline badge-outline-info p-2 m-1">Send Reminder</span></td>
												<td>
													<button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
													<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
														<div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
													</div>
												</td>
											</tr>
											<!-- end tr-->
											<!-- start tr-->
											<tr>
												<th scope="row">
													<label class="checkbox checkbox-outline-info">
														<input type="checkbox" checked="" /><span class="checkmark"></span>
													</label>
												</th>
												<td><span>
														<div class="ul-widget_user-card">
															<div class="ul-widget4__img"><img id="userDropdown" src="<?php echo base_url(); ?>/public/assets/images/profile-pic.jpg" alt="" /></div>
														</div>
													</span></td>
												<td>11/28/2016</td>
												<td><span class="badge badge-outline badge-outline-info p-2 m-1">Send Reminder</span></td>
												<td>
													<button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
													<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
														<div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
													</div>
												</td>
											</tr>
											<!-- end tr-->
											<!-- start tr-->
											<tr>
												<th scope="row">
													<label class="checkbox checkbox-outline-info">
														<input type="checkbox" checked="" /><span class="checkmark"></span>
													</label>
												</th>
												<td><span>
														<div class="ul-widget_user-card">
															<div class="ul-widget4__img"><img id="userDropdown" src="<?php echo base_url(); ?>/public/assets/images/profile-pic.jpg" alt="" /></div>
														</div>
													</span></td>
												<td>11/28/2016</td>
												<td><span class="badge badge-outline badge-outline-info p-2 m-1">Send Reminder</span></td>
												<td>
													<button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
													<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
														<div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
													</div>
												</td>
											</tr>
											<!-- end tr-->
											<!-- start tr-->
											<tr>
												<th scope="row">
													<label class="checkbox checkbox-outline-info">
														<input type="checkbox" checked="" /><span class="checkmark"></span>
													</label>
												</th>
												<td><span>
														<div class="ul-widget_user-card">
															<div class="ul-widget4__img"><img id="userDropdown" src="<?php echo base_url(); ?>/public/assets/images/profile-pic.jpg" alt="" /></div>
														</div>
													</span></td>
												<td>11/28/2016</td>
												<td><span class="badge badge-outline badge-outline-info p-2 m-1">Send Reminder</span></td>
												<td>
													<button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
													<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
														<div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
													</div>
												</td>
											</tr>
											<!-- end tr-->
											<!-- start tr-->
											<tr>
												<th scope="row">
													<label class="checkbox checkbox-outline-info">
														<input type="checkbox" checked="" /><span class="checkmark"></span>
													</label>
												</th>
												<td><span>
														<div class="ul-widget_user-card">
															<div class="ul-widget4__img"><img id="userDropdown" src="<?php echo base_url(); ?>/public/assets/images/profile-pic.jpg" alt="" /></div>
														</div>
													</span></td>
												<td>11/28/2016</td>
												<td><span class="badge badge-outline badge-outline-info p-2 m-1">Send Reminder</span></td>
												<td>
													<button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
													<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
														<div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
													</div>
												</td>
											</tr>
											<!-- end tr-->
											<!-- start tr-->
											<tr>
												<th scope="row">
													<label class="checkbox checkbox-outline-info">
														<input type="checkbox" checked="" /><span class="checkmark"></span>
													</label>
												</th>
												<td><span>
														<div class="ul-widget_user-card">
															<div class="ul-widget4__img"><img id="userDropdown" src="<?php echo base_url(); ?>/public/assets/images/profile-pic.jpg" alt="" /></div>
														</div>
													</span></td>
												<td>11/28/2016</td>
												<td><span class="badge badge-outline badge-outline-info p-2 m-1">Send Reminder</span></td>
												<td>
													<button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
													<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
														<div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
													</div>
												</td>
											</tr>
											<!-- end tr-->
											<!-- start tr-->
											<tr>
												<th scope="row">
													<label class="checkbox checkbox-outline-info">
														<input type="checkbox" checked="" /><span class="checkmark"></span>
													</label>
												</th>
												<td><span>
														<div class="ul-widget_user-card">
															<div class="ul-widget4__img"><img id="userDropdown" src="<?php echo base_url(); ?>/public/assets/images/profile-pic.jpg" alt="" /></div>
														</div>
													</span></td>
												<td>11/28/2016</td>
												<td><span class="badge badge-outline badge-outline-info p-2 m-1">Send Reminder</span></td>
												<td>
													<button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
													<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
														<div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
													</div>
												</td>
											</tr>
											<!-- end tr-->
											<!-- start tr-->
											<tr>
												<th scope="row">
													<label class="checkbox checkbox-outline-info">
														<input type="checkbox" checked="" /><span class="checkmark"></span>
													</label>
												</th>
												<td><span>
														<div class="ul-widget_user-card">
															<div class="ul-widget4__img"><img id="userDropdown" src="<?php echo base_url(); ?>/public/assets/images/profile-pic.jpg" alt="" /></div>
														</div>
													</span></td>
												<td>11/28/2016</td>
												<td><span class="badge badge-outline badge-outline-info p-2 m-1">Send Reminder</span></td>
												<td>
													<button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
													<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
														<div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
													</div>
												</td>
											</tr>
											<!-- end tr-->
											<!-- start tr-->
											<tr>
												<th scope="row">
													<label class="checkbox checkbox-outline-info">
														<input type="checkbox" checked="" /><span class="checkmark"></span>
													</label>
												</th>
												<td><span>
														<div class="ul-widget_user-card">
															<div class="ul-widget4__img"><img id="userDropdown" src="<?php echo base_url(); ?>/public/assets/images/profile-pic.jpg" alt="" /></div>
														</div>
													</span></td>
												<td>11/28/2016</td>
												<td><span class="badge badge-outline badge-outline-info p-2 m-1">Send Reminder</span></td>
												<td>
													<button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
													<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
														<div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
													</div>
												</td>
											</tr>
											<!-- end tr-->
											<!-- start tr-->
											<tr>
												<th scope="row">
													<label class="checkbox checkbox-outline-info">
														<input type="checkbox" checked="" /><span class="checkmark"></span>
													</label>
												</th>
												<td><span>
														<div class="ul-widget_user-card">
															<div class="ul-widget4__img"><img id="userDropdown" src="<?php echo base_url(); ?>/public/assets/images/profile-pic.jpg" alt="" /></div>
														</div>
													</span></td>
												<td>11/28/2016</td>
												<td><span class="badge badge-outline badge-outline-info p-2 m-1">Send Reminder</span></td>
												<td>
													<button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
													<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
														<div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
													</div>
												</td>
											</tr>
											<!-- end tr-->
											<!-- start tr-->
											<tr>
												<th scope="row">
													<label class="checkbox checkbox-outline-info">
														<input type="checkbox" checked="" /><span class="checkmark"></span>
													</label>
												</th>
												<td><span>
														<div class="ul-widget_user-card">
															<div class="ul-widget4__img"><img id="userDropdown" src="<?php echo base_url(); ?>/public/assets/images/profile-pic.jpg" alt="" /></div>
														</div>
													</span></td>
												<td>11/28/2016</td>
												<td><span class="badge badge-outline badge-outline-info p-2 m-1">Send Reminder</span></td>
												<td>
													<button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
													<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
														<div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
													</div>
												</td>
											</tr>
											<!-- end tr-->
											<!-- start tr-->
											<tr>
												<th scope="row">
													<label class="checkbox checkbox-outline-info">
														<input type="checkbox" checked="" /><span class="checkmark"></span>
													</label>
												</th>
												<td><span>
														<div class="ul-widget_user-card">
															<div class="ul-widget4__img"><img id="userDropdown" src="<?php echo base_url(); ?>/public/assets/images/profile-pic.jpg" alt="" /></div>
														</div>
													</span></td>
												<td>11/28/2016</td>
												<td><span class="badge badge-outline badge-outline-info p-2 m-1">Send Reminder</span></td>
												<td>
													<button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
													<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
														<div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
													</div>
												</td>
											</tr>
											<!-- end tr-->
										</tbody>
									</table>
								</div>
								<nav aria-label="Page navigation example">
									<ul class="pagination">
										<li class="page-item"><a class="page-link" href="#">Previous</a></li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">Next</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-6 col-xl-5 mt-4">
			<div class="card">
							<div class="card-body">
								<div class="ul-widget__body">
									<div class="tab-content">
										<div class="tab-pane active show" id="ul-widget5-tab1-content">
											<div class="ul-widget5" style="height: 440px; overflow-y: scroll;">
												
											<!-- ITEM STARTS -->
												<div class="ul-widget5__item">
													
													<div class="ul-widget5__content">
														<div class="ul-widget5__pic"><img src="<?php echo base_url(); ?>/public/assets/images/profile-pic.jpg" alt="Third slide" /></div>
														
														<div class="ul-widget5__section"><a class="ul-widget4__title" href="#">12 Month Magazine Description</a>
															<div class="ul-widget5__info"><span>Limited Time Only</span></div>
															<div class="ul-widget5__info"><span>RM 90</span></div>
															<p class="ul-widget5__desc">UI lib admin themes.</p>
															<span class="badge badge-outline badge-outline-info p-2 m-1">Enquire</span>
														</div>
													
													</div>
												
												</div>
											<!-- ITEM ENDS -->

											<!-- ITEM STARTS -->
											<div class="ul-widget5__item">
													
													<div class="ul-widget5__content">
														<div class="ul-widget5__pic"><img src="<?php echo base_url(); ?>/public/assets/images/profile-pic.jpg" alt="Third slide" /></div>
														
														<div class="ul-widget5__section"><a class="ul-widget4__title" href="#">12 Month Magazine Description</a>
															<div class="ul-widget5__info"><span>Limited Time Only</span></div>
															<div class="ul-widget5__info"><span>RM 90</span></div>
															<p class="ul-widget5__desc">UI lib admin themes.</p>
															<span class="badge badge-outline badge-outline-info p-2 m-1">Enquire</span>
														</div>
													
													</div>
												
												</div>
											<!-- ITEM ENDS -->


											<!-- ITEM STARTS -->
											<div class="ul-widget5__item">
													
													<div class="ul-widget5__content">
														<div class="ul-widget5__pic"><img src="<?php echo base_url(); ?>/public/assets/images/profile-pic.jpg" alt="Third slide" /></div>
														
														<div class="ul-widget5__section"><a class="ul-widget4__title" href="#">12 Month Magazine Description</a>
															<div class="ul-widget5__info"><span>Limited Time Only</span></div>
															<div class="ul-widget5__info"><span>RM 90</span></div>
															<p class="ul-widget5__desc">UI lib admin themes.</p>
															<span class="badge badge-outline badge-outline-info p-2 m-1">Enquire</span>
														</div>
													
													</div>
												
												</div>
											<!-- ITEM ENDS -->


											<!-- ITEM STARTS -->
											<div class="ul-widget5__item">
													
													<div class="ul-widget5__content">
														<div class="ul-widget5__pic"><img src="<?php echo base_url(); ?>/public/assets/images/profile-pic.jpg" alt="Third slide" /></div>
														
														<div class="ul-widget5__section"><a class="ul-widget4__title" href="#">12 Month Magazine Description</a>
															<div class="ul-widget5__info"><span>Limited Time Only</span></div>
															<div class="ul-widget5__info"><span>RM 90</span></div>
															<p class="ul-widget5__desc">UI lib admin themes.</p>
															<span class="badge badge-outline badge-outline-info p-2 m-1">Enquire</span>
														</div>
													
													</div>
												
												</div>
											<!-- ITEM ENDS -->


											<!-- ITEM STARTS -->
											<div class="ul-widget5__item">
													
													<div class="ul-widget5__content">
														<div class="ul-widget5__pic"><img src="<?php echo base_url(); ?>/public/assets/images/profile-pic.jpg" alt="Third slide" /></div>
														
														<div class="ul-widget5__section"><a class="ul-widget4__title" href="#">12 Month Magazine Description</a>
															<div class="ul-widget5__info"><span>Limited Time Only</span></div>
															<div class="ul-widget5__info"><span>RM 90</span></div>
															<p class="ul-widget5__desc">UI lib admin themes.</p>
															<span class="badge badge-outline badge-outline-info p-2 m-1">Enquire</span>
														</div>
													
													</div>
												
												</div>
											<!-- ITEM ENDS -->


											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
			</div>
		</div>
		<!-- end of row-->
		<!-- end of main-content -->
	</div>
</div>
