<!DOCTYPE html>
<html lang="en">
@include('admin.partials.head')
<body>
@include('admin.partials.navbar')

    <!-- Main Content -->
    <div class="main-content">
        <h1 class="mb-4">Construction Dashboard</h1>
        <div class="row g-4 mb-4">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Active Projects</h5>
                        <h2 class="card-text">12</h2>
                        <p class="text-muted">+2 this month</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Budget Spent</h5>
                        <h2 class="card-text">1.2M</h2>
                        <p class="text-muted">75% of allocated</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Workers On-Site</h5>
                        <h2 class="card-text">85</h2>
                        <p class="text-muted">+10% this week</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Equipment Utilization</h5>
                        <h2 class="card-text">92%</h2>
                        <p class="text-muted">+5% efficiency</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Recent Project Updates</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Project ID</th>
                                <th scope="col">Site</th>
                                <th scope="col">Task</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#PRJ-001</td>
                                <td>Downtown Tower</td>
                                <td>Foundation Work</td>
                                <td>2025-08-01</td>
                                <td><span class="badge bg-success">Completed</span></td>
                            </tr>
                            <tr>
                                <td>#PRJ-002</td>
                                <td>Suburban Mall</td>
                                <td>Steel Framing</td>
                                <td>2025-08-01</td>
                                <td><span class="badge bg-warning">In Progress</span></td>
                            </tr>
                            <tr>
                                <td>#PRJ-003</td>
                                <td>Highway Bridge</td>
                                <td>Piling</td>
                                <td>2025-07-31</td>
                                <td><span class="badge bg-danger">Delayed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@include('admin.partials.js')
</body>
</html>
