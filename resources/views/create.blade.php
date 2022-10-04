<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tiny.cloud/1/m3wr5i4ctl7yuevq4aveu9ablgi8jynf2mqp90aweythp7aw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif

<form action="create" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Subject:</strong>
                <input type="text" name="subject" class="form-control"/>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Topic:</strong>
                <input type="text" name="topic" class="form-control"/>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Notes:</strong>
                 <textarea id="ta" type="text" name="notes" class="form-control"></textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>

</form>
<script>
    tinymce.init({selector:'#ta'})
</script>

</body>
</html>
