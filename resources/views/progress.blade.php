@extends('layouts.master')
@section('css')
		<!-- INTERNAl Prism Css -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Progress</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-server mr-2 fs-14"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Progress</a></li>
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
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Progress</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-default" style="width: 7%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 20%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 40%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 60%"></div>
										</div>
										<div class="progress progress-md">
											<div class="progress-bar bg-primary" style="width: 80%"></div>
										</div>
									</div>
									,<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="progress progress-md mb-3">
	<div class="progress-bar bg-default" style="width: 7%"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-primary" style="width: 20%"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-primary" style="width: 40%"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-primary" style="width: 60%"></div>
</div>
<div class="progress progress-md">
	<div class="progress-bar bg-primary" style="width: 80%"></div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Contextual Progress</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-pink" style="width: 7%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-green" style="width: 20%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-yellow" style="width: 40%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-blue" style="width: 60%"></div>
										</div>
										<div class="progress progress-md ">
											<div class="progress-bar bg-orange" style="width: 80%"></div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="progress progress-md mb-3">
	<div class="progress-bar bg-pink" style="width: 7%"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-green" style="width: 20%"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-yellow" style="width: 40%"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-blue" style="width: 60%"></div>
</div>
<div class="progress progress-md ">
	<div class="progress-bar bg-orange" style="width: 80%"></div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Progress with label</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 7%">7%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 20%"> 20%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 40%"> 40%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 60%"> 60%</div>
										</div>
										<div class="progress progress-md">
											<div class="progress-bar bg-primary" style="width: 80%"> 80%</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="progress progress-md mb-3">
	<div class="progress-bar bg-primary" style="width: 7%">7%</div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-primary" style="width: 20%"> 20%</div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-primary" style="width: 40%"> 40%</div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-primary" style="width: 60%"> 60%</div>
</div>
<div class="progress progress-md">
	<div class="progress-bar bg-primary" style="width: 80%"> 80%</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Contextual Progress with label</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-pink" style="width: 7%"> 7%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-green" style="width: 20%">20%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-yellow" style="width: 40%">40%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-blue" style="width: 60%">60%</div>
										</div>
										<div class="progress progress-md ">
											<div class="progress-bar bg-orange" style="width: 80%"> 80%</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="progress progress-md mb-3">
	<div class="progress-bar bg-pink" style="width: 7%"> 7%</div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-green" style="width: 20%">20%</div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-yellow" style="width: 40%">40%</div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-blue" style="width: 60%">60%</div>
</div>
<div class="progress progress-md ">
	<div class="progress-bar bg-orange" style="width: 80%"> 80%</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Progress Sizes</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-xs mb-3">
											<div class="progress-bar bg-blue" style="width: 30%"></div>
										</div>
										<div class="progress progress-sm mb-3">
											<div class="progress-bar bg-blue" style="width: 60%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-blue" style="width: 70%">70%</div>
										</div>
										<div class="progress progress-lg">
											<div class="progress-bar bg-blue" style="width: 80%">80%</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="progress progress-xs mb-3">
	<div class="progress-bar bg-blue" style="width: 30%"></div>
</div>
<div class="progress progress-sm mb-3">
	<div class="progress-bar bg-blue" style="width: 60%"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-blue" style="width: 70%">70%</div>
</div>
<div class="progress progress-lg">
	<div class="progress-bar bg-blue" style="width: 80%">80%</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Mixed color Progress with Sizes</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-xs mb-3">
											<div class="progress-bar bg-orange" style="width: 5%"></div>
											<div class="progress-bar bg-warning" style="width: 5%"></div>
											<div class="progress-bar bg-info" style="width: 5%"></div>
										</div>
										<div class="progress progress-sm mb-3">
											<div class="progress-bar bg-pink" style="width: 10%"></div>
											<div class="progress-bar bg-yellow" style="width: 15%"></div>
											<div class="progress-bar bg-teal" style="width: 15%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-pink" style="width: 18%"></div>
											<div class="progress-bar bg-blue" style="width: 20%"></div>
											<div class="progress-bar bg-cyan" style="width: 30%"></div>
										</div>
										<div class="progress progress-lg">
											<div class="progress-bar bg-green" style="width: 30%"></div>
											<div class="progress-bar bg-pink" style="width: 20%"></div>
											<div class="progress-bar bg-orange" style="width: 40%"></div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element6"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="progress progress-xs mb-3">
	<div class="progress-bar bg-orange" style="width: 5%"></div>
	<div class="progress-bar bg-warning" style="width: 5%"></div>
	<div class="progress-bar bg-info" style="width: 5%"></div>
</div>
<div class="progress progress-sm mb-3">
	<div class="progress-bar bg-pink" style="width: 10%"></div>
	<div class="progress-bar bg-yellow" style="width: 15%"></div>
	<div class="progress-bar bg-teal" style="width: 15%"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-pink" style="width: 18%"></div>
	<div class="progress-bar bg-blue" style="width: 20%"></div>
	<div class="progress-bar bg-cyan" style="width: 30%"></div>
</div>
<div class="progress progress-lg">
	<div class="progress-bar bg-green" style="width: 30%"></div>
	<div class="progress-bar bg-pink" style="width: 20%"></div>
	<div class="progress-bar bg-orange" style="width: 40%"></div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element6"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Striped Progress</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-teal" style="width: 15%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 25%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-yellow" style="width: 50%">50%</div>
										</div>
										<div class="progress progress-md">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-green" style="width: 70%">40%</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element7"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="progress progress-md mb-3">
	<div class="progress-bar progress-bar-striped progress-bar-animated bg-teal" style="width: 15%"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 25%"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar progress-bar-striped progress-bar-animated bg-yellow" style="width: 50%">50%</div>
</div>
<div class="progress progress-md">
	<div class="progress-bar progress-bar-striped progress-bar-animated bg-green" style="width: 70%">40%</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element7"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Animated Progress</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-indeterminate bg-pink" ></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-indeterminate bg-cyan"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-indeterminate bg-teal"></div>
										</div>
										<div class="progress progress-md">
											<div class="progress-bar progress-bar-indeterminate bg-purple"></div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element8"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="progress progress-md mb-3">
	<div class="progress-bar progress-bar-indeterminate bg-pink" ></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar progress-bar-indeterminate bg-cyan"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar progress-bar-indeterminate bg-teal"></div>
</div>
<div class="progress progress-md">
	<div class="progress-bar progress-bar-indeterminate bg-purple"></div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element8"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- INTERNAl Clipboard js -->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAl Prism js -->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection