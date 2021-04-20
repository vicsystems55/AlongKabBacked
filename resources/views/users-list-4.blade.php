@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">User List 04</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Apps</a></li>
									<li class="breadcrumb-item"><a href="#">User List</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">User List 04</a></li>
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
						<div class="row flex-lg-nowrap">
							<div class="col-12">
								<div class="row flex-lg-nowrap">
									<div class="col-12 mb-3">
										<div class="e-panel card">
											<div class="card-body pb-2">
												<div class="row">
													<div class="col-6 mb-4">
														<a href="#" class="btn btn-primary"><i class="fe fe-plus"></i> Add New User</a>
													</div>
													<div class="col-6 col-auto">
														<div class="form-group">
															<div class="input-icon">
																<span class="input-icon-addon">
																	<i class="fe fe-search"></i>
																</span>
																<input type="text" class="form-control" placeholder="Search User">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Denis Rosenblum</p>
																	<small class="text-muted">Project Manager</small>
																</div>
																<div class="float-right ml-auto">
																	<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<ul class="mb-0 user-details">
																	<li class="mb-3"><span class="user-icon"><i class="fe fe-mail "></i></span><span class="h6">denisrosenblum@gmail.com</span></li>
																	<li><span class="user-icon"><i class="fe fe-phone-call"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">82%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 82%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Harvey Mattos</p>
																	<small class="text-muted">Develpoer</small>
																</div>
																<div class="float-right ml-auto">
																	<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<ul class="mb-0 user-details">
																	<li class="mb-3"><span class="user-icon"><i class="fe fe-mail "></i></span><span class="h6">harveymattos@gmail.com</span></li>
																	<li><span class="user-icon"><i class="fe fe-phone-call"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">82%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 82%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/5.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Catrice Doshier</p>
																	<small class="text-muted">Assistant Manager</small>
																</div>
																<div class="float-right ml-auto">
																	<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<ul class="mb-0 user-details">
																	<li class="mb-3"><span class="user-icon"><i class="fe fe-mail "></i></span><span class="h6">catricedoshier@gmail.com</span></li>
																	<li><span class="user-icon"><i class="fe fe-phone-call"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">74%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 74%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Catherina Bamber</p>
																	<small class="text-muted">Company Manager</small>
																</div>
																<div class="float-right ml-auto">
																	<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<ul class="mb-0 user-details">
																	<li class="mb-3"><span class="user-icon"><i class="fe fe-mail "></i></span><span class="h6">catherinabamber@gmail.com</span></li>
																	<li><span class="user-icon"><i class="fe fe-phone-call"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">55%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 55%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/8.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Margie Fitts</p>
																	<small class="text-muted">It Manager</small>
																</div>
																<div class="float-right ml-auto">
																	<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<ul class="mb-0 user-details">
																	<li class="mb-3"><span class="user-icon"><i class="fe fe-mail "></i></span><span class="h6">margiefitts@gmail.com</span></li>
																	<li><span class="user-icon"><i class="fe fe-phone-call"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">64%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 64%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/5.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Dana Lott</p>
																	<small class="text-muted">Hr Manager</small>
																</div>
																<div class="float-right ml-auto">
																	<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<ul class="mb-0 user-details">
																	<li class="mb-3"><span class="user-icon"><i class="fe fe-mail "></i></span><span class="h6">denisrosenblum@gmail.com</span></li>
																	<li><span class="user-icon"><i class="fe fe-phone-call"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">72%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 72%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Benedict Vallone</p>
																	<small class="text-muted">Hr Recriuter</small>
																</div>
																<div class="float-right ml-auto">
																	<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<ul class="mb-0 user-details">
																	<li class="mb-3"><span class="user-icon"><i class="fe fe-mail "></i></span><span class="h6">benedictballone@gmail.com</span></li>
																	<li><span class="user-icon"><i class="fe fe-phone-call"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">52%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 52%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/8.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Robbie Ruder</p>
																	<small class="text-muted">Ceo</small>
																</div>
																<div class="float-right ml-auto">
																	<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<ul class="mb-0 user-details">
																	<li class="mb-3"><span class="user-icon"><i class="fe fe-mail "></i></span><span class="h6">robbieruder@gmail.com</span></li>
																	<li><span class="user-icon"><i class="fe fe-phone-call"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">43%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 43%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/3.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Micaela Aultman</p>
																	<small class="text-muted">Php developer</small>
																</div>
																<div class="float-right ml-auto">
																	<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<ul class="mb-0 user-details">
																	<li class="mb-3"><span class="user-icon"><i class="fe fe-mail "></i></span><span class="h6">micaelaaultman@gmail.com</span></li>
																	<li><span class="user-icon"><i class="fe fe-phone-call"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">35%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 35%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Jacquelynn Sapienza</p>
																	<small class="text-muted">Web developer</small>
																</div>
																<div class="float-right ml-auto">
																	<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<ul class="mb-0 user-details">
																	<li class="mb-3"><span class="user-icon"><i class="fe fe-mail "></i></span><span class="h6">jacquelynnsapienza@gmail.com</span></li>
																	<li><span class="user-icon"><i class="fe fe-phone-call"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">86%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 86%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/9.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Elida Distefano</p>
																	<small class="text-muted">Hr Manager</small>
																</div>
																<div class="float-right ml-auto">
																	<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<ul class="mb-0 user-details">
																	<li class="mb-3"><span class="user-icon"><i class="fe fe-mail "></i></span><span class="h6">elidadistefano@gmail.com</span></li>
																	<li><span class="user-icon"><i class="fe fe-phone-call"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">73%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 73%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Collin Bridgman</p>
																	<small class="text-muted">web designer</small>
																</div>
																<div class="float-right ml-auto">
																	<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<ul class="mb-0 user-details">
																	<li class="mb-3"><span class="user-icon"><i class="fe fe-mail "></i></span><span class="h6">collinbridgman@gmail.com</span></li>
																	<li><span class="user-icon"><i class="fe fe-phone-call"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">67%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 67%"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
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
@endsection