<!doctype html>

<html>
	<head>
		<title>Mad Libs</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
        <h1 id="title">Mad Libs</h1>
        <form>
            <?php if($_POST["type"] == "paniek") : ?>
                <p>Er heerst paniek in het koninkrijk <?php echo $_POST["three"]; ?>. Koning <?php echo $_POST["six"]; ?> is ten einde raad en als koning<br><?php echo $_POST["six"]; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["second"]; ?>.</p>
                <p>"<?php echo $_POST["two"]; ?>! Het is een ramp Het is een schande!"</p>
                <p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
                <p>"Mijn <?php echo $_POST["one"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["five"] ;?> voor hem gekocht!"</p>
                <p>"Majesteit, uw <?php echo $_POST["one"]; ?> komt vast vanzelf weer terug?"</p>
                <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["eight"]; ?> leren?"</p>
                <p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["seven"]; ?> voor gebruiken."</p>
                <p>"<?php echo $_POST["two"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
                <p>"<?php echo $_POST["four"]; ?>, Sire".</p>
            <?php endif; ?>
            <?php if($_POST["type"] == "onkunde") : ?>
                <p>Er zijn veel mensen die niet kunnen <?php echo $_POST["one"]; ?>.</p>
                <p>Neem nou <?php echo $_POST["two"]; ?>.</p>
                <p>Zelfs met de hulp van een <?php echo $_POST["four"]; ?> of zelfs <?php echo $_POST["three"]; ?> kan <?php echo $_POST["two"]; ?> niet <?php echo $_POST["one"]; ?>.</p>
                <p>Dat heeft niet te maken met een gebrek aan <?php echo $_POST["five"]; ?>, maar met een teveel aan <?php echo $_POST["six"]; ?>.</p>
                <p>Te veel <?php echo $_POST["six"]; ?> leidt tot <?php echo $_POST["seven"]; ?> en dat is niet goed als je wilt <?php echo $_POST["one"]; ?>.</p>
                <p>Helaas voor <?php echo $_POST["two"]; ?>.</p>
            <?php endif; ?>
        </form>
	</body>
</html>