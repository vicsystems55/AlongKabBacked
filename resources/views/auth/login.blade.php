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
										<h2 class="display-4 mb-2 font-weight-bold error-text text-center"><strong>AlongKab Login</strong></h2>
										<h4 class="text-white-80 mb-7 text-center">Sign In to your account</h4>
										

                                            <form method="post" action="{{route('login')}}">
                                            @csrf
                                            <div class="row">
											    <div class="col-9 d-block mx-auto">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-user"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Email" name="email">
                                                    </div>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-lock"></i>
                                                            </div>
                                                        </div>
                                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <button type="submit" class="btn  btn-secondary btn-block px-4">Login</button>
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            <a href="{{ url('/' . $page='forgot-password-2')}}" class="btn btn-link box-shadow-0 px-0 text-white-80">Forgot password?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            </form>


										<div class="text-center pt-4">
										</div>
									</div>
									<div class="custom-btns text-center">
									
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