<div class="row">
  
  <div class="col-md-3">
		<!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{\App\Models\Role::where('name','student')->first()->users->count()}}</h3>

          <p>Students</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="#" class="small-box-footer">
          More info <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
  </div>

	<div class="col-md-3">
<!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>{{\App\Models\Project::all()->count()}}</h3>

        <p>Projects</p>
      </div>
      <div class="icon">
        <i class="fa fa-tasks"></i>
      </div>
      <a href="#" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
	</div>
    
     <div class="col-md-3">
		<!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{\App\Models\Role::where('name','Supervisor')->first()->users->count()}}</h3>

          <p>Supervisors</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="#" class="small-box-footer">
          More info <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
  </div>
	

	<div class="col-md-3">
		<!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{\App\Models\College::all()->count()}}</h3>

              <p>Reports</p>
            </div>
            <div class="icon">
              <i class="fa fa-file-pdf-o"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
	</div>
</div>

<div class="row">
  <div class="col-md-6">
     <div class="box box-default box-solid collapsed-box">
      <div class="box-header with-border">
        <h3 class="box-title">Projects According to Categories</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
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
    <div class="box box-default box-solid collapsed-box">
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
        <div id="piechart1" style="width: 100%;height: 400px;"></div>
      </div>
      <!-- /.box-body -->
    </div>
    <!--. Pie chart -->
  </div>
</div>




