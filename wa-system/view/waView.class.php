<?php

/*
 * This file is part of Webasyst framework.
 *
 * Licensed under the terms of the GNU Lesser General Public License (LGPL).
 * http://www.webasyst.com/framework/license/
 *
 * @link http://www.webasyst.com/
 * @author Webasyst LLC
 * @copyright 2011 Webasyst LLC
 * @package wa-system
 * @subpackage view
 */
abstract class waView
{

    protected $postfix = '.html';

    /**
     * @var waSystem
     */
    protected $system;

    protected $options = array();
    protected $helper;

    public function __construct(waSystem $system, $options = array())
    {
        $this->system = $system;
        $this->helper = new waViewHelper($this);
    }

    /**
     * @return waViewHelper
     */
    public function getHelper()
    {
        return $this->helper;
    }

    public function setOptions($options)
    {
        foreach ($options as $k => $v) {
            $this->options[$k] = $v;
        }
    }

    public function getPostfix()
    {
        return $this->postfix;
    }

    abstract public function assign($name, $value = null, $escape = false);

    abstract public function clearAssign($name);

    abstract public function clearAllAssign();

    abstract public function getVars($name = null);

    protected function prepare()
    {
          $this->assign('wa_url', $this->system->getRootUrl());
          $this->assign('wa_backend_url', waSystem::getInstance()->getConfig()->getBackendUrl(true));
          $this->assign('wa_app', $this->system->getApp());
          $this->assign('wa_app_url', $this->system->getAppUrl(null, true));
          $this->assign('wa_app_static_url', $this->system->getAppStaticUrl());
          if (!$this->helper) {
              $this->helper = new waViewHelper($this);
          }
          $this->assign('wa', $this->helper);
    }

    abstract public function fetch($template, $cache_id = null);

    abstract public function display($template, $cache_id = null);

    abstract public function templateExists($template);

    public function isCached($template, $cache_id = null)
    {
        return false;
    }

    public function clearCache($template, $cache_id = null)
    {

    }

    public function clearAllCache($exp_time = null, $type = null)
    {

    }

    public function cache($lifetime)
    {

    }

    public function getCacheId()
    {
        return null;
    }

    public function autoescape($value = null)
    {

    }

    public function setTemplateDir($path)
    {

    }

    /**
     * @param waTheme $theme
     * @param string $template
     * @return bool
     */
    public function setThemeTemplate($theme, $template)
    {
        $this->assign('wa_active_theme_path', $theme->path);
        $this->assign('wa_active_theme_url', $theme->url);
        $file = $theme->getFile($template);
        if ($parent_theme = $theme->parent_theme) {
            if (!empty($file['parent'])) {
                $theme = $parent_theme;
            }
            $this->assign('wa_parent_theme_url', $parent_theme->url);
            $this->assign('wa_parent_theme_path', $parent_theme->path);
        }
        $this->assign('wa_theme_url', $theme->url);
        $this->setTemplateDir($theme->path);
        return file_exists($theme->path.'/'.$template);
    }
}