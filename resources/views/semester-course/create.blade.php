
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
                </i>Assign Course to Semester
            </div>
        </div>
        <div class="portlet-body form" style="display: block;">
            <form class="form-horizontal" role="form" action="<?= url('/store');?>" method="POST">
                <div class="form-body">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />


                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Semesters <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-4">
                            <select id="single" name="semester" placeholder="Select Semester" class="form-control select2">
                                <option></option>
                                @foreach ($semester as $sem)
                                <option value="{{ $sem->id }}">{{ $sem->semester_title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Courses <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-4">
                            <select name="courses[]" multiple="multiple" class="multi-select" id="my_multi_select1">
                                @foreach ($course as $cour)
                                <option value="{{ $cour->id }}">{{ $cour->course_title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label></label>
                        </div>
                        <div class="col-md-4">
                            <button name="assign" type="submit" class="btn green"> Assign </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>