<?php
/**
 * Build the setup options form.
 * At this time, files should not be in place, but available in core/package/{signature} (uncompressed package)
 *
 * @var modX $modx
 * @var array $options
 *
 * @var array $attributes
 * @var modPackageGetAttributeProcessor $this
 */

$active = $modx->getOption('vnav.use_vnav');

if ($active == 1) {
    // vnav already enabled, no user interaction needed
    $content = <<<HTML
    <p>Vertical Navigation is already active, you may proceed with the update.</p>
HTML;
} else {
    // Offer the user to directly activate the vertical navigation
    $content = <<<HTML
    <label for="vn-use_vnav">
        <input type="checkbox" name="use_vnav" id="vn-use_vnav" value="1" />
        Enable Vertical Navigation ?
    </label>
HTML;
}

return <<<HTML
<h2>Vertical Navigation</h2>
<div>
    {$content}
</div>
HTML;
