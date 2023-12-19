<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

     <!-- Select2 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Select2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>
<body>
    @include('header')
    <div>
        <div class="container mt-4 mb-4">
            <h3>Đăng tin mới</h3>
            <div class="col-lg-7 col-md-12">
                <form action="{{ route('doupnew') }}">
                    @csrf
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="category" name="categories">
                        <label for="floatingPassword">Category</label>
                        @if ($errors -> has('categories'))
                            <span class="error-message">*{{ 
                            $errors->first('categories') }}</span>
                        @endif
                    </div>

                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="floatingInput" placeholder="" name="street">
                        <label for="floatingInput">Street</label>
                        @if ($errors -> has('street'))
                            <span class="error-message">*{{ 
                            $errors->first('street') }}</span>
                        @endif
                    </div>

                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="district">
                        <label for="floatingPassword">District</label>
                        @if ($errors -> has('district'))
                            <span class="error-message">*{{ 
                            $errors->first('district') }}</span>
                        @endif
                    </div>

                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="city">
                        <label for="floatingPassword">City</label>
                        @if ($errors -> has('city'))
                            <span class="error-message">*{{ 
                            $errors->first('city') }}</span>
                        @endif
                    </div>

                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="area">
                        <label for="floatingPassword">Area</label>
                        @if ($errors -> has('area'))
                            <span class="error-message">*{{ 
                            $errors->first('area') }}</span>
                        @endif
                    </div>

                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="title">
                        <label for="floatingPassword">Title</label>
                        @if ($errors -> has('title'))
                            <span class="error-message">*{{ 
                            $errors->first('title') }}</span>
                        @endif
                    </div>

                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="description">
                        <label for="floatingPassword">Description</label>
                        @if ($errors -> has('description'))
                            <span class="error-message">*{{ 
                            $errors->first('description') }}</span>
                        @endif
                    </div>

                    <div class="form-floating mb-4">
                        <input type="number" class="form-control" id="floatingPassword" placeholder="Password" name="cost">
                        <label for="floatingPassword">Cost</label>
                        @if ($errors -> has('cost'))
                            <span class="error-message">*{{ 
                            $errors->first('cost') }}</span>
                        @endif
                    </div>

                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="contact_person">
                        <label for="floatingPassword">Contact Person</label>
                        @if ($errors -> has('contact_person'))
                            <span class="error-message">*{{ 
                            $errors->first('contact_person') }}</span>
                        @endif
                    </div>

                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="phone">
                        <label for="floatingPassword">Phone</label>
                        @if ($errors -> has('phone'))
                            <span class="error-message">*{{ 
                            $errors->first('phone') }}</span>
                        @endif
                    </div>
                    <div class="form-floating mb-4">
                        <input type="url" class="form-control" id="floatingPassword" placeholder="Password" name="img">
                        <label for="floatingPassword">Image</label>
                        @if ($errors -> has('img'))
                            <span class="error-message">*{{ 
                            $errors->first('img') }}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Đăng tin</button>
                </form>
            </div>
        </div>
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>