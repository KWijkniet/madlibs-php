<!doctype html>

<html>
	<head>
		<title>Mad Libs</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="FormSwitch.js"></script>
	</head>

	<body>
        <h1 id="title">Mad Libs</h1>
        <form action="result.php" method="post" id="paniek">
            <ul id="tabs">
                <li><a href="#" class="selected">Er heerst paniek...</a></li>
                <li><a href="#" onclick="switchForm(paniek, onkunde)">Onkunde</a></li>
            </ul>
            <div class="formDiv">
                <div id="left">
                    <label>Welk dier zou jij nooit als huisdier willen hebben?</label>
                    <label>Wie is de belangrijkste persoon in je leven?</label>
                    <label>In welk land zou je graag willen wonen?</label>
                    <label>Wat doe je als je je verveeld?</label>
                    <label>Met welk speelgoed speelde je als kind het meest?</label>
                    <label>Bij welke docent spijbel je het liefts?</label>
                    <label>Als je €100.000,- had, wat zou je dan kopen?</label>
                    <label>Wat is je favoriete bezigheid?</label>
                </div>
                <div id="right">
                    <input placeholder="dier" name="one"></input>
                    <input placeholder="naam" name="two"></input>
                    <input placeholder="land" name="three"></input>
                    <input placeholder="activiteit" name="four"></input>
                    <input placeholder="speelgoed" name="five"></input>
                    <input placeholder="docent" name="six"></input>
                    <input placeholder="product" name="seven"></input>
                    <input placeholder="bezigheid" name="eight"></input>
                    <input style="display: none" name="type" value="paniek"></input>
                    <input id="submit" type="submit">
                </div>
            </div>
        </form>
        
        <form action="result.php" method="post" style="display: none;" id="onkunde">
            <ul id="tabs">
                <li><a href="#" onclick="switchForm(onkunde, paniek)">Er heerst paniek...</a></li>
                <li><a href="#" class="selected">Onkunde</a></li>
            </ul>
            <div class="formDiv">
                <div id="left">
                    <label>Wat zou je graag willen kunnen?</label>
                    <label>Met welk persoon kun je goed opschieten?</label>
                    <label>Wat is je favoriete getal?</label>
                    <label>Wat heb je altijd bij je als je op vakantie gaat?</label>
                    <label>Wat is je beste persoonlijke eigenschap?</label>
                    <label>Wat is je slechtste persoonlijke eigenschap?</label>
                    <label>Wat is het ergste dat je kan overkome?</label>
                </div>
                <div id="right">
                    <input placeholder="activiteit" name="one"></input>
                    <input placeholder="naam" name="two"></input>
                    <input placeholder="getal" name="three"></input>
                    <input placeholder="object" name="four"></input>
                    <input placeholder="eigenschap" name="five"></input>
                    <input placeholder="eigenschap" name="six"></input>
                    <input placeholder="activiteit" name="seven"></input>
                    <input style="display: none" name="type" value="onkunde"></input>
                    <input id="submit" type="submit">
                </div>
            </div>
        </form>
	</body>
</html>