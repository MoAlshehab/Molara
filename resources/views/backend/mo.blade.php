<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> </meta>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulier </title>
<link rel="stylesheet" type="text/css" href="formulier.css">
</head>
<!-- dit is de code van de een formulier-->
<body>
<form action="mailto: alshehabmohamed@gmail.com" method="post"> <br>
<label  class="tex" for="fname">Voornaam:</label><br>

<p> My name is {{$name}}    I am  {{$age}}     </p>
<input type="text" id="fname" name="fname" placeholder="Voornaam" value="Mo" maxlength="100" required>
<br><br><br>
<label class="tex" for="lname">Achternaam:</label><br>
<input type="text" class="inv"  id="lname" name="lname" placeholder="Achternaam" value=""  maxlength="100" required>
<br><br><br>
<label  class="tex" for="adress">Adres:</label><br>
<input type="text" class="inv"  id="adress" name="adress" placeholder="voeg je Adres" value="" maxlength="100" required>
<br><br><br>
<label  class="tex" for="postcode">Postcode:</label><br>
<input type="text" class="inv"  id="postcode" name="postcode" placeholder="voeg je postcode" value="" maxlength="6"required>
<br><br><br>
<label  class="tex" for="plaats">Woonplaats:</label><br>
<input type="text"  class="inv" id="plaats" name="lname" placeholder="Woonplaats" value="" required>
<br><br><br>
<label class="tex" for="geboortt">Geboortedatum: </label><br>
<input type="date" class="inv"  id="geboort" name="geboort" required>
<br><br>
<label class="tex" for="email">E-mail: </label><br>
<input type="email" class="inv"  id="email" name="email"  required>
<br><br><br>
<label for="geslacht" id="man"> Man</label>
<input type="radio" class="inv"  id="geslacht" name="geslacht" required><br>
<label for="geslacht"> Vrouw</label>
<input type="radio"  class="inv" id="geslacht" name="geslacht" required><br>
<label for="geslacht"> Anders</label>
<input type="radio" class="inv"  id="geslacht" name="geslacht" required><br>
<textarea name="message" rows="10" cols="25" maxlength="400"> wat zijn uw opmerking?</textarea> <br><br>
<input type="submit" value="verzenden"><br><br>
<input type="checkbox" id="mo" /> <label for="mo"> Inschrijven voor nieuwsbrief</label>
<br><br><br>
<!-- Ik gaaf ze een class want ik denk dat ik later verder mer deze code werken-->    
</form>
</body>
</html>