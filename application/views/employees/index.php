<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  <link rel="stylesheet" href="/style.css">

</head>

<body>


  <div>
    <nav>
      <li class="logo"><a href="LOGO">LOGO</a></li>
      <ul>
        <li><a id="active" href="<?= site_url('Homepage') ?>">Home</a></li>
        <li><a href="<?= site_url('Dashboard') ?>">Dashboard</a></li>
        <li><a href="<?= site_url('Employees') ?>">Employees</a></li>
        <li><a href="<?= site_url('Profile') ?>">Profile</a></li>
      </ul>
    </nav>
    <div class="container">
      <div class="section-student">


        <div class="section-employees">
          <div class="dropdown-menu-strand">
            <label for="">Strand: </label>
            <select name="strand" id="">
              <option value="">select</option>
            </select>

          </div>
          <div class="dropdown-menu-section">
            <label for="">Section: </label>
            <select name="strand" id="">
              <option value="">select</option>
            </select>

          </div>
          <div class="dropdown-menu-sy">
            <label for="">SchoolYear: </label>
            <select name="strand" id="">
              <option value="">select</option>
            </select>
          </div>

        </div>
        <div style="color: white; " class="student-table">
          <h3>Students</h3>
          <div style="display: flex; justify-content: center">
            <table border>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Student No.</th>
                <th>Options</th>
              </tr>
              <tr >
                
                <td>1</td>
                <td>Garcia, Miguel John DC</td>
                <td>2023-2848-ICP</td>
                <td><a href="Edit">Edit</a> | <a href="delete">delete</a></td>
              </tr>
            </table>
          </div>

        </div>
      </div>
    </div>


  </div>

  </div>

</body>

</html>