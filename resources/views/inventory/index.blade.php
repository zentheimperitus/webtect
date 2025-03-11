<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <title>Inventory Table</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Inventory System</a>
            <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/category"
                    >Categories</a
                >
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/inventory"
                    >Inventory</a
                >
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/login">Logout</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

    <div class="container">
      <br /><br /><br /><br />
      <div class="row justify-content-center">
        <!-- Adjust column widths for responsiveness -->
        <div class="col-12 ">
          <div class="card">
            <div class="card-body">
              <div
                class="d-flex justify-content-between align-items-center mb-3"
              >
                <h3 class="card-title">Inventory</h3>
                <button class="btn btn-success">Add Inventory</button>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Category</th>
                      <th scope="col">Item Name</th>
                      <th scope="col">Price</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ( $items as $item )

                    <tr>
                      
                      
                      <td>{{ $item-> category_id }}</td>
                      <td>{{ $item-> item_name}}</td>
                      <td>{{ $item-> price }}</td>
                      <td>
                        <button class="btn btn-info">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                      </td>
                      
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
