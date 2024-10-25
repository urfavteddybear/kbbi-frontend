<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Definition Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #212121; color: white; }
        .container { margin-top: 10%; }
        .card { background-color: #424242; }
    </style>
</head>
<body>
    <div class="container text-center">
        <?php if ($definition): ?>
            <div class="card p-4">
                <h1 class="card-title"><?= htmlspecialchars($definition['word']); ?></h1>
                <p class="card-text">
                    <?= nl2br(htmlspecialchars(strip_tags(html_entity_decode($definition['arti'])))); ?>
                </p>
            </div>
        <?php else: ?>
            <div class="alert alert-danger">
                <h2>Kata tidak ditemukan.</h2>
            </div>
        <?php endif; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
