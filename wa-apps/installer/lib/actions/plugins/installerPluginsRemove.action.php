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
 * @package installer
 */

class installerPluginsRemoveAction extends installerExtrasRemoveAction
{

    protected function preExecute()
    {
        $this->extras_type = 'plugins';
    }

    protected function removeExtras($app_id, $extras_id)
    {
        try {
            $paths = array();
            $plugin_instance = waSystem::getInstance($app_id)->getPlugin($extras_id);
            if (!$plugin_instance) {
                return false;
            }
            $plugin_instance->uninstall();
            $this->installer->updateAppPluginsConfig($app_id, $extras_id, null);

            //wa-apps/$app_id/plugins/$slug
            $paths[] = wa()->getAppPath("{$this->extras_type}/{$extras_id}", $app_id);
            $paths[] = wa()->getTempPath(null, $app_id); //wa-cache/temp/$app_id/
            $paths[] = wa()->getAppCachePath(null, $app_id); //wa-cache/apps/$app_id/

            foreach ($paths as $path) {
                waFiles::delete($path, true);
            }

            return true;
        } catch (Exception $ex) {
            //TODO check config
            $this->installer->updateAppPluginsConfig($app_id, $extras_id, true);
            throw $ex;
        }

    }
}
