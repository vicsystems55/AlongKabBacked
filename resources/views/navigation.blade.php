@extends('layouts.master')
@section('css')
		<!-- INTERNAL Prism Css -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Navigation</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-server mr-2 fs-14"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Navigation</a></li>
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
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Nav</h3>
									</div>
									<div class="card-body">
										<ul class="nav1 br-7">
											<li class="nav-item1">
												<a class="nav-link active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="nav1 br-7">
	<li class="nav-item1">
		<a class="nav-link active" href="#">Active</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link disabled" href="#">Disabled</a>
	</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Nav Vertical</h3>
									</div>
									<div class="card-body">
										<ul class="nav1 flex-column br-7">
											<li class="nav-item1">
												<a class="nav-link active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="nav1 flex-column br-7">
	<li class="nav-item1">
		<a class="nav-link active" href="#">Active</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link disabled" href="#">Disabled</a>
	</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color Navigation</h3>
									</div>
									<div class="card-body">
										<ul class="nav nav-pills">
											<li class="nav-item m-2">
												<a class="nav-link active px-4 py-2" href="#">Active</a>
											</li>
											<li class="nav-item dropdown m-2">
												<a class="nav-link dropdown-toggle px-4 py-2" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link px-4 py-2" href="#">Link</a>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link disabled px-4 py-2" href="#">Disabled</a>
											</li>
										</ul>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="nav nav-pills">
	<li class="nav-item m-2">
		<a class="nav-link active px-4 py-2" href="#">Active</a>
	</li>
	<li class="nav-item dropdown m-2">
		<a class="nav-link dropdown-toggle px-4 py-2" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" href="#">Separated link</a>
		</div>
	</li>
	<li class="nav-item m-2">
		<a class="nav-link px-4 py-2" href="#">Link</a>
	</li>
	<li class="nav-item m-2">
		<a class="nav-link disabled px-4 py-2" href="#">Disabled</a>
	</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Icon Navigation</h3>
									</div>
									<div class="card-body">
										<ul class="nav nav-pills nav-pills-circle" id="tabs_2" role="tablist">
											<li class="nav-item">
												<a class="nav-link border py-3 px-5 m-2" id="tab1" data-toggle="tab" href="#tabs_2_1" role="tab" aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-home"></i> Home</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border py-3 px-5 m-2" id="tab2" data-toggle="tab" href="#tabs_2_2" role="tab"  aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-unlock"></i> Lock </span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link py-3 px-5 border active show m-2" id="tab3" data-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="true">
													<span class="nav-link-icon d-block"><i class="fe fe-play"></i> Videos</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border py-3 px-5 m-2" id="tab4" data-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-layers"></i> Severs</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border py-3 px-5 m-2" id="tab5" data-toggle="tab" href="#tabs_2_4" role="tab" aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-image"></i> Gallery </span>
												</a>
											</li>
										</ul>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript">
<ul class="nav nav-pills nav-pills-circle" id="tabs_2" role="tablist">
	<li class="nav-item">
		<a class="nav-link border py-3 px-5 m-2" id="tab1" data-toggle="tab" href="#tabs_2_1" role="tab" aria-selected="false">
			<span class="nav-link-icon d-block"><i class="fe fe-home"></i> Home</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link border py-3 px-5 m-2" id="tab2" data-toggle="tab" href="#tabs_2_2" role="tab"  aria-selected="false">
			<span class="nav-link-icon d-block"><i class="fe fe-unlock"></i> Lock </span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link py-3 px-5 border active show m-2" id="tab3" data-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="true">
			<span class="nav-link-icon d-block"><i class="fe fe-play"></i> Videos</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link border py-3 px-5 m-2" id="tab4" data-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="false">
			<span class="nav-link-icon d-block"><i class="fe fe-layers"></i> Severs</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link border py-3 px-5 m-2" id="tab5" data-toggle="tab" href="#tabs_2_4" role="tab" aria-selected="false">
			<span class="nav-link-icon d-block"><i class="fe fe-image"></i> Gallery </span>
		</a>
	</li>
</ul>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Icon Nav Bar</h3>
									</div>
									<div class="card-body">
										<ul class="nav nav-pills nav-pills-circle" id="tabs_3" role="tablist">
											<li class="nav-item">
												<a class="nav-link border w-8 h-8 text-center br-100 m-2" id="tab21" data-toggle="tab" href="#tabs_2_1" role="tab" aria-controls="tab1" aria-selected="false">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-home fs-20"></i></span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border w-8 h-8 br-100 m-2" id="tab22" data-toggle="tab" href="#tabs_2_2" role="tab" aria-controls="tab2" aria-selected="false">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-unlock fs-20"></i></span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border active show w-8 h-8 br-100 m-2" id="tab23" data-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab3" aria-selected="true">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-play fs-20"></i></span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border w-8 h-8 br-100 m-2" id="tab24" data-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab4" aria-selected="false">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-layers fs-20"></i></span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border  w-8 h-8 br-100 m-2" id="tab25" data-toggle="tab" href="#tabs_2_4" role="tab" aria-controls="tab5" aria-selected="false">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-image fs-20"></i> </span>
												</a>
											</li>
										</ul>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element6"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="nav nav-pills nav-pills-circle" id="tabs_3" role="tablist">
	<li class="nav-item">
		<a class="nav-link border w-8 h-8 text-center br-100 m-2" id="tab21" data-toggle="tab" href="#tabs_2_1" role="tab" aria-controls="tab1" aria-selected="false">
			<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-home fs-20"></i></span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link border w-8 h-8 br-100 m-2" id="tab22" data-toggle="tab" href="#tabs_2_2" role="tab" aria-controls="tab2" aria-selected="false">
			<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-unlock fs-20"></i></span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link border active show w-8 h-8 br-100 m-2" id="tab23" data-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab3" aria-selected="true">
			<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-play fs-20"></i></span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link border w-8 h-8 br-100 m-2" id="tab24" data-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab4" aria-selected="false">
			<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-layers fs-20"></i></span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link border  w-8 h-8 br-100 m-2" id="tab25" data-toggle="tab" href="#tabs_2_4" role="tab" aria-controls="tab5" aria-selected="false">
			<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-image fs-20"></i> </span>
		</a>
	</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element6"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Navigation backgrounds</h3>
									</div>
									<div class="card-body">
										<ul class="nav1 bg-primary br-7">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled text-white-50" href="#">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-info mt-4 br-7">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled text-white-50" href="#">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-success mt-4 br-7">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled text-white-50" href="#">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-danger mt-4 br-7">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled text-white-50" href="#">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-secondary mt-4 br-7">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled text-white-50" href="#">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-yellow mt-4 br-7">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled text-white-50" href="#">Disabled</a>
											</li>
										</ul>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element7"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="nav1 bg-primary br-7">
	<li class="nav-item1">
		<a class="nav-link text-white active" href="#">Active</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link disabled text-white-50" href="#">Disabled</a>
	</li>
</ul>
<ul class="nav1 bg-info mt-4 br-7">
	<li class="nav-item1">
		<a class="nav-link text-white active" href="#">Active</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link disabled text-white-50" href="#">Disabled</a>
	</li>
</ul>
<ul class="nav1 bg-success mt-4 br-7">
	<li class="nav-item1">
		<a class="nav-link text-white active" href="#">Active</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link disabled text-white-50" href="#">Disabled</a>
	</li>
</ul>
<ul class="nav1 bg-danger mt-4 br-7">
	<li class="nav-item1">
		<a class="nav-link text-white active" href="#">Active</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link disabled text-white-50" href="#">Disabled</a>
	</li>
</ul>
<ul class="nav1 bg-secondary mt-4 br-7">
	<li class="nav-item1">
		<a class="nav-link text-white active" href="#">Active</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link disabled text-white-50" href="#">Disabled</a>
	</li>
</ul>
<ul class="nav1 bg-yellow mt-4 br-7">
	<li class="nav-item1">
		<a class="nav-link text-white active" href="#">Active</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link disabled text-white-50" href="#">Disabled</a>
	</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element7"><i class="las la-paste"></i></div>
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
		<!-- INTERNAL Clipboard js -->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL Prism js -->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection