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
										<div class="row mt-xl-5">
											<div class="col-9 d-block mx-auto">
												<div class="text-center mb-4 ">
													<span class="avatar avatar-xxl  brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
												<span class="m-4 d-none d-lg-block text-center">
													<span class="fs-20"><strong>Jessica</strong></span>
												</span>
												<div class="form-group">
													<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
												</div>
												<a href="{{url('/' . $page='index')}}" class="btn  btn-secondary btn-block"><i class="fe fe-lock"></i> Unlock</a>
											</div>
										</div>
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