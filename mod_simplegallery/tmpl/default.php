<?php
defined('_JEXEC') or die;
use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Uri\Uri;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Language\Multilanguage;
$modId = 'mod-simplegallery' . $module->id;
$app = Factory::getApplication();
?>
<div class="simplegalleryimages-container">
	<?php foreach ($params->get('simplegalleryimages') as $key => $simplegalleryimage) : ?>
	<div>
		<a data-fslightbox href="<?php echo $simplegalleryimage->file; ?>">
			<img class="shadow-1-strong rounded" src="<?php echo $simplegalleryimage->file; ?>"
				alt="<?php echo $simplegalleryimage->alttext; ?>">
		</a>
	</div>
	<?php endforeach; ?>
</div>

<style>
.simplegalleryimages-container > div {
	width: 300px;
	height: 300px;
	position: relative;
	cursor: pointer;
}

.simplegalleryimages-container {
	display: flex;
	flex-wrap: wrap;
	flex-direction: row;
	gap: 5px;
}

.simplegalleryimages-container img {
	height: 100%;
	width: 100%;
	object-fit: cover;
	vertical-align: middle;
}

</style>
