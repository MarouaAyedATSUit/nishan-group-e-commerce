<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: MetronicProduct Version: 8.2.6
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head>
<base href="../../" />
		<title>Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Metronic by Keenthemes" />
		<link rel="canonical" href="http://preview.keenthemes.comauthentication/email/subscription-confirmed.html" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-column-fluid">
				<!--begin::Header-->
				<div class="bg-body d-flex flex-column-auto justify-content-cenrer align-items-start gap-2 gap-lg-4 py-4 px-10 overflow-auto" id="kt_app_header_nav">
					<a href="index.html" class="flex-grow-1 mt-2">
						<i class="ki-duotone ki-arrow-left fs-2x text-gray-500">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
					</a>
					<a href="authentication/email/welcome-message.html" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold">
						<i class="ki-duotone ki-like fs-1 mb-2">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
						<span class="fs-8 fw-bold">Welcome
						<br />Message</span>
					</a>
					<a href="authentication/email/reset-password.html" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold">
						<i class="ki-duotone ki-lock-2 fs-1 mb-2">
							<span class="path1"></span>
							<span class="path2"></span>
							<span class="path3"></span>
							<span class="path4"></span>
							<span class="path5"></span>
						</i>
						<span class="fs-8 fw-bold">Reset
						<br />Password</span>
					</a>
					<a href="authentication/email/subscription-confirmed.html" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold active bg-light border border-2">
						<i class="ki-duotone ki-notification-on fs-1 mb-2">
							<span class="path1"></span>
							<span class="path2"></span>
							<span class="path3"></span>
							<span class="path4"></span>
							<span class="path5"></span>
						</i>
						<span class="fs-8 fw-bold">Subscription
						<br />Confirmed</span>
					</a>
					<a href="authentication/email/card-declined.html" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold">
						<i class="ki-duotone ki-credit-cart fs-1 mb-2">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
						<span class="fs-8 fw-bold">Card
						<br />Declined</span>
					</a>
					<a href="authentication/email/promo-1.html" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold">
						<i class="ki-duotone ki-chart-pie-simple fs-1 mb-2">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
						<span class="fs-8 fw-bold">Promotion
						<br />Email 1</span>
					</a>
					<a href="authentication/email/promo-2.html" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold">
						<i class="ki-duotone ki-chart-line-star fs-1 mb-2">
							<span class="path1"></span>
							<span class="path2"></span>
							<span class="path3"></span>
						</i>
						<span class="fs-8 fw-bold">Promotion
						<br />Email 2</span>
					</a>
					<a href="authentication/email/promo-3.html" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold">
						<i class="ki-duotone ki-rocket fs-1 mb-2">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
						<span class="fs-8 fw-bold">Promotion
						<br />Email 3</span>
					</a>
					<a href="authentication/email/subscription-confirmed.html?nav=0" class="flex-grow-1 text-end mt-2">
						<i class="ki-duotone ki-cross-square fs-2x text-gray-500">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
					</a>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="scroll-y flex-column-fluid px-10 py-10" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header_nav" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true" style="background-color:#D5D9E2; --kt-scrollbar-color: #d9d0cc; --kt-scrollbar-hover-color: #d9d0cc">
					<!--begin::Email template-->
					<style>html,body { padding:0; margin:0; font-family: Inter, Helvetica, "sans-serif"; } a:hover { color: #009ef7; }</style>
					<div id="#kt_app_body_content" style="background-color:#D5D9E2; font-family:Arial,Helvetica,sans-serif; line-height: 1.5; min-height: 100%; font-weight: normal; font-size: 15px; color: #2F3044; margin:0; padding:0; width:100%;">
						<div style="background-color:#ffffff; padding: 45px 0 34px 0; border-radius: 24px; margin:40px auto; max-width: 600px;">
							<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" height="auto" style="border-collapse:collapse">
								<tbody>
									<tr>
										<td align="center" valign="center" style="text-align:center; padding-bottom: 10px">
											<!--begin:Email content-->
											<div style="text-align:center; margin:0 60px 34px 60px">
												<!--begin:Logo-->
												<div style="margin-bottom: 10px">
													<a href="https://keenthemes.com" rel="noopener" target="_blank">
														<img alt="Logo" src="assets/media/email/logo-1.svg" style="height: 35px" />
													</a>
												</div>
												<!--end:Logo-->
												<!--begin:Media-->
												<div style="margin-bottom: 15px">
													<img alt="Logo" src="assets/media/email/icon-positive-vote-3.svg" />
												</div>
												<!--end:Media-->
												<!--begin:Text-->
												<div style="font-size: 14px; font-weight: 500; margin-bottom: 42px; font-family:Arial,Helvetica,sans-serif">
													<p style="margin-bottom:9px; color:#181C32; font-size: 22px; font-weight:700">Premium account is set!</p>
													<p style="margin-bottom:2px; color:#7E8299">Lots of people make mistakes while creating</p>
													<p style="margin-bottom:2px; color:#7E8299">paragraphs. Some writers just put whitespace in</p>
													<p style="margin-bottom:2px; color:#7E8299">their text in random places</p>
												</div>
												<!--end:Text-->
												<!--begin:Order-->
												<div style="margin-bottom: 15px">
													<!--begin:Title-->
													<h3 style="text-align:left; color:#181C32; font-size: 18px; font-weight:600; margin-bottom: 22px">Order summary</h3>
													<!--end:Title-->
													<!--begin:Items-->
													<div style="padding-bottom:9px">
														<!--begin:Item-->
														<div style="display:flex; justify-content: space-between; color:#7E8299; font-size: 14px; font-weight:500; margin-bottom:8px">
															<!--begin:Description-->
															<div style="font-family:Arial,Helvetica,sans-serif">Business - Monthly invoice</div>
															<!--end:Description-->
															<!--begin:Total-->
															<div style="font-family:Arial,Helvetica,sans-serif">$120,00</div>
															<!--end:Total-->
														</div>
														<!--end:Item-->
														<!--begin:Item-->
														<div style="display:flex; justify-content: space-between; color:#7E8299; font-size: 14px; font-weight:500;">
															<!--begin:Description-->
															<div style="font-family:Arial,Helvetica,sans-serif">VAT (25%)</div>
															<!--end:Description-->
															<!--begin:Total-->
															<div style="font-family:Arial,Helvetica,sans-serif">$30,00</div>
															<!--end:Total-->
														</div>
														<!--end:Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed" style="margin:15px 0"></div>
														<!--end::Separator-->
														<!--begin:Item-->
														<div style="display:flex; justify-content: space-between; color:#7E8299; font-size: 14px; font-weight:500">
															<!--begin:Description-->
															<div style="font-family:Arial,Helvetica,sans-serif">Total paid</div>
															<!--end:Description-->
															<!--begin:Total-->
															<div style="color:#50cd89; font-weight:700; font-family:Arial,Helvetica,sans-serif">$150,00</div>
															<!--end:Total-->
														</div>
														<!--end:Item-->
													</div>
													<!--end:Items-->
												</div>
												<!--end:Order-->
												<!--begin:Action-->
												<a href="apps/invoices/view/invoice-1.html" target="_blank" style="background-color:#50cd89; border-radius:6px;display:inline-block; padding:11px 19px; color: #FFFFFF; font-size: 14px; font-weight:500;">Download Invoice</a>
												<!--begin:Action-->
											</div>
											<!--end:Email content-->
										</td>
									</tr>
									<tr>
										<td align="center" valign="center" style="font-size: 13px; text-align:center; padding: 0 10px 10px 10px; font-weight: 500; color: #A1A5B7; font-family:Arial,Helvetica,sans-serif">
											<p style="color:#181C32; font-size: 16px; font-weight: 600; margin-bottom:9px">It’s all about customers!</p>
											<p style="margin-bottom:2px">Call our customer care number: +31 6 3344 55 56</p>
											<p style="margin-bottom:4px">You may reach us at 
											<a href="https://devs.keenthemes.com" rel="noopener" target="_blank" style="font-weight: 600">devs.keenthemes.com</a>.</p>
											<p>We serve Mon-Fri, 9AM-18AM</p>
										</td>
									</tr>
									<tr>
										<td align="center" valign="center" style="text-align:center; padding-bottom: 20px;">
											<a href="#" style="margin-right:10px">
												<img alt="Logo" src="assets/media/email/icon-linkedin.svg" />
											</a>
											<a href="#" style="margin-right:10px">
												<img alt="Logo" src="assets/media/email/icon-dribbble.svg" />
											</a>
											<a href="#" style="margin-right:10px">
												<img alt="Logo" src="assets/media/email/icon-facebook.svg" />
											</a>
											<a href="#">
												<img alt="Logo" src="assets/media/email/icon-twitter.svg" />
											</a>
										</td>
									</tr>
									<tr>
										<td align="center" valign="center" style="font-size: 13px; padding:0 15px; text-align:center; font-weight: 500; color: #A1A5B7;font-family:Arial,Helvetica,sans-serif">
											<p>&copy; Copyright KeenThemes. 
											<a href="https://keenthemes.com" rel="noopener" target="_blank" style="font-weight: 600;font-family:Arial,Helvetica,sans-serif">Unsubscribe</a>&nbsp; from newsletter.</p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!--end::Email template-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>