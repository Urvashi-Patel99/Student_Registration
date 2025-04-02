<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  
    <div class="container  p-3 mb-2 bg-primary-subtle text-primary-emphasis border mt-5 ">
      <div class="container-fluid">
        <form action="Student_Data.php" method="POST">
          <div class="p-3 mb-2 bg-primary text-white text-center mt-6"><h1>Registration Form</h1></div>
          <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputName1">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputAge1" class="form-label">Age</label>
            <input type="number" class="form-control" id="exampleInputAge1">
          </div>
          <div class="mb-3">
            <label for="exampleInputCourse1" class="form-label">Course</label>
            <input type="text" class="form-control" id="exampleInputCourse1" >
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
</body>
</html>