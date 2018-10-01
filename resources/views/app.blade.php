
    <!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Local Network</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        {{-- File Upload --}}
        <div class="container text-center mt-5">

          <form class="" action="{{ route('store') }}" method="post" enctype="multipart/form-data">

            <h1>Upload File</h1>

            <input type="file" name="file" value="">

            {{ csrf_field() }}

            <button type="submit" name="button">Upload Image</button>

          </form>

        </div>
        {{-- File Upload End --}}

        {{-- Uploaded Files --}}
        <div class="container mt-5">
          <table class="table">
          <thead>
            <tr>
              <td>ID</td>
              <td>File Name:</td>
              <td>Created At:</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($files as $file)
              <tr>
                <th scope="row">1</th>
                <td><p>{{$file->filename}}</p></td>
                <td><p>{{$file->created_at}}</p></td>
                <td><a href="{{ asset("$file->filename")}}" class="btn btn-primary">Download</a></td>
              </tr>
            @endforeach
          </tbody>
          </table>

        </div>
        {{-- Uploaded Files End--}}


        <hr>


        {{-- Message Post --}}
        <div class="container">
          <h1 class="text-center">Messages</h1>
          <form class="" action="{{ route('message.store')}}" method="post">
             <div class="form-group">
                <label for="content">Post a message:</label>
                <textarea class="form-control" id="content" rows="3" name="content"></textarea>
                {{ csrf_field() }}
                <button class="btn btn-primary btn-lg m-4 float-right" type="submit" name="button">Post</button>
              </div>
          </form>
        </div>
        {{-- Message Post End--}}

        {{-- Messages List --}}
        <div class="container">
          <div class="container mt-5">
            <table class="table">
            <thead>
              <tr>
              </tr>
            </thead>
            <tbody>
              @foreach ($messages as $m)
                <tr>
                  <th scope="row">1</th>
                  <td><p>{{$m->content}}</p></td>
                  <td><p>{{$m->created_at}}</p></td>
                  <td><a href="{{ route('message.delete', ['id' => $m->id])}}" class="btn btn-danger btn-xs float-right">X</a></td>
                </tr>
              @endforeach
            </tbody>
            </table>
        </div>
        {{-- Messages List End--}}



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    </body>
    </html>
