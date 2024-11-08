<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  <link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>assets/css/style.css">

</head>

<body>


  <div>
    <nav>
      <li class="logo"><a href="LOGO">Student Status</a></li>
      <ul>
        <li><a id="active" href="<?= site_url('Homepage') ?>">Home</a></li>
        <li><a href="<?= site_url('Dashboard') ?>">Dashboard</a></li>
        <li><a href="<?= site_url('Employees') ?>">Employees</a></li>
        <li><a href="<?= site_url('Profile') ?>">Profile</a></li>
      </ul>
    </nav>
    <div class="container">

      <div class="section-box">
        <div class="adviser-box">
          <img src="/images.jpeg" alt="Teacher">
          <h4>NAME</h4>
          <div class="info">
            <label>Strand: </label><span>ICT</span><br>
            <label>Section: </label><span><span><br>
            <label>Year: </label><span>2023-2024</<span><br>



          </div>
        </div>
        <div class="students-box">
          <h1>Students</h1>
        </div>
        <div class="student-info">
          <img src="/images.jpeg" alt="/images.jpeg">
          <br>
          <div class="status">
          <label>Status: </label><span>Active</span>
          </div>
        </div>

      </div>


    </div>

  </div>

</body>

</html>
