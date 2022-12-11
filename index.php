<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <!-- js -->
    <script src="js/app.js" defer></script>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

      <div class="d-flex flex-row w-100">
        <div class="register-container p-3" >
        <h1>Registration Form</h1>
        <form action="database/register.php" method="POST">
            <div class="d-flex flex-wrap">
              <div class="mb-3">
                <label for="" class="form-label">First Name</label>
                <input type="text" name="FName" class="form-control" placeholder="First Name" id="" aria-describedby="">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Last Name</label>
                <input type="text" name="LName" class="form-control" placeholder="Last Name" id="" aria-describedby="">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="Email" class="form-control" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
             
              <div class="mb-3">
                <label for="" class="form-label">Phone</label>
                <input type="text" name="Phone_number" class="form-control" placeholder="Phone" id="phoneNumber" aria-describedby="">
              </div>

            </div>
            
            <div class="mb-3">
              <label for="" class="form-label">House and St. no. </label>
              <input type="text" name="House" class="form-control" placeholder="House and Street no." id="" aria-describedby="">
            </div>
            <div class="d-flex">
              <div class="mb-3">
                <label for="" class="form-label">City</label>
                <input type="text" name="city" class="form-control" placeholder="City" id="" aria-describedby="">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Zip Code</label>
                <input type="text" name="zCode" class="form-control" placeholder="Zip Code" id="" aria-describedby="">
              </div>
            </div>
            <label>Select place to volunteer</label>
            <select class="form-select" name="place" aria-label="Default select example">
              <option selected style="display: none;">Select place</option>
              <option value="Hospital">Hospital</option>
              <option value="School">School</option>
              <option value="Animal shelter"> Animal shelter</option>
              <option value="Food pantry">Food pantry</option>
              <option value="Senior living center">Senior living center</option>
            </select>
            <button type="submit" name="submit" class="btn btn-primary mt-3">Register</button>
          </form>
        </div>
          <div class="left-img row-con d-flex">
            <img src="image/pngtree-international-volunteer-day-volunteer-hands-love-image_44039.jpg" alt="">
        </div>
    </div>
</body>
</html>