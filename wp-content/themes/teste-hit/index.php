<?php get_header(); ?>
<div class="container">
</div>
<div class="section light-bg">
        <div class="container">
            <div class="section-title">
             <img src="<?php bloginfo('template_url'); ?>/img/logo.png" class="rounded mx-auto d-block logo" alt="...">
            </div>
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#sobre">INTRODUÇÃO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#contato">CONTATO</a>
                </li>
            </ul>
            <div class="tab-content" style="margin-top: 50px;">
               <div class="tab-pane fade show active" id="sobre">
			   <h2 class="titlehit">Introdução</h2>
			   <hr class="hr5">
                    <div class="d-flex flex-column flex-lg-row cardhit">
                        <div>
                           <div class="paddingt5"></div>
                            <?php the_field('sobre_txt', 'option'); ?>
                          <div class="paddingb5"></div>
                        </div>
                       
                    </div>
                </div>
                <div class="tab-pane fade" id="contato">
				<h2 class="titlehit">Contato</h2>
				 <hr class="hr5">
                    <div class="d-flex flex-column flex-lg-row cardhit">
                        <div>
						<div class="paddingt3"></div>
                           <?php echo do_shortcode( '[wpforms id="10" title="false"]' ); ?>
                        </div>  
                    </div>
                </div>
            </div>
</div>
<div class="paddingb5"></div>
<?php get_footer(); ?>