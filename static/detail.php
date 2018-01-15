<?php get_header() ?>
    <section id="privacy">
      <div class="container">
        <div class="row">
        <div class="col-md-3"></div>
          <div class="col-md-9">
            <h2 class="section-heading text-uppercase"><?= $query->post_title?></h2>
            <h3 class="text-muted"><?= date("d/m/Y", strtotime($query->post_date));?></h3>
            <p class="text-muted text-left"><?= $query->post_content?></p>
          </div>
        </div>
      </div>
    </section>

<?php get_footer()?>