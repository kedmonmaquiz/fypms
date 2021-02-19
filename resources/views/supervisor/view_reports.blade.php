@extends('layouts.main')

@section('title','Edit Project')

@section('content')
  
 <div class="row">

  <div class="col-md-3">
    <div class="box box-default box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Student Details</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
       <table class="table table-hover table-bordered">
         <tr>
           <th>Student Name</th>
           <td>{{$student->fullName}}</td>
         </tr>
         <tr>
           <th>Reg No</th>
           <td>{{$student->username}}</td>
         </tr>
         <tr>
           <th>Program</th>
           <td title="{{$student->program->name}}">{{$student->program->abbreviation}}</td>
         </tr>
       </table>
      
    </div>
    <!-- /.box-body -->
  </div>
  </div>
 

  <div class="col-md-9">
    <div class="box box-default box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Submitted Reports</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
       <table id="datatable" class="data-table table table-bordered table-hover" style="width: 100%">
          <thead>
            <th>Report Type</th>
            <th>Report Status</th>
             <th>Date of Submission</th>
            <th>Remarks</th>
            <th>Download</th>
            <th>Actions</th>
          </thead>
          <tbody>
            @foreach($student->reports as $row)
              <td>{{$row->reportType->display_name}}</td>
              <td>{{$row->reportStatus->display_name}}</td>
              <td>{{$row->created_at}}</td>
              <td>{{$row->remarks ?? '-'}}</td>
              <td><i class="fa fa-download"></i></td>
              <td><a href="javascript:void()"  title="Edit report status" data-toggle="modal" data-target="#edit-report-{{$row->id}}"><i class="fa fa-pencil"></i></a></td>

               <!--view Description-->
                    <div class="modal fade" id="edit-report-{{$row->id}}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                             <h4 class="modal-title"><strong>{{$row->reportType->display_name}}</strong></h4>
                          </div>
                          <div class="modal-body">
                             <form action="/supervisor/reports/{{$row->id}}/update" method="post" enctype="multipart/form-data">
                                   @csrf
                                   @method('PATCH')

                                   <div class="form-group">
                                      <label class="">Department</label>
                                       <select name="report_status_id" class="form-control select2" required style="width: 100%;">
                                         <option value="">--Select Status--</option>
                                          @foreach(\App\Models\ReportStatus::all() as $status)
                                            <option value="{{$status->id}}" {{$status->id == $row->report_status_id ? 'selected':''}}>{{$status->display_name}}</option>
                                          @endforeach
                                        </select>
                                    </div>

                                <div class="box-footer">
                                 <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
                              </form>
                          </div>
                          <!-- /.modal-body -->
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.View description Modal -->  
            @endforeach
          </tbody>
       </table>
    </div>
    <!-- /.box-body -->
  </div>
  </div>
 </div>

@endsection

@section('js')
<script>  
 
</script>
@endsection
