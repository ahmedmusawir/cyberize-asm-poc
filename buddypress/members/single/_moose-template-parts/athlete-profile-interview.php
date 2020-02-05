<?php 
$user_id = bp_displayed_user_id();

// INTERVIEW 
$interview = xprofile_get_field_data( 27, $user_id, $multi_format = 'array' );
?>

<section id="interview-section">

  <h1 class="block-header">
    <i class="fad fa-comments"></i> Interviews
  </h1>

  <p class="text-content">
    <?php echo $interview; ?>
  </p>

</section>