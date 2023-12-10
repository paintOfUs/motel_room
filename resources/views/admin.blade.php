<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-2 bg-primary text-white" style="height:900px">
                <h4>Dash boarch</h4>
                <ul class="nav flex-column nav-underline text-center">
                    <li class="nav-item  bg-success my-5">
                      <a class="nav-link  text-white text-center" aria-current="page" href="#">Active</a>
                    </li>
                    <li class="nav-item bg-success my-5">
                      <a class="nav-link text-white text-center" href="#">Link</a>
                    </li>
                    <li class="nav-item bg-success my-5">
                      <a class="nav-link text-white text-center" href="#">Link</a>
                    </li>
                    <li class="nav-item bg-danger my-5">
                        <a class="nav-link text-white text-center" href="{{ action([\App\Http\Controllers\LoginController::class, 'login']) }}">logout</a>
                      </li>
                  </ul>
            </div>
            <div class="col-sm-9">
                <h1>Welcome back admin</h1>
                <h3>Thông tin danh sách các phòng trọ</h3>
                <div class="container p-0 m-0">         
                    <table class="table table-dark table-hover vw-100 vh-30">
                      <thead>
                        <tr>
                          <th>Firstname</th>
                          <th>Lastname</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>John</td>
                          <td>Doe</td>
                          <td>john@example.com</td>
                        </tr>
                        <tr>
                          <td>Mary</td>
                          <td>Moe</td>
                          <td>mary@example.com</td>
                        </tr>
                        <tr>
                          <td>July</td>
                          <td>Dooley</td>
                          <td>july@example.com</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <h3>Thông tin danh sách người cho thuê</h3>
                <div class="container p-0 m-0">         
                    <table class="table table-dark table-hover vw-100 vh-30">
                      <thead>
                        <tr>
                          <th>Firstname</th>
                          <th>Lastname</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>John</td>
                          <td>Doe</td>
                          <td>john@example.com</td>
                        </tr>
                        <tr>
                          <td>Mary</td>
                          <td>Moe</td>
                          <td>mary@example.com</td>
                        </tr>
                        <tr>
                          <td>July</td>
                          <td>Dooley</td>
                          <td>july@example.com</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>
</body>

</html>
