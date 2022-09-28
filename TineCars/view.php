<?php 
    $title = 'View Record';

    require_once 'includes/header.php';
    require_once 'db/connexion.php';

    // Get all attendes
    ?>
    <div class="card" style="width: 18rem;">
       <div class="card-body">
        <h5 class="card-title">
            <?php echo $__POST['firstname'] . '' . $_POST['lastname']; ?>

        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $_POST['specialty']; ?>
             
        </h6>
        
        <p class="card-text">
            date d'inscription:<?php echo $_POST['date']; ?>
         </p>
         <p class="card-text">
            date de modification:<?php echo $_POST['date']; ?>
         </p>
         <p class="card-text">
            type de fichier:<?php echo $_POST['text']; ?>
         </p>
         <p class="card-text">
            Email Address:<?php echo $_POST['email']; ?>
         </p>
         <p class="card-text">
            numéro de contact:<?php echo $_POST['phone']; ?>
         </p>
  </div>