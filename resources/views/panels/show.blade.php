
 @extends('layouts.main')
 @section('title','View College')
 @section('content-header')

 @endsection

 @section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                    <div class="box-body">
                       <table class="table table-primary table-bordered">
                          <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                          </tr>
                          <tr>
                            <td>Name</td>
                            <td>{{$panel->name}}</td>
                          </tr>
                          <tr>
                            <td>Department</td>
                            <td>@if($panel->department) {{$panel->department->name.' ('.$panel->department->abbreviation.')'}} @else <i class="text-danger">Not Found</i>@endif</td>
                          </tr>
                          <tr>
                            <td>Academic Year</td>
                            <td>@if($panel->academicYear) {{$panel->academicYear->name}} @else <i class="text-danger">Not Found</i> @endif</td>
                          </tr>
                          <tr>
                            <td>Date</td>
                            <td>@if($panel->date) {{$panel->date}} @else <i class="text-danger">Not Set</i>@endif</td>
                          </tr>
                          <tr>
                            <td>Start Time</td>
                            <td>@if($panel->start_time) {{$panel->start_time}} @else <i class="text-danger">Not Set</i>@endif</td>
                          </tr>
                          <tr>
                            <td>End Time</td>
                            <td>@if($panel->end_time) {{$panel->end_time}} @else <i class="text-danger">Not Found</i>@endif</td>
                          </tr>
                          <tr>
                            <td>Venue</td>
                            <td>@if($panel->venue) {{$panel->venue}} @else <i class="text-danger">Not Found</i>@endif</td>
                          </tr>
                       </table>
                    </div>
                    
                </div>
                <!-- /.box -->
            </div>
        </div>
 @endsection

 @section('js')
  
 
 @endsection

