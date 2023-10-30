<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>

  <!-- Link to Bootstrap CSS from a CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">
    <h1>Login</h1>
    <form method="post" action="<?php echo site_url('formcontroller/process_form'); ?>">



      <div class="mb-3">
        <label for="email" class="form-label">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email here" required />
      </div>


      <label for="comment" class="form-label">Comment:</label>
      <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">comment </button>
      </div>
    </form>
  </div>

  <!-- Link to Bootstrap JavaScript from a CDN (requires jQuery and Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>