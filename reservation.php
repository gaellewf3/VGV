<?php require_once "inc/header.inc.php"; ?>

    <section id="banniere-page-reservation">
            <div id="rectangle-demande-reservation">
            <h1> Demande de réservation </h1> 
            </div>
    </section>

         </form> 

    <section id="demande-formulaire">

     <h2> Une envie ? Une question ? Une réservation ? Ecrivez-nous ! </h2>

    <div id="form">
    <div class="form-style-1">
        <input type="text" id="nomResa" name="nom" class="field-divided" placeholder="Nom" minlength="2" required /> 
        <input type="text" id="prenomResa" name="prenom" class="field-divided" placeholder="Prenom" minlength="2" required/>
              
        <input type="email" id="emailResa" name="email2" class="field-divided" placeholder="Email" minlength="6"  required/>
        <input type="tel" id="telResa" name="tel" class="field-divided" placeholder="Telephone" minlength="10"  required/>
    
        <select name="type" class="field-divided">
            <option value="" disabled selected hidden>Type de voyage</option>
            <option value="last">Last minute </option>
            <option value="long">Long courrier </option>
            <option value="moyen">Moyen courrier </option>
            <option value="croisiere-circuit">Croisiere/Circuit </option>
            <option value="divers">Divers</option>
        </select>
       
      <select name="pays" class="field-divided" >
            <option value="" disabled selected hidden>Destination</option> 
            <option value="France"> France </option>
            <option value="Afghanistan">Afghanistan </option>
            <option value="Afrique_Centrale">Afrique_Centrale </option>

             

</select>       

        <label for="dateDep" >Votre date de départ</label> 
    
        <input id="dateDep" class="field-divided" type="date" 
           onChange="dateDepartCallBack(event)" required>  
           <br>

           <label for="dateRet">Votre date de retour</label> 

        <input id="dateRet" class="field-divided" type="date"
             /> 
      
      <textarea name="message" id="message" class="field-long field-textarea" placeholder="Projet de séjour" required></textarea>
      <input type="checkbox" id="field5Resa" class="field5" ><label for="field5Resa"> J’accepte d’être recontacté.e par Vert-Galant Voyages et ses partenaires.  
      <input id="envoyerFormResa2" type="submit" value="envoyer" disabled /> 
   
    </div>           
    </section>

    <section id="contact">

    <h3>Contactez-nous</h3>
    <div id="infos-pratique">
    <div class="content-info"> 
            <p> <span> VERT-GALANT VOYAGES </span> <br>
                    24, avenue Pasteur <br>
                    93290 Tremblay en France<br>
                    <span>01 49 63 08 71</span> 
                    <br><br>
                <strong> Horaire d'ouverture </strong>:<br>
                    Lundi : 14h00 - 19h00 <br>
                    Mardi à samedi : 09h30 - 13h00 et 14h00 - 19h00<br><br>
                <strong> vert-galant-voyages@orange.fr </strong>
            </p>

            <div id="facebook-et-map"> 
        <!-- icone facebook -->
            <a href="https://www.facebook.com/vertgalantvoyages" target="blank">
            <i class="fab fa-facebook"> </i></a> 
        <!-- carte leaflet    -->
            <div id="map"></div>
            </div>   
    </div>



<div id="bloc-form"> 

    <form id="formulaire">
         <div class="form-style-1">
            <input type="text" id="nom" name="nom" class="field-divided" placeholder="Nom" minlength="2" required /> 
            <input type="text" id="prenom" name="prenom" class="field-divided" placeholder="Prenom" minlength="2" required/>
            
            <input type="email" id="email2" name="email" class="field-divided" placeholder="Email" minlength="6" required/>
            <input type="tel" id="tel" name="tel" class="field-divided" placeholder="Telephone"  minlength="10" required/>

           <textarea name="message" id="message" class="field-long field-textarea" placeholder="Votre message" required></textarea>
         
           
            <input type="checkbox" id="field5Resa2" name="field5" ><label for="field5">  J’accepte d’être recontacté.e par Vert-Galant Voyages et ses partenaires. </label>

            <input id="envoyerForm2" type="submit" value="envoyer" disabled/>

   </form>         
</div>
</div>
            
            
       

</section>

  <?php require_once "inc/footer.inc.php";?>

  <script type="text/javascript" src="script/script-reservations.js"></script>


  <!-- <script type="text/javascript" src="script/script.js"></script> -->


</body>

</html>



















