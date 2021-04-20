@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Mapel Maps</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-map-pin mr-2 fs-14"></i>Maps</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Accordion</a></li>
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
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h4  class="card-title">Map with links between the plotted cities</h4>
									</div>
									<div class="card-body">
										<div class="mapcontainer4">
											<div class="map pt-0">
												<span>Alternative content for the map</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Static MapelMaps</h4>
									</div>
									<div class="card-body">
										<div class="mapcontainer">
											<div class="map pt-0">
												<span>Alternative content for the map</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title"> Map with a legend for areas</h4>
									</div>
									<div class="card-body">
										<div class="mapcontainer1">
											<div class="map pt-0">
												<span>Alternative content for the map</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- INTERNAL Mapel Plugin -->
		<script src="{{URL::asset('assets/plugins/mapel/raphael.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/mapel/jquery.mapael.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/mapel/maps/france_departments.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/mapel/maps/world_countries.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/mapel/maps/usa_states.js')}}"></script>
		<script src="{{URL::asset('assets/js/mapelmaps.js')}}"></script>
@endsection