@extends('layouts.master')
@section('css')	
		<!-- INTERNAL Jvectormap css -->
        <link href="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Vector Maps</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-map-pin mr-2 fs-14"></i>Maps</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Vector Maps</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									<a href="#" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>
									<a href="#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
									<a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a>
								</div>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')
						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">World Map</h3>
									</div>
									<div class="card-body">
										<div id="world-map-markers" class="worldh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->
						</div>
						<!-- End row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header">
										<h3 class="card-title">Asia Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap2" class="stateh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header">
										<h3 class="card-title">Australia Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap3" class="stateh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Canada Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap4" class="stateh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->
							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header">
										<h3 class="card-title">Germany Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap5" class="stateh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header">
										<h3 class="card-title">Europe Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap6" class="stateh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">India Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap7" class="stateh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->
							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header">
										<h3 class="card-title">UK Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap8" class="stateh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">USA Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap9" class="stateh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->
						</div>
						<!-- End Row -->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- INTERNAL Vector js -->
		<script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/gdp-data.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-asia-mill.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-au-mill.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-de-mill.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-europe-mill-en.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-in-mill.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js')}}"></script>
		<script src="{{URL::asset('assets/js/jvectormap.js')}}"></script>
@endsection