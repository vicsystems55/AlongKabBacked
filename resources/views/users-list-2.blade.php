@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">User List 02</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Apps</a></li>
									<li class="breadcrumb-item"><a href="#">User List</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">User List 02</a></li>
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
											<div class="card-body">
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
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Denis Rosenblum</p>
																<small class="text-muted">Project Manager</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-outline-secondary">Message</a>
																<a href="#" class="btn btn-primary">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Harvey Mattos</p>
																<small class="text-muted">Develpoer</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-outline-secondary">Message</a>
																<a href="#" class="btn btn-primary">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/5.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Catrice Doshier</p>
																<small class="text-muted">Assistant Manager</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-outline-secondary">Message</a>
																<a href="#" class="btn btn-primary">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Catherina Bamber</p>
																<small class="text-muted">Company Manager</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-outline-secondary">Message</a>
																<a href="#" class="btn btn-primary">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/8.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Margie Fitts</p>
																<small class="text-muted">It Manager</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-outline-secondary">Message</a>
																<a href="#" class="btn btn-primary">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/5.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Dana Lott</p>
																<small class="text-muted">Hr Manager</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-outline-secondary">Message</a>
																<a href="#" class="btn btn-primary">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Benedict Vallone</p>
																<small class="text-muted">Hr Recriuter</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-outline-secondary">Message</a>
																<a href="#" class="btn btn-primary">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/8.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Robbie Ruder</p>
																<small class="text-muted">Ceo</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-outline-secondary">Message</a>
																<a href="#" class="btn btn-primary">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/3.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Micaela Aultman</p>
																<small class="text-muted">Php developer</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-outline-secondary">Message</a>
																<a href="#" class="btn btn-primary">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Jacquelynn Sapienza</p>
																<small class="text-muted">Web developer</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-outline-secondary">Message</a>
																<a href="#" class="btn btn-primary">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/9.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Elida Distefano</p>
																<small class="text-muted">Hr Manager</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-outline-secondary">Message</a>
																<a href="#" class="btn btn-primary">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Collin Bridgman</p>
																<small class="text-muted">web designer</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-outline-secondary">Message</a>
																<a href="#" class="btn btn-primary">View Profile</a>
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