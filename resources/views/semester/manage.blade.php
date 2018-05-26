
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
                </i>Manage Batch
            </div>
        </div>
        <div class="portlet-body form" style="display: block;">
            <form class="form-horizontal" role="form" action="<?= url('manage-batch');?>" method="POST">
                <div class="form-body">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                    <div class="form-group">
                        <div class="col-md-3">
                            <label></label>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn green" name="start"> Start Batch </button>
                        </div>
                    </div>
                </div>
            </form>
            <form class="form-horizontal" role="form" action="<?= url('manage-batch');?>" method="POST">
                <div class="form-body">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                    <div class="form-group">
                        <div class="col-md-3">
                            <label></label>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn green" name="stop"> Stop Batch </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>