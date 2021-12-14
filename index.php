<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cut your link</title>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1 class="mt-5">Cut your link</h1>
        </div>
        <form method="get">
            <div class="mb-3">
                <label for="inputLink" class="form-label">Link</label>
                <input type="text" class="form-control" id="inputLink" placeholder="Input your link">
            </div>
            <button type="submit" class="btn btn-primary">Cut link</button>
        </form>
    </div>
    <div class="container mt-5">
        <h3 class="mb-3">Previously generated links</h3>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">New link</th>
                <th scope="col">Old link</th>
                <th scope="col">Generating date</th>
            </tr>
            </thead>
            <tbody>
            <tr>

            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>