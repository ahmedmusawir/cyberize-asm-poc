<?php 
$user_id = bp_displayed_user_id();

 // SPORTS STATS
 $sports_info = xprofile_get_field_data( 20, $user_id, $multi_format = 'array' );
 
?>

<section id="sports-stats-section">

  <h1 class="block-header">
    <i class="fas fa-trophy"></i> Sports Stats
  </h1>

  <p class="text-content">
    <?php echo $sports_info; ?>
  </p>

</section>