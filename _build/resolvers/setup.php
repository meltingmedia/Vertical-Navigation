<?php
/**
 * Setup options resolver
 *
 * @see xPDOVehicle::resolve
 *
 * @var xPDOVehicle $this
 * @var xPDOTransport $transport
 * @var xPDOObject|mixed $object
 * @var array $options
 *
 * @var array $fileMeta
 * @var string $fileName
 * @var string $fileSource
 *
 * @var array $r
 * @var string $type (file/php), obviously php :)
 * @var string $body (json)
 * @var integer $preExistingMode
 */

if ($object->xpdo) {
    $modx = $object->xpdo;

    if ($options[xPDOTransport::PACKAGE_ACTION] === xPDOTransport::ACTION_INSTALL ||
        $options[xPDOTransport::PACKAGE_ACTION] === xPDOTransport::ACTION_UPGRADE
    ) {
        if (isset($options['use_vnav']) && $options['use_vnav']) {
            $setting = $modx->getObject('modSystemSetting', array('key' => 'vnav.use_vnav'));
            $setting->set('value', true);
            $setting->save();
        }
    }
}

return true;
