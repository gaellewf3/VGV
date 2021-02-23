<?php require_once "inc/header.inc.php"; ?>


<section id="accueil-offres">

             <div class="rect-blanc">
                <h1>Découvrez nos dernières offres </h1>
                </div> 

            
 <!--<div id="barre2">
          </div> -->                         
                <!--     
                     <div id="choixVoyage">

                              <div id="carre0"></div>
                                 <p>Toutes les offres</p>

                                 <div id="carre1"></div>
                                 <p>Last minute</p>

                                 <div id="carre2"></div>
                                 <p>Long Courrier</p>

                                 <div id="carre3"></div>
                                 <p>Moyen Courrier</p>

                                 <div id="carre4"></div>
                              <p>Croisière/Circuit</p>

                              <div id="carre5"></div>
                              <p>Divers</p>

                     </div> -->


                 


                <div id="choixVoyage">

                    <a href="#voyage" onclick="toggleVisibility('blocToutes');" class="btnVoyage" id="toutesButton">Toutes les offres</a>
                    <a href="#voyage" onclick="toggleVisibility('blocLast');" class="btnVoyage" id="lastButton">Last minute</a>
                    <a href="#voyage" onclick="toggleVisibility('blocLong');" class="btnVoyage" id="longButton">Long courrier</a>
                    <a href="#voyage" onclick="toggleVisibility('blocMoyen');" class="btnVoyage" id="moyenButton">Moyen courrier</a>
                    <a href="#voyage" onclick="toggleVisibility('blocCroisiereCircuit');" class="btnVoyage" id="ccButton">Croisières/Circuits</a>
                    <a href="#voyage" onclick="toggleVisibility('blocDivers');" class="btnVoyage" id="diversButton">Divers</a>
                   
                    </div>


        <div id="choixVoyage">
              <a href="#" onclick="showtab('lm');">Last minute</a>, 
             <a href="#" onclick="showtab('tab2');">Long courrier</a>,
            <a href="#" onclick="showtab('tab3');">Moyen courrier</a>,
            <a href="#" onclick="showtab('tab4');">Croisières/Circuits</a>,
            <a href="#" onclick="showtab('tab5');">Divers</a>
              
                  </div>

 
                  

</section>


<section id="dernieres-offres">


<div class="tab bgray" id="tab1">
Tab1
</div>
 
<div class="tab bgray" id="tab2" style="display: none;">
Tab2
</div>
 
<div class="tab bgray" id="tab3" style="display: none;">
Tab3
</div>
 
<div class="tab bgray" id="tab4" style="display: none;">
Tab4
</div>
 
<div class="tab bgray" id="tab5" style="display: none;">
Tab5
</div>
  

 
<!-- http://www.anyexample.com/webdev/javascript/javascript_getelementsbyclass_function.xml -->

<!----------------- Bloc Last Minute --------------->

 <!-- <div class="cartes"> -->
 
 <!-- <div id="blocLastResponsive">   -->
      
 <!-- <div class="lm">  -->

   <div class="carte lm">
 

             <div class="image-carte"> </div>
                      <div class="description">  
                          <h4>Last</h4>
                              <p>Passez 4 jours en Thalasso à Djerba </p>
                        
                              <a href="#" class="bouton_voir">Voir</a>


                                    <div class="prix">
                                          <p>399€</p>
                                      </div>
        
                                    </div>
                                </div>
                            </div>
                      </div>
<div class="carte">
            <div class="image-carte"> </div>
                      <div class="description">  
                               <h4>Last</h4>
                                  <p>Goutez à l’été indien au Québec </p>
                                  <a href="#" class="bouton_voir">Voir</a>

                                           <div class="prix">
                                      <p>399€</p>
                                  </div>
                               </div>
                            </div>
                      </div>
                                   

      <div class="carte">
           <div class="image-carte"> </div>
                         <div class="description">  
                                 <h4>Last</h4>
                                      <p>Lorem ipsum lorem ipsum </p>
                                       
                                      <a href="#" class="bouton_voir">Voir</a>

                                     <div class="prix">
                                          <p>399€</p>
                                     </div>
                          
                                   </div>
                               </div>
                            </div>
                        </div>
               </div>
 <!------------------------------bloc Long Courrier ------------------> 

 
<!-- <div class="cartes">  -->

   <!-- <div id="blocLongResponsive"> -->

     <div class="carte">
        <div class="image-carte"> </div>
                 <div class="description">  
                        <h4>Long</h4>
                           <p>Lorem ipsum lorem ipsum </p>
                
                           <a href="#" class="bouton_voir">Voir</a>


                            <div class="prix">
                                <p>399€</p>
                            </div>
   
                         </div>
                      </div>
                  </div>
          
   


    <div class="carte">
      <div class="image-carte">  </div>
               <div class="description">  
                         <h4>Long</h4>
                              <p>Goutez à l’été indien au Québec </p>
                              <a href="#" class="bouton_voir">Voir</a>

   
                                 <div class="prix">
                                      <p>399€</p>
                                 </div>
              
                           </div>
                     </div>
                  </div>
 
       <div class="carte">
         <div class="image-carte"> </div>
              <div class="description">  
                          <h4>Long</h4>
                              <p>Lorem ipsum lorem ipsum </p>
                              <a href="#" class="bouton_voir">Voir</a>

               
                                    <div class="prix">
                                       <p>399€</p>
                                    </div> 

                                 </div>
                               </div>                     
                            </div>                 
                          </div>                  
                          
                
                                
 <!------------------------------bloc Moyen Courrier ------------------> 



<!-- <div class="cartes"> -->

   <!-- <div id="blocMoyenResponsive">  -->
      <div class="carte">
            <div class="image-carte"> </div>
               <div class="description">  
                                 <h4>Moyen</h4>
                                    <p>Lorem ipsum lorem ipsum </p>
                        
                                    <a href="#" class="bouton_voir">Voir</a>


                                    <div class="prix">
                                       <p>399€</p>
                                    </div>
                                </div>
                              </div>
                           </div>

   <div class="carte">
      <div class="image-carte"> </div>
            <div class="description">  
                               <h4>Moyen</h4>
                                    <p>Lorem ipsum lorem ipsum</p>
                                       
                                    <a href="#" class="bouton_voir">Voir</a>


                                <div class="prix">
                                       <p>399€</p>
                                 </div>
                              </div>      
                            </div>
                        </div>

    <div class="carte">
       <div class="image-carte">  </div>
         <div class="description">  
                     <h4>Moyen</h4>
                           <p>Lorem ipsum lorem ipsum </p>
                                             
                           <a href="#" class="bouton_voir">Voir</a>

                           
                                  <div class="prix">
                                          <p>399€</p>
                                 </div>
                              
                              </div>
                           </div>
                        </div>
                     </div>           
                      

                   
                            
 <!------------------------------bloc Croisiere Circuit ------------------> 

   <!-- <div class="cartes"> -->

   <!-- <div id="blocCCResponsive"> -->

   <div class="carte">

      <div class="image-carte"> </div>

       <div class="description">  
                  <h4>Croisiere</h4>
                     <p>Lorem ipsum lorem ipsum </p>

                     <a href="#" class="bouton_voir">Voir</a>


                        <div class="prix">
                           <p>399€</p>
                        </div>
      
               </div>
            </div>
         </div>
               
   
   <div class="carte">
   
    <div class="image-carte"> </div>
   
    <div class="description">  
                    <h4>Croisiere</h4>
                       <p>Lorem ipsum lorem ipsum </p>
                           
                       <a href="#" class="bouton_voir">Voir</a>

   
                              <div class="prix">
                                     <p>399€</p>
                              </div>
              
                           </div>
                       </div>
                   </div>
                         

    <div class="carte">
               
       <div class="image-carte"> </div>
               
        <div class="description">  
                    <h4>Croisiere</h4>
                         <p>Lorem ipsum lorem ipsum </p>
                                       
                           <a href="#" class="bouton_voir">Voir</a>

               
                                     <div class="prix">
                                               <p>399€</p>
                                       </div>
                                          </div>
                                      </div>
                                  </div>
                             </div>
             

 <!------------------------------bloc Divers  -------------------------> 

<!-- <div class="cartes"> -->

<!-- <div id="blocDiversResponsive"> -->

   <div class="carte">

   <div class="image-carte"> </div>
        
        <div class="description">  
              <h4>Spa</h4>
                  <p>Lorem ipsum lorem ipsum </p>
                
                  <a href="#" class="bouton_voir">Voir</a>


                       <div class="prix">
                               <p>399€</p>
                       </div>
   
                  </div>
             </div>
        </div>
            

      <div class="carte">
   
       <div class="image-carte"> </div>
   
          <div class="description">  
              <h4>Spa</h4>
                   <p>Lorem ipsum lorem ipsum</p>
                           

                   <a href="#" class="bouton_voir">Voir</a>

                        
   
                          <div class="prix">
                                     <p>399€</p>
                            </div>
                      </div>
                   </div>
             </div>
                     


       <div class="carte">
               
       <div class="image-carte"> </div>
            
          <div class="description">  
                 <h4>Spa</h4>
                      <p>Lorem ipsum lorem ipsum </p>
                                       
                                <a href="#" class="bouton_voir">Voir</a>
                
                                <div class="prix" >
                                         <p>399€</p>
                                   </div>
                            </div>
                           </div>
                          </div>
                        </div>
                  </div>
             <div class="clear"></div>

</section>



    <?php require_once "inc/footer.inc.php";?>






    <script type="text/javascript" src="offres.js"></script>

</body>

</html>
















