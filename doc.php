<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Doc</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <!-- <link
      rel="stylesheet"
      href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.6.0/build/styles/default.min.css"
    /> -->
  <script src="main.js" defer></script>
  <link rel="stylesheet" href="assets/dracula.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
  <script src="scroll.js" type="module"></script>
  <script src="https://unpkg.com/scrollreveal"></script>

</head>

<body class="bg-light">

  <div class="scroll-tracker"></div>

  <nav class="navbar navbar-expand navbar-dark bg-light" aria-label="Second navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img width="105" height="34" class="d-inline-block align-text-top" src="logo.png">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav me-auto">
        </ul>
        <form role="search">
          <a type="button" href="auth/login.php" class="btn btn-dark">Login</a>
          <a type="button" href="auth/register.php" class="btn btn-dark">Register</a>
        </form>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 mt-5">
        <h2 class="display-1 mb-5 header">Hotwheels API Documentation</h2>
        <p class="text-danger">Oopps! you need to login to generate the key</p>
        <button class="btn btn-disabled btn-sm btn-animated" disabled>Generate API Key</button>
        <h3 class="text-primary mt-5 method">
          <small><em>Method</em></small>/GET
        </h3>
        <p class="mt-3 paragraph-animated">Get all data of <mark>hotwheels</mark> cars</p>
        <h4 class="text-secondary"><em>Request</em></h4>
        <p class="mt-3">
          URL : <mark class="url">GET : http://localhost/apiUAS/api/getAllData.php</mark>
        </p>
        <h4 class="text-tertiarry"><em>Response</em></h4>
        <p class="text-success">
          <strong>200</strong> <strong><em>Success</em></strong>
        </p>
        <div class="code-wrapper">
          <pre>
            <code id="code" >
                <!-- paste disini hasil response sukses -->
              {
                "status": {
                    "code": 200,
                    "description": "Request Valid"
                },
                "results": [
                    {
                        "id": "1",
                        "model_name": "1970 Pontiac Firebird",
                        "series_name": "HW Dream Garage - New for 2022",
                        "series_number": "1/5"
                    },
                  ]
              }
    
            </code>
          </pre>
        </div>

        <p class="text-danger mt-3">
          <strong>400</strong> <strong><em>Failed</em></strong>
        </p>

        <div class="code-wrapper">
          <pre>
            <code id="code" >
                 <!-- paste disini hasil response failed (invalid key) -->
              {
              "status": {
                  "code": 400,
                  "description": "API Key/Token Not Valid"
                }
              }

            </code>
          </pre>
        </div>

        <hr class="mt-5">

        <h3 class="text-primary mt-5">
          <small><em>Method</em></small>/GET
        </h3>
        <p class="mt-3">Get all data of hotwheels <mark>series</mark> cars</p>
        <h4 class="text-secondary"><em>Request</em></h4>
        <p class="mt-3">
          URL : <mark class="url">GET : http://localhost/apiUAS/api/getSeries.php?series=</mark>
        </p>
        <h4 class="text-tertiarry"><em>Response</em></h4>
        <p class="text-success">
          <strong>200</strong> <strong><em>Success</em></strong>
        </p>
        <div class="code-wrapper">
          <pre>
            <code id="code" >
                <!-- paste disini hasil response sukses -->
              {
                "status": {
                    "code": 200,
                    "description": "Request Valid"
                },
                "results": [
                    {
                        "id": "3",
                        "model_name": "Twinnin' 'n Winnin'",
                        "series_name": "Baja Blazers",
                        "series_number": "1/10"
                    },
                    {
                        "id": "4",
                        "model_name": "Twinnin' 'n Winnin' (2nd Color)",
                        "series_name": "Baja Blazers",
                        "series_number": "1/10"
                    },
                    ] 
              }
      
            </code>
          </pre>
        </div>
        <p class="text-danger mt-3">
          <strong>400</strong> <strong><em>Failed</em></strong>
        </p>

        <div class="code-wrapper">
          <pre>
            <code id="code" >
                 <!-- paste disini hasil response failed (invalid key) -->
            {
            "status": {
                "code": 400,
                "description": "API Key/Token Not Valid"
            }
          }
            </code>
          </pre>
        </div>
        <p class="text-danger mt-3">
          <strong>400</strong> <strong><em>Failed</em></strong>
        </p>
        <p style="font-size:14px">If the series currently not available</p>
        <div class="code-wrapper">
          <pre>
            <code id="code" >
                 <!-- paste disini hasil response failed (invalid key) -->
            {
                "status": {
                    "code": 400,
                    "description": "None"
                }
            }

            </code>
          </pre>
        </div>
        <hr class="mt-5">

        <h3 class="text-primary mt-5">
          <small><em>Method</em></small>/GET
        </h3>
        <p class="mt-3">Get data of hotwheels by <mark>id</mark></p>
        <h4 class="text-secondary"><em>Request</em></h4>
        <p class="mt-3">
          URL : <mark class="url">GET : http://localhost/apiUAS/api/getOneData.php?id=</mark>
        </p>
        <h4 class="text-tertiarry"><em>Response</em></h4>
        <p class="text-success">
          <strong>200</strong> <strong><em>Success</em></strong>
        </p>
        <div class="code-wrapper">
          <pre class="code-wrapper">
            <code id="code" >
                <!-- paste disini hasil response sukses -->
                    {
                          "status": {
                              "code": 200,
                              "description": "Request Valid"
                          },
                          "results": [
                              {
                                  "id": "10",
                                  "model_name": "'20 Jeep Gladiator (3rd Color)",
                                  "series_name": "Baja Blazers",
                                  "series_number": "4/10"
                              }
                          ]
                      }
    
            </code>
          </pre>
        </div>
        <p class="text-danger mt-3">
          <strong>400</strong> <strong><em>Failed</em></strong>
        </p>
        <div class="code-wrapper">
          <pre>
            <code id="code" >
                 <!-- paste disini hasil response failed (invalid key) -->
        {
        "status": {
            "code": 400,
            "description": "API Key/Token Not Valid"
        }
       }

            </code>
          </pre>
        </div>
        <p class="text-danger mt-3">
          <strong>400</strong> <strong><em>Failed</em></strong>
        </p>
        <p style="font-size:14px">If the ID currently not available</p>
        <div class="code-wrapper">
          <pre>
            <code id="code" >
                 <!-- paste disini hasil response failed (invalid key) -->
        {
          "status": {
             "code": 400,
              "description": "ID Not Valid"
            }
          }

            </code>
          </pre>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.6.0/build/highlight.min.js"></script>
  <script>
    hljs.initHighlightingOnLoad();
  </script>
  <script src="reveal.js"></script>
</body>

</html>