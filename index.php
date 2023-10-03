<?php 
include_once("fonction.php"); 
$articles = getArticles();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les articles</title>
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <header>
        <nav class="container">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
        <div class="container">
            <img src="https://picsum.photos/506/253" alt="a_propos" class="about_image">
            <div class="about_text">
                <h1>Titre 1</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at turpis ut velit faucibus blandit. Phasellus sed dignissim sapien. Nam id ligula mollis, ultrices dolor a, aliquet ipsum. Fusce vitae sem tincidunt, egestas justo vel, mattis elit. Vestibulum feugiat at diam quis imperdiet. Aenean risus quam, lacinia ut hendrerit vitae, efficitur id nisl. Duis semper molestie condimentum. In at erat felis.</p>
            </div>
        </div>
    <main>
        <section id="last-articles">
            <?php foreach ($articles as $article) { ?>
            <div class="container">
                <img src="<?= $article['image'] ?>" ?>
                <div>
                    <?= $article["title"] ?>
                    <?= $article["content"] ?>
                </div>

            </div>
            <?php } ?>
        </section>
    </main>
        

    
</body>
</html>