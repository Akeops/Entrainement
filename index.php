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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya&family=Playfair+Display&display=swap" rel="stylesheet">
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
    <main>
        <section id="about">
            <div class="container">
                <img src="https://picsum.photos/506/253" alt="a_propos" class="about_image">
                <div class="about_text">
                    <h1>Titre 1</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at turpis ut velit faucibus blandit. Phasellus sed dignissim sapien. Nam id ligula mollis, ultrices dolor a, aliquet ipsum. Fusce vitae sem tincidunt, egestas justo vel, mattis elit. Vestibulum feugiat at diam quis imperdiet. Aenean risus quam, lacinia ut hendrerit vitae, efficitur id nisl. Duis semper molestie condimentum. In at erat felis.</p>
                </div>
            </div>
        </section>
        <section id="last-articles">
            <div class="container">
                <h2>Les derniers articles</h2>
                <div class="cards">

                <?php foreach ($articles as $article) { ?>

                    <article>
                        <img src="<?= $article['image'] ?>" ?>
                        <div>
                            <h3><?= $article["title"] ?></h3>
                            <p><?= $article["content"] ?></p>
                        </div>
                    </article>

                    <?php } ?>

                </div>
            </div>
            
        </section>
    </main>
        

    
</body>
</html>