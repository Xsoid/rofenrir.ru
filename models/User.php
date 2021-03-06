<?php
namespace app\models;

use share\models\BaseRemoteUser;
use yii\helpers\ArrayHelper;

/**
 * Class User
 * @property GameAccount[] $gameAccounts
 * @property string[] $checkedEmails
 * @property string[] $gameAccountEmails
 * @package app\models
 */
class User extends BaseRemoteUser
{
    /**
     * @return string[]
     */
    public function getCheckedEmails() {
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
        return $emails;
    }

    private $_accounts;
    /**
     * @return GameAccount[]|\yii\db\ActiveQuery
     */
    public function getGameAccounts() {
        if ($this->_accounts === null) {
            $emails = $this->checkedEmails;
            $query = GameAccount::find()->where([
                'email' => $emails,
            ]);
            $query->multiple = true;
            $this->_accounts = $query->all();
        }
        return $this->_accounts;
    }

    public function getGameAccountEmails() {
        return ArrayHelper::getColumn($this->gameAccounts, 'email');
    }

    public function getGameAccount($id) {
        foreach ($this->gameAccounts as $account) {
            if ($account->account_id == $id) {
                return $account;
            }
        }
        return null;
    }

    public function getNewGameEmails()
    {
        $result = $this->checkedEmails;
        return array_combine($result, $result);
    }
}
