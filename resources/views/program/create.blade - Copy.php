<?php

// echo "<pre/>";
// print_r($userData);
// die;

?>

<!-- BEGIN CONTENT BODY -->
<div class="page-content">

    <!-- BEGIN PAGE BREADCRUMB -->
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="<?php echo url('dashboard/index');?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">Program</span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->

	<div class="row">
		<div class="col-md-12">
			<div class="profile-content">
				<div class="portlet light ">
					<div class="portlet-title tabbable-line">
						<div class="caption caption-md">
							<i class="icon-globe theme-font hide"></i>
							<span class="caption-subject font-blue-madison bold uppercase">Create Programs</span>
						</div>
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_1_1" data-toggle="tab">Provide Program Data</a>
							</li>
						</ul>
					</div>
					<div class="portlet-body">
						<div class="tab-content">
							<!-- SATRT APPOINMENT TAB -->
							<div class="tab-pane active" id="tab_1_1">
								<form role="form" action="<?= url('program/create/');?>" method="POST">
									<div class="form-group">
										<label>Fields</label>
										<select name="field" id="field" class="form-control" required="ture">
											<option value="">-- SELECT A FIELD --</option>
										</select>
									</div>
									<div id="selected_doctor" class="form-group" hidden>
										<label>Doctor</label>
										<select name="doctor" id="doctor" class="form-control" required="ture"></select>
									</div>
									
									<div id="selected_doctor" class="form-group">
										<label>Appoinment Time</label>
										<input class="form-control date form_datetime" type="text" name="time" />
									</div>

									<div id="selected_doctor" class="form-group">
										<label>Title in English</label>
										<input class="form-control" type="text" name="titleEn" />
									</div>

									<div id="selected_doctor" class="form-group">
										<label>Title in Bangla</label>
										<input class="form-control" type="text" name="titleBn" />
									</div>

									<div id="selected_doctor" class="form-group">
										<label>Description</label>
                                        <textarea class="form-control" name="desc"></textarea>
									</div>

									<div id="selected_doctor" class="form-group">
										<label>Total Credit</label>
										<input class="form-control" type="number" name="totalCredit" />
									</div>

									<div id="selected_doctor" class="form-group">
										<label>Total Courses</label>
										<input class="form-control" type="number" name="totalCourses" />
									</div>

									<div id="selected_doctor" class="form-group">
										<label>Estimated Total Semester</label>
										<input class="form-control" type="number" name="totalSemester" />
									</div>

									
									<div class="margiv-top-10">
										<button type="submit" class="btn green"> Create Program </button>
									</div>
								</form>
							</div>
							<!-- END APPOINMENT TAB -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>