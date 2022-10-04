<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tiny.cloud/1/m3wr5i4ctl7yuevq4aveu9ablgi8jynf2mqp90aweythp7aw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="show" enctype="multipart/form-data"> Back</a>
            </div>
        </div>
    </div>

    <form action="{{url('update/{id}')}}" method="POST">
        @csrf

        <input hidden name="id" value="{{$data->id}}">

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Subject:</strong>
                    <input type="text" name="subject" class="form-control" value={{$data->subject}}>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">
                    <strong>Topic:</strong>
                    <input type="text" name="topic" class="form-control" value="{{$data->topic}}">

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Notes:</strong>
                     <input type="text" name="notes" id="edit_notes" class="form-control" value="{{$data->notes}}">

                </div>
            </div>
              <button type="submit" class="btn btn-primary ml-3">Submit</button>

        </div>

    </form>
    <script>
        tinymce.init({selector:'#edit_notes'})
    </script>
</div>

</body>
</html>
