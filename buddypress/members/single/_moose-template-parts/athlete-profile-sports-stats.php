<?php 
$user_id = bp_displayed_user_id();
$sport = xprofile_get_field_data( 49, $user_id, $multi_format = 'array' );

 // SPORTS STATS

 // COMMON ONES
 $ncaa_id = xprofile_get_field_data( 131, $user_id, $multi_format = 'array' );
 $naia_id = xprofile_get_field_data( 132, $user_id, $multi_format = 'array' );
 $achievement_summary = xprofile_get_field_data( 133, $user_id, $multi_format = 'array' );
 $award_press = xprofile_get_field_data( 335, $user_id, $multi_format = 'array' );
 $reference = xprofile_get_field_data( 336, $user_id, $multi_format = 'array' );

// BASEBALL
$baseball_team_name = xprofile_get_field_data( 208, $user_id, $multi_format = 'array' );
$baseball_league_name = xprofile_get_field_data( 209, $user_id, $multi_format = 'array' );
$baseball_primary_position = xprofile_get_field_data( 210, $user_id, $multi_format = 'array' );
$baseball_secondary_position = xprofile_get_field_data( 211, $user_id, $multi_format = 'array' );

// BASKETBALL
$basketball_team_name = xprofile_get_field_data( 201, $user_id, $multi_format = 'array' );
$basketball_league_name = xprofile_get_field_data( 202, $user_id, $multi_format = 'array' );
$basketball_preferred_hand = xprofile_get_field_data( 203, $user_id, $multi_format = 'array' );
$basketball_primary_position = xprofile_get_field_data( 206, $user_id, $multi_format = 'array' );
$basketball_secondary_position = xprofile_get_field_data( 207, $user_id, $multi_format = 'array' );

// BOWLING
$bowling_team_name = xprofile_get_field_data( 194, $user_id, $multi_format = 'array' );
$bowling_league_name = xprofile_get_field_data( 195, $user_id, $multi_format = 'array' );
$bowling_preferred_hand = xprofile_get_field_data( 196, $user_id, $multi_format = 'array' );

// CHEERLEADING
$cheerleading_team_name = xprofile_get_field_data( 179, $user_id, $multi_format = 'array' );
$cheerleading_league_name = xprofile_get_field_data( 180, $user_id, $multi_format = 'array' );
$cheerleading_position = xprofile_get_field_data( 181, $user_id, $multi_format = 'array' );

// CROSS COUNTRY
$cross_country_team_name = xprofile_get_field_data( 189, $user_id, $multi_format = 'array' );


// CYCLING
$cycling_team_name = xprofile_get_field_data( 187, $user_id, $multi_format = 'array' );


// E-SPORTS 
$e_sports_league_name = xprofile_get_field_data( 317, $user_id, $multi_format = 'array' );
$e_sports_preferred_game = xprofile_get_field_data( 318, $user_id, $multi_format = 'array' );
$e_sports_global_rankings = xprofile_get_field_data( 319, $user_id, $multi_format = 'array' );
$e_sports_national_rankings = xprofile_get_field_data( 320, $user_id, $multi_format = 'array' );


// EQUESTRIAN
$equestrian_team_name = xprofile_get_field_data( 188, $user_id, $multi_format = 'array' );


// FENCING
$fencing_team_name = xprofile_get_field_data( 182, $user_id, $multi_format = 'array' );


// FIELD HOCKY
$field_hockey_team_name = xprofile_get_field_data( 185, $user_id, $multi_format = 'array' );


// GOLF
$golf_handicap = xprofile_get_field_data( 301, $user_id, $multi_format = 'array' );
$golf_wagr = xprofile_get_field_data( 302, $user_id, $multi_format = 'array' );
$golf_national_ranking = xprofile_get_field_data( 303, $user_id, $multi_format = 'array' );
$golf_lowest_competitive_round = xprofile_get_field_data( 304, $user_id, $multi_format = 'array' );
$golf_club_distances = xprofile_get_field_data( 305, $user_id, $multi_format = 'array' );
$golf_preferred_hand = xprofile_get_field_data( 306, $user_id, $multi_format = 'array' );


// GYMNASTICS 
$gymnastics_team_name = xprofile_get_field_data( 199, $user_id, $multi_format = 'array' );
$gymnastics_discipline = xprofile_get_field_data( 200, $user_id, $multi_format = 'array' );


// ICE HOCKEY
$ice_hockey_team_name = xprofile_get_field_data( 149, $user_id, $multi_format = 'array' );
$ice_hockey_league_name = xprofile_get_field_data( 150, $user_id, $multi_format = 'array' );
$ice_hockey_position = xprofile_get_field_data( 151, $user_id, $multi_format = 'array' );

// LACROSSE  
$lacrosse_team_name = xprofile_get_field_data( 143, $user_id, $multi_format = 'array' );
$lacrosse_league_name = xprofile_get_field_data( 144, $user_id, $multi_format = 'array' );
$lacrosse_position = xprofile_get_field_data( 145, $user_id, $multi_format = 'array' );

// RIFLE 
$rifle_team_name = xprofile_get_field_data( 183, $user_id, $multi_format = 'array' );


// ROWING 
$rowing_team_name = xprofile_get_field_data( 140, $user_id, $multi_format = 'array' );
$rowing_league_name = xprofile_get_field_data( 141, $user_id, $multi_format = 'array' );
$rowing_position = xprofile_get_field_data( 142, $user_id, $multi_format = 'array' );

// RUGBY 
$rugby_team_name = xprofile_get_field_data( 192, $user_id, $multi_format = 'array' );
$rugby_position = xprofile_get_field_data( 193, $user_id, $multi_format = 'array' );

// SAILING 
$sailing_team_name = xprofile_get_field_data( 184, $user_id, $multi_format = 'array' );


// SOCCER 
$soccer_team_name = xprofile_get_field_data( 137, $user_id, $multi_format = 'array' );
$soccer_league_name = xprofile_get_field_data( 138, $user_id, $multi_format = 'array' );
$soccer_position = xprofile_get_field_data( 139, $user_id, $multi_format = 'array' );

// SOFTBALL 
$softball_team_name = xprofile_get_field_data( 212, $user_id, $multi_format = 'array' );
$softball_league_name = xprofile_get_field_data( 213, $user_id, $multi_format = 'array' );
$softball_primary_position = xprofile_get_field_data( 214, $user_id, $multi_format = 'array' );
$softball_secondary_position = xprofile_get_field_data( 215, $user_id, $multi_format = 'array' );


// SWIMMING & DIVING  
$swimming_main_event_style = xprofile_get_field_data( 309, $user_id, $multi_format = 'array' );
$swimming_secondary_event_style = xprofile_get_field_data( 310, $user_id, $multi_format = 'array' );

// TENNIS 
$tennis_utr = xprofile_get_field_data( 311, $user_id, $multi_format = 'array' );
$tennis_itf = xprofile_get_field_data( 312, $user_id, $multi_format = 'array' );
$tennis_preferred_hand = xprofile_get_field_data( 313, $user_id, $multi_format = 'array' );
$tennis_national_ranking = xprofile_get_field_data( 316, $user_id, $multi_format = 'array' );


// TRACK & FILED 
$track_field_iaaf_ranking = xprofile_get_field_data( 321, $user_id, $multi_format = 'array' );
$track_field_national_ranking = xprofile_get_field_data( 322, $user_id, $multi_format = 'array' );
$track_field_discipline = xprofile_get_field_data( 323, $user_id, $multi_format = 'array' );


// US FOOTBALL 
$us_football_team_name = xprofile_get_field_data( 134, $user_id, $multi_format = 'array' );
$us_football_league_name = xprofile_get_field_data( 135, $user_id, $multi_format = 'array' );
$us_football_position = xprofile_get_field_data( 136, $user_id, $multi_format = 'array' );
$us_football_40_yard_dash = xprofile_get_field_data( 46, $user_id, $multi_format = 'array' );

// VOLLEYBALL 
$volleyball_team_name = xprofile_get_field_data( 146, $user_id, $multi_format = 'array' );
$volleyball_league_name = xprofile_get_field_data( 147, $user_id, $multi_format = 'array' );
$volleyball_position = xprofile_get_field_data( 148, $user_id, $multi_format = 'array' );


// WATER POLO 
$water_polo_team_name = xprofile_get_field_data( 190, $user_id, $multi_format = 'array' );
$water_polo_position = xprofile_get_field_data( 191, $user_id, $multi_format = 'array' );


// WRESTLING
$wrestling_team_name = xprofile_get_field_data( 186, $user_id, $multi_format = 'array' );
 

?>

<section id="sports-stats-section">

  <h1 class="block-header">
    <i class="fas fa-trophy"></i> Sports Stats
  </h1>
  <h5>Sports: <?php echo $sport; ?></h5>
  <div class="table-responsive">
    <table class="table">
      <tbody>
        <tr>
          <th scope="row">NCAA Clearinghouse ID #</th>
          <td>Mark</td>
        </tr>
        <tr>
          <th scope="row">NAIA Clearinghouse ID #</th>
          <td>Jacob</td>
        </tr>
        <tr>
          <th scope="row">Team Name:</th>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>
  <hr>
  <h4 class="sports-stats-title">
    Sport Achievement Summary
  </h4>

  <p class="text-content">
    <?php echo $achievement_summary; ?>
  </p>
  <hr>

  <h4 class="sports-stats-title">
    Awards & Press
  </h4>

  <p class="text-content">
    <?php echo $award_press; ?>
  </p>
  <hr>

  <h4 class="sports-stats-title">
    References
  </h4>

  <article class="text-content">
    <?php echo $reference; ?>
  </article>

</section>