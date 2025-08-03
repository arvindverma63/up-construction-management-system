<!DOCTYPE html>
<html lang="en">
@include('admin.partials.head')
<body>
    @include('admin.partials.navbar')

    <!-- Main Content -->
    <div class="main-content">
        <h1 class="mb-4">Manage Categories</h1>

        <!-- Add/Edit Category Form (Modal Trigger) -->
        <div class="mb-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                <i class="fas fa-plus me-1"></i> Add New Category
            </button>
        </div>

        <!-- Categories Table -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Category List</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Projects</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-id="#CAT-001">
                                <td>#CAT-001</td>
                                <td>Residential Construction</td>
                                <td>Housing and apartments</td>
                                <td>5</td>
                                <td>
                                    <button class="btn btn-sm btn-warning me-1" onclick="openEditModal(this)" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button class="btn btn-sm btn-danger" onclick="openDeleteModal(this)" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </td>
                            </tr>

                            <tr data-id="#CAT-002">
                                <td>#CAT-002</td>
                                <td>Commercial Construction</td>
                                <td>Offices and retail spaces</td>
                                <td>3</td>
                                <td>
                                    <button class="btn btn-sm btn-warning me-1" onclick="openEditModal(this)" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button class="btn btn-sm btn-danger" onclick="openDeleteModal(this)" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </td>
                            </tr>
                            <tr data-id="#CAT-003">
                                <td>#CAT-003</td>
                                <td>Infrastructure</td>
                                <td>Bridges and highways</td>
                                <td>2</td>
                                <td>
                                    <button class="btn btn-sm btn-warning me-1" onclick="openEditModal(this)" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button class="btn btn-sm btn-danger" onclick="openDeleteModal(this)" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Add Category Modal -->
        <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #d4a373; color: #3d2c1e;">
                        <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="addCategoryName" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="addCategoryName" placeholder="e.g., Residential Construction">
                        </div>
                        <div class="mb-3">
                            <label for="addCategoryDescription" class="form-label">Description</label>
                            <input type="text" class="form-control" id="addCategoryDescription" placeholder="e.g., Housing and apartments">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" onclick="addCategory()">Add Category</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Category Modal -->
        <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #d4a373; color: #3d2c1e;">
                        <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="editCategoryName" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="editCategoryName" placeholder="e.g., Residential Construction">
                        </div>
                        <div class="mb-3">
                            <label for="editCategoryDescription" class="form-label">Description</label>
                            <input type="text" class="form-control" id="editCategoryDescription" placeholder="e.g., Housing and apartments">
                        </div>
                        <input type="hidden" id="editCategoryId">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" onclick="updateCategory()">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Category Modal -->
        <div class="modal fade" id="deleteCategoryModal" tabindex="-1" aria-labelledby="deleteCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #d4a373; color: #3d2c1e;">
                        <h5 class="modal-title" id="deleteCategoryModalLabel">Delete Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete the category "<span id="deleteCategoryName"></span>"?</p>
                        <input type="hidden" id="deleteCategoryId">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" onclick="deleteCategory()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.js')
</body>
</html>
