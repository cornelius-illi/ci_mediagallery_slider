<?php
if (!defined ('TYPO3_MODE'))     die ('Access denied.');

$TYPO3_CONF_VARS['EXTCONF']['media_gallery']['onReadyJS']['slider'] = 'EXT:'.$_EXTKEY.'/Classes/Hooks/SliderHook.php:Tx_CiMediaGallerySlider_Hooks_SliderHook';
?>

