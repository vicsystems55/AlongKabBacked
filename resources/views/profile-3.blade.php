@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Profile 03</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers mr-2 fs-14"></i>Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Profile</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Profile 03</a></li>
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
							<div class="col-xl-3 col-lg-3 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="box-widget widget-user text-center">
											<div class="widget-user-image mx-auto">
												<img alt="User Avatar" class="rounded-circle" src="{{URL::asset('assets/images/users/2.jpg')}}">
											</div>
											<div class="mt-4 ml-sm-5 ml-0">
												<h4 class="pro-user-username text-dark mb-2 font-weight-bold">Jessica</h4>
												<div>
													<span class="badge badge-light badge-pill">admin</span>
													<span class="badge badge-light badge-pill">Company director</span>
												</div>
												<div class="wideget-user-rating mt-2">
													<a href="#"><i class="fa fa-star text-warning"></i></a>
													<a href="#"><i class="fa fa-star text-warning"></i></a>
													<a href="#"><i class="fa fa-star text-warning"></i></a>
													<a href="#"><i class="fa fa-star text-warning"></i></a>
													<a href="#"><i class="fa fa-star-o text-warning mr-1"></i></a> <span>5 (3876 Reviews)</span>
												</div>
												<div class="wideget-user-icons mb-2 mt-2">
													<a href="#" class="bg-facebook text-white mt-0"><i class="fa fa-facebook"></i></a>
													<a href="#" class="bg-info text-white"><i class="fa fa-twitter"></i></a>
													<a href="#" class="bg-google text-white"><i class="fa fa-google"></i></a>
													<a href="#" class="bg-dribbble text-white"><i class="fa fa-dribbble"></i></a>
												</div>
												<a href="{{url('/' . $page='profile')}}" class="btn btn-primary mt-3"><i class="fa fa-pencil"></i> Edit Profile</a>
												<a href="#" class="btn btn-success mt-3"><i class="fa fa-rss"></i> Follow</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">Education</div>
									</div>
									<div class="card-body">
										<div class="main-profile-contact-list">
											<div class="media mr-5 mt-0">
												<div class="media-icon bg-success text-white mr-4">
													<i class="fa fa-whatsapp"></i>
												</div>
												<div class="media-body">
													<h6 class="font-weight-bold mb-1">Web Designer at <a href="" class="btn-link">Spruko</a></h6>
													<span>2018 - present</span>
													<p>Past Work: Spruko, Inc.</p>
												</div>
											</div>
											<div class="media mr-5">
												<div class="media-icon bg-danger text-white mr-4">
													<i class="fa fa-briefcase"></i>
												</div>
												<div class="media-body">
													<h6 class="font-weight-bold mb-1">Studied at <a href=""  class="btn-link">University</a></h6>
													<span>2004-2008</span>
													<p>Graduation: Bachelor of Science in Computer Science</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">Contact</div>
									</div>
									<div class="card-body">
										<div class="main-profile-contact-list">
											<div class="media mr-4 mt-0">
												<div class="media-icon bg-primary text-white mr-3 mt-1">
													<i class="fa fa-phone"></i>
												</div>
												<div class="media-body">
													<small class="text-muted">Mobile</small>
													<div class="font-weight-normal1">
														+245 354 654
													</div>
												</div>
											</div>
											<div class="media mr-4">
												<div class="media-icon bg-warning text-white mr-3 mt-1">
													<i class="fa fa-slack"></i>
												</div>
												<div class="media-body">
													<small class="text-muted">Stack</small>
													<div class="font-weight-normal1">
														@spruko.com
													</div>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-info text-white mr-3 mt-1">
													<i class="fa fa-map"></i>
												</div>
												<div class="media-body">
													<small class="text-muted">Current Address</small>
													<div class="font-weight-normal1">
														San Francisco, USA
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-9 col-lg-9 col-md-12">
								<div class="card">
									<div class="card-body">
										<form class="">
											<textarea class="form-control br-br-0 br-bl-0" placeholder="What are you doing right now?" rows="5"></textarea>
											<div class="profile-share border border-light2 border-top-0">
												<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Audio"><i class="fe fe-mic fs-20"></i></a>
												<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Video"><i class="fe fe-video fs-20"></i></a>
												<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Picture"><i class="fe fe-image fs-20"></i></a>
												<button type="submit" class="btn btn-info mt-1 pull-right"><i class="fa fa-share ml-1"></i> Share</button>
											</div>
										</form>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">Time Line</div>
									</div>
									<div class="card-body pb-0">
										<div class="d-flex">
											<div class="media mt-0">
												<div class="media-user mr-2">
													<div class=""><img alt="" class="rounded-circle avatar avatar-md" src="{{URL::asset('assets/images/users/2.jpg')}}"></div>
												</div>
												<div class="media-body">
													<h6 class="mb-0 mt-1 font-weight-bold">Jessica</h6>
													<small class="text-primary">just now</small>
												</div>
											</div>
											<div class="ml-auto">
												<div class="dropdown">
													<a class="pro-option" href="JavaScript:void(0);" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit Post</a>
														<a class="dropdown-item" href="#">Delete Post</a>
														<a class="dropdown-item" href="#">Personal Settings</a>
													</div>
												</div>
											</div>
										</div>
										<div class="mt-4">
											<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
										</div>
										<div class="media mg-t-15 profile-footer">
											<div class="media-user mr-2 mt-1">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
													<span class="avatar brround">+28</span>
												</div>
											</div>
											<div class="media-body">
												<h6 class="mb-0 mt-4 ml-2">28 people like your photo</h6>
											</div>
											<div class="ml-auto">
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-heart"></i></a>
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-message-square"></i></a>
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-share-2"></i></a>
											</div>
										</div>
									</div>
									<div class="card-body pb-0">
										<div class="d-flex">
											<div class="media mt-0">
												<div class="media-user mr-2">
													<div class=""><img alt="" class="rounded-circle avatar avatar-md" src="{{URL::asset('assets/images/users/2.jpg')}}"></div>
												</div>
												<div class="media-body">
													<h6 class="mb-0 mt-1 font-weight-bold">Jessica</h6>
													<small class="text-muted">Sep 26 2019, 10:14am</small>
												</div>
											</div>
											<div class="ml-auto">
												<div class="dropdown">
													<a class="pro-option" href="JavaScript:void(0);" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit Post</a>
														<a class="dropdown-item" href="#">Delete Post</a>
														<a class="dropdown-item" href="#">Personal Settings</a>
													</div>
												</div>
											</div>
										</div>
										<div class="mt-4">
											<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
											<div class="d-flex">
												<img src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="img" class="w-40 m-1">
												<img src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="img" class="w-40 m-1">
											</div>
										</div>
										<div class="media mg-t-15 profile-footer">
											<div class="media-user mr-2 mt-1">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
													<span class="avatar brround">+28</span>
												</div>
											</div>
											<div class="media-body">
												<h6 class="mb-0 mt-3 ml-2">28 people like your photo</h6>
											</div>
											<div class="ml-auto">
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-heart"></i></a>
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-message-square"></i></a>
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-share-2"></i></a>
											</div>
										</div>
									</div>
									<div class="card-body pb-0">
										<div class="d-flex">
											<div class="media mt-0">
												<div class="media-user mr-2">
													<div class=""><img alt="" class="rounded-circle avatar avatar-md" src="{{URL::asset('assets/images/users/2.jpg')}}"></div>
												</div>
												<div class="media-body">
													<h6 class="mb-0 mt-1 font-weight-bold">Jessica</h6>
													<small class="text-muted">Sep 24 2019, 09:14am</small>
												</div>
											</div>
											<div class="ml-auto">
												<div class="dropdown">
													<a class="pro-option" href="JavaScript:void(0);" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit Post</a>
														<a class="dropdown-item" href="#">Delete Post</a>
														<a class="dropdown-item" href="#">Personal Settings</a>
													</div>
												</div>
											</div>
										</div>
										<div class="mt-4">
											<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
											<div class="d-flex">
												<img src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="img" class="w-30 m-1">
												<img src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="img" class="w-30 m-1">
												<img src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="img" class="w-30 m-1">
											</div>
										</div>
										<div class="media mg-t-15 profile-footer">
											<div class="media-user mr-2 mt-1">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
													<span class="avatar brround">+28</span>
												</div>
											</div>
											<div class="media-body">
												<h6 class="mb-0 mt-3 ml-2">28 people like your photo</h6>
											</div>
											<div class="ml-auto">
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-heart"></i></a>
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-message-square"></i></a>
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-share-2"></i></a>
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