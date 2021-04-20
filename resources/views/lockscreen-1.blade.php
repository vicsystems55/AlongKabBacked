@extends('layouts.master4')
@section('css')
@endsection
@section('content')
<div class="page">
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col mx-auto">
							<div class="row justify-content-center">
								<div class="col-md-5">
									<div class="card">
										<div class="card-body">
											<div class="text-center mb-4 ">
												<span class="avatar avatar-xxl  brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											</div>
											<span class="m-4 d-none d-lg-block text-center">
												<span class="fs-20"><strong>Jessica</strong></span>
											</span>
											<div class="form-group">
												<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
											</div>
											<a href="{{url('/' . $page='index')}}" class="btn btn-primary btn-block"><i class="fe fe-lock"></i> Unlock</a>
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