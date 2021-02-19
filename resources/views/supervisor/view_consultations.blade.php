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
      <h3 class="box-title">Submitted Consultations</h3>
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
            <th>Semester</th>
            <th>Week Number</th>
            <th>Assigned Task</th>
            <th>Accomplished Task</th>
            <th>Challenge</th>
            <th>Submitted at</th>
            <th>Remarks</th>
          </thead>
          <tbody>
            @foreach($student->consultations as $row)
              <td>{{$row->semester_type}}</td>
              <td>{{$row->week_number}}</td>
              <td>{{$row->assigned_task}}</td>
              <td>{{$row->accomplished_task}}</td>
              <td>{{$row->challenge ?? '-'}}</td>
              <td>{{$row->created_at}}</td>
              <td>{{$row->remarks ?? '-'}}</td>
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
