
<div class="row">
  <div class="col-md-3">
    <div class="box box-default box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Project Status</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
       Waiting For Response
    </div>
    <!-- /.box-body -->
  </div>
  </div>

  <div class="col-md-3">
    <div class="box box-default box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Concept Note</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
       Not submitted
    </div>
    <!-- /.box-body -->
  </div>
  </div>

  <div class="col-md-3">
    <div class="box box-default box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Supervisor</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
       Not Assigned Yet
    </div>
    <!-- /.box-body -->
  </div>
  </div>

  <div class="col-md-3">
    <div class="box box-default box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Final Report</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
       Not submitted
    </div>
    <!-- /.box-body -->
  </div>
  </div>
</div>

<div class="row"> 
<div class="col-md-6">
  <div class="box box-default box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Announcements</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      @foreach(\App\Models\Announcement::all() as $announcement)
        <div style="padding-bottom:1px;">
          <table>
            <tr>
              <td><img src="{{ asset('assets/dist/img/new1.gif') }}" width="40px" alt="">&nbsp</td>
              <td><a href="">{{strtoupper(substr($announcement->title,0,100)).'...'}}</a></td>
            </tr>
            <tr><td></td><td><small><i class="text-muted">Posted {{$announcement->created_at->diffForHumans()}}</i></small></td></tr>
          </table>
        </div>
      @endforeach
    </div>
    <!-- /.box-body -->
  </div>
</div>
<div class="col-md-6">
  <div class="box box-default box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Resources</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table>
        <tbody>
             <tr>
                 <td>FYP GUIDELINES</td>
                 <td>&nbsp;&nbsp;&nbsp;<i class="fa fa-download"><a href=""></i>(Download)</a></td>
             </tr>
             <tr>
                 <td>FYP Research Request Letter </td>
                 <td>&nbsp;&nbsp;&nbsp;<i class="fa fa-download"><a href=""></i>(Download)</a></td>
             </tr>
             <tr>
                 <td>FYP Cover Page </td>
                 <td>&nbsp;&nbsp;&nbsp;<i class="fa fa-download"><a href=""></i>(Download)</a></td>
             </tr>
             <tr>
                 <td>Consultaion Form </td>
                 <td>&nbsp;&nbsp;&nbsp;<i class="fa fa-download"><a href=""></i>(Download)</a></td>
             </tr>
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
</div>
</div>
</div>

<div class="row">
  <div class="col-md-6">
     <div class="box box-default box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">Projects According to Categories</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
        </div>
        <!-- /.box-tools -->
      </div>
    <!-- /.box-header -->
      <div class="box-body">
        <div id="barchart1" style="width: 100%;height: 400px;"></div>
     </div>
    <!-- /.box-body -->
    </div>
  </div>

  <div class="col-md-6">
     <!-- Pie chart -->
    <div class="box box-default box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">Projects According to Platforms</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div id="piechart1" style="width: 100%;height: 400px;"></div>
      </div>
      <!-- /.box-body -->
    </div>
    <!--. Pie chart -->
  </div>
</div>