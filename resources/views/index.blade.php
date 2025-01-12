<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI Sketch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .badge {
            top: -20px; /* Adjust vertical position */
            left: 10px; /* Adjust horizontal position */
            z-index: 1; /* Ensure it overlays the container */
            background-color: white;
            color: rgb(69, 67, 67); /* Text color */
            padding: 5px 10px;
            border: none;
            /* border-radius: 20px; */
            font-size: 0.9rem; /* Adjust font size */
        }

        .border {
            height: 150px; /* Adjust height of the container */
            padding: 15px; /* Optional: Adjust padding inside the container */
            background-color: #f8f9fa; /* Light background for better contrast */
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <nav class="navbar navbar-light bg-light p-3">
        <div class="container-fluid">
            <a class="navbar-br  and">Logo</a>
            <a href="#" class="btn btn-primary">Sign In / Sign Up</a>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-9"></div>
        <div class="col-md-3 col-10 my-3 pe-5">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search">
                <button class="btn btn-outline-primary" type="submit">Filter</button>
            </form>
        </div>
    </div>

    <!-- Discount Section -->
    <div class="mt-3">
        <div class="row">
            <div class="col-md-10 offset-md-1 border position-relative">
                <span class="position-absolute badge fs-3">Discount</span>
            </div>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="container mt-4">
        <h6>Category</h6>
        <div class="row">
            <div class="col-2">
                <div class="border rounded p-3 text-center">Cat 1</div>
            </div>
            <div class="col-2">
                <div class="border rounded p-3 text-center">Cat 2</div>
            </div>
            <div class="col-2">
                <div class="border rounded p-3 text-center">Cat 3</div>
            </div>
            <div class="col-2">
                <div class="border rounded p-3 text-center">Cat 4</div>
            </div>
            <div class="col-2">
                <div class="border rounded p-3 text-center">Cat 5</div>
            </div>
        </div>
    </div>

    <!-- Menu Section -->
    <div class="container mt-4">
        <h6>Menu</h6>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Item Name</h5>
                        <p class="card-text">Price: $10</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Item Name</h5>
                        <p class="card-text">Price: $15</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Item Name</h5>
                        <p class="card-text">Price: $20</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Item Name</h5>
                        <p class="card-text">Price: $25</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
