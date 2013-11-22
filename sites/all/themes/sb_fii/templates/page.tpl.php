<?php
	drupal_add_library('system', 'ui.slider');
?>

 <div id="page" class="page-full-all">
  <div id="page-inner" class="page-full">
    <div id="page-inner" class="page-inner">
	
	<?php if ($logo || $site_name || $site_slogan): ?>
            <div id="header-site-info" class="header-site-info clearfix">
              <div id="header-site-info-inner" class="header-site-info-inner gutter">
                <?php if ($logo): ?>
                <div id="logo">
                  <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
                </div>
                <?php endif; ?>
                <?php if ($site_name || $site_slogan): ?>
                <div id="site-name-wrapper" class="clearfix">
                  <?php if ($site_name): ?>
                    <?php if ($title): ?>
                    <div id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></div>
                    <?php else: /* Use h1 when the content title is empty */ ?>
                    <h1 id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1>
                    <?php endif; ?>
                  <?php endif; ?>
                  <?php if ($site_slogan): ?>
                  <span id="slogan"><?php print $site_slogan; ?></span>
                  <?php endif; ?>
                </div><!-- /site-name-wrapper -->
                <?php endif; ?>
              </div><!-- /header-site-info-inner -->
            </div><!-- /header-site-info -->
            <?php endif; ?>
      <?php print render($page['header_top']); ?>

      <!-- header-group region: width = grid_width -->
      <div id="header-group-wrapper" class="header-group-wrapper full-width clearfix">
        <div id="header-group" class="header-group region <?php print $grid_width; ?>">
          <div id="header-group-inner" class="header-group-inner inner clearfix">           
			<?php print render($page['main_menu']); ?>
            <?php print render($page['header']); ?>
            
          </div><!-- /header-group-inner -->
        </div><!-- /header-group -->
      </div><!-- /header-group-wrapper -->

      <?php print render($page['preface_top']); ?>
		</div>
	</div>
      <!-- main region: width = grid_width -->
<div id="outer-main" class="page-inner">
   <div id="main" >
      <div id="main-wrapper" class="main-wrapper full-width clearfix">
		
        <div id="main" class="main region <?php print $grid_width; ?>">
          <div id="main-inner" class="main-inner inner clearfix">
            <?php print render($page['sidebar_first']); ?>

            <!-- main group: width = grid_width - sidebar_first_width -->
            <div id="main-group" class="main-group region nested <?php print $main_group_width; ?>">
              <div id="main-group-inner" class="main-group-inner inner">
                <?php print render($page['preface_bottom']); ?>

                <div id="main-content" class="main-content region nested">
                  <div id="main-content-inner" class="main-content-inner inner">
                    <!-- content group: width = grid_width - sidebar_first_width - sidebar_second_width -->
                    <div id="content-group" class="content-group region nested <?php print $content_group_width; ?>">
                      <div id="content-group-inner" class="content-group-inner inner">
                        <?php print theme('grid_block', array('content' => $breadcrumb, 'id' => 'breadcrumbs')); ?>
                        <?php print theme('grid_block', array('content' => $messages, 'id' => 'content-messages')); ?>

                        <div id="content-region" class="content-region region nested">
                          <div id="content-region-inner" class="content-region-inner inner">
                            <a id="main-content-area"></a>
							<?php if ($title): ?>
                            <h1 class="title gutter"><?php print $title; ?></h1>
                            <?php endif; ?>
                            <?php print render($title_suffix); ?>
                            <?php if ($action_links): ?>
                            <ul class="action-links"><?php print render($action_links); ?></ul>
                            <?php endif; ?>
                            <?php print theme('grid_block', array('content' => render($tabs), 'id' => 'content-tabs')); ?>
                            <?php print render($page['help']); ?>
                            <?php print render($title_prefix); ?>
                            
                            <?php if ($page['content']): ?>
                              <?php print render($page['content']); ?>
                            <?php endif; ?>
                          </div><!-- /content-region-inner -->
                        </div><!-- /content-region -->

                      </div><!-- /content-group-inner -->
                    </div><!-- /content-group -->
                    <?php print render($page['sidebar_second']); ?>
					 <?php print render($page['content_bottom']); ?>
                  </div><!-- /main-content-inner -->
                </div><!-- /main-content -->
     	
                <?php print render($page['postscript_top']); ?>
              </div><!-- /main-group-inner -->
            </div><!-- /main-group -->
          </div><!-- /main-inner -->
        </div><!-- /main --> 

      </div>
	  
	 <!-- /main-wrapper -->
    
      <?php print render($page['postscript_bottom']); ?>
	  </div>
	  
	  
	  <div id="footer" class="footer">
      <?php print render($page['footer']); 
	  ?>
	  </div>
	  <div id="copyright-full">
     <p class="copyright"><?php print t('Copyright'); ?> &copy; <?php echo date("Y"); ?>, <?php print $site_name; ?> <br/> <?php print t('All rights reserved, website designed and hosted by'); ?>  <a title="StarBright" class="starbright_link" href="http://www.starbright.co.za"><span class="star">Star</span><span class="br">Br</span><span class="i">i</span><span class="g">g</span><span class="h">h</span><span class="t">t</span></a></p>
    <div class="clear"></div>
    </div>
	  <div>
	 </div><!-- /page-inner -->
	</div>
  </div><!-- /page -->
