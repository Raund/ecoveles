<?php /* Smarty version 2.6.26, created on 2016-09-08 20:48:53
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'component', 'index.html', 10, false),array('modifier', 'set_query', 'index.html', 55, false),)), $this); ?>
<div id="m-header" class="mobile">
    <a href="/" class="logo">EcoVeles</a>
    <a href="#" class="show_menu">Меню</a>
</div>
<div id='page'>
<table cellpadding="0" cellspacing="0" border="0" id="main">
        <tr>
            <td class="menu1 topmenu" colspan="3">
                <div class="frst">
                    <div class="left"><!-- cpt_container_start --><?php echo smarty_function_component(array('cpt_id' => 'auxpages_navigation','select_pages' => 'selected','auxpages' => '14:15:17:16:18:5:3','view' => 'horizontal','overridestyle' => ':qsve9u'), $this);?>
<!-- cpt_container_end --></div>
                    <div class="right lang"><!-- cpt_container_start --><?php echo smarty_function_component(array('cpt_id' => 'language_selection','view' => 'flags','overridestyle' => ':9fryqp'), $this);?>
<!-- cpt_container_end --></div>
                    <div class="right auth"><a href="/index.php?ukey=auth"><?php echo 'Вход'; ?>
</a></div>
                    <div class="clear"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td rowspan="1"><div id="logo"><!-- cpt_container_start --><?php echo smarty_function_component(array('cpt_id' => 'logo','file' => 'Logotype3.png','overridestyle' => ':7yr7a1'), $this);?>
<!-- cpt_container_end --></div></td>
            <td colspan="2">
                 <table cellpadding="0" cellspacing="0" border="0" id="header">
                 <tr>
                      <td class="phones" colspan="2"><div class="frst"><div>(066)931-15-15</div><div>(096)361-15-15</div><div>(063)734-15-15</div>
                      <div class="txthdr clear"><?php echo 'Работаем 7 дней в неделю'; ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo 'Доставка по Киеву и Украине'; ?>
</div>
                      </div></td>
                      <td class="cart" width="140px"><div class="frst"><div class="box"><!-- cpt_container_start --><?php echo smarty_function_component(array('cpt_id' => 'shopping_cart_info','overridestyle' => ':bflnp0'), $this);?>
<!-- cpt_container_end --></div></div></td>
                      <td class="callback" width="160px"><div class="frst"><a href="javascript:openFadeIFrame('/callback/index.php'); resizeFadeIFrame(270, 300);"><?php echo 'Заказать звонок'; ?>
</a></div></td>

                 </tr>
                 <tr>
                      <td width="445px"><div class="frst"><!-- cpt_container_start --><?php echo smarty_function_component(array('cpt_id' => 'product_search','overridestyle' => ':mxuni3'), $this);?>
<!-- cpt_container_end --></div></td>
                      <td class="menu1 xtra" colspan="3" height="53px">
                          <div class="frst">
                              <div class="left"><!-- cpt_container_start --><?php echo smarty_function_component(array('cpt_id' => 'auxpages_navigation','select_pages' => 'selected','auxpages' => '6:7:8','view' => 'horizontal','overridestyle' => ':t5apqg'), $this);?>
<!-- cpt_container_end --></div>
                              <div class="right"></div>
                              <div class="clear"></div>
                          </div>
                      </td>
                 </tr>
                 </table>
            </td>
        </tr>

        <tr>
            <td class="l_column">
            <?php if ($_GET['categoryID'] != ''): ?>
                <div class="frst" style="margin-top:10px">
                <h1 style="margin-bottom:10px"><?php echo 'Фильтр товаров'; ?>
</h1>
                    <!-- cpt_container_start[id=7] --><?php echo smarty_function_component(array('cpt_id' => 'prfilter_index_block','position' => 'left','colomns' => '1','category' => '564','template' => '1','showselected' => 'false','overridestyle' => ':1q4m0e'), $this);?>
<!-- cpt_container_end -->
                </div>
            <?php endif; ?>
                <div class="frst">
                    <h1><?php echo 'Каталог'; ?>
</h1>
                    <!-- cpt_container_start -->
                    <?php echo smarty_function_component(array('cpt_id' => 'category_tree','overridestyle' => ':irkjec'), $this);?>

                    <a href="<?php echo ((is_array($_tmp="?ukey=news")) ? $this->_run_mod_handler('set_query', true, $_tmp) : smarty_modifier_set_query($_tmp)); ?>
"><h4><?php echo 'Новости'; ?>
</h4></a>
                    <div class="news_box">
                    <?php echo smarty_function_component(array('cpt_id' => 'news_short_list','news_num' => '3','overridestyle' => ':77n9ab'), $this);?>

                    </div>
                    <!-- cpt_container_end -->
                </div>
            </td>
            <td class="c_column">
<!-- SLIDERR -->
            <?php if ($this->_tpl_vars['main_content_template'] == "home1.html"): ?>
<div class="slider slider1">
			<div class="sliderContent">
				<div class="item">
					<img src="/kdm/slider/img/img1.jpg" alt="" />
				</div>
				<div class="item">
					<img src="/kdm/slider/img/img1.jpg" alt="" />
				</div>
				<div class="item">
					<img src="/kdm/slider/img/img1.jpg" alt="" />
				</div>

			</div>
		</div>
        <div class="clear"></div>
            <?php endif; ?>
<!-- SLIDER -->
        <div class="frst" style="margin-top:0px;">
            <!-- cpt_container_start --><?php echo smarty_function_component(array('cpt_id' => 'maincontent','overridestyle' => ':etursx'), $this);?>
<!-- cpt_container_end --></div>

            <td class="r_column"><div class="frst"><!-- cpt_container_start --><!-- cpt_container_end --></div></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                &nbsp;

                          <table id="tfooter" width="900px" style="margin-top:40px">
                          <tr>
                              <td align="center" width="200px">
                                  <div class="share42init"></div>
                                  <script type="text/javascript" src="/kdm/share42/share42.js"></script>
                              </td>
                              <td>
                              <div id="fboxmenu">
                              <!-- cpt_container_start --><?php echo smarty_function_component(array('cpt_id' => 'auxpages_navigation','select_pages' => 'selected','auxpages' => '4:9:10:11:12:13','view' => 'horizontal','overridestyle' => ':t5apqg'), $this);?>
<!-- cpt_container_end -->
                              </div>
                              </td>
                              <td width="200px" align="left">
                                  <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
                                  <g:plusone annotation="inline" width="200"></g:plusone>
                              </td>
                          </tr>
                          </table>
            </td>
        </tr>
    </table>
<p id="back-top">
	<a href="<?php  echo $_SERVER['REQUEST_URI'];  ?>#top"><span></span>BBEPX</a>
</p>
</div>
<div class="mobile" id="m-menu">
    <div class="menu_1"><!-- cpt_container_start --><?php echo smarty_function_component(array('cpt_id' => 'auxpages_navigation','select_pages' => 'selected','auxpages' => '14:15:17:16:18:5:3','view' => 'vertical','overridestyle' => ':qsve9u'), $this);?>
<!-- cpt_container_end --></div>
    <div class="menu_2"><!-- cpt_container_start --><?php echo smarty_function_component(array('cpt_id' => 'auxpages_navigation','select_pages' => 'selected','auxpages' => '6:7:8','view' => 'vertical','overridestyle' => ':t5apqg'), $this);?>
<!-- cpt_container_end --></div>
    <div class="menu_3"><!-- cpt_container_start --><?php echo smarty_function_component(array('cpt_id' => 'auxpages_navigation','select_pages' => 'selected','auxpages' => '4:9:10:11:12:13','view' => 'vertical','overridestyle' => ':t5apqg'), $this);?>
<!-- cpt_container_end --></div>
    <div class="menu_last">
        <div class="left"><a href="/index.php?ukey=auth"><?php echo 'Вход'; ?>
</a></div>
        <div class="right"><!-- cpt_container_start --><?php echo smarty_function_component(array('cpt_id' => 'language_selection','view' => 'flags','overridestyle' => ':9fryqp'), $this);?>
<!-- cpt_container_end --></div>
    </div>
    <div class="menu_close">
        <?php echo 'Закрыть'; ?>

    </div>
    <div class="clear"></div>
</div>