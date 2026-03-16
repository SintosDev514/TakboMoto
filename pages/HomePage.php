<?php
session_start();

// Redirect to login if user is not logged in
if (!isset($_SESSION["user_id"])) {
  header("Location: ../login.html");
  exit();
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../style2.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <title>Home Page</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg custom-navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">TakboMoto</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
        >
          <span class="navbar-toggler-icon navbaricon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
              >
                Dropdown
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>

          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
            />
            <button class="btn btn-outline-success btn-search">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <section>
      <div class="container text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
          <div class="col">
            <p>Ninja 2021</p>
            <img src="../images/products/a1.png" />
            <button class="viewmore">View more!</button>
          </div>

          <div class="col">
            <p>Ninja 2021</p>
            <img src="../images/products/a2.png" />
            <button class="viewmore">View more!</button>
          </div>

          <div class="col">
            <p>Ninja 2021</p>
            <img src="../images/products/a3.png" />
            <button class="viewmore">View more!</button>
          </div>

          <div class="col">
            <p>Ninja 2021</p>
            <img src="../images/products/a4.png" />
            <button class="viewmore">View more!</button>
          </div>

          <div class="col">
            <p>Ninja 2021</p>
            <img src="../images/products/a5.png" />
            <button class="viewmore">View more!</button>
          </div>

          <div class="col">
            <p>Ninja 2021</p>
            <img src="../images/products/a1.png" />
            <button class="viewmore">View more!</button>
          </div>

          <div class="col">
            <p>Ninja 2021</p>
            <img src="../images/products/a2.png" />
            <button class="viewmore">View more!</button>
          </div>

          <div class="col">
            <p>Ninja 2021</p>
            <img src="../images/products/a3.png" />
            <button class="viewmore">View more!</button>
          </div>

          <div class="col">
            <p>Ninja 2021</p>
            <img src="../images/products/a4.png" />
            <button class="viewmore">View more!</button>
          </div>

          <div class="col">
            <p>Ninja 2021</p>
            <img src="../images/products/a5.png" />
            <button class="viewmore">View more!</button>
          </div>

          <div class="col">
            <p>Ninja 2021</p>
            <img src="../images/products/a1.png" />
            <button class="viewmore">View more!</button>
          </div>

          <div class="col">
            <p>Ninja 2021</p>
            <img src="../images/products/a2.png" />
            <button class="viewmore">View more!</button>
          </div>

          <div class="col">
            <p>Ninja 2021</p>
            <img src="../images/products/a3.png" />
            <button class="viewmore">View more!</button>
          </div>

          <div class="col">
            <p>Ninja 2021</p>
            <img src="../images/products/a4.png" />
            <button class="viewmore">View more!</button>
          </div>

          <div class="col">
            <p>Ninja 2021</p>
            <img src="../images/products/a5.png" />
            <button class="viewmore">View more!</button>
          </div>

          <div class="col">
            <p>Ninja 2021</p>
            <img src="../images/products/a4.png" />
            <button class="viewmore">View more!</button>
          </div>
        </div>
      </div>
    </section>

    <script src="../navscript.js"></script>
    <script src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
