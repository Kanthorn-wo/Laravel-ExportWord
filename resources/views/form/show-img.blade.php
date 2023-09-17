<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    td {
      max-width: 100px;
      /* Set the maximum width of td */
      white-space: nowrap;
      /* Prevent text from wrapping */
      overflow: hidden;
      /* Hide overflowing text */
      text-overflow: ellipsis;
      /* Show ellipsis for overflow */
      transition: white-space 0.5s;
      /* Add a transition for smooth hover effect */
    }

    td:hover {
      white-space: normal;
      /* Allow text to wrap and show in full on hover */
      background-color: #f0f0f0;
      /* Background color on hover */
    }
  </style>
  <title>Hello, world!</title>
</head>
{{-- create data
User::factory()->count(50)->create(); --}}

<body>
  <div class="container">
    <div class="row">
      <div class='col'>
        <h1>Mutiple</h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">User ID</th>
              <th scope="col">Raw Path</th>
              <th scope="col">Image</th>


            </tr>
          </thead>
          @php
          $id = 1
          @endphp
          @foreach ($images as $row)
          <tbody>
            <tr>
              <th scope="row">{{ $id++ }}</th>
              <td>{{$row->user_id }}</td>
              <td>{{$row->path }}</td>

              <td>
                @foreach (json_decode($row->path) as $list)
                <embed src="{{ url($list) }}" style="width:100px; height:100px; display: inline-block;" frameborder="0"
                  loading="lazy">
                @endforeach
              </td>



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