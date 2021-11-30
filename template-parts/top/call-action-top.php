<?php 
  $callText = get_field( "_action_text", "options" );
  $linkInstagram = get_field( "_link_instagram", "options" );
?>

<div class="green_belt">
  <div class="container">
    <div class="row">
      <div class="col-10 align-self-center">
        <h2><?php echo $callText; ?></h2>
      </div>

      <div class="col-2 align-self-center">
        <div class="social_top">
          <a href="<?php echo $linkInstagram; ?>" target="_blank">
            <span><i class="fab fa-instagram"></i></span>
            <p>Confira o nosso <br><strong>instagram</strong></p>
          </a>
        </div>
      </div>
    </div>
  </div><!--container-->
</div><!--green_belt-->