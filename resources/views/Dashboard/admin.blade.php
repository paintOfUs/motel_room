<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <style>
        /* Add your custom styles here */
        .list-group-item.active {
          background-color: #007bff;
          color: #fff;
        }
      </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Your Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-2">
            <!-- Sidebar -->
            <div class="card">
                <div class="card-body">
                    <form id="myForm" method="post" action="{{ route('admin') }}">
                        @csrf
                        <ul class="list-group">
                            <li class="list-group-item" data-value="1">Dashboard</li>
                            <li class="list-group-item" data-value="2">Update</li>
                            <li class="list-group-item" data-value="3">Add</li>
                            <li class="list-group-item" data-value="4">Users</li>
                        </ul>
                        <input type="hidden" name="selectedPage" id="selectedPage">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <!-- Main Content Area -->
            @if($page == 1)

                @include('Dashboard.dashboard')
            @elseif($page == 2)
                @include('Dashboard.add')
            @elseif($page == 3)
                @include('Dashboard.update')
            @endif
            
        </div>
    </div>
</div>

@include('footer')
<script>
    document.addEventListener("DOMContentLoaded", function() {
    var listItems = document.querySelectorAll('.list-group-item');
    var lastSelected;

    listItems.forEach(function(item) {
        item.addEventListener('click', function() {
            if (lastSelected) {
                lastSelected.classList.remove('active');
            }

            item.classList.add('active');
            lastSelected = item;

            var selectedPage = item.getAttribute('data-value');
            document.getElementById('selectedPage').value = selectedPage;
            document.getElementById('myForm').submit();
        });
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
