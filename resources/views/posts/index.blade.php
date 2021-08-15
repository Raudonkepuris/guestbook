<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Guestbook</title>

    <style>
        *{
            margin: 10px;
        }

    </style>

</head>
<body>
    <form class="input-group mb-3" action="/posts" method="POST">
        @csrf
        <input type="text" class="form-control" placeholder="Message" name="message" aria-describedby="button-addon2">
        <input class="btn btn-outline-secondary" type="submit" id="button-addon2" value="Post message">
    </form>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Message</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->created_at }}</th>
                    <td>{{ $post->message }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>