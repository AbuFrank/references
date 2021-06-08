<?php 
/**
 * Plugin Name: OG Plugins Countdown timer
 */

 // createse a [og_countdown] shortcode
function og_countdown_timer( $atts = [] ) {

  $ogpct_atts = shortcode_atts(
    array(
        'm' => 'Jan',
        'd' => '01',
        'y' => '0',
        'h' => '0',
        'min' => '0',
        'sec' => '0',
    ), $atts
  );

  // begin text stream
  ob_start();
  ?>
    <script>
    
    var yearInput = "<?php echo esc_js( $ogpct_atts['y'] ); ?>";
    var monthInput = "<?php echo esc_js( $ogpct_atts['m'] ); ?>";
    var dayInput = "<?php echo esc_js( $ogpct_atts['d'] ); ?>";
    var hourInput = "<?php echo esc_js( $ogpct_atts['h'] ); ?>";
    var minInput = "<?php echo esc_js( $ogpct_atts['min'] ); ?>";
    var secInput = "<?php echo esc_js( $ogpct_atts['sec'] ); ?>";
    console.log(yearInput, monthInput, dayInput, hourInput, minInput, secInput);
    // Set the date we're counting down to
    var countDownDate = new Date(`${monthInput} ${dayInput}, ${yearInput} ${hourInput}:${minInput}:${secInput}`).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      const now = new Date().getTime();

      // Find the distance between now and the count down date
      const distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
      document.getElementById("demo").innerText = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerText = "EXPIRED";
      }
    }, 1000);
    </script>
    <?php
    $script = ob_get_contents();
    ob_end_clean();

    $markup = '<!-- Display the countdown timer in an element -->
    <p id="demo"></p>';

    $output = $markup . $script;

    return $output;
}
add_shortcode( 'og_countdown', 'og_countdown_timer' );
