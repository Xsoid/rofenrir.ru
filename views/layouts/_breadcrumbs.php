<?
use app\ext\widgets\Breadcrumbs;
?>
<?= Breadcrumbs::widget([
    'options' => ['class' => 'breadcrumb breadcrumb-manager mt-3 mb-3 p-2 border rounded', 'style' =>'--bs-breadcrumb-divider: ">"; font-size: 0.8rem;' ],
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    'linkClass' => 'invert-link',
    'activeLinkClass' => '',
    'itemTemplate' => '<li class="breadcrumb-item">{link}</li>',
    'activeItemTemplate' => '<li class="breadcrumb-item -active">{link}</li>',
    'activeLinkTag' => 'span',
]) ?>