<li <?php bp_member_class( array( 'item-entry', 'bboss_search_item' ) ); ?>
  data-bp-item-id="<?php bp_member_user_id(); ?>" data-bp-item-component="members">
  <div class="list-wrap row">
    <div class="col-md-5">

      <div class="item-avatar">
        <a href="<?php bp_member_permalink(); ?>"><?php bp_member_avatar( bp_nouveau_avatar_args() ); ?></a>
      </div>
    </div>
    <div class="col-md-7">

      <div class="item">

        <div class="item-block">

          <h2 class="list-title member-name">
            <a href="<?php bp_member_permalink(); ?>"><?php bp_member_name(); ?></a>
          </h2>

          <?php if ( bp_nouveau_member_has_meta() ) : ?>
          <p class="item-meta last-activity">
            <?php bp_nouveau_member_meta(); ?>
          </p><!-- #item-meta -->
          <?php endif; ?>
        </div>

      </div> <!-- item-block row end -->

    </div><!-- // .item -->

  </div>
</li>