<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>
{{-- create data
User::factory()->count(50)->create(); --}}

<body>
  <div class="container">
    <div class="row">
      <div class='col'>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Student ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          @php
          $id = 1
          @endphp
          @foreach ($user as $item)
          <tbody>
            <tr>
              <th scope="row">{{ $id++ }}</th>
              <td>{{ $item->student_id }}</td>
              <td>{{ $item->fname }}</td>
              <td>{{ $item->email }}</td>
              <td>
                <a href="{{ url('/user'.$item->id) }}" class="btn btn-warning">
                  View
                </a>
              </td>
              <td>
                <a href="{{ url('/form'.$item->id) }}" class="btn btn-primary">
                  กยศ.
                </a>
              </td>
              <td>
                <a href="{{ url('/coop'.$item->id) }}" class="btn btn-success">
                  Coop
                </a>
              </td>

              <td>
                <a href="{{ url('/form/upload'.$item->id) }}" class="btn btn-secondary">
                  Upload File
                </a>
              </td>
            </tr>
          </tbody>
          @endforeach

        </table>
      </div>
    </div>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>

</body>

</html>