<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layout.header-link')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.layout._navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        @include('admin.layout._settings-panel')
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('admin.layout._sidebar')
        <!-- partial -->
        <div class="main-panel">
            @yield('content')
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('admin.layout._footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@include('admin.layout.script-link')
</body>

</html>


