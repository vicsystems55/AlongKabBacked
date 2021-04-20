@extends('layouts.master')
@section('css')
		<!-- INTERNAL Notifications  Css -->
		<link href="{{URL::asset('assets/plugins/notify/css/jquery.growl.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Notifications</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Navigations</a></li>
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
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alerts Styles Notifications</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<button onclick="not1()" class="btn btn-primary">Default</button>
											<button onclick="not2()" class="btn btn-secondary">Center</button>
											<button onclick="not3()" class="btn btn-warning">Left</button>
											<button onclick="not4()" class="btn btn-info">Center Info</button>
											<button onclick="not5()" class="btn btn-danger">Center Error</button>
											<button onclick="not6()" class="btn btn-success">Center Warning</button>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Side Alerts Notifications</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<a href="#" class="btn btn-primary notice">Primary</a>
											<a href="#" class="btn btn-secondary warning">Warning</a>
											<a href="#" class="btn btn-info error">Danger</a>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alerts Popovers</h3>
									</div>
									<div class="card-body">
										<button type="button" class="btn btn-success mr-2" data-container="body" data-toggle="popover" data-popover-color="popsuccess" data-placement="bottom" title="alert sucess" data-content="Well done! You successfully read this important alert message..">
											Show success
										</button>
										<button type="button" class="btn btn-info mr-2" data-container="body" data-toggle="popover" data-popover-color="popinfo" data-placement="top" title="alert info" data-content="Heads up! This alert needs your attention, but it's not super important...">
											Show info
										</button>
										<button type="button" class="btn btn-warning mr-2" data-container="body" data-toggle="popover" data-popover-color="popwarning" data-placement="bottom" title="alert warning" data-content="Warning! Best check yo self, you're not looking too good..">
											Show warning
										</button>
										<button type="button" class="btn btn-secondary mr-2" data-container="body" data-toggle="popover" data-popover-color="popsecondary" data-placement="top" title="alert secondary" data-content="Error! Please Check u r emial id..">
											Show secondary
										</button>
										<button type="button" class="btn btn-danger mr-2" data-container="body" data-toggle="popover" data-popover-color="popdanger" data-placement="bottom" title="alert danger" data-content="Oh snap! Change a few things up and try submitting again.">
											Show danger
										</button>
										<button type="button" class="btn btn-primary mr-2" data-container="body"  data-toggle="popover" data-popover-color="pop-primary" data-placement="top" title="alert primary" data-content="Cool! This alert will close in 3 seconds. The data-delay attribute is in milliseconds.">
											Show primary
										</button>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- INTERNAL popover js -->
		<script src="{{URL::asset('assets/js/popover.js')}}"></script>

		<!-- INTERNAL Notifications js -->
		<script src="{{URL::asset('assets/plugins/notify/js/rainbow.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/notify/js/sample.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/notify/js/jquery.growl.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
@endsection