@extends('layouts.main')

@section('title','Home')

@section('content')
  @if(\Auth::user()->hasRole('admin'))
    @include('admin.home')

    @elseif(\Auth::user()->hasRole('coordinator'))
     @include('coordinator.home')

    @elseif(\Auth::user()->hasRole('supervisor'))
     @include('supervisor.home')

    @elseif(\Auth::user()->hasRole('student'))
     @include('student.home')
  @endif

@endsection

@section('js')

<script src="{{asset('assets/bower_components/amcharts/core.js')}}"></script>
<script src="{{asset('assets/bower_components/amcharts/charts.js')}}"></script>
<script src="{{asset('assets/bower_components/amcharts/themes/animated.js')}}"></script>

<script>
	am4core.ready(function() {
	// Themes
	am4core.useTheme(am4themes_animated);
    //data
	var mydata = [
			 {
			  "category": "Agriculture",
			  "litres": 50.9
			}, {
			  "category": "Bussiness",
			  "litres": 31.9
			}, {
			  "category": "Education",
			  "litres": 201.1
			}, {
			  "category": "transport",
			  "litres": 165.8
			}, {
			  "category": "Security",
			  "litres": 139.9
			}, {
			  "category": "Healthcare",
			  "litres": 128.3
			}, {
			  "category": "Industry",
			  "litres": 99
			},
			{
			  "category": "Sports",
			  "litres": 99
			},
			{
			  "category": "Technology",
			  "litres": 99
			}
	    ];
	    //*******bar chart begins here******************************************************
		// Create bar chart instance
		var chart = am4core.create("barchart1", am4charts.XYChart);
		// Add data
		chart.data = mydata;
		// Create axes
		var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
		categoryAxis.dataFields.category = "category";
		categoryAxis.renderer.grid.template.location = 0;
		categoryAxis.renderer.minGridDistance = 30;
		categoryAxis.renderer.labels.template.adapter.add("dy", function(dy, target) {
		  if (target.dataItem && target.dataItem.index & 2 == 2) {
		    return dy + 25;
		  }
		  return dy;
		});
		var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
		// Create series
		var series = chart.series.push(new am4charts.ColumnSeries());
		series.dataFields.valueY = "litres";
		series.dataFields.categoryX = "category";
		series.name = "litres";
		series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/]";
		series.columns.template.fillOpacity = .8;
		series.columns.alignLabels = false;
		var columnTemplate = series.columns.template;
		columnTemplate.strokeWidth = 2;
		columnTemplate.strokeOpacity = 1;
		//*******bar chart end here******************************************************

        
        //*******pie chart end here******************************************************
		//Create pie chart instance
		var piechart1 = am4core.create("piechart1", am4charts.PieChart);
		// Add data
		piechart1.data = mydata;
		piechart1.radius = am4core.percent(68);
		// Add and configure Series
		var pieSeries = piechart1.series.push(new am4charts.PieSeries());
		pieSeries.dataFields.value = "litres";
		pieSeries.dataFields.category = "category";
		pieSeries.slices.template.stroke = am4core.color("#ccc");
		pieSeries.slices.template.strokeOpacity = 1;
		pieSeries.labels.template.text = "{category}";
		pieSeries.alignLabels = false;
		// This creates initial animation
		pieSeries.hiddenState.properties.opacity = 1;
		pieSeries.hiddenState.properties.endAngle = -90;
		pieSeries.hiddenState.properties.startAngle = -90;
		piechart1.hiddenState.properties.radius = am4core.percent(100);
		//*******pie chart end here******************************************************
	  });
</script>
@endsection
