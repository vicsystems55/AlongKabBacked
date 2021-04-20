@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Search</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers mr-2 fs-14"></i>Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Search</a></li>
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
						<!-- ROW  -->
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body pb-0">
										<div class="input-group mb-2">
											<input type="text" class="form-control" placeholder="Searching.....">
											<span class="input-group-append">
												<button class="btn ripple btn-primary" type="button">Search</button>
											</span>
										</div>
										<div class="tabs-menu1">
											<ul class="nav panel-tabs">
												<li><a href="#tab5" class="active" data-toggle="tab">All</a></li>
												<li><a href="#tab6" data-toggle="tab" class="text-dark">Images</a></li>
												<li><a href="#tab7" data-toggle="tab" class="text-dark">Books</a></li>
												<li><a href="#tab8" data-toggle="tab" class="text-dark">News</a></li>
												<li><a href="#tab9" data-toggle="tab" class="text-dark">Videos</a></li>
											</ul>
										</div>
									</div>
									<div class="card-body p-3">
										<p class="text-muted mb-0 pl-3">About 12,546,90000 results (0.56 Seconds)</p>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div class="mb-2">
											<a href="#" class="h4 text-dark">Templist – HTML5 Digital Marketplace Template by ...</a>
										</div>
										<a href="#" class="text-primary">https://www.spruko.com/demo/templist/Html/index.html</a>
										<p class="text-muted mt-2 mb-2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
										<div>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
											<a href="#" class="mr-4"> (48) Reviews</a>
											<a href="#" class="font-weight-bold">USD-$24</a>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div class="mb-2">
											<a href="#" class="h4 text-dark">Treal - Admin Responsive Bootstrap HTML Dashboard Template</a>
										</div>
										<a href="#" class="text-primary">https://www.spruko.com/demo/treal/html/</a>
										<p class="text-muted mt-2 mb-1">Treal Template included in 30 versions. In the demo 30 versions is shown in 4 floders. And In the final each version has single floder corresponding to that ...</p>
										<p class="text-muted  mb-2">Tags: admin, admin dashboard, admin panel, admin template, backend, bootstrap, bootstrap 4, clean, dashboard, flat, jquery, modern, premium admin templates ...</p>
										<div>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
											<a href="#" class="mr-4"> (48) Reviews</a>
											<a href="#" class="font-weight-bold">USD-$24</a>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div class="mb-2">
											<a href="#" class="h4 text-dark">Treal template related Images</a>
										</div>
										<div class="tags mb-2">
											<span class="tag">
												background
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag">
												admin template
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag">
												UX designs
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag">
												Presentation
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
										</div>
										<div class="row mb-2">
											<div class="col-sm-6 col-lg-3">
												<a class="" href="#">
													<div class="border p-0 text-center m-1">
														<img src="{{URL::asset('assets/images/photos/temp1.jpg')}}" alt="img" class="mx-auto">
													</div>
												</a>
											</div>
											<div class="col-sm-6 col-lg-3">
												<a class="" href="#">
													<div class="border p-0 text-center m-1">
														<img src="{{URL::asset('assets/images/photos/temp3.jpg')}}" alt="img" class="mx-auto">
													</div>
												</a>
											</div>
											<div class="col-sm-6 col-lg-3">
												<a class="" href="#">
													<div class="border p-0 text-center m-1">
														<img src="{{URL::asset('assets/images/photos/temp2.jpg')}}" alt="img" class="mx-auto">
													</div>
												</a>
											</div>
											<div class="col-sm-6 col-lg-3">
												<a class="" href="#">
													<div class="border p-0 text-center m-1">
														<img src="{{URL::asset('assets/images/photos/temp4.jpg')}}" alt="img" class="mx-auto">
													</div>
												</a>
											</div>
										</div>
										<a href="#" class="text-primary h6 mb-0">more images for treal template<span class="ml-1"><i class="fa fa-arrow-right"></i></span></a>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div class="mb-2">
											<a href="#" class="h4 text-dark">Eduserv Website Templates from ThemeForest</a>
										</div>
										<a href="#" class="text-primary">https://spruko.com/demo/eduserv/html/</a>
										<p class="text-muted mt-2 mb-2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
										<div>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
											<a href="#" class="mr-4"> (18) Reviews</a>
											<a href="#" class="font-weight-bold">USD-$12</a>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div class="mb-2">
											<a href="#" class="h4 text-dark">HostOne – Web Hosting HTML Creative Responsive Clean Template</a>
										</div>
										<a href="#" class="text-primary">https://www.spruko.com/demo/treal/html/</a>
										<p class="text-muted mt-2 mb-1"> HostOne - Web Hosting HTML Creative Responsive Clean Template by sprukosoft HostOne -HTML Templates is a Clean, Simple Responsive Template Design.</p>
										<p class="text-muted  mb-2">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
										<div>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
											<a href="#" class="mr-4"> (18) Reviews</a>
											<a href="#" class="font-weight-bold">USD-$12</a>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div class="mb-2">
											<a href="#" class="h4 text-dark">Videos</a>
										</div>
										<ul class="list-unstyled video-list-thumbs row">
											<li class="col-sm-12 col-lg-3 col-md-6 border-0">
												<a href="#" title="sed do eiusmod tempor incidi dunt ut labore et dolore magna">
													<img alt="Barca" class="img-responsive" src="{{URL::asset('assets/images/photos/1.jpg')}}">
													<span class="fa fa-play-circle-o"></span> <span class="duration"><span class="fe fe-play-circle"></span> 06:28</span>
												</a>
											</li>
											<li class="col-sm-12 col-lg-9 col-md-6 border-0">
												<div class="mb-2">
													<a href="#" class="h4 text-dark">HostOne – Web Hosting HTML Creative Responsive Clean Template</a>
												</div>
												<a href="#" class="text-primary border-0 p-0">https://www.spruko.com/demo/treal/html/</a>
												<p class="text-muted mt-2 mb-1"> HostOne - Web Hosting HTML Creative Responsive Clean Template by sprukosoft HostOne -HTML Templates is a Clean, Simple Responsive Template Design.</p>
												<p class="text-muted  mb-2">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
											</li>
										</ul>
									</div>
								</div>
								<div class="text-center">
									<div class="mb-5">
										<ul class="pagination justify-content-center">
											<li class="page-item page-prev disabled">
												<a class="page-link" href="#" tabindex="-1">Prev</a>
											</li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">4</a></li>
											<li class="page-item"><a class="page-link" href="#">5</a></li>
											<li class="page-item page-next">
												<a class="page-link" href="#">Next</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW CLOSE -->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
@endsection
