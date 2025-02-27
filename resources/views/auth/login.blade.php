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
    <title>Login Page</title>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <!-- Adjust column widths for responsiveness -->
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card mt-5">
            <div class="card-body">
              <h3 class="card-title text-center mb-4">Login</h3>
              <form method="POST" action="/login">
                @csrf()
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Email"
                  />
                </div>
                <div class="form-group mb-3">
                  <label for="exampleInputPassword1">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="exampleInputPassword1"
                    placeholder="Password"
                  />
                  <small id="emailHelp" class="form-text text-muted"
                    >We'll never share your credentials with anyone else.</small
                  >
                </div>

                <button
                  type="submit"
                  class="btn btn-primary w-50"
                  vertical-align:
                  middle;
                >
                  Submit
                </button>
              </form>
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
