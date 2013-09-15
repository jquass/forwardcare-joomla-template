<?php

/**

 * @version    $Id: index.php $

 * @package    Joomla.Site

 * @copyright  Copyright (C) 2013 ForwardCareOnline.com - All Rights Reserved.

    


// No direct access.

defined('_JEXEC') or die;

JHTML::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */

$app = JFactory::getApplication();

$tplparams  = $app->getTemplate(true)->params;

?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">



<head>

  <jdoc:include type="head" />

  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />

  <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/CreateHTML5Elements.js"></script>

</head>

<body class="page_bg">


    
  <div class="wrapper">

  <header>

    <div class="logo">

      <?php if( $this->countModules('logo') ) : ?>

        <jdoc:include type="modules" name="logo" />

      <?php endif; ?>

    </div>

    <div class="header_right">



      <div class="sitename">

        <h1><a href="/index.php">Forward Care Online</a></h1>

      </div>

            

      <div class="header_right_bottom">

        <div class="search_fco">

          <?php if( $this->countModules('position-1') ) : ?>

            <jdoc:include type="modules" name="position-1" />

          <?php endif; ?>

        </div>

        <div class="contactus">

          <?php if( $this->countModules('position-2') ) : ?>

            <jdoc:include type="modules" name="position-2" />

          <?php endif; ?>

        </div>

        <div class="clr"></div>

      </div>

    </div>

    <div class="clr"></div>

        

  </header>

  

  <div class="top-menu">

    <div id="sgmenu">

      <jdoc:include type="modules" name="menuload" />

    </div>

    <div id="fc_cart">

      <jdoc:include type="modules" name="position-0" />

    </div>

    <div class="clear"></div>

  </div>

    

  <section id="content">

    

    
    <?php if( $this->countModules('position-7')  ) : ?>

    <div class="maincol_w_right">

    <?php else: ?>

    <div class="maincol_full">

    <?php endif; ?>

    

    <?php if( $this->countModules('position-7') ) : ?>

      <div class="leftcol">

        <jdoc:include type="modules" name="position-7" style="rounded"/>

      </div>

      <?php endif; ?>

      

        <div class="cont">

            <jdoc:include type="message" />

            <jdoc:include type="component" />

        </div>

      

        <div class="clr"></div>

    </div>

  </div></div></div>

  </section>

  <footer2>

  <!-- <p style="text-align:center;"><?php $sg = ''; include "templates.php"; ?></p> -->

    <div class="fc_footer">

      <jdoc:include type="modules" name="position-4" style="rounded"/>

    <div class="fc_footer">

  

  </footer2>

  </div>

</body>


</html>

