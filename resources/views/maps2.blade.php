@extends('layouts.master')
@section('css')
		<!-- INTERNAL leaflet Css-->
		<link href="{{URL::asset('assets/plugins/leaflet/leaflet.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Leaflet Maps</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-map-pin mr-2 fs-14"></i>Maps</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Leaflet Maps</a></li>
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
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card mg-b-20" id="map">
									<div class="card-header">
										<div class="card-title">Basic</div>
									</div>
									<div class="card-body">
										<div class="ht-300" id="leaflet1" style="height:300px"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card mg-b-20" id="map2">
									<div class="card-header">
										<div class="card-title">With Popup</div>
									</div>
									<div class="card-body">
										<div class="ht-300" id="leaflet2" style="height:300px"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card" id="map1">
									<div class="card-header">
										<div class="card-title">Map With Circle</div>
									</div>
									<div class="card-body">
										<div class="ht-200 ht-sm-300 ht-md-400" id="leaflet3" style="height:300px"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row -->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- INTERNAL leaflet js -->
		<script src="{{URL::asset('assets/plugins/leaflet/leaflet.js')}}"></script>
		<script src="{{URL::asset('assets/js/map-leafleft.js')}}"></script>
@endsection
        