<?php
$rules = [
    'userRpgidGroup' => 'O:27:"app\\rbac\\UserRpgidGroupRule":3:{s:4:"name";s:14:"userRpgidGroup";s:9:"createdAt";N;s:9:"updatedAt";N;}',
];

require_once(Yii::getAlias('@share/rbac/helper.php'));
$rules = extendWithModuleRbacFileItems($rules, 'rules');

return $rules;