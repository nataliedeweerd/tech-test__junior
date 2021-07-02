<?php include('inc/pokemon.php');  ?>

<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Pokemon</title>
	<meta name="description" content="Pokemon">
	<meta name="author" content="Natalie de Weerd">
	<meta name="viewport" content="width=device-width">

	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css?v=1.0">

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
	<script src="js/site.js"></script>

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>

<header></header>

<main>
    <?php foreach ($pokemon as $p): ?>
        <div class="pokemon">
            <h2><?php echo $p['name']; ?></h2>
        </div>
    <?php endforeach; ?>
</main>

<footer></footer>

</body>
</html>