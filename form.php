 <h1>
<?php 

?></h1> 
<form  action="/thanks.php"  method="post">
  <div>
      <label  for="firstName">Nom :</label>
      <input  type="text"  id="firstName"  name="firstName">
    </div> 
    <div>
      <label  for="lastName">prénom :</label>
      <input  type="text"  id="lastName"  name="lastName">
    </div> 
    <div>
      <label for="callNumber">phone:</label>
      <input type="phone" name="callNumber" id="callNumber">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="courriel">
    </div>
    <div>
      <label for="choiceObject"> Object:</label>
      <select name="choiceObject">
        <option value="best worker">best worker</option>
        <option value="recruited!">you recruited!</option>
        <option value="da best">da best</option>
      </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
