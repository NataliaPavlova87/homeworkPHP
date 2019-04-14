Шифрованный код, хардкод

$res = mysqli_query($link, "SELECT name, zakaz, status FROM zakaz WHERE id = $id");
		$row = mysqli_fetch_assoc($res);
        $zakaz = json_decode($row['zakaz'], true);
        

Спагетти-код
        if (!empty($_GET['id'])) {
		$id = (int)$_GET['id'];
		
		$res = mysqli_query($link, "SELECT name, zakaz, status FROM zakaz WHERE id = $id");
		$row = mysqli_fetch_assoc($res);
		$zakaz = json_decode($row['zakaz'], true);
		

		$content .=<<<php
		<h2>Имя пользователя:{$row['name']}</h2>
		<p class="link-goods">Статус заказа: {$row['status']}</p>
		<form class="form-admin" action="?page=admin&action=changeStatus&id=$id" method="post">
		<p class="text">Изменить статус:</p>
		<input type="text" name="status">
		<input type="submit">
		<span>1 - заказ принят;</span> <span>2 - заказ оплачен;</span> <span>3 - заказ выслан;</span>
		<span>4 - заказ доставлен;</span>
		</form>
php;
		foreach($zakaz as $key => $value) {
			$res = mysqli_query($link, "SELECT name FROM gods WHERE id = $key");
			$row = mysqli_fetch_assoc($res);
			$content .= "<p class='link-goods name'>{$row['name']}</p>";
			$content .= "<p class='link-goods'>Количество товара: $value </p>";
		}
		$content .= '<a class="link-show" href="?page=admin">Назад</a>';
	}
    return $content;
    



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            'username',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{delete}',
                'buttons' => [
                    'delete' => function ($url, $model, $key) {
                        $icon = \yii\bootstrap\Html::icon('remove');

                        $modelTask = TaskUser::findOne(['user_id' => $model->id]);

                        return Html::a($icon, ['task-user/delete', 'id' => $modelTask->id],
                    [
                        'data' => [
                            'confirm' => 'Are you sure you want to delete all this item?',
                            'method' => 'post',
                        ],
                    ]
                    );
                    },
                ]
            ],
        ],
    ]); ?>

Хардкод
	session_start();
	$link = mysqli_connect('localhost', 'root', '', 'gbphp') or die(mysqli_error($link));
	define('LOG', 'kh lkj lkj ');