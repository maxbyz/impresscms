<?php
/**
 * Upgrader from 2.3 to 2.0.x
 *
 * @copyright	http://www.impresscms.org/ The ImpressCMS Project
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @package     upgrader
 * @since       1.1
 * @author		Sina Asghari <pesian_stranger@users.sourceforge.net>
 * @version     $Id$
 */

class upgrade_230
{
	var $usedFiles = array ();
    var $tasks = array('config');
	var $updater;
	
    function isApplied()
    {
        if (!isset($_SESSION[__CLASS__]) || !is_array($_SESSION[__CLASS__])) {
            $_SESSION[__CLASS__] = array();
        }
        foreach ($this->tasks as $task) {
            if (!in_array($task, $_SESSION[__CLASS__])) {
                if (!$res = $this->{"check_{$task}"}()) {
                    $_SESSION[__CLASS__][] = $task;
                }
            }
        }
        return empty($_SESSION[__CLASS__]) ? true : false;
    }
    function apply()
    {
        $tasks = $_SESSION[__CLASS__];
        foreach ($tasks as $task) {
            $res = $this->{"apply_{$task}"}();
            if (!$res) return false;
            array_shift($_SESSION[__CLASS__]);
        }
        return true;
    }
    
    
    /**
     * Check if cache model table already converted
     *
     */
    function check_config()
    {
        $sql = "SHOW TABLES LIKE '" . $GLOBALS['xoopsDB']->prefix("cache_model") . "'";
        $result = $GLOBALS['xoopsDB']->queryF($sql);
        if (!$result) return true;
        if ($GLOBALS['xoopsDB']->getRowsNum($result) > 0) return false;
        return true;
    }

    /**
     * Removes data insterted since 2.0.18.1
     *
     */
     function apply_config()
    {
        $db = $GLOBALS['xoopsDB'];
        // remove configuration items
        $db->queryF("DELETE FROM `" . $db->prefix('config') . "` WHERE conf_name='cpanel'");
        $db->queryF("DELETE FROM `" . $db->prefix('config') . "` WHERE conf_name='welcome_type'");
        $db->queryF("DELETE FROM `" . $db->prefix('configoption') . "` WHERE confop_name='_NO'");
        $db->queryF("DELETE FROM `" . $db->prefix('configoption') . "` WHERE confop_name='_MD_AM_WELCOMETYPE_EMAIL'");
        $db->queryF("DELETE FROM `" . $db->prefix('configoption') . "` WHERE confop_name='_MD_AM_WELCOMETYPE_PM'");
        $db->queryF("DELETE FROM `" . $db->prefix('configoption') . "` WHERE confop_name='_MD_AM_WELCOMETYPE_BOTH'");
        // remove cache_model table
        $db->queryF("DROP TABLE " . $db->prefix("cache_model"));
        return true;
    }
}

$upg = new upgrade_230();
return $upg;

?>
