<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title') {{ env('APP_NAME') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('admin.layout.partials.headdocs')
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .main {
            flex: 1;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        @include('admin.layout.partials.header')
        @include('admin.layout.partials.sidebar')

        <main id="main" class="main">
            @yield('content')
        </main>
        <footer id="footer" class="footer">
            <div class="copyright">
                &copy; Copyright <strong><span>{{ env('APP_NAME') }}</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="{{ env('ADMIN_DEVELOPER') }}">Pradipta</a>
            </div>
        </footer>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    {{-- <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script> --}}
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script> --}}
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script> --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

    <!-- Include Summernote JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var showConfirmButtons = document.querySelectorAll('.show_confirm');
            showConfirmButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    var form = button.closest('form');
                    var name = button.getAttribute('data-name');
                    event.preventDefault();
                    swal({
                            title: "Are you sure you want to delete this data?",
                            text: "Once deleted, you will not be able to recover this data file!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                form.submit();
                            } else {
                                swal("Your data file is safe!");
                            }
                        });
                });
            });
        });
    </script>

    @yield('script')
    {{-- <script>
       $(document).ready(function() {
    // Initialize Summernote for all elements with the class "summernote"
    $('.summernote').summernote({
        height: 300, // Set the height of the editor
        callbacks: {
            onChange: function(contents, $editable) {
                // Update a hidden input with the editor's content
                // This assumes there is a corresponding hidden input for each summernote instance
                $(this).closest('.form-group').find('input[type="hidden"]').val(contents);
            }
        }
    });
});
$(document).on('click', '.dropdown-toggle', function (e) {
    if ($(this).closest('.note-editor').length > 0) {
        $(this).dropdown('toggle');
    }
});

        document.addEventListener('DOMContentLoaded', function() {
            var messageAlert = document.getElementById('message-alert');
            if (messageAlert) { // Check if the element exists
                setTimeout(function() {
                    messageAlert.style.display = 'none'; // Hide the message
                }, 3000); // 3000 milliseconds = 3 seconds
            }
        });
    </script> --}}
    <script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 300,
            toolbar: [
                ['style', ['style']], // Includes h1, h2, etc.
                ['fontstyle', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            styleTags: ['p', 'h1', 'h2', 'h3', 'h4'], // Only allow these block styles
            callbacks: {
                onChange: function(contents, $editable) {
                    $(this).closest('.form-group').find('input[type="hidden"]').val(contents);
                }
            }
        });
    });

    $(document).on('click', '.dropdown-toggle', function (e) {
        if ($(this).closest('.note-editor').length > 0) {
            $(this).dropdown('toggle');
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        var messageAlert = document.getElementById('message-alert');
        if (messageAlert) {
            setTimeout(function() {
                messageAlert.style.display = 'none';
            }, 3000);
        }
    });
</script>

    <style>
        .note-dropdown-menu {
    z-index: 1050 !important; /* Ensure dropdown appears above other elements */
}
</style>
</body>

</html>
