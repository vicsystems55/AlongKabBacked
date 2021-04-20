						@extends('layouts.master')
						@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}">Template</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									<!-- <a href="{{url('/' . $page='#')}}" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>
									<a href="{{url('/' . $page='#')}}" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a> -->
									
								</div>
							</div>
						</div>
						<!--End Page header-->
						@endsection
						@section('content')		

                        <h1 class="mt-5 text-center">Under Construction</h1>				
						
						<!--End row-->

					</div>
				</div>
				<!-- End app-content-->
			</div>
@endsection
@section('js')

<!--INTERNAL Peitychart js-->
<script src="{{URL::asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

<!--INTERNAL Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>

<!--INTERNAL ECharts js-->
<script src="{{URL::asset('assets/plugins/echarts/echarts.js')}}"></script>

<!--INTERNAL Chart js -->
<script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>

<!-- INTERNAL Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>

<!--INTERNAL Moment js-->
<script src="{{URL::asset('assets/plugins/moment/moment.js')}}"></script>

<!--INTERNAL Index js-->
<script src="{{URL::asset('assets/js/index1.js')}}"></script>

@endsection