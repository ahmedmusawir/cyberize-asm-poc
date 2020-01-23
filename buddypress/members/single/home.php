<?php
/**
 * BuddyPress - Members Home
 *
 * @since   1.0.0
 * @version 3.0.0
 */
?>
<!-- MOOSE BP TESTING START -->

<style>
.bp-home {
  /* border: 8px dotted blue; */
}

#item-body {
  /* border: 10px dotted red; */
}
</style>
<div class="bp-home">

  <!-- <h4><strong>home.php under members/ folder</strong></h4> -->

  <?php 
  // $user_id = get_current_user_id();
  $user_id = bp_displayed_user_id();
  // $field = 7;
  // $data = xprofile_get_field_data( $field, $user_id, $multi_format = 'array' );
  // Gender 7
  $gender = xprofile_get_field_data( 7, $user_id, $multi_format = 'array' );
  $dob = xprofile_get_field_data( 10, $user_id, $multi_format = 'array' );
  $nationality = xprofile_get_field_data( 11, $user_id, $multi_format = 'array' );
  $height = xprofile_get_field_data( 14, $user_id, $multi_format = 'array' );
  $weight = xprofile_get_field_data( 15, $user_id, $multi_format = 'array' );
  $sport = xprofile_get_field_data( 16, $user_id, $multi_format = 'array' );
  $enrollment_year = xprofile_get_field_data( 17, $user_id, $multi_format = 'array' );
  
  // echo "<h1>$user_id</h1>";
  // echo "<h1>Data: $data</h1>";

  // echo '<pre>';
  // print_r($data);
  // echo '</pre>';

  ?>

  <!-- MOOSE BP TESTING END -->

  <?php bp_nouveau_member_hook( 'before', 'home_content' ); ?>

  <div id="item-header" role="complementary" data-bp-item-id="<?php echo esc_attr( bp_displayed_user_id() ); ?>"
    data-bp-item-component="members" class="users-header single-headers">

    <?php //bp_nouveau_member_header_template_part(); ?>

  </div><!-- #item-header -->

  <div class="bp-wrap">
    <?php if ( ! bp_nouveau_is_object_nav_in_sidebar() ) : ?>

    <?php //bp_get_template_part( 'members/single/parts/item-nav' ); ?>

    <?php endif; ?>

    <div id="item-body" class="item-body row">

      <article class="left-col col-md-3">
        <div id="item-header-avatar">
          <a href="<?php bp_displayed_user_link(); ?>">

            <div class="athlete-img-box text-center">

              <?php bp_displayed_user_avatar( 'type=full' ); ?>

            </div>
            <h1 class="athlete-title text-center">

              <?php echo bp_core_get_user_displayname( $user_id, true ); ?>

            </h1>
          </a>
        </div><!-- #item-header-avatar -->
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
              <span class="label float-left">NATIONALITY</span>
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
      </article>
      <article class="left-col col-md-7">

        <?php bp_nouveau_member_template_part(); ?>

      </article>
      <article class="left-col col-md-2">
        <img src="/wp-content/uploads/2020/01/profile-sidebar.png" alt="">
      </article>


    </div><!-- #item-body -->
  </div><!-- // .bp-wrap -->

  <?php bp_nouveau_member_hook( 'after', 'home_content' ); ?>

  <!-- MOOSE BP TESTING START -->

</div> <!-- delete me (bp-moose) -->

<!-- MOOSE BP TESTING END -->