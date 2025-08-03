<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Admin Dashboard</title>
    <link href="{{ asset('admin/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .sidebar {
            min-width: 250px;
            max-width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #3d2c1e; /* Earthy brown for construction theme */
            padding-top: 20px;
            transform: translateX(0);
            transition: transform 0.3s ease-in-out;
            z-index: 1000;
        }
        .sidebar.collapsed {
            transform: translateX(-250px);
        }
        .sidebar a {
            color: #d4a373; /* Sandy beige for text */
            padding: 10px 20px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #5b3e2b;
            color: #fff;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
            transition: margin-left 0.3s ease-in-out;
            background-color: #f5f0e8; /* Light construction-like background */
        }
        .main-content.expanded {
            margin-left: 0;
        }
        .navbar {
            margin-left: 250px;
            background-color: #fff;
            border-bottom: 1px solid #dee2e6;
            transition: margin-left 0.3s ease-in-out;
        }
        .navbar.expanded {
            margin-left: 0;
        }
        .sidebar-toggle {
            cursor: pointer;
        }
        .card {
            border: 1px solid #8c6b3e; /* Construction-themed border */
        }
        .card-header {
            background-color: #d4a373; /* Sandy beige for headers */
            color: #3d2c1e;
        }
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-250px);
            }
            .sidebar.active {
                transform: translateX(0);
            }
            .main-content, .navbar {
                margin-left: 0;
            }
            .main-content.expanded, .navbar.expanded {
                margin-left: 0;
            }
        }
        @media (max-width: 576px) {
            .card {
                text-align: center;
            }
            .card-title, .card-text {
                font-size: smaller;
            }
            .table {
                font-size: 0.85rem;
            }
        }
        @media (max-width: 768px) {
            .row.g-4 {
                flex-direction: column;
            }
            .col-md-6.col-lg-3 {
                max-width: 100%;
            }
        }
        .table-responsive {
            -webkit-overflow-scrolling: touch;
        }
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        .overlay.active {
            display: block;
        }
    </style>

</head>
