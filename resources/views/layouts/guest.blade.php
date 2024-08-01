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
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}"> <!-- END: CSS Assets-->

    @stack('css')
</head>

<body>
    <div class="content">
        {{ $slot }}

        @if (session()->has('success'))
            <!-- Toast -->
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                <div id="toast-success" class="toast align-items-center text-white border-0 bg-success" role="alert"
                    aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            {{ session()->get('success') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif
        @if (session()->has('error'))
            <!-- Toast -->
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                <div id="toast-danger" class="toast align-items-center text-white border-0 bg-danger" role="alert"
                    aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            {{ session()->get('error') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif
    </div>


    <!-- BEGIN: Vendor JS Assets-->
    <script src="{{ asset('dist/js/vendors/dom.js') }}"></script>
    <script src="{{ asset('dist/js/vendors/tailwind-merge.js') }} }} }}"></script>
    <script src="{{ asset('dist/js/vendors/lucide.js') }}"></script>
    <script src="{{ asset('dist/js/vendors/modal.js') }}"></script>
    <script src="{{ asset('dist/js/components/base/theme-color.js') }}"></script>
    <script src="{{ asset('dist/js/components/base/lucide.js') }}"></script> 
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
