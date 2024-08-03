<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        {{-- <div class="mb-2 mb-md-0">
            ©
            <script>
                document.write(new Date().getFullYear())
            </script>, made with ❤️ by <a href="https://themeselection.com/"
                target="_blank" class="footer-link fw-medium">ThemeSelection</a>
        </div>
        <div class="d-none d-lg-inline-block">

            <a href="https://themeselection.com/license/" class="footer-link me-4"
                target="_blank">License</a>
            <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More
                Themes</a>

            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank" class="footer-link">Documentation</a>


            <a href="https://themeselection.com/support/" target="_blank"
                class="footer-link d-none d-sm-inline-block">Support</a>

        </div> --}}
    </div>
</footer>

<script src="{{ asset('Cms/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('Cms/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('Cms/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('Cms/assets/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('Cms/assets/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('Cms/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
<script src="{{ asset('Cms/assets/vendor/js/menu.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
    < script src = "{{ asset('Cms/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}" >
</script>
<!-- Flat Picker -->
<script src="{{ asset('Cms/assets/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('Cms/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.2.11/jspdf.plugin.autotable.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.2.11/jspdf.plugin.autotable.min.js"></script>

<script src="{{ asset('Cms/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('Cms/assets/vendor/libs/quill/katex.js') }}"></script>
<script src="{{ asset('Cms/assets/vendor/libs/quill/quill.js') }}"></script>
<script src="{{ asset('Cms/assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('Cms/assets/vendor/libs/dropzone/dropzone.js') }}"></script>
<script src="{{ asset('Cms/assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
<script src="{{ asset('Cms/assets/vendor/libs/tagify/tagify.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('Cms/assets/js/main.js') }}"></script>

<script src="{{ asset('Cms/assets/js/app-ecommerce-product-add.js') }}"></script>
<!-- Page JS -->

<script src="{{ asset('Cms/assets/js/app-ecommerce-dashboard.js') }}"></script>

<script>
    $(document).ready(function() {
        $('.delete-confirm').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');
            console.log(url);
            swal({
                title: 'Are you sure?',
                text: 'This record and it`s details will be permanantly deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });

    });
</script>

