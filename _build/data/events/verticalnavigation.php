<?php
/**
 * @var modX $modx
 */

$events = array();

$events['OnBeforeManagerPageInit'] = $modx->newObject('modPluginEvent');
$events['OnBeforeManagerPageInit']->fromArray(array(
    'event' => 'OnBeforeManagerPageInit',
), '', true, true);

return $events;
