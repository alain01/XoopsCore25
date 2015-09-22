<?php

/**
 * Xoops Frameworks addon: art
 *
 * @copyright       (c) 2000-2015 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @since               1.00
 * @version             $Id: xoopsart.php 13082 2015-06-06 21:59:41Z beckmi $
 * @package             Frameworks
 */
class xoopsart
{
    /**
     *
     */
    public function __construct()
    {
    }

    public function XoopsArt()
    {
        $this->__construct();
    }

    /**
     * Load a collective functions of Frameworks
     *
     * @param  string $group name of  the collective functions, empty for functions.php
     * @return bool
     */
    public function loadFunctions($group = "")
    {
        return include_once FRAMEWORKS_ROOT_PATH . "/art/functions.{$group}" . (empty($group) ? "" : ".") . "php";
    }
}