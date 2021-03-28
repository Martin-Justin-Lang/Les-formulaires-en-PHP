<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Formulaire en PHP</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form  action="http://localhost:8000/thanks.php" method="post">
        <div>
          <label  for="nom">Nom :</label>
          <input 	Required type="text"  id="nom"  name="user_name">
        </div>

        <div>
          <label  for="courriel">Courriel :</label>
            <input 	Required type="email"  id="courriel"  name="user_email">
        </div>

        <div>
          <label  for="telephone">Telephone :</label>
          <input 	Required type="telephone"  id="telephone"name="user_telephone"></input>
        </div>
        
        <div>
        <label  for="Sujet">Sujet :</label>
        <select Required id="sujet" name="user_sujet">
            <option value="">--Choisi ton plat--</option>
            <option value="Pizza">Pizza</option>
            <option value="Kebab">Kebab</option>
            <option value="Tacos">Tacos</option>
            <option value="Burger">Burger</option>
            <option value="Coucous">Couscous</option>
            <option value="Paëla">Paëla</option>
         </select>
       </div>


        <div>
          <label  for="message">Message :</label>
          <textarea	Required id="message"  name="user_message"></textarea>
        </div>

        <div  class="button">
          <button type="submit">Envoyer votre message</button>
        </div>
      </form>
  </body>
  <?php include'form.php'; ?>
</html>