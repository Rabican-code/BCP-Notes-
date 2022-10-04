
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Include the JS & CSS-->


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>B.C.P Notes</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">All Subjects</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll d-flex " style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link text-decoration-none" href="bom">BOM</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-decoration-none" href="accounts">Accounts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-decoration-none" href="economics">Economics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-decoration-none" href="statics">Statics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-decoration-none" href="english">English</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-decoration-none" href="computer">Computer</a>
              </li>
            </ul>
            <form class="form-inline d-flex " action="">
                <input class="form-control mx-2" id="search" name="search" type="search" placeholder="Search by Subject or Topic" aria-label="Search">
                <button class="btn btn-outline-success " id="search_button" type="submit">Search</button>
              </form>
          </div>
        </div>
      </nav>


        <div class="add">
        <button type="button" id="add" class=" btn btn-primary  "><a style="width:30px" href=create class="text-light text-decoration-none">Add a new record</a></button>
        </div>

    <div>
        {{session('msg')}}

            @foreach ($data as $show)

        <button type="button" class="btn btn-info mb-2" id="edit"><a class="text-light text-decoration-none" id="edit_link" href="edit/{{$show->id}}">Edit</a></button>
            <div class="subject">Subject: {{$show->subject}}</div>
            <div class="topic">Topic: {{$show->topic}}</div>
            <div class="notes">Notes: {!! $show->notes !!}</div>

            <hr>
            @endforeach

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
