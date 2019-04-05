<?php
/*
	Template Name: HOME
*/
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <meta name="description" content="Your privacy is important to us. It is North Basin Coating Inc.'s policy to respect your privacy regarding any information">
  <meta name="author" content="">

  <title>Alpha</title>
  <!-- FONT PLAYFAIR -->
  <link href="/wp-content/themes/sage/fontuseplayfair/stylesheetplayfair.css" rel="stylesheet">
  <!-- FONT AVENIR -->
  <link href="/wp-content/themes/sage/fontuseavenir/stylesheetavenir.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/wp-content/themes/sage/css/styles_alpha.css" rel="stylesheet">
</head>

<body>
  <div class="sec0">
    <div class="s0">
      <?php the_field('hero_-_title'); ?>
    </div>
  </div>

<div class="sec1">
    <div class="s1">
      <p>
        <?php the_field('section_1_-_paragraph'); ?>
      </p>
    </div>
  <h2><?php the_field('section1_-_title'); ?></h2>
  <img src="<?php the_field('section_1_-_image'); ?>" class="s1-a_bg">
</div>

<div class="sec2">
  <div class="s2wrap">
    <div class="members">
      <h2><?php the_field('gallery_1_-_title'); ?></h2>
      <div class="mems">

        <?php
        // check if the repeater field has rows of data
        if( have_rows('g1', 7) ):

        // loop through the rows of data
        while ( have_rows('g1', 7) ) : the_row();

        // vars
        $url = get_sub_field('url', 7);
        $image = get_sub_field('image', 7);
        $name = get_sub_field('name', 7);
        $emailimg = get_sub_field('eimg', 7);
        $email = get_sub_field('email', 7);
        $modalplus = get_sub_field('modal_image', 7);
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        ?>

        <a href="<?php echo $url; ?>" data-toggle="modal" class="mbox">
          <div class="mbg" style="background-image: url(<?php echo $image; ?>);">
          </div>
          <h3><?php echo $name; ?></h3>
          <div class="emailwrap">
            <img src="<?php echo $emailimg; ?>">
            <p href="" ><?php echo $email; ?></p>
          </div>
          <img src="<?php echo $modalplus; ?>" class="xmod">
        </a>
        <?php endwhile; ?>
        <?php endif; ?>



      </div>
    </div>

  </div>
  <div class="s2wrap">
    <div class="members">
      <h2><?php the_field('gallery_2_-_title'); ?></h2>
      <div class="mems">

        <?php
        // check if the repeater field has rows of data
        if( have_rows('g2', 7) ):

        // loop through the rows of data
        while ( have_rows('g2', 7) ) : the_row();

        // vars
        $url = get_sub_field('url', 7);
        $image = get_sub_field('image', 7);
        $name = get_sub_field('name', 7);
        $emailimg = get_sub_field('eimg', 7);
        $email = get_sub_field('email', 7);
        $modalplus = get_sub_field('modal_image', 7);
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        ?>

        <a href="<?php echo $url; ?>" data-toggle="modal" class="mbox">
          <div class="mbg" style="background-image: url(<?php echo $image; ?>);">
          </div>
          <h3><?php echo $name; ?></h3>
          <div class="emailwrap">
            <img src="<?php echo $emailimg; ?>">
            <p href="" ><?php echo $email; ?></p>
          </div>
          <img src="<?php echo $modalplus; ?>" class="xmod">
        </a>
        <?php endwhile; ?>
        <?php endif; ?>



      </div>
    </div>
  </div>
</div>
</body>

<!-- MODALS BY BOX CLASS -->
<!-- MODAL #1 -->
      <?php
      // check if the repeater field has rows of data
      if( have_rows('g1m', 7) ):

      // loop through the rows of data
      while ( have_rows('g1m', 7) ) : the_row();

      // vars
      $url = get_sub_field('url', 7);
      $image = get_sub_field('image', 7);
      $name = get_sub_field('name', 7);
      $emaili = get_sub_field('ei', 7);
      $email = get_sub_field('email', 7);
      $modalminus = get_sub_field('image_-_minus', 7);
      $bio = get_sub_field('bio', 7);
      $size = 'full'; // (thumbnail, medium, large, full or custom size)
      ?>
<div class="modal fade" id="<?php echo $url; ?>" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <img src="<?php echo $modalminus; ?>" class="minus" data-dismiss="modal" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

        <div class="modw">
          <div class="mdh">
            <div class="mdh-l">
              <div class="mleft" style="background-image: url(<?php echo $image; ?>);">
              </div>
            </div>
            <div class="mdh-r">
              <div class="mright">
                <h2><?php echo $name; ?></h2>
                <div class="emailwrapp">
                  <img src="<?php echo $emaili; ?>">
                  <a href="mailto:<?php echo $email; ?>" target="_blank"><?php echo $email; ?></a>
                </div>
                <p>
                  <?php echo $bio; ?>
                </p>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

      <?php endwhile; ?>
      <?php endif; ?>
<!-- MODAL END -->

<!-- MODAL #2 -->
<!-- MODAL END -->

<!-- MODAL #3 -->
<!-- MODAL END -->

<!-- MODAL #4 -->
<?php
// check if the repeater field has rows of data
if( have_rows('g2m', 7) ):

// loop through the rows of data
while ( have_rows('g2m', 7) ) : the_row();

// vars
$url = get_sub_field('url', 7);
$image = get_sub_field('image', 7);
$name = get_sub_field('name', 7);
$emaili = get_sub_field('ei', 7);
$email = get_sub_field('email', 7);
$modalminus = get_sub_field('image_-_minus', 7);
$bio = get_sub_field('bio', 7);
$size = 'full'; // (thumbnail, medium, large, full or custom size)
?>
<div class="modal fade" id="<?php echo $url; ?>" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
  <img src="<?php echo $modalminus; ?>" class="minus" data-dismiss="modal" aria-hidden="true">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

  <div class="modw">
    <div class="mdh">
      <div class="mdh-l">
        <div class="mleft" style="background-image: url(<?php echo $image; ?>);">
        </div>
      </div>
      <div class="mdh-r">
        <div class="mright">
          <h2><?php echo $name; ?></h2>
          <div class="emailwrapp">
            <img src="<?php echo $emaili; ?>">
            <a href="" ><?php echo $email; ?></a>
          </div>
          <p>
            <?php echo $bio; ?>
          </p>

        </div>
      </div>
    </div>
  </div>

</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php endwhile; ?>
<?php endif; ?>
<!-- MODAL END -->

<!-- MODAL #5 -->
<!-- MODAL END -->

<!-- MODAL #6 -->
<!-- MODAL END -->




<!-- Jquery 2.1.3 -->
<script src="/wp-content/themes/sage/js/jquery2.1.3.min.js"></script>
<script>
(function($){

  $.modal = function (el, options) {
      this.options = options;
      this.$el = $(el);
      this.$target = $(el.hash || this.$el.attr('data-target'));
      this.$backdrop = $('.modal-backdrop');

      if (this.$target.length) {
        this.$el.data("modal", this);
        this.init();
      }
    };

  $.modal.prototype = {

    init: function() {
      var self = this,
          settings,
          backdrop = $('<div/>').addClass('modal-backdrop fade');

      if (!self.$backdrop.length) {
        self.$backdrop = backdrop.appendTo('body');
      }

      self.settings = settings = $.extend({}, self.defaults, self.options);

      self.$target.on('click', function(e) { self.hide(e) });
      self.$el.on('click', function(e) { self.show(e) });
    },

    toggle: function(e) {
      return (this.$target.hasClass('in')) ? this.hide(e) : this.show(e);
    },

    show: function(e) {
      e.preventDefault();
      e.stopPropagation();
      this.$target.addClass('in');
      this.$backdrop.addClass('in');
      $('body').addClass('modal-open');
    },

    hide: function(e) {
      e.preventDefault();
      e.stopPropagation();

      var className = e.target.className;

      if (className == 'modal-dialog' || className == 'close') {
        this.$target.removeClass('in');
        this.$backdrop.removeClass('in');
        $('body').removeClass('modal-open');
      }
    },

    defaults: {

    }

  };

  $.fn.modal = function(options) {
    return this.each(function() {
      new $.modal(this, options);
    });
  };

  // self-instantiate on elements with
  // data-toggle='popover'
  $(document).ready(function() {
    $('[data-toggle=modal]').modal();
  });
}(jQuery));
</script>
</html>
