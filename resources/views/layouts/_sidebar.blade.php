
 @if(\Auth::user()->hasRole('admin'))
	<li class="header">ADMIN</li>
	<li class="{{\Request::is('/') ? 'active':''}}"><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
	<li class="{{\Request::is('colleges*') ? 'active':''}}"><a href="/colleges"><i class="fa fa-institution"></i> <span>Colleges</span></a></li>
	<li class="{{\Request::is('departments*') ? 'active':''}}"><a href="/departments"><i class="fa fa-random"></i> <span>Departments</span></a></li>
	<li class="{{\Request::is('programs*') ? 'active':''}}"><a href="/programs"><i class="fa fa-book"></i> <span>Programs</span></a></li>
	<li class="{{\Request::is('academic_years*') ? 'active':''}}"><a href="/academic_years"><i class="fa fa-calendar-check-o"></i> <span>Academic Years</span></a></li>
	<li class="{{\Request::is('roles*') ? 'active':''}}"><a href="/roles"><i class="fa fa-cubes"></i> <span>Roles</span></a></li>
	<li class="{{\Request::is('users*') ? 'active':''}}"><a href="/users"><i class="fa fa-users"></i> <span>Users</span></a></li>
	<li class="{{\Request::is('panels*') ? 'active':''}}"><a href="/panels"><i class="fa fa-object-group"></i> <span>Panels</span></a></li>
	<li class="{{\Request::is('announcements*') ? 'active':''}}"><a href="/announcements"><i class="fa  fa-newspaper-o"></i> <span>Announcements</span></a></li>
	<li class="{{\Request::is('resources*') ? 'active':''}}"><a href="/resources"><i class="fa  fa-files-o"></i> <span>Resources</span></a></li>
	<li class="{{\Request::is('project_categories*') ? 'active':''}}"><a href="/project_categories"><i class="fa fa-code-fork"></i> <span>Project Categories</span></a></li>
	<li class="{{\Request::is('project_platforms*') ? 'active':''}}"><a href="/project_platforms"><i class="fa fa-windows"></i> <span>Project Platforms</span></a></li>
	<li class="{{\Request::is('project_statuses*') ? 'active':''}}"><a href="/project_statuses"><i class="fa  fa-circle-o-notch"></i> <span>Project Statuses</span></a></li>
	<li class="{{\Request::is('projects*') ? 'active':''}}"><a href="/projects"><i class="fa  fa-tasks"></i> <span>Projects</span></a></li>
	<li class="{{\Request::is('report_types*') ? 'active':''}}"><a href="/report_types"><i class="fa  fa-code-fork"></i> <span>Report Types</span></a></li>
	<li class="{{\Request::is('report_statuses*') ? 'active':''}}"><a href="/report_statuses"><i class="fa  fa-tasks"></i> <span>Report Statuses</span></a></li>
	<li class="{{\Request::is('reports*') ? 'active':''}}"><a href="/reports"><i class="fa  fa-tasks"></i> <span>Reports</span></a></li>
  @endif

  @if(\Auth::user()->hasRole('coordinator'))
	<li class="header">COORDINATOR</li>
	<li class="active"><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
	<li class=""><a href=""><i class="fa fa-tasks"></i> <span>Projects</span></a></li>
	<li class=""><a href=""><i class="fa fa-file-pdf-o"></i> <span>Reports</span></a></li>
	<li class=""><a href=""><i class="fa fa-files-o"></i> <span>Resources</span></a></li>
	<li class=""><a href=""><i class="fa fa-newspaper-o"></i> <span>Announcements</span></a></li>
	<li class=""><a href=""><i class="fa fa-object-group"></i> <span>Panels</span></a></li>
  @endif

  
  @if(\Auth::user()->hasRole('supervisor'))
	<li class="header">SUPERVISOR</li>
		 @if(!\Auth::user()->hasRole('coordinator'))
	        <li class="{{\Request::is('/') ? 'active':''}}"><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
		 @endif
		<li class="{{\Request::is('supervisor/consultations') ? 'active':''}}"><a href="{{ url('/supervisor/consultations') }}"><i class="fa fa-commenting"></i> <span>Consultations</span></a></li>
	    <li class="{{\Request::is('supervisor/reports') ? 'active':''}}"><a href="{{ url('/supervisor/reports') }}"><i class="fa fa-file-pdf-o"></i> <span>Reports</span></a></li>
	    <li class="{{\Request::is('supervisor/panel') ? 'active':''}}"><a href="{{ url('/supervisor/panel') }}"><i class="fa fa-object-group"></i> <span>Panel</span></a></li>
  @endif



  @if(\Auth::user()->hasRole('student'))
	<li class="header">STUDENT</li>
	<li class="{{\Request::is('/') ? 'active':''}}"><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
	<li class="{{\Request::is('student/project') ? 'active':''}}"><a href="/student/project"><i class="fa fa-tasks"></i> <span>Project</span></a></li>
	<li class="{{\Request::is('student/concept_note') ? 'active':''}}"><a href="/student/concept_note"><i class="fa fa-file-pdf-o"></i><span>Concept Note</span></a></li>
	<li class="{{\Request::is('student/supervisor') ? 'active':''}}"><a href="{{ url('/student/supervisor') }}"><i class="fa fa-user"></i> <span>Supervisor</span></a></li>
    <li class="{{\Request::is('student/consultations') ? 'active':''}}"><a href="/student/consultations"><i class="fa fa-commenting"></i> <span>Consultations</span></a></li>
    <li class="{{\Request::is('student/reports') ? 'active':''}}"><a href="{{ url('/student/reports') }}"><i class="fa fa-file-pdf-o"></i> <span>Reports</span></a></li>
    <li class="{{\Request::is('student/results') ? 'active':''}}"><a href="{{ url('/student/results') }}"><i class="fa fa-balance-scale"></i> <span>Results</span></a></li>
  @endif