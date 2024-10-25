<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBBI Query</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #212121; color: white; }
        .search-container { max-width: 500px; margin: 0 auto; margin-top: 20%; }
        .form-control { background-color: #424242; border: none; color: white; }
        .form-control::placeholder { color: #bdbdbd; } /* Placeholder color */
        .form-control:focus { background-color: #424242; border-color: #76ff03; box-shadow: none; color: white; }
        .btn-send { background: none; border: none; color: #76ff03; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container search-container text-center">
        <h1 class="mb-4">Kata apa yang ingin kamu cari?</h1>
        <form action="index.php?action=showDefinition" method="GET">
            <input type="hidden" name="action" value="showDefinition">
            <div class="input-group">
                <input type="text" name="word" class="form-control" placeholder="Cari kata..." required>
                <div class="input-group-append">
                    <button type="submit" class="btn-send">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
