<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HR') }}</title>

    <!-- Styles -->
    <link rel="shortcut icon" type="image/png" href="/img/icon/hr-logo.png"/>
    <!-- Styles -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/jquery-ui.min.css" rel="stylesheet">
    <link href="/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="/css/login.css" rel="stylesheet">

    <!-- BEGIN PLUGIN CSS -->
    <link href="/css/admintres/animate.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/admintres/fancy-buttons.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/admintres/filter.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/admintres/lightgallery.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/admintres/linea-icon.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/admintres/material-design-iconic-font.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/admintres/pe-icon-7-stroke.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/admintres/pe-icon-7-styles.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/admintres/simple-line-icons.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/admintres/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/admintres/themify-icons.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/admintres/footer.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/admintres/header.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- END PLUGIN CSS -->

    <script src="/js/jquery-1.12.4.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/jquery.priceformat.min.js"></script>
    <script src="/js/spin.min.js"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <!-- End Scripts -->
</head>
<body id="body">
    @include('includes.header')
    @yield('content')
    @include('includes.footer')

    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="/js/admintres/init.js" type="text/javascript"></script>
    <script src="/js/admintres/morris-data.js" type="text/javascript"></script>
    <script src="/js/admintres/widgets-data.js" type="text/javascript"></script>
    <script src="/js/admintres/form-xeditable-data.js" type="text/javascript"></script>
    <script src="/js/admintres/bootstrap-table-data.js" type="text/javascript"></script>
    <script src="/js/admintres/bootstrap-wysuhtml5-data.js" type="text/javascript"></script>
    <script src="/js/admintres/jsgrid-data.js" type="text/javascript"></script>
    <script src="/js/admintres/mindmup-editabletable.js" type="text/javascript"></script>
    <script src="/js/admintres/numeric-input-example.js" type="text/javascript"></script>
    <script src="/js/admintres/editable-table-data.js" type="text/javascript"></script>
    <script src="/js/admintres/chartist-data.js" type="text/javascript"></script>
    <script src="/js/admintres/chartjs-data.js" type="text/javascript"></script>
    <script src="/js/admintres/cropperjs-data.js" type="text/javascript"></script>
    <script src="/js/admintres/dashboard-data.js" type="text/javascript"></script>
    <script src="/js/admintres/dashboard2-data.js" type="text/javascript"></script>
    <script src="/js/admintres/dataTables-data.js" type="text/javascript"></script>
    <script src="/js/admintres/db.js" type="text/javascript"></script>
    <script src="/js/admintres/dropdown-bootstrap-extended.js" type="text/javascript"></script>
    <script src="/js/admintres/dropzone-data.js" type="text/javascript"></script>
    <script src="/js/admintres/easypiechart-data.js" type="text/javascript"></script>
    <script src="/js/admintres/echart-data.js" type="text/javascript"></script>
    <script src="/js/admintres/ecommerce-data.js" type="text/javascript"></script>
    <script src="/js/admintres/export-table-data.js" type="text/javascript"></script>
    <script src="/js/admintres/flot-data.js" type="text/javascript"></script>
    <script src="/js/admintres/footable-data.js" type="text/javascript"></script>
    <script src="/js/admintres/form-advance-data.js" type="text/javascript"></script>
    <script src="/js/admintres/form-file-upload-data.js" type="text/javascript"></script>
    <script src="/js/admintres/form-picker-data.js" type="text/javascript"></script>
    <script src="/js/admintres/form-wizard-data.js" type="text/javascript"></script>
    <script src="/js/admintres/froogaloop2.min.js" type="text/javascript"></script>
    <script src="/js/admintres/fullcalendar-data.js" type="text/javascript"></script>
    <script src="/js/admintres/lightgallery-all.js" type="text/javascript"></script>
    <script src="/js/admintres/gallery-data.js" type="text/javascript"></script>
    <script src="/js/admintres/gmap-data.js" type="text/javascript"></script>
    <script src="/js/admintres/isotope.js" type="text/javascript"></script>
    <script src="/js/admintres/jquery.slimscroll.js" type="text/javascript"></script>
    <script src="/js/admintres/modal-data.js" type="text/javascript"></script>
    <script src="/js/admintres/nestable-data.js" type="text/javascript"></script>
    <script src="/js/admintres/owl-data.js" type="text/javascript"></script>
    <script src="/js/admintres/peity-data.js" type="text/javascript"></script>
    <script src="/js/admintres/product-cart-data.js" type="text/javascript"></script>
    <script src="/js/admintres/product-checkout-data.js" type="text/javascript"></script>
    <script src="/js/admintres/product-detail-data.js" type="text/javascript"></script>
    <script src="/js/admintres/productorders-data.js" type="text/javascript"></script>
    <script src="/js/admintres/rangeslider-data.js" type="text/javascript"></script>
    <script src="/js/admintres/responsive-datatable-data.js" type="text/javascript"></script>
    <script src="/js/admintres/simpleweather-data.js" type="text/javascript"></script>
    <script src="/js/admintres/skills-counter-data.js" type="text/javascript"></script>
    <script src="/js/admintres/sparkline-data.js" type="text/javascript"></script>
    <script src="/js/admintres/spectragram.min.js" type="text/javascript"></script>
    <script src="/js/admintres/starrr.js" type="text/javascript"></script>
    <script src="/js/admintres/summernote-data.js" type="text/javascript"></script>
    <script src="/js/admintres/sweetalert-data.js" type="text/javascript"></script>
    <script src="/js/admintres/tablesaw-data.js" type="text/javascript"></script>
    <script src="/js/admintres/tinymce-data.js" type="text/javascript"></script>
    <script src="/js/admintres/toast-data.js" type="text/javascript"></script>
    <script src="/js/admintres/treeview-data.js" type="text/javascript"></script>
    <script src="/js/admintres/twitterFetcher.js" type="text/javascript"></script>
    <script src="/js/admintres/typeahead-js-data.js" type="text/javascript"></script>
    <script src="/js/admintres/vectormap-data.js" type="text/javascript"></script>
    <!-- END CORE JS DEPENDECENCIES-->

</body>
</html>
