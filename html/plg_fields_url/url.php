<?php

/**
 * @package     Joomla.Plugin
 * @subpackage  Fields.URL
 *
 * @copyright   (C) 2016 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;
use Joomla\CMS\Uri\Uri;

$value = $field->value;
$label = $field->label;

if ($value == '') {
    return;
}

$attributes = '';

if (!Uri::isInternal($value)) {
    $attributes = ' rel="nofollow noopener noreferrer" target="_blank"';
    $text       = Text::_('JVISIT_WEBSITE');
} else {
    $text       = Text::_('JVISIT_LINK');
}

if ($fieldParams->get('show_url', 0)) {
    $text = htmlspecialchars($value);
}


switch ($label) :
    case 'Accesso online':
        $dtelmbtn = 'data-element="service-online-access"';
    break;
    case 'Prenota appuntamento':
        $dtelmbtn = 'data-element="service-booking-access"';
    break;
default: 
        $dtelmbtn = '';
endswitch;

?>


<button onclick="location.href='<?php echo htmlspecialchars($value)?>'" type="button" class="btn btn-purplelight" <?php echo $dtelmbtn ?>><?php echo $label ?></button>
