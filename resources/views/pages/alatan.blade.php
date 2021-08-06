@extends('layouts.base')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-3 text-dark" href="javascript:;">
                            <i class="fas fa-tools me-sm-1 text-dark"></i>
                        </a>
                    </li>
                    <!-- <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li> -->
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Alatan</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Alatan</h6>
            </nav>
            <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                <a href="javascript:;" class="nav-link text-body p-0">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Carian...">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <!-- <li class="nav-item d-flex align-items-center">
                        <a href="../../pages/authentication/signin/illustration.html" class="nav-link text-body font-weight-bold px-0" target="_blank">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Sign In</span>
                        </a>
                    </li> -->
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 " alt="user image">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 " alt="logo spotify">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-12 p-3">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5>Stok Alatan</h5>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="chart">
                            <div class="amchart" id="chartdivalatan1"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 p-3">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5>Senarai Pembelian Alatan</h5>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-flush" id="datatable-basic">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Alatan ID</th>
                                        <th>Nama Alatan</th>
                                        <th>Harga</th>
                                        <th>Baki Stok</th>
                                        <th>Kuantiti</th>
                                        <th>Imej Peralatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>AX317</td>
                                        <td>Khemah</td>
                                        <td>RM 235.00</td>
                                        <td>247</td>
                                        <td>34</td>
                                        <td>
                                            <button class="btn btn-icon btn-success btn-sm" type="button" title="Fail">
                                                <span class="btn-inner--icon">
                                                    <i class="fas fa-eye"> </i>
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>SE124</td>
                                        <td>Meja</td>
                                        <td>RM 634.00</td>
                                        <td>614</td>
                                        <td>155</td>
                                        <td>
                                            <button class="btn btn-icon btn-success btn-sm" type="button" title="Fail">
                                                <span class="btn-inner--icon">
                                                    <i class="fas fa-eye"> </i>
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>KS682</td>
                                        <td>Mesin</td>
                                        <td>RM 860.00</td>
                                        <td>25</td>
                                        <td>4</td>
                                        <td>
                                            <button class="btn btn-icon btn-success btn-sm" type="button" title="Fail">
                                                <span class="btn-inner--icon">
                                                    <i class="fas fa-eye"> </i>
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- <table id="tablealatan1" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Alatan ID</th>
                                    <th>Nama Alatan</th>
                                    <th>Harga</th>
                                    <th>Baki Stok</th>
                                    <th>Kuantiti</th>
                                    <th>Imej Peralatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>AX317</td>
                                    <td>Khemah</td>
                                    <td>RM 235.00</td>
                                    <td>247</td>
                                    <td>34</td>
                                    <td>
                                        <button class="btn btn-icon btn-success btn-sm" type="button" title="Fail">
                                            <span class="btn-inner--icon">
                                                <i class="fas fa-eye"> </i>
                                            </span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SE124</td>
                                    <td>Meja</td>
                                    <td>RM 634.00</td>
                                    <td>614</td>
                                    <td>155</td>
                                    <td>
                                        <button class="btn btn-icon btn-success btn-sm" type="button" title="Fail">
                                            <span class="btn-inner--icon">
                                                <i class="fas fa-eye"> </i>
                                            </span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>KS682</td>
                                    <td>Mesin</td>
                                    <td>RM 860.00</td>
                                    <td>25</td>
                                    <td>4</td>
                                    <td>
                                        <button class="btn btn-icon btn-success btn-sm" type="button" title="Fail">
                                            <span class="btn-inner--icon">
                                                <i class="fas fa-eye"> </i>
                                            </span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table> -->
                    </div>
                </div>
            </div>

            <div class="col-xl-12 p-3">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5>Jumlah Nilai Belian</h5>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table id="tablealatan2" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Alatan ID</th>
                                    <th>Nama Alatan</th>
                                    <th>Harga</th>
                                    <th>Kuantiti</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>AX317</td>
                                    <td>Khemah</td>
                                    <td>RM 235.00</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <td>SE124</td>
                                    <td>Meja</td>
                                    <td>RM 634.00</td>
                                    <td>155</td>
                                </tr>
                                <tr>
                                    <td>KS682</td>
                                    <td>Mesin</td>
                                    <td>RM 860.00</td>
                                    <td>4</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Jumlah</th>
                                    <th class="align-item-end">RM 1729.00</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 p-3">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5>Senarai Tempahan Pembeli</h5>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table id="tablealatan3" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Alatan ID</th>
                                    <th>Nama Alatan</th>
                                    <th>Kuantiti</th>
                                    <th>No. Syarikat</th>
                                    <th>Nama Syarikat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>AX317</td>
                                    <td>Khemah</td>
                                    <td>34</td>
                                    <td>3136</td>
                                    <td>Megah Holding Sdn. Bhd.</td>
                                </tr>
                                <tr>
                                    <td>SE124</td>
                                    <td>Meja</td>
                                    <td>155</td>
                                    <td>4689</td>
                                    <td>Permata Sinar Sdn. Bhd.</td>
                                </tr>
                                <tr>
                                    <td>KS682</td>
                                    <td>Mesin</td>
                                    <td>4</td>
                                    <td>5701</td>
                                    <td>Expert Trio Sdn. Bhd.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </footer>
    </div>
</main>
<!--   Core JS Files   -->
<script src="../../assets/js/core/popper.min.js"></script>
<script src="../../assets/js/core/bootstrap.min.js"></script>
<script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
<!-- Kanban scripts -->
<script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
<script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
<script src="../../assets/js/plugins/choices.min.js"></script>
<script src="../../assets/js/plugins/dropzone.min.js"></script>
<script src="https://demos.creative-tim.com/test/soft-ui-dashboard-pro/assets/js/plugins/datatables.js" type="text/javascript"></script>
<script type="text/javascript">
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
        searchable: false,
        fixedHeight: true
    });
</script>
<!-- amchart -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/dataviz.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<script>
    (document).ready(function() {
        ('tablealatan1').DataTable();
        ('tablealatan2').DataTable();
        ('tablealatan3').DataTable();
    });
</script>
<script>
    if (document.getElementById('choices-country')) {
        var country = document.getElementById('choices-country');
        const example = new Choices(country);
    }

    var openFile = function(event) {
        var input = event.target;

        // Instantiate FileReader
        var reader = new FileReader();
        reader.onload = function() {
            imageFile = reader.result;

            document.getElementById("imageChange").innerHTML = '<img width="200" src="' + imageFile + '" class="rounded-circle w-100 shadow" />';
        };
        reader.readAsDataURL(input.files[0]);
    };
</script>

<script>
    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_dataviz);
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("chartdivalatan1", am4charts.XYChart);
        chart.scrollbarX = new am4core.Scrollbar();

        // Add data
        chart.data = [{
            "country": "Jan",
            "visits": 302
        }, {
            "country": "Feb",
            "visits": 188
        }, {
            "country": "Mac",
            "visits": 180
        }, {
            "country": "Apr",
            "visits": 132
        }, {
            "country": "Mei",
            "visits": 112
        }, {
            "country": "Jun",
            "visits": 111
        }, {
            "country": "Jul",
            "visits": 98
        }, {
            "country": "Ogos",
            "visits": 71
        }, {
            "country": "Sep",
            "visits": 66
        }, {
            "country": "Okt",
            "visits": 58
        }, {
            "country": "Nov",
            "visits": 43
        }, {
            "country": "Dis",
            "visits": 41
        }];

        // Create axes
        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "country";
        categoryAxis.renderer.grid.template.location = 0;
        categoryAxis.renderer.minGridDistance = 30;
        categoryAxis.renderer.labels.template.horizontalCenter = "right";
        categoryAxis.renderer.labels.template.verticalCenter = "middle";
        categoryAxis.renderer.labels.template.rotation = 270;
        categoryAxis.tooltip.disabled = true;
        categoryAxis.renderer.minHeight = 110;

        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis.renderer.minWidth = 50;

        // Create series
        var series = chart.series.push(new am4charts.ColumnSeries());
        series.sequencedInterpolation = true;
        series.dataFields.valueY = "visits";
        series.dataFields.categoryX = "country";
        series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
        series.columns.template.strokeWidth = 0;

        series.tooltip.pointerOrientation = "vertical";

        series.columns.template.column.cornerRadiusTopLeft = 10;
        series.columns.template.column.cornerRadiusTopRight = 10;
        series.columns.template.column.fillOpacity = 0.8;

        // on hover, make corner radiuses bigger
        var hoverState = series.columns.template.column.states.create("hover");
        hoverState.properties.cornerRadiusTopLeft = 0;
        hoverState.properties.cornerRadiusTopRight = 0;
        hoverState.properties.fillOpacity = 1;

        series.columns.template.adapter.add("fill", function(fill, target) {
            return chart.colors.getIndex(target.dataItem.index);
        });

        // Cursor
        chart.cursor = new am4charts.XYCursor();

    }); // end am4core.ready()
</script>

@stop