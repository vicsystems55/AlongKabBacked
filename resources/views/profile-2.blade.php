@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Profile 02</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers mr-2 fs-14"></i>Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Profile</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Profile 02</a></li>
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
						<!--/app header-->
						<div class="main-proifle">
							<div class="row">
								<div class="col-lg-8">
									<div class="box-widget widget-user">
										<div class="widget-user-image1 d-sm-flex">
											<img alt="User Avatar" class="rounded-circle border p-0" src="{{URL::asset('assets/images/users/2.jpg')}}">
											<div class="mt-1 ml-lg-5">
												<h4 class="pro-user-username mb-3 font-weight-bold">Jessica <i class="fa fa-check-circle text-success"></i></h4>
												<ul class="mb-0 pro-details">
													<li><span class="profile-icon"><i class="fe fe-globe"></i></span><span class="h6 mt-3">https://demo.com</span></li>
													<li><span class="profile-icon"><i class="fe fe-mail"></i></span><span class="h6 mt-3">jessica@gmail.com</span></li>
													<li><span class="profile-icon"><i class="fe fe-flag"></i></span><span class="h6 mt-3">English, German</span></li>
													<li><span class="profile-icon"><i class="fe fe-phone-call"></i></span><span class="h6 mt-3">+345 657 567</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-auto">
									<div class="text-lg-right btn-list mt-4 mt-lg-0">
										<a href="#" class="btn btn-light">Message</a>
										<a href="#" class="btn btn-primary">Edit Profile</a>
									</div>
									<div class="mt-5">
										<div class="main-profile-contact-list row">
											<div class="media col-sm-4">
												<div class="media-icon bg-primary text-white mr-3 mt-1">
													<i class="fa fa-comments fs-18"></i>
												</div>
												<div class="media-body">
													<small class="text-muted">Posts</small>
													<div class="font-weight-bold number-font">
														245
													</div>
												</div>
											</div>
											<div class="media col-sm-4">
												<div class="media-icon bg-secondary text-white mr-3 mt-1">
													<i class="fa fa-users fs-18"></i>
												</div>
												<div class="media-body">
													<small class="text-muted">Followers</small>
													<div class="font-weight-normal1">
														689k
													</div>
												</div>
											</div>
											<div class="media col-sm-4">
												<div class="media-icon bg-info text-white mr-3 mt-1">
													<i class="fa fa-feed fs-18"></i>
												</div>
												<div class="media-body">
													<small class="text-muted">Following</small>
													<div class="font-weight-bold number-font">
														3,765
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="profile-cover">
								<div class="wideget-user-tab">
									<div class="tab-menu-heading p-0">
										<div class="tabs-menu1 px-3">
											<ul class="nav">
												<li><a href="#tab-7" class="active fs-14" data-toggle="tab">About</a></li>
												<li><a href="#tab-8" data-toggle="tab" class="fs-14">Friends</a></li>
												<li><a href="#tab-9" data-toggle="tab" class="fs-14">Timeline</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div><!-- /.profile-cover -->
						</div>
						<!-- Row -->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="border-0">
									<div class="tab-content">
										<div class="tab-pane active" id="tab-7">
											<div class="card">
												<div class="card-body">
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
													<a class="btn  btn-sm btn-light mt-1" href="#">HTML5</a>
													<a class="btn  btn-sm btn-light mt-1" href="#">CSS</a>
													<a class="btn  btn-sm btn-light mt-1" href="#">Java Script</a>
													<a class="btn  btn-sm btn-light mt-1" href="#">Photo Shop</a>
													<a class="btn  btn-sm btn-light mt-1" href="#">Php</a>
													<a class="btn  btn-sm btn-light mt-1" href="#">Wordpress</a>
													<a class="btn  btn-sm btn-light mt-1" href="#">Sass</a>
													<a class="btn  btn-sm btn-light mt-1" href="#">Angular</a>
												</div>
												<div class="card-body border-top">
													<h5 class="font-weight-bold">Contact</h5>
													<div class="main-profile-contact-list d-lg-flex">
														<div class="media mr-4">
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
													</div><!-- main-profile-contact-list -->
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab-8">
											<div class="card p-5">
												<div class="row">
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Denis Rosenblum</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Harvey Mattos</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/5.jpg')}}" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Catrice Doshier</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Catherina Bamber</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/8.jpg')}}" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Margie Fitts</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/5.jpg')}}" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Dana Lott</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Benedict Vallone</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/8.jpg')}}" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Robbie Ruder</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/3.jpg')}}" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Micaela Aultman</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Jacquelynn Sapienza</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/9.jpg')}}" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Elida Distefano</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Collin Bridgman</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-md-12">
														<a class="btn btn-block btn-light" href="#"><i class="fe fe-chevron-down"></i> See All</a>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab-9">
											<ul class="timelineleft pb-5">
												<li class="timeleft-label"><span class="bg-danger">10 May. 2020</span></li>
												<li>
													<i class="fa fa-envelope bg-primary"></i>
													<div class="timelineleft-item">
														<span class="time"><i class="fa fa-clock-o text-danger"></i> 12:05</span>
														<h3 class="timelineleft-header"><a href="#">Support Team</a> <span>sent you an email</span></h3>
														<div class="timelineleft-body">
															Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
															weebly ning heekya handango imeem plugg dopplr jibjab, movity
															jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
															quora plaxo ideeli hulu weebly balihoo...
														</div>
														<div class="timelineleft-footer">
															<a class="btn btn-primary text-white btn-sm">Read more</a>
															<a class="btn btn-secondary text-white btn-sm ">Delete</a>
														</div>
													</div>
												</li>
												<li>
													<i class="fa fa-user bg-secondary"></i>
													<div class="timelineleft-item">
														<span class="time"><i class="fa fa-clock-o text-danger"></i> 5 mins ago</span>
														<h3 class="timelineleft-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
													</div>
												</li>
												<li>
													<i class="fa fa-comments bg-warning"></i>
													<div class="timelineleft-item">
														<span class="time"><i class="fa fa-clock-o text-danger"></i> 27 mins ago</span>
														<h3 class="timelineleft-header"><a href="#">Jay White</a> commented on your post</h3>
														<div class="timelineleft-body">
															Take me to your leader!
															Switzerland is small and neutral!
															We are more like Germany, ambitious and misunderstood!
														</div>
														<div class="timelineleft-footer">
															<a class="btn btn-info text-white btn-flat btn-sm">View comment</a>
														</div>
													</div>
												</li>
												<li>
													<i class="fa fa-video-camera bg-pink"></i>
													<div class="timelineleft-item">
														<span class="time"><i class="fa fa-clock-o text-danger"></i> 1 hour ago</span>
														<h3 class="timelineleft-header"><a href="#">Mr. John</a> shared a video</h3>
														<div class="timelineleft-body">
															<div class="embed-responsive embed-responsive-16by9 w-75" >
																<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs"
																 allowfullscreen></iframe>
															</div>
															<div class="timelineleft-body mt-3">
																Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.Lorem ipsum dolor sit amet
															</div>
														</div>
														<div class="timelineleft-footer">
															<a href="#" class="btn btn-sm bg-warning text-white">See comments</a>
														</div>
													</div>
												</li>
												<li class="timeleft-label">
													<span class="bg-success"> 3 Jan. 2014</span>
												</li>
												<li>
													<i class="fa fa-camera bg-orange"></i>
													<div class="timelineleft-item">
														<span class="time"><i class="fa fa-clock-o text-danger"></i> 2 days ago</span>
														<h3 class="timelineleft-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
														<div class="timelineleft-body">
															<img src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="..." class="margin mt-2 mb-2">
															<img src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="..." class="margin mt-2 mb-2 ">
															<img src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="..." class="margin mt-2 mb-2 ">
															<img src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="..." class="margin mt-2 mb-2">
														</div>
													</div>
												</li>
												<li>
													<i class="fa fa-video-camera bg-pink"></i>
													<div class="timelineleft-item">
														<span class="time"><i class="fa fa-clock-o text-danger"></i> 5 days ago</span>
														<h3 class="timelineleft-header"><a href="#">Mr. Doe</a> shared a video</h3>
														<div class="timelineleft-body">
															<div class="embed-responsive embed-responsive-16by9 w-75" >
																<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs"
																 allowfullscreen></iframe>
															</div>
														</div>
														<div class="timelineleft-footer">
															<a href="#" class="btn btn-sm bg-warning text-white">See comments</a>
														</div>
													</div>
												</li>
												<li>
													<i class="fa fa-clock-o bg-success pb-3"></i>
												</li>
											</ul>
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