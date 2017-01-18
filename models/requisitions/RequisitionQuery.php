<?
namespace app\models\requisitions;

use yii\db\ActiveQuery;

class RequisitionQuery extends ActiveQuery
{
    public $type;

    public function prepare($builder)
    {
        if ($this->type !== null) {
            $this->andWhere(['type' => $this->type]);
        }
        return parent::prepare($builder);
    }
}