<?php
/**
 * @var modX $modx
 * @var array $sources
 */

/** @var modPlugin[] $plugins */
$plugins = array();
$i = 0;

$plugins[$i] = $modx->newObject('modPlugin');
$plugins[$i]->fromArray(array(
    'name' => 'Vertical Navigation',
    'description' => 'Vertical navigation for your manager.',
    'plugincode' => Helper::getPHPContent($sources['elements'] . 'plugins/plugin.php'),
), '', true, true);

$properties = $sources['data'] . 'properties/verticalnavigation.php';
if (file_exists($properties)) {

}

$events = $sources['data'] . 'events/verticalnavigation.php';
if (file_exists($events)) {
    $modx->log(modX::LOG_LEVEL_INFO, 'Adding '. count($events). ' system events to the plugin');
    $vents = include_once $events;
    $plugins[$i]->addMany($vents);
}

return $plugins;
