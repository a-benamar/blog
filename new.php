
<?php  session_start();?>
<?php  include_once("header.php"); ?>

<?php if( isset( $_SESSION["message"] )):?>

<p class="alert alert-danger">

      <?= $_SESSION["message"]; ?>

</p>

<?php endif;

   // destruction de la session.
   session_unset();
   session_destroy();
?>





<div class="container mt-4">
   <div class="row">
       <div class="col">
           <h1>Insérer un nouvel article</h1>
           <hr>
           <form method="post" action="enregistrement.php">

              <p> 

                 <label for="contenu" class="form-label">Titre de l'article</label>
                <input type="text" name="titre" class="form-control border-3 border-primary" placeholder="Insérez un titre">

            </p>
         
            <p>  
                     <label for="contenu" class="form-label">Contenu de l'article</label>
                     <textarea name="contenu" rows="8" class="form-control border-3 border-primary" placeholder="Insérez un article"></textarea>

            </p>


             <p> 
             <a href="enregistrement.php"><input type="submit" value="Enregister mon article" class="mt-4 btn btn-success"></a>

              

             </p>




           </form>
       </div>
   </div>
</div>



<?php include_once("footer.php");  ?>