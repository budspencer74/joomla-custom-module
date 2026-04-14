<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_videohero
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;

$videoPath = $backgroundVideo !== '' ? htmlspecialchars($backgroundVideo, ENT_QUOTES, 'UTF-8') : '';
$headlineText = htmlspecialchars($headline, ENT_QUOTES, 'UTF-8');
$sublineText = htmlspecialchars($subline, ENT_QUOTES, 'UTF-8');
$linkATextEscaped = htmlspecialchars($linkAText, ENT_QUOTES, 'UTF-8');
$linkAUrlEscaped = htmlspecialchars($linkAUrl, ENT_QUOTES, 'UTF-8');
$linkBTextEscaped = htmlspecialchars($linkBText, ENT_QUOTES, 'UTF-8');
$linkBUrlEscaped = htmlspecialchars($linkBUrl, ENT_QUOTES, 'UTF-8');

if ($videoPath !== '') {
    $videoPath = HTMLHelper::_('cleanImageURL', $videoPath)->url;
}
?>
<section class="video-hero position-relative overflow-hidden">
    <?php if ($videoPath !== '') : ?>
        <!-- Video -->
        <video class="video-hero__video" autoplay muted loop playsinline>
            <source src="<?php echo $videoPath; ?>" type="video/mp4">
        </video>
    <?php endif; ?>

    <!-- Verlauf -->
    <div class="video-hero__overlay"></div>

    <!-- Content -->
    <div class="video-hero__content">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-lg-12">
                    <?php if ($headlineText !== '') : ?>
                        <h1 class="mb-3"><?php echo $headlineText; ?></h1>
                    <?php endif; ?>

                    <?php if ($sublineText !== '') : ?>
                        <h2 class="mb-3"><?php echo $sublineText; ?></h2>
                    <?php endif; ?>

                    <?php if ($introtext !== '') : ?>
                        <div class="mb-4 col-lg-8 d-none d-lg-block">
                            <?php echo $introtext; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (($linkATextEscaped !== '' && $linkAUrlEscaped !== '') || ($linkBTextEscaped !== '' && $linkBUrlEscaped !== '')) : ?>
                        <div class="d-flex flex-wrap gap-3">
                            <?php if ($linkATextEscaped !== '' && $linkAUrlEscaped !== '') : ?>
                                <a href="<?php echo $linkAUrlEscaped; ?>" title="<?php echo $linkATextEscaped; ?>" class="btn btn-default smallequal d-none d-lg-inline-block"><?php echo $linkATextEscaped; ?></a>
                            <?php endif; ?>

                            <?php if ($linkBTextEscaped !== '' && $linkBUrlEscaped !== '') : ?>
                                <a href="<?php echo $linkBUrlEscaped; ?>" title="<?php echo $linkBTextEscaped; ?>" class="btn btn-outline smallequal"><?php echo $linkBTextEscaped; ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
