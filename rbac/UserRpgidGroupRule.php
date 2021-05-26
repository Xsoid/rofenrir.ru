<?php

namespace app\rbac;

use Yii;
use yii\rbac\Rule;

use yii\helpers\ArrayHelper;
use share\modules\community\models\Group;
use share\modules\community\models\UserRole;

/**
 * Checks if user group matches
 */
class UserRpgidGroupRule extends Rule
{
    public $name = 'userRpgidGroup';

    public function execute($user, $item, $params)
    {
        if (!Yii::$app->user->isGuest) {
            $extRole = $this->getExtRole($item->description);
            $extUserRoles = $this->getExtUserRoles($user);
            
            if ($item->name === 'moderator') {
                return isset($extUserRoles[$extRole]);
            }
            if ($item->name === 'admin') {
                return $this->isExtAdmin($extUserRoles);
            }
        }
        return false;
    }

    private function getExtRole($description) {
        static $extRoles;
        if (!$extRoles) {
            $roles = Group::findRolesByCurrentDomain();
            $extRoles = ArrayHelper::map($roles, 'name', 'id');
        }
        return isset($extRoles[$description]) ? $extRoles[$description] : false;
    }

    private function getExtUserRoles($userId) {
        static $roles;
        if (!$roles) {
            $roles = Group::findUserRolesByCurrentDomain($userId);
        }
        return $roles;
    }

    private function isExtAdmin($extUserRoles) {
        $adminRole = Yii::$app->authManager->getItem('admin');
        $extRole = $this->getExtRole($adminRole->description);
        if ($extRole) {
            return isset($extUserRoles[$extRole]);
        }
        return false;
    }
}