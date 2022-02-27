<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>Nieuwe melding</h1>

        <form action="../backend/meldingenController.php" method="POST">
        
            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input" required>
            </div>
            <div class="form-group">
                    <label for="type_">Type</label>
                    <select name="type_" id="type">
                        <option >- kies een type -</option>
                        <option value="Achtbaan">Achtbaan</option>
                        <option value="Draaiende attractie">Draaiende attractie</option>
                        <option value="Kinderattractie">Kinderattractie</option>
                        <option value="Restourant, cafe, etc.">Restourant, cafe, etc.</option>
                        <option value="Parkshow">Parkshow</option>
                        <option value="Waterattractie">Waterattractie</option>
                        <option value="Overig">Overig</option>
                    </select>   
                <!-- hier komt een dropdown -->
            </div>
            <div class="form-group">
                <label for="capaciteit">Capaciteit p/uur:</label>
                <input type="number" min="0" name="capaciteit" id="capaciteit" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="melder">Naam melder:</label>
                <input type="text" name="melder" id="melder" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="overigemelder">Overige melding</label>
                <textarea name="overigemelder" id="overigemelder" class="form-input" cols="50" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="prioriteit">Prioriteit</label>
                    <select name="prioriteit" id="prioriteit">
                        <option>- kies een type -</option>
                        <option value="1">Ja</option>
                        <option value="0">Nee</option>
                    </select>
            </div>
            <input type="submit" value="Verstuur melding">
        </form>
    </div>  

</body>

</html>
