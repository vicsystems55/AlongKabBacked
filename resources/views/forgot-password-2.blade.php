@extends('layouts.master2')
@section('css')
@endsection
@section('content')
<div class="page">
			<div class="page-content">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="">
								<div class="text-white">
									<div class="card-body">
										<h2 class="display-4 mb-2 font-weight-bold error-text text-center"><strong>Forgot Password</strong></h2>
										<h4 class="text-white-80 mb-7 text-center">Forgot Password Page</h4>
										<div class="row">
											<div class="col-9 d-block mx-auto">
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
														<span class="custom-control-label"><a href="{{url('/' . $page='terms')}}" class="text-white-80">Agree the terms and policy</a></span>
													</label>
												</div>
												<button type="button" class="btn btn-secondary btn-block px-4"><i class="fe fe-send"></i> Send</button>
											</div>
										</div>
										<div class="pt-4 text-center">
											<div class="font-weight-normal fs-16">Forget it <a class="btn-link font-weight-normal text-white-80" href="#">Send me back</a></div>
										</div>
									</div>
									<div class="custom-btns text-center">
										<button class="btn btn-icon" type="button"><span class="btn-inner-icon"><i class="fa fa-facebook-f"></i></span></button>
										<button class="btn btn-icon" type="button"><span class="btn-inner-icon"><i class="fa fa-google"></i></span></button>
										<button class="btn btn-icon" type="button"><span class="btn-inner-icon"><i class="fa fa-twitter"></i></span></button>
										<button class="btn btn-icon" type="button"><span class="btn-inner-icon"><i class="fa fa-pinterest-p"></i></span></button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-none d-md-flex align-items-center">
							<img src="{{URL::asset('assets/images/png/login.png')}}" alt="img">
						</div>
					</div>
				</div>
			</div>
        </div>
@endsection
@section('js')
@endsection