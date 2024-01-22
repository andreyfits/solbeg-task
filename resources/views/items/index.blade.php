<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of items with paging (with caching in Redis)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>List of items with paging (with caching in Redis)</h4>
                </div>
                <div class="card-footer">
                    @forelse($items as $item)
                        <ul class="list-unstyled">
                            <li>{{ $item->name }} - <a href="{{ $item->url }}">{{ $item->url }}</a></li>
                        </ul>
                    @empty
                        <p>No items available.</p>
                    @endforelse
                    <div class="col-md-12">
                        {{ $items->links('pagination.bootstrap5')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
