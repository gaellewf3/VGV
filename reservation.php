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
        <input type="text" name="nom" class="field-divided" placeholder="Nom" value="<?php echo $_POST['nom'] ?? ''; ?>" required /> 
        <input type="text" name="prenom" class="field-divided" placeholder="Prenom" value="<?php echo $_POST['prenom'] ?? ''; ?>" required/>
              
        <input type="email" name="email" class="field-divided" placeholder="Email" value="<?php echo $_POST['email'] ?? ''; ?>" required/>
        <input type="tel" name="tel" class="field-divided" placeholder="Telephone" value="<?php echo $_POST['tel'] ?? ''; ?>" required/>
    
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
            <!-- https://www.webtolosa.com/2005/10/15/menu-deroulant-des-239-pays-du-monde/ -->
       </select>
       
        <input id="dateDep" class="field-divided" type="date" 
           onChange="dateDepartCallBack(event)" required>  
        <label for="dateDep" >Votre date de départ</label> 
      
        <input id="dateRet" class="field-divided"  type="date"
            onChange="dateRetourCallBack(event)"/> 
        <label for="dateRet"  >Votre date de retour</label>
      
      <textarea name="message" id="message" class="field-long field-textarea" placeholder="Projet de séjour" required><?php echo $_POST['message'] ?? ''; ?></textarea>
      <input type="checkbox" id="field5" class="field5"> J’accepte d’être recontacté.e par Vert-Galant Voyages et ses partenaires.  
      <input id="envoyerForm" type="submit" value="envoyer" disabled/>
   
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
            <input type="text" name="nom" class="field-divided" placeholder="Nom" value="<?php echo $_POST['nom'] ?? ''; ?>" required /> 
            <input type="text" name="prenom" class="field-divided" placeholder="Prenom" value="<?php echo $_POST['prenom'] ?? ''; ?>" required/>
            
            <input type="email" name="email" class="field-divided" placeholder="Email" value="<?php echo $_POST['email'] ?? ''; ?>" required/>
            <input type="tel" name="tel" class="field-divided" placeholder="Telephone" value="<?php echo $_POST['tel'] ?? ''; ?>" required/>

           <textarea name="message" id="message" class="field-long field-textarea" placeholder="Votre message" required><?php echo $_POST['message'] ?? ''; ?></textarea>
         
            <input type="checkbox" id="field5" name="field5"> J’accepte d’être recontacté.e par Vert-Galant Voyages et ses partenaires. 

            <input id="envoyerForm" type="submit" value="envoyer" disabled/>

   </form>         
</div>
</div>
            
            
       

</section>

  <?php require_once "inc/footer.inc.php";?>

  <script type="text/javascript" src="script.js"></script>


</body>

</html>



















