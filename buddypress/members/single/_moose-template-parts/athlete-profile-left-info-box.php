<?php 
$user_id = bp_displayed_user_id();

  // FOLLOWING SET IS FOR THE LEFT ATHLETE COLUMN [MEMBER BIO FIELD GROUP]
  $gender = xprofile_get_field_data( 7, $user_id, $multi_format = 'array' );
  $dob = xprofile_get_field_data( 10, $user_id, $multi_format = 'array' );
  $nationality = xprofile_get_field_data( 11, $user_id, $multi_format = 'array' );
  $height = xprofile_get_field_data( 14, $user_id, $multi_format = 'array' );
  $weight = xprofile_get_field_data( 15, $user_id, $multi_format = 'array' );
  $sport = xprofile_get_field_data( 49, $user_id, $multi_format = 'array' );
  $enrollment_year = xprofile_get_field_data( 17, $user_id, $multi_format = 'array' ); 
 
?>

<section class="athlete-info-box">
  <div id="item-header-avatar">
    <!-- <a href="<?php bp_displayed_user_link(); ?>"> -->

    <div class="athlete-img-box text-center">

      <?php bp_displayed_user_avatar( 'type=full' ); ?>

    </div>
    <h1 class="athlete-title text-center">

      <?php echo bp_core_get_user_displayname( $user_id, true ); ?>

    </h1>
    <!-- </a> -->
  </div><!-- #item-header-avatar -->

  <section class="athlete-meta">

    <div class="athlete-meta-info clearfix px-1 py-3">
      <span class="eye float-left"><i class="fas fa-eye"></i> &nbsp;1,234 Views</span>
      <span class="star float-right"><i class="fas fa-star"></i> &nbsp;4.5</span>
    </div>

  </section>

  <section class="athlete-bio">
    <ul class="list-group">
      <li class="list-group-item">
        <span class="label float-left">GENDER</span>
        <span class="label float-right"><?php echo $gender; ?></span>
      </li>
      <li class="list-group-item">
        <span class="label float-left">DOB</span>
        <span class="label float-right"><?php echo $dob; ?></span>
      </li>
      <li class="list-group-item">
        <span class="label float-left">COUNTRY OF RESIDENCE</span>
        <span class="label float-right"><?php echo $nationality; ?></span>
      </li>
      <li class="list-group-item">
        <span class="label float-left">HEIGHT</span>
        <span class="label float-right"><?php echo $height; ?></span>
      </li>
      <li class="list-group-item">
        <span class="label float-left">WEIGHT</span>
        <span class="label float-right"><?php echo $weight; ?></span>
      </li>
    </ul>
    <div class="athlete-sports-info">
      <h1 class="float-left">
        <?php echo $sport; ?><br>
        <small class="float-left">SPORT</small>
      </h1>
      <h1 class="float-right">
        <?php echo $enrollment_year; ?><br>
        <small class="float-right">ENROLLMENT YEAR</small>
      </h1>
    </div>
  </section>

</section> <!-- athlete-info-box end -->