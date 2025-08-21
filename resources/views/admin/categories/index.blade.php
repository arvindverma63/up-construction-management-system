<!DOCTYPE html>
<html lang="en">

@include('admin.partials.head')

<body>
    <div class="wrapper">
        @include('admin.partials.navbar')

        <div class="main">
            @include('admin.partials.top-navbar')

            <main class="content">
                <div class="container-fluid p-0">

                    <!-- Header -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="fw-bold mb-0">Manage Categories</h2>
                        <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm d-flex align-items-center">
                            <i data-feather="plus" class="me-1"></i> Add Category
                        </a>
                    </div>

                    <!-- Categories Table -->
                    <div class="card shadow-sm rounded-3">
                        <div class="card-body">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Parent</th>
                                        <th>Status</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp

                                    @forelse($categories as $category)
                                        @include('admin.categories.partials.row', ['category' => $category, 'level' => 0, 'i' => $i])
                                        @php $i++; @endphp
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">No categories found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </main>

            @include('admin.partials.footer')
        </div>
    </div>

</body>
@include('admin.partials.js')
<script> feather.replace(); </script>
</html>
