@extends('layouts.master')
@section('css')
@endsection
		<!-- Modal -->
		<div class="modal" id="myModal">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content tx-size-sm">
					<div class="modal-body text-center">
						<i class="fe fe-alert-triangle fs-50"></i>
						<h4 class="text-primary fs-20 font-weight-semibold mt-2">Session Timeout</h4>
						<progress id="custom-bar" class="custom-progress mb-4 wd-70p mt-3" max="100" value="0">0%</progress>
						<p class="mb-4 mx-4">You're being timed out due to inactivity. Please choose to stay signed in or to logoff. Otherwise, you will logged off automatically..</p>
						<a class="btn btn-danger px-5" href="{{url('/' . $page='login-1')}}">Log Out</a>
						<a aria-label="Close" class="btn btn-primary px-5 text-white" data-dismiss="modal">Stay Logedin</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Session Time Out</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fe fe-grid mr-2 fs-14"></i>Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}">Session Time Out</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									<a href="{{url('/' . $page='#')}}" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>
									<a href="{{url('/' . $page='#')}}" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
									<a href="{{url('/' . $page='#')}}" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a>
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
										<div class="card-title">
											Session Time Out Demo
										</div>
									</div>
									<div class="card-body">
										<p class="mg-b-20">The Basic Collapse Accordion Styles of Nixlot template</p>
										<p class="mg-b-10">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
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
		<!-- INTERNAL Session js -->
		<script src="{{URL::asset('assets/js/session.js')}}"></script>
@endsection