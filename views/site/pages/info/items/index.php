<?php

/* @var $this yii\web\View */

$this->title = 'Квесты для получения предметов';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Квестовые предметы, items, Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Квесты на получение игровых ценностей.'
]);
$this->params['breadcrumbs'][] = ['label' => 'Путиводитель', 'url' => ['info/index']];
$this->params['breadcrumbs'][] = 'Квестовые предметы';
?>
<style type="text/css">
.table_sort th {
    cursor: pointer;
}
th.sorted[data-order="1"],
th.sorted[data-order="-1"] {
    position: relative;
}
th.sorted[data-order="1"]::after,
th.sorted[data-order="-1"]::after {
    right: 8px;
    position: absolute;
}
th.sorted[data-order="-1"]::after {
	content: "▼"
}
th.sorted[data-order="1"]::after {
	content: "▲"
}
</style>
<div class="row">
    <div class="col">
        <h1>Квесты для получения предметов</h1>
        <table class="table table-hover table_sort">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Название</th>
                    <th>Название [rus]</th>
                    <th>Тип</th>
                    <th>Класс</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2202</td>
                    <th><a href="2202">Sunglasses [1]</a></th>
                    <td>Темные очки [1]</td>
                    <td>Экипировка</td>
                    <td>Головной убор</td>
                </tr>
                <tr>
                    <td>5436</td>
                    <th><a href="5436">Bride's Corolla</a></th>
                    <td>Венок невесты</td>
                    <td>Экипировка</td>
                    <td>Головной убор</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="bs-component">
            <?= $this->render('../_menu') ?>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', () => {
const getSort = ({ target }) => {
    const order = (target.dataset.order = -(target.dataset.order || -1));
    const index = [...target.parentNode.cells].indexOf(target);
    const collator = new Intl.Collator(['en', 'ru'], { numeric: true });
    const comparator = (index, order) => (a, b) => order * collator.compare(
        a.children[index].innerHTML,
        b.children[index].innerHTML
    );
    
    for(const tBody of target.closest('table').tBodies)
        tBody.append(...[...tBody.rows].sort(comparator(index, order)));

    for(const cell of target.parentNode.cells)
        cell.classList.toggle('sorted', cell === target);
};
document.querySelectorAll('.table_sort thead').forEach(tableTH => tableTH.addEventListener('click', () => getSort(event)));
});
</script>