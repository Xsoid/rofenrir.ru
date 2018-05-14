<?php
namespace app\models;

use share\models\BaseUser;

/**
 * Class User
 * @property GameAccount[] $gameAccounts
 * @package app\models
 */
class User extends BaseUser
{
    /**
     * @return GameAccount[]|\yii\db\ActiveQuery
     */
    public function getGameAccounts() {
        $emails = [];
        if ($this->email_checked) {
            $emails[] = $this->email;
        }
        foreach ($this->emailContacts as $contact) {
            if ($contact->confirmed) {
                $emails[] = $contact->value;
            }
        }
        if (empty($emails)) {
            return [];
        }
        $emails = $this->emails;
        $query = GameAccount::find()->where([
            'email' => $emails,
        ]);
        $query->multiple = true;
        return $query;
    }

    public function getGameAccount($id) {
        foreach ($this->gameAccounts as $account) {
            if ($account->account_id == $id) {
                return $account;
            }
        }
        return null;
    }
}
