<?php

require_once dirname(\Drupal::service('theme_handler')->rebuildThemeData()['civictheme']->getPathname()) . '/theme-settings.provision.inc';
civictheme_enable_modules();
