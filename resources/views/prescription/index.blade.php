<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <form method="POST" action="{{ route('print.prescription') }}">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Patient ID</label>
      <input type="text" name="patient_id" class="form-control" id="inputEmail1">
      <label for="inputEmail1">Name</label>
      <input type="text" name="name" class="form-control" id="inputEmail2">
      <label for="inputEmail3">Age</label>
      <input type="text" name="age" class="form-control" id="inputEmail3">
      <label for="inputEmail4">Address</label>
      <input type="text" name="address" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-8">
      <label for="inputPassword4">Medicine</label>
      <textarea rows="10" name="medicine" class="form-control" id="inputPassword4"></textarea>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <lebel for="advice">Advice</lebel>
      <textarea id="advice" name="advise" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12 text-center">
      <input terget="_blank" type="submit" name="submit" value="Print" class="btn btn-info">
    </div>
  </div>

  </form>
</div>

</body>
</html>
