<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="dataTables.numericComma.js"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap5.min.js') }}"></script>

<!-- Need: Apexcharts -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.4/apexcharts.min.js"></script> --}}
<script src="{{ asset('assets/js/apexcharts.min.js') }}"
    integrity="sha512-oUoSexkALUPd0BQaO/0m029XijXQ7XlFbPIhDNvzD8r2XhUjidiRo/8YhJGpoevLZVRwRFBvygSc9jV2TagjfQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
{{-- <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script> --}}
{{ $slot }}
