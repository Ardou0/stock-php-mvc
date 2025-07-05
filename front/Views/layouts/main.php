<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $data["title"] . " | MVC Project" ?? 'MVC Project'; ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
        <!-- Common Header -->
    </header>

    <main>
        <?php require_once $content; ?>
    </main>

    <footer>
        <!-- Common Footer -->
    </footer>
</body>
</html>
