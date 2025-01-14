<?php

/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   (C) 2021 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Layout variables
 * -----------------
 * @var   array  $displayData  Array with all the given attributes for the image element.
 *                             Eg: src, class, alt, width, height, loading, decoding, style, data-*
 *                             Note: only the alt and src attributes are escaped by default!
 */
defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\Utilities\ArrayHelper;

$img = HTMLHelper::_('cleanImageURL', $displayData['src']);

$displayData['src'] = $this->escape($img->url);


?>


<?php 
    
    echo 'style="background-image: url(\''.$img->url.'\');"'

?>