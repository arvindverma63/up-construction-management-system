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
                        <h2 class="fw-bold mb-0">Edit Category</h2>
                        <a href="{{ route('categories.index') }}" class="btn btn-light btn-sm">Back</a>
                    </div>

                    <!-- Form -->
                    <div class="card shadow-sm rounded-3">
                        <div class="card-body">
                            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <!-- Category Name -->
                                <div class="mb-3">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" class="form-control" name="name"
                                           value="{{ old('name', $category->name) }}" required>
                                </div>

                                <!-- Parent Category -->
                                <div class="mb-3">
                                    <label class="form-label">Parent Category</label>
                                    <select name="parent_id" class="form-select">
                                        <option value="">-- None --</option>
                                        @foreach($categories as $parent)
                                            @if($parent->id != $category->id) <!-- prevent self-parent -->
                                                <option value="{{ $parent->id }}"
                                                    {{ $category->parent_id == $parent->id ? 'selected' : '' }}>
                                                    {{ $parent->name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Description -->
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control">{{ old('description', $category->description) }}</textarea>
                                </div>

                                <!-- Status -->
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-select">
                                        <option value="active" {{ $category->status == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $category->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>

                                <!-- Submit -->
                                <button type="submit" class="btn btn-primary">Update Category</button>
                            </form>
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
