@extends('layouts.master')
@section('css')
		<!-- INTERNAl Data table css -->
		<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}"  rel="stylesheet">
		<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">User List 01</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Apps</a></li>
									<li class="breadcrumb-item"><a href="#">User List</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">User List 01</a></li>
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
												<div class="e-table">
													<div class="table-responsive table-lg mt-3">
														<table class="table table-bordered border-top text-nowrap" id="example1">
															<thead>
																<tr>
																	<th class="align-top border-bottom-0 wd-5"></th>
																	<th class="border-bottom-0 w-20">User</th>
																	<th class="border-bottom-0 w-15">Date of joining</th>
																	<th class="border-bottom-0 w-30">Performance</th>
																	<th class="border-bottom-0 w-10">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Nam Guy</h6>
																				<small class="">web designer</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">30%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 30%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-success" type="button"><i class="fe fe-trash-2"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Tracy Lindahl</h6>
																				<small class="">web developer</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>27 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">82%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 82%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-success" type="button"><i class="fe fe-trash-2"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Breana Millis</h6>
																				<small class="">Php developer</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">68%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 68%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-success" type="button"><i class="fe fe-trash-2"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Antwan Tramel</h6>
																				<small class="">Hr Manager</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>20 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">78%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 78%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-success" type="button"><i class="fe fe-trash-2"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Geraldine Arpin</h6>
																				<small class="">Recriuter</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>13 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">45%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 45%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-success" type="button"><i class="fe fe-trash-2"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Clement Niehaus</h6>
																				<small class="">Ceo</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>	25 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">60%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 60%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-success" type="button"><i class="fe fe-trash-2"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Melinda Mayers</h6>
																				<small class="">Director</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>12 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">55%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 55%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-success" type="button"><i class="fe fe-trash-2"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Willodean Monson</h6>
																				<small class="">web designer</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>27 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">45%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 45%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-success" type="button"><i class="fe fe-trash-2"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Brenton Moncada</h6>
																				<small class="">web developer</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>12 Dec 2017</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">40%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 40%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-success" type="button"><i class="fe fe-trash-2"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Cyndy Kirschbaum</h6>
																				<small class="">web designer</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>10 Dec 2017</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">80%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 80%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-success" type="button"><i class="fe fe-trash-2"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/11.jpg')}})"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Renna Spino</h6>
																				<small class="">Hr Manager</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>	03 Dec 2017</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">70%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 70%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-success" type="button"><i class="fe fe-trash-2"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Freeman Kozlowski</h6>
																				<small class="">web developer</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">65%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 65%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-success" type="button"><i class="fe fe-trash-2"></i></button>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
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
		<!-- INTERNAl Data tables -->
		<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/datatables.js')}}"></script>
@endsection