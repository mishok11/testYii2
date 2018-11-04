<?php
  
  use yii\widgets\LinkPager;
  use yii\grid\GridView;
?>
<h1>Logs</h1>
 <?= GridView::widget([
        'dataProvider' => $dataProvider,
          'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'time',
            'key',

        ],
    ]); ?>

