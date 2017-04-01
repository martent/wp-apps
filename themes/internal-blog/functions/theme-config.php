<?php
$mconfig['env'] = ENV;
$mconfig['logdir'] = dirname(__FILE__) . '/../../../';

$mconfig['staff_directory'] = 'https://minsida.malmo.se/users/';
$mconfig['avtar_base_url'] =  '//profilbilder.malmo.se/';

if ($mconfig['env'] == 'development') {
  $mconfig['asset_host'] = '//assets.malmo.se/internal/v4-staging/';
}
elseif ($mconfig['env'] == 'test' ) {
  $mconfig['asset_host'] = '//assets.malmo.se/internal/v4-staging/';
}
else {
  $mconfig['asset_host'] = '//assets.malmo.se/internal/v4/';
}

$mconfig['cache_id'] = 'internal_blog_' . $mconfig['env'];
$mconfig['eri_cats'] = true;
