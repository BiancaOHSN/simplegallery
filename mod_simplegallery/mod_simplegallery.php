<?php
defined('_JEXEC') or die;
use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Plugin\PluginHelper;
/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $app->getDocument()->getWebAssetManager();
$wa->registerAndUseScript('mod_simplegallery', 'mod_simplegallery/fslightbox.js', [], ['defer' => true]);
require ModuleHelper::getLayoutPath('mod_simplegallery', $params->get('layout', 'default'));
