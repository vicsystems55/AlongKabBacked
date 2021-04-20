@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Profile 01</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers mr-2 fs-14"></i>Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Profile</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Profile 01</a></li>
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
								<div class="card box-widget widget-user">
									<div class="widget-user-image mx-auto mt-5"><img alt="User Avatar" class="rounded-circle" src="{{URL::asset('assets/images/users/2.jpg')}}"></div>
									<div class="card-body text-center">
										<div class="pro-user">
											<h4 class="pro-user-username text-dark mb-1 font-weight-bold">Jessica</h4>
											<h6 class="pro-user-desc text-muted">Web Designer</h6>
											<div class="wideget-user-rating">
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star-o text-warning mr-1"></i></a> <span>5 (3876 Reviews)</span>
											</div>
											<a href="{{url('/' . $page='profile')}}" class="btn btn-primary  mt-3"><i class="fa fa-pencil"></i> Edit Profile</a>
											<a href="#" class="btn btn-success  mt-3"><i class="fa fa-rss"></i> Follow</a>
										</div>
									</div>
									<div class="card-footer p-0">
										<div class="row">
											<div class="col-sm-6 border-right text-center">
												<div class="description-block p-4">
													<h5 class="description-header mb-1 font-weight-bold text-dark number-font">689k</h5>
													<span class="text-muted">Followers</span>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="description-block text-center p-4">
													<h5 class="description-header mb-1 font-weight-bold text-dark number-font">3,765</h5>
													<span class="text-muted">Following</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Personal Details</h4>
										<div class="table-responsive">
											<table class="table mb-0">
												<tbody>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Name </span>
														</td>
														<td class="py-2 px-0">Jacob Smith</td>
													</tr>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Location </span>
														</td>
														<td class="py-2 px-0">USA</td>
													</tr>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Languages </span>
														</td>
														<td class="py-2 px-0">English, German</td>
													</tr>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Website </span>
														</td>
														<td class="py-2 px-0">smithabgd.com</td>
													</tr>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Email </span>
														</td>
														<td class="py-2 px-0">georgemestayer@gmail.com</td>
													</tr>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Phone </span>
														</td>
														<td class="py-2 px-0">+125 254 3562s</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-9 col-lg-9 col-md-12">
								<div class="main-content-body main-content-body-profile card">
									<div class="main-profile-body">
										<div class="card-body">
											<div class="mb-5">
												<form class="profile-edit">
													<textarea class="form-control br-br-0 br-bl-0" placeholder="What are you doing right now?" rows="5"></textarea>
													<div class="profile-share  border border-top-0">
														<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Audio"><i class="fe fe-mic"></i></a>
														<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Video"><i class="fe fe-video"></i></a>
														<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Picture"><i class="fe fe-image"></i></a>
														<button type="submit" class="btn btn-info pull-right mt-1"><i class="fa fa-share ml-1"></i> Share</button>
													</div>
												</form>
											</div>
											<h5 class="font-weight-bold">Biography</h5>
											<div class="main-profile-bio mb-0">
												<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries nchanged.</p>
												<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
												<p class="mb-0">pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure.. <a href="">More</a></p>
											</div>
										</div>
										<div class="card-body border-top">
											<h5 class="font-weight-bold">Work & Education</h5>
											<div class="main-profile-contact-list d-lg-flex">
												<div class="media mr-5">
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
										<div class="card-body border-top">
											<h5 class="font-weight-bold">Skills</h5>
											<a class="btn btn-sm btn-light mt-1" href="#">HTML5</a>
											<a class="btn btn-sm btn-light mt-1" href="#">CSS</a>
											<a class="btn btn-sm btn-light mt-1" href="#">Java Script</a>
											<a class="btn btn-sm btn-light mt-1" href="#">Photo Shop</a>
											<a class="btn btn-sm btn-light mt-1" href="#">Php</a>
											<a class="btn btn-sm btn-light mt-1" href="#">Wordpress</a>
											<a class="btn btn-sm btn-light mt-1" href="#">Sass</a>
											<a class="btn btn-sm btn-light mt-1" href="#">Angular</a>
										</div>
										<div class="card-body border-top">
											<h5 class="font-weight-bold">Contact</h5>
											<div class="main-profile-contact-list d-lg-flex">
												<div class="media mr-4">
													<div class="media-icon bg-primary text-white  mr-3 mt-1">
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
											</div><!-- main-profile-contact-list -->
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
@endsection