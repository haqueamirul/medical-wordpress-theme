<?php
/**
 * The template for get in touch
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://soft-theme.com/medisoft/medisoft-2/
 *
 * @package medisoft-2
 */

?>

<section class="contact_section sec_padding">
  <div class="container">
    <div class="row">
      <div class="contact_header">
        <h2><?php echo cs_get_option('get_touch_title'); ?></h2>
        <p><?php echo cs_get_option('get_touch_content'); ?></p>
      </div><!-- /.contact_header -->
    </div><!-- /.row -->

    <div class="contact_form">
      <form>
        <div class="row">
          <div class="col-md-3 col-sm-6 contact_group">
            <input type="text" name="username" class="form-control" placeholder="name">
          </div>
          <div class="col-md-3 col-sm-6 contact_group">
            <input type="email" name="email" class="form-control" placeholder="email">
          </div>
          <div class="col-md-3 col-sm-6 contact_group">
            <input type="text" name="website" class="form-control" placeholder="website">
          </div>
          <div class="col-md-3 col-sm-6 contact_group">
            <button type="submit">send</button>
          </div>
          <div class="col-md-12 col-sm-12 contact_group">
            <textarea name="message" class="form-control" id="message" placeholder="message"></textarea>
          </div>
        </div><!-- /.row -->
      </form>
    </div><!-- /.conatct_form -->
  </div><!-- /.container -->
</section><!-- /.contact-section -->