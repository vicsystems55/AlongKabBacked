@extends('layouts.master3')
@section('css')
@endsection
@section('content')
<div class="page">
			<div class="page-single">
				<div class="p-5">
					<div class="row">
						<div class="col mx-auto">
							<div class="row justify-content-center">
								<div class="col-lg-9 col-xl-8">
									<div class="card-group mb-0">
										<div class="card p-4">
											<div class="card-body">
												<h1 class="mb-2">Forgot Password</h1>
												<p class="text-muted">Forgot Password Page</p>
												<div class="btn-list d-flex">
													<a href="https://www.google.com/gmail/" class="btn btn-google btn-block"><i class="fa fa-google fa-1x mr-2"></i> Google</a>
													<a href="https://twitter.com/" class="btn btn-twitter"><i class="fa fa-twitter fa-1x"></i></a>
													<a href="https://www.facebook.com/" class="btn btn-facebook"><i class="fa fa-facebook fa-1x"></i></a>
												</div>
												<hr class="divider my-6">
												<div class="input-group mb-4">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="fe fe-mail"></i>
														</div>
													</div>
													<input class="form-control"  placeholder="Enetr Email" type="text">
												</div>
												<div class="form-group">
													<label class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" />
														<span class="custom-control-label"><a href="{{url('/' . $page='terms')}}">Agree the terms and policy</a></span>
													</label>
												</div>
												<div class="row">
													<div class="col-12">
														<button type="button" class="btn btn-primary btn-block px-4"><i class="fe fe-send"></i> Send</button>
													</div>
												</div>
												<div class="text-center pt-4">
													<div class="font-weight-normal fs-16">Forget it <a class="btn-link font-weight-normal" href="#">Send me back</a></div>
												</div>
											</div>
										</div>
										<div class="card text-white bg-primary py-5 d-md-down-none page-content mt-0">
											<div class="text-center justify-content-center page-single-content">
												<div class="box">
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
												</div>
												<img src="{{URL::asset('assets/images/png/login.png')}}" alt="img">
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
@endsection
@section('js')
@endsection