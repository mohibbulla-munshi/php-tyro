<?php include './calculator.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GPA Calculator</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
  </script>

</head>

<body>
  <form method="POST" action="calculator.php">
    <div class="mb-3">
      <label for="point" class="form-label">Enter your Point</label>
      <input name="point" step="0.01" type="text" class="form-control" id="point">
    </div>
    <div class="mb-3">
      <label disable selected>Select Study Level</label>
      <select name="study_level" class="form-select">
        <option value="JSC">JSC</option>
        <option value="SSC">SSC</option>
        <option value="HSC">HSC</option>
        <option value="Graduation">Graduation</option>
        <option value="Masters">Masters</option>
      </select>
    </div>
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>

</html>