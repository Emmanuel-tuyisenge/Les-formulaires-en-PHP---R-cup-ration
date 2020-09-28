
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form  action="thanks.php"  method="post">
        <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_name">
        </div>
        <div>
        <label  for="prenom">Prénom :</label>
        <input  type="text"  id="nom"  name="user_lastname">
        </div>
        <div>
        <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        <div>
        <label  for="numero">Tél :</label>
        <input  type="number"  id="numero"  name="numero_telephone">
        </div>
        <select name="thematiques" id="questions">
                <option>Choisi une question...</option>
                <option>Lorem ipsum dolor sit amet,</option>
                <option>Ut enim ad minim veniam</option>
                <option>Excepteur sint occaecat cupidatat non proident</option>
                <option>Duis aute irure dolor</option>
            </select>
        <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div  class="button">
        <button  type="submit">Envoyer votre message</button>
        </div>
    </form>




</body>
</html>