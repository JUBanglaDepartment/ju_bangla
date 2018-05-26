
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
                </i>Create Semester
            </div>
        </div>
        <div class="portlet-body form" style="display: block;">
            <form class="form-horizontal" role="form" action="<?= url('semester');?>" method="POST">
                <div class="form-body">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Semester <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-4">
                            <select required name="semester" id="semester" class="form-control input-sm" required>
                                <option value="">-- SELECT A FIELD --</option>
                                <option value="spring">SPRING</option>
                                <option value="summer">SUMMER</option>
                                <option value="fall">FALL</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Duration <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group input-large date-picker input-daterange" data-date="2017-11-10" data-date-format="yyyy-mm-dd">
                                <input placeholder="Start Date" type="text" name="from" required="true" class="form-control input-sm" />
                                <span class="input-group-addon"> to </span>
                                <input placeholder="End Date" type="text" name="to" required="true" class="form-control input-sm" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Description</label>
                        </div>
                        <div class="col-md-4">
                            <textarea class="form-control input-sm" name="desc" placeholder="Enter Semester's Description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label></label>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn green"> Create Semester </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>