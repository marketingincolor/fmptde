<?php 
/**
 * The template for displaying custom front page
 *
 */
$custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
?>

<div class="hero">
	<div class="content grid-container full">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
			<div class="hero-overlay Xsmall-12 show-for-large Xmedium-10 large-8 cell" >
				<div class="grid-x grid-margin-x hero-inner">
					<div class="small-12 medium-8 medium-offset-1 large-8 large-offset-1 cell">

					<a class="hero-logo" href="<?php echo home_url(); ?>"><?php echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">'; ?></a>

					<?php if( get_field('hero_title') ): ?>
						<h1><?php the_field('hero_title'); ?></h1>
					<?php endif; ?>
					<?php if( get_field('hero_copy') ): ?>
						<p><?php the_field('hero_copy'); ?></p>
					<?php endif; ?>
					</div>
					<div class="small-10 cell">
						<div class="arrow bounce" style="float:right; left:-20px;">
							<a href="#cta-form"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fmp-brandlp-hero-icon-downarrow.svg"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="hero-overlay hero-mobile small-10 small-offset-1 hide-for-large cell" >
				<div class="grid-x grid-margin-x hero-inner">
					<div class="small-12 cell">
					<div style=" text-align: center; padding: 2em 0em; ">
					<a class="hero-logo" href="<?php echo home_url(); ?>"><?php echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">'; ?></a>
					</div>

					<?php if( get_field('hero_title') ): ?>
						<h1><?php the_field('hero_title'); ?></h1>
					<?php endif; ?>
					<?php if( get_field('hero_copy') ): ?>
						<p><?php the_field('hero_copy'); ?></p>
					<?php endif; ?>
					</div>
					<div class="arrow bounce" style="margin:auto;">
						<a href="#cta-form"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fmp-brandlp-hero-icon-downarrow.svg"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="page-cta">
	<div class="content grid-container full">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
			<div class="small-12 large-10 large-offset-1 cell" >
				<div class="grid-x grid-margin-x ">
					<div class="small-10 small-offset-1 Xmedium-6 Xmedium-offset-1 Xsmall-order-1 Xmedium-order-2 cell">
					<?php if( get_field('cta_title') ): ?>
						<h3 style="text-align:center; "><?php the_field('cta_title'); ?></h3>
					<?php endif; ?>

					<?php if( get_field('cta_copy') ): ?>
						<p style="text-align:center; margin-bottom:0;"><?php the_field('cta_copy'); ?></p>
					<?php endif; ?>

					<?php if( get_field('cta_button') ): ?>
						<div style="text-align:center; margin-bottom:0; padding:2.5em 0em .75em;">
							<a href="#cta-form" class="button-cta"><?php the_field('cta_button'); ?></a>
						</div>
					<?php endif; ?>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="brands">
	<div class="content grid-container full">
		<div class="inner-content grid-x Xgrid-margin-x Xgrid-padding-x text-center">
		    <div class="small-12 cell">
		    	<div class="grid-x Xgrid-margin-x brand-inner">
		    		<div class="small-10 small-offset-1 cell">
					<?php if( get_field('brands_title') ): ?>
						<h2><?php the_field('brands_title'); ?></h2>
					<?php endif; ?>
					</div>
				</div>
				<div class="grid-x Xgrid-margin-x brand-inner">
				<?php
				$brands = get_field('brands_group');
				if( $brands ): ?>
					<div class="small-12 cell hide-for-medium">
						<div class="subbrand">
							<ul class="accordion" data-accordion data-allow-all-closed="true">
								<li class="accordion-item" data-accordion-item>
									<a href="#" class="accordion-title at-blue"><?php echo $brands['brand_one_title']; ?></a>
									<div class="accordion-content" data-tab-content>
										<img src="<?php echo $brands['brand_one_logo']; ?>" alt="<?php echo $brands['brand_one_title']; ?>" />
										<p><?php echo $brands['brand_one_text']; ?></p>
									</div>
								</li>
								<li class="accordion-item" data-accordion-item>
									<a href="#" class="accordion-title at-orange"><?php echo $brands['brand_two_title']; ?></a>
									<div class="accordion-content" data-tab-content>
										<img src="<?php echo $brands['brand_two_logo']; ?>" alt="<?php echo $brands['brand_two_title']; ?>" />
										<p><?php echo $brands['brand_two_text']; ?></p>
									</div>
								</li>
								<li class="accordion-item" data-accordion-item>
									<a href="#" class="accordion-title at-green"><?php echo $brands['brand_three_title']; ?></a>
									<div class="accordion-content" data-tab-content>
										<img src="<?php echo $brands['brand_three_logo']; ?>" alt="<?php echo $brands['brand_three_title']; ?>" />
										<p><?php echo $brands['brand_three_text']; ?></p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="small-10 small-offset-1 cell show-for-medium">
						<div class="subbrand grid-x grid-padding-x medium-up-1 large-up-3">
							<div class="cell">
								<img src="<?php echo $brands['brand_one_logo']; ?>" alt="<?php echo $brands['brand_one_title']; ?>" />
								<p><?php echo $brands['brand_one_text']; ?></p>
							</div>
							<div class="cell">
								<img src="<?php echo $brands['brand_two_logo']; ?>" alt="<?php echo $brands['brand_two_title']; ?>" />
								<p><?php echo $brands['brand_two_text']; ?></p>
							</div>
							<div class="cell">
								<img src="<?php echo $brands['brand_three_logo']; ?>" alt="<?php echo $brands['brand_three_title']; ?>" />
								<p><?php echo $brands['brand_three_text']; ?></p>
							</div>

						</div>
					</div>
				<?php endif; ?>
				</div>
				<div class="grid-x grid-margin-x brand-inner" style="padding-top:.75em;">
					<div class="small-12 cell">
					<?php if( get_field('brands_cta_text') ): ?>
						<a href="#cta-form" class="button-cta"><?php the_field('brands_cta_text'); ?></a>
					<?php endif; ?>
					</div>
				</div>		
			</div>
		</div>
	</div>
</div>



<div class="grid-container-fluid home-slider"> 
  <div class="orbit" role="region" aria-label="Diesel Showcase" data-orbit>

      <div class="orbit-wrapper">
      <div class="orbit-controls">
        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&lsaquo;</button>
        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&rsaquo;</button>
      </div>
      <ul class="orbit-container">

      <?php if( have_rows('showcase') ):

        $count = 0;
        $rowcount = get_field('showcase');
        if (is_array($rowcount)) { $count = count($rowcount); }

        while ( have_rows('showcase') ) : the_row(); ?>

        <li class="orbit-slide">
          <figure class="orbit-figure">
            <img class="orbit-image" src="<?php the_sub_field('slide_image'); ?>" alt="<?php the_sub_field('slide_title'); ?>">
            <figcaption class="orbit-caption grid-x grid-padding-x" style="display:none;">
              <div class="orbit-caption-meta medium-10 medium-offset-1">
              <h2><?php the_sub_field('slide_title'); ?></h2>
              <p><?php the_sub_field('slide_description'); ?></p>
              <p><a href="<?php the_sub_field('slide_link'); ?>" class="slide-cta-button"><?php the_sub_field('slide_button'); ?></a></p>
              </div>
            </figcaption>
          </figure>
        </li>

      <?php 
        endwhile; ?>

      </ul>
    </div>
    <nav class="orbit-bullets" style="display:none;">
      <?php for($i=1; $i<=$count; $i++){ $j=$i-1; ?>
          <button data-slide="<?php echo $j; ?>"><span class="show-for-sr">Slide details</span></button>
      <?php } ?>
    </nav>

      <?php else : // no rows found
      endif; ?>

  </div>
</div>




<div class="about">
	<div class="content grid-container full">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
			<div class="about-overlay Xsmall-12 show-for-large Xmedium-10 large-8 cell" >
				<div class="grid-x grid-margin-x about-inner">
					<div class="small-12 medium-7 medium-offset-1 large-7 large-offset-1 cell align-self-middle" style="padding:2em 0em;">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/fmp-brndlp-about-logo.png">	
					<?php if( get_field('about_title') ): ?>
						<h2><?php the_field('about_title'); ?></h2>
					<?php endif; ?>
					<?php if( get_field('about_copy') ): ?>
						<p><?php the_field('about_copy'); ?></p>
					<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="about-mobile small-12 hide-for-large cell" >
				<div class="grid-x grid-margin-x about-inner">
					<div class="small-10 small-offset-1 cell">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/fmp-brndlp-about-logo.png">
					<?php if( get_field('about_title') ): ?>
						<h2><?php the_field('about_title'); ?></h2>
					<?php endif; ?>
					<?php if( get_field('about_copy') ): ?>
						<p><?php the_field('about_copy'); ?></p>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="form"><a id="cta-form"></a>
	<div class="content grid-container full">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
			<div class="small-12 large-10 large-offset-1 cell" >
				<div class="grid-x grid-margin-x form-inner">
					<div class="small-10 small-offset-1 Xmedium-6 Xmedium-offset-1 Xsmall-order-1 Xmedium-order-2 cell">
					<?php if( get_field('form_title') ): ?>
						<h2 class="form-title" style="text-align:center; padding:0em 1em;"><?php the_field('form_title'); ?></h2>
					<?php endif; ?>

					<?php if( get_field('form_copy') ): ?>
						<p class="form-copy"><?php the_field('form_copy'); ?></p>
					<?php endif; ?>
					</div>
					<div class="small-10 small-offset-1 Xmedium-5 Xmedium-offset-0 Xsmall-order-2 Xmedium-order-1 cell">
					<?php echo do_shortcode('[ninja_form id=1]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>