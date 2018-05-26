
<!-- BEGIN CONTENT BODY -->
<div class="page-content">

    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))

        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
        @endforeach
    </div> <!-- end .flash-message -->

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                </i>Create Programs
            </div>
        </div>
        <div class="portlet-body form" style="display: block;">
            <form class="form-horizontal" role="form" action="<?= url('program');?>" method="POST">
                <div class="form-body">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Title in English <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-4">
                            <input required class="form-control input-sm" type="text" name="titleEn" placeholder="Enter Program's Title in English" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Title in Bangla <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-4">
                            <input required class="form-control input-sm" type="text" name="titleBn" placeholder="Enter Program's Title in Bangla" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Total Credit <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-4">
                            <input required class="form-control input-sm" type="number" min="0" name="totalCredit" placeholder="Enter Program's Total Credit" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Total Courses <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-4">
                            <input required class="form-control input-sm" type="number" min="0" name="totalCourses" placeholder="Enter Program's Total Courses" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Estimated Total Semester</label>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control input-sm" type="number" min="0" name="totalSemester" placeholder="Enter Program's Estimated Total Semester" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Description</label>
                        </div>
                        <div class="col-md-4">
                            <textarea class="form-control input-sm" name="desc" placeholder="Enter Program's Description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label></label>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn green"> Create Program </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>