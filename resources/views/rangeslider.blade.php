@extends('layouts.master')
@section('css')
		<!-- INTERNAl ion.rangeSlider css -->
		<link href="{{URL::asset('assets/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet">
		<link href="{{URL::asset('assets/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Range Slider</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Range Slider</a></li>
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
						<!--div-->
						<div class="card">
							<div class="card-header">
								<div class="card-title">
									Range Slider
								</div>
							</div>
							<div class="card-body">
								<div class="row row-sm">
									<div class="col-lg-12">
										<input class="rangeslider1" name="example_name" type="text" value="">
									</div>
									<div class="col-lg-12 mt-4">
										<input class="rangeslider2" name="example_name" type="text" value="">
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-lg-12 mt-4">
										<input class="rangeslider3" name="example_name" type="text" value="">
									</div>
									<div class="col-lg-12 mt-4">
										<input class="rangeslider4" name="example_name" type="text" value="">
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card">
							<div class="card-header">
								<div class="card-title">
									Range Slider (Modern Skin)
								</div>
							</div>
							<div class="card-body">
								<div class="row row-sm">
									<div class="col-lg-12">
										<input class="rangeslider1" data-extra-classes="irs-modern" name="example_name" type="text">
									</div>
									<div class="col-lg-12 mt-4">
										<input class="rangeslider2" data-extra-classes="irs-modern" name="example_name" type="text">
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-lg-12 mt-4">
										<input class="rangeslider3" data-extra-classes="irs-modern" name="example_name" type="text">
									</div>
									<div class="col-lg-12 mt-4">
										<input class="rangeslider4" data-extra-classes="irs-modern" name="example_name" type="text">
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card">
							<div class="card-header">
								<div class="card-title">
									Range Slider (Outline Skin)
								</div>
							</div>
							<div class="card-body">
								<div class="row row-sm">
									<div class="col-lg-12">
										<input class="rangeslider1" data-extra-classes="irs-outline" name="example_name" type="text">
									</div>
									<div class="col-lg-12 mt-4">
										<input class="rangeslider2" data-extra-classes="irs-outline" name="example_name" type="text">
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-lg-12 mt-4">
										<input class="rangeslider3" data-extra-classes="irs-outline" name="example_name" type="text">
									</div>
									<div class="col-lg-12 mt-4">
										<input class="rangeslider4" data-extra-classes="irs-outline" name="example_name" type="text">
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- INTERNAL ion.rangeSlider.min js -->
		<script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/rangeslider.js')}}"></script>
@endsection