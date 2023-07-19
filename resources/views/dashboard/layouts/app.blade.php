<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl">
	<head>
		<title>Donations</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
		<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
	</head>
	<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-animation="false" data-kt-sticky-offset="{default: '0px', lg: '0px'}">
					<div class="app-container container-fluid d-flex align-items-stretch flex-stack mt-lg-8" id="kt_app_header_container">
						<div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px me-1" id="kt_app_sidebar_mobile_toggle">
								<i class="ki-outline ki-abstract-14 fs-2"></i>
							</div>
							<a href="{{ route('dashboard.index') }}">
								<img src="{{ asset('logo.png') }}" class="h-50px" />
							</a>
						</div>
					</div>
				</div>
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<div id="kt_app_sidebar" class="app-sidebar flex-column mt-lg-4 ps-2 pe-2 ps-lg-7 pe-lg-4" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<div class="app-sidebar-logo flex-shrink-0 d-none d-md-flex flex-center align-items-center" id="kt_app_sidebar_logo">
							<a href="{{ route('dashboard.index') }}">
								<img src="{{ asset('logo.png') }}" class="h-100px d-none d-sm-inline app-sidebar-logo-default" />
							</a>
							<div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
								<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
									<i class="ki-outline ki-abstract-14 fs-1"></i>
								</div>
							</div>
						</div>
						<div class="app-sidebar-menu flex-column-fluid">
							<div id="kt_app_sidebar_menu_wrapper" class="hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
								<div class="menu menu-column menu-rounded menu-sub-indention fw-bold px-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
									<div class="menu-item menu-accordion {{ (Route::currentRouteName() == 'dashboard.index') ? 'here show' : '' }}">
										<a class="menu-link" href="{{ route('dashboard.index') }}">
											<span class="menu-icon">
												<i class="ki-outline ki-home fs-2"></i>
											</span>
											<span class="menu-title">الرئيسة</span>
										</a>
                                    </div>
									<div class="menu-item menu-accordion {{ (in_array(Route::currentRouteName(), ['dashboard.donors.index', 'dashboard.donors.create', 'dashboard.donors.show', 'dashboard.donors.edit'])) ? 'here show' : '' }}">
										<a class="menu-link" href="{{ route('dashboard.donors.index') }}">
											<span class="menu-icon">
												<i class="ki-outline ki-user fs-2"></i>
											</span>
											<span class="menu-title">المتبرعين</span>
										</a>
                                    </div>
									<div class="menu-item menu-accordion {{ (in_array(Route::currentRouteName(), ['dashboard.donations.index', 'dashboard.donations.create', 'dashboard.donations.show', 'dashboard.donations.edit'])) ? 'here show' : '' }}">
										<a class="menu-link" href="{{ route('dashboard.donations.index') }}">
											<span class="menu-icon">
												<i class="ki-outline ki-abstract-21 fs-2"></i>
											</span>
											<span class="menu-title">التبرعات</span>
										</a>
                                    </div>
								</div>
							</div>
						</div>
					</div>
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<div class="d-flex flex-column flex-column-fluid">
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<div id="kt_app_content_container" class="app-container container-fluid">
                                    @yield('content')
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-outline ki-arrow-up"></i>
		</div>
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        @yield('scripts')
	</body>
</html>