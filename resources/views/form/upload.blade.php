<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Upload</title>
</head>

<body>
  <div class="container">

    <div class="row" style="border: 1px solid black; margin: 20px 0 20px 0">
      <div class='col'>
        <div>
          <div>
            <a href="/form/show-img" class="btn btn-info w-100 mt-3 mb-3" type="button">Go to Show Image All</a>
          </div>
        </div>
        <form action="{{ route('form.upload.file',['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="input-group control-group increment">
            <input type="file" name="images[]" class="form-control">
            <div class="input-group-btn">
              <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
            </div>
          </div>
          <div class="clone hide">
            <div class="control-group input-group" style="margin-top:10px">
              <input type="file" name="images[]" class="form-control">
              <div class="input-group-btn">
                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" style="margin-top:10px">Upload</button>
        </form>

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

  <script>
    $(document).ready(function() {
    // Store the original HTML template for cloning
    const originalHtml = $(".clone").html();
    const container = $(".increment");

    $(".btn-success").click(function() {
        // Create a new element based on the original HTML template
        const newElement = $(originalHtml);
        container.append(newElement);
    });

    $("body").on("click", ".btn-danger", function() {
        $(this).closest(".control-group").remove();
    });

    function readURL(input, imgId) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function(e) {
                $(`#${imgId}`).attr("src", e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("input[name='images[]']").change(function() {
        let imgId = `preview${$(this).index("input[name='images[]']")}`;
        readURL(this, imgId);
    });
});

  </script>

</body>

</html>