<?php get_header() ?>
    <section id="privacy">
      <div class="container">
        <?php foreach($posts as $post):?>
        <div class="row">
        <div class="col-md-3"></div>
          <div class="col-md-9">
            <h2 class="section-heading text-uppercase"><a href="<?= base_url('news/').$post->post_name?>"><?= $post->post_title?></a></h2>
            <div class="text-muted text-left"><p><?= substr(strip_tags($post->post_content), 0, 250);?>...</p></div>
          </div>
        </div>
      <?php endforeach;?>
      </div>
    </section>

<?php get_footer()?>