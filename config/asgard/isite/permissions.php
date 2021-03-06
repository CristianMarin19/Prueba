<?php

return [
  'isite.settings' => [
    'manage' => 'isite::settings.manage',
    'index' => 'isite::settings.list resource',
    'edit' => 'isite::settings.edit resource',
    'create' => 'isite::settings.create resource',
  ],
  'isite.master.records' => [
    'manage' => 'isite::master.record.manage',
    'index' => 'isite::master.record.list resource',
    'edit' => 'isite::master.record.edit resource',
    'create' => 'isite::master.record.create resource',
    'destroy' => 'isite::master.record.destroy resource',
  ],
  'isite.recommendations' => [
    'manage' => 'isite::recommendations.manage',
    'index' => 'isite::recommendations.list resource',
    'edit' => 'isite::recommendations.edit resource',
    'create' => 'isite::recommendations.create resource',
    'destroy' => 'isite::recommendations.destroy resource',
  ],
];
