<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }
        .navbar {
            margin-bottom: 2rem;
        }
        .news-card {
            margin-bottom: 2rem;
        }
        .news-img {
            max-height: 250px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">News Portal</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            @foreach($news as $item)
                <div class="col-md-6">
                    <div class="card news-card">
                        <img src="{{ $item['image'] }}" class="card-img-top news-img" alt="News image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['title'] }}</h5>
                            <p class="card-text">{{ $item['summary'] }}</p>
                            <a href="{{ $item['url'] }}" class="btn btn-primary" target="_blank">Read More</a>
                        </div>
                        <div class="card-footer text-muted">
                            {{ $item['published_at'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>