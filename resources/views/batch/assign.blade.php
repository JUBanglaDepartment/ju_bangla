
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <form class="form-horizontal" role="form" action="<?= url('assign-course');?>" method="POST">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <div class="form-body">

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

            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Assign Menu to Role
                        <select class="form-control input-small">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                            <option>Option 5</option>
                        </select>
                    </div>
                    <div class="tools">
                        <button class="btn red" type="submit">Assign</button>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                           <tr>
                               <th>
                                   <input name="all" value="1" type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />
                               </th>
                                <th> ID </th>
                                <th> Title </th>
                                <th> URL </th>
                                <th> Description </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(empty($courses))
                                <tr>
                                    <td colspan="7">No Data Found</td>
                                </tr>
                            @else
                                @foreach($courses as $course)
                                <tr class="odd gradeX">
                                    <td><input name="offered[]" type="checkbox" class="checkboxes" value="{{$course->id}}" /></td>
                                    <td>{{$course->course_code}}</td>
                                    <td>{{$course->course_title}}</td>
                                    <td>{{$course->course_category}}</td>
                                    <td>{{$course->course_credit}}</td>
                                    <td>{{$course->course_desc}}</td>
                                    <td><button class="btn red" type="submit">Add</button></td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </form>
</div>