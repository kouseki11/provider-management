<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base_url" content="{{ url('/') }}">
    <link rel="shortcut icon" href="{{ asset('assets/icon/icon_airgift.png') }}" type="image/x-icon">
    <title>{{ config('app.name', 'Provider Management') }} {{ isset($title) ? ' | ' . $title : '' }}</title>

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('dist/css/vendors/tippy.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/vendors/litepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/vendors/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/themes/enigma/side-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/vendors/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/vendors/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/components/mobile-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}"> <!-- END: CSS Assets-->

    @stack('css')
</head>

<body>
    <div class="content">
        {{ $slot }}

        @if (session()->has('success'))
            <!-- Success Toast -->
            <div class="fixed bottom-4 right-4 p-4 z-50">
                <div id="toast-success"
                    class="flex items-center bg-green-500 text-white p-4 rounded-lg shadow-lg space-x-4">
                    <div class="flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        {{ session()->get('success') }}
                    </div>
                    <button type="button" class="text-white hover:text-gray-200" data-bs-dismiss="toast"
                        aria-label="Close">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        @if (session()->has('error'))
            <!-- Error Toast -->
            <div class="fixed bottom-4 right-4 p-4 z-50">
                <div id="toast-danger"
                    class="flex items-center bg-red-500 text-white p-4 rounded-lg shadow-lg space-x-4">
                    <div class="flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18 6L6 18M6 6l12 12" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        {{ session()->get('error') }}
                    </div>
                    <button type="button" class="text-white hover:text-gray-200" data-bs-dismiss="toast"
                        aria-label="Close">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        @endif
    </div>


    <!-- BEGIN: Vendor JS Assets-->
    <script src="{{ asset('dist/js/vendors/dom.js') }}"></script>
    <script src="{{ asset('dist/js/vendors/tailwind-merge.js') }}"></script>
    <script src="{{ asset('dist/js/vendors/lucide.js') }}"></script>
    <script src="{{ asset('dist/js/vendors/tippy.js') }}"></script>
    <script src="{{ asset('dist/js/vendors/dayjs.js') }}"></script>
    <script src="{{ asset('dist/js/vendors/litepicker.js') }}"></script>
    <script src="{{ asset('dist/js/vendors/popper.js') }}"></script>
    <script src="{{ asset('dist/js/vendors/dropdown.js') }}"></script>
    <script src="{{ asset('dist/js/vendors/tiny-slider.js') }}"></script>
    <script src="{{ asset('dist/js/vendors/transition.js') }}"></script>
    <script src="{{ asset('dist/js/vendors/chartjs.js') }}"></script>
    <script src="{{ asset('dist/js/vendors/leaflet-map.js') }}"></script>
    <script src="{{ asset('dist/js/vendors/axios.js') }}"></script>
    <script src="{{ asset('dist/js/utils/colors.js') }}"></script>
    <script src="{{ asset('dist/js/utils/helper.js') }}"></script>
    <script src="{{ asset('dist/js/vendors/simplebar.js') }}"></script>
    <script src="{{ asset('dist/js/vendors/modal.js') }}"></script>
    <script src="{{ asset('dist/js/components/base/theme-color.js') }}"></script>
    <script src="{{ asset('dist/js/components/base/lucide.js') }}"></script>
    <script src="{{ asset('dist/js/components/base/tippy.js') }}"></script>
    <script src="{{ asset('dist/js/components/base/litepicker.js') }}"></script>
    <script src="{{ asset('dist/js/components/report-line-chart.js') }}"></script>
    <script src="{{ asset('dist/js/components/report-pie-chart.js') }}"></script>
    <script src="{{ asset('dist/js/components/report-donut-chart.js') }}"></script>
    <script src="{{ asset('dist/js/components/report-donut-chart-1.js') }}"></script>
    <script src="{{ asset('dist/js/components/simple-line-chart-1.js') }}"></script>
    <script src="{{ asset('dist/js/components/base/tiny-slider.js') }}"></script>
    <script src="{{ asset('dist/js/themes/enigma.js') }}"></script>
    <script src="{{ asset('dist/js/components/base/leaflet-map-loader.js') }}"></script>
    <script src="{{ asset('dist/js/components/mobile-menu.js') }}"></script>
    <script src="{{ asset('dist/js/components/themes/enigma/top-bar.js') }}"></script>
    <!-- END: Vendor JS Assets-->


    @stack('js')

    @if (session()->has('success'))
        <script>
            let toastSuccess = new bootstrap.Toast($("#toast-success"))
            toastSuccess.show()
        </script>
    @endif

    @if (session()->has('error'))
        <script>
            let toastDanger = new bootstrap.Toast($("#toast-danger"))
            toastDanger.show()
        </script>
    @endif

    @stack('js')
</body>

</html>
