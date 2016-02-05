<?php
/**
 * Allow bolt to use international slugs
 *
 */
use Bolt\Extension\sahassar\internationalslugs\Extension;

$app['extensions']->register(new Extension($app));
