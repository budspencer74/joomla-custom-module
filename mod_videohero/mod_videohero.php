<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_videohero
 *
 * @copyright   (C) 2026 Open Source Matters, Inc.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\HTML\HTMLHelper;

$headline = (string) $params->get('headline', '');
$subline = (string) $params->get('subline', '');
$introtext = (string) $params->get('introtext', '');
$linkAText = (string) $params->get('linka_text', '');
$linkAUrl = (string) $params->get('linka_url', '');
$linkBText = (string) $params->get('linkb_text', '');
$linkBUrl = (string) $params->get('linkb_url', '');
$backgroundVideo = (string) $params->get('background_video', '');

HTMLHelper::_('stylesheet', 'mod_videohero/style.css', ['version' => 'auto', 'relative' => true]);

require ModuleHelper::getLayoutPath('mod_videohero', $params->get('layout', 'default'));
