<!DOCTYPE html>
<html lang="en">

@include('users.partials.head')

<body>
    <div class="container-scroller">
        @include('users.partials.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('users.partials.sidebar')
            <!-- partial -->
            <div class="main-panel">



            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    @include('users.partials.js')
</body>

</html>
