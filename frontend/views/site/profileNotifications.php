<?php

/* @var $this yii\web\View */

$this->title = 'Profile notifications';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-profile-notifications">
  <?= $this->render('blocks/headerClosed') ?>

  <div class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?= $this->render('blocks/sidebarProfile') ?>
        </div>
        <div class="col-md-9">
          <form action="#" class="notifications-wrapper about form-wrapper">
            <div class="form-item notifications" id="notifications">
              <div class="title"><label for="notifications" >Получать по почте уведомления</label></div>
              <input type="checkbox" class="purple" id="comment">
              <label for="comment">Когда оставляют комментарий под ответом на запрос</label>
              <input type="checkbox" class="purple" id="answers">
              <label for="answers">Когда принимают или отклоняют мои ответы</label>
              <input type="checkbox" class="purple" id="request">
              <label for="request">Когда приходят ответы на мой запрос</label>
              <input type="checkbox" class="purple" id="chat">
              <label for="chat">Когда мне пишут в чат</label>
              <input type="checkbox" class="purple" id="contacts">
              <label for="contacts">Когда меня добавляют в контакты</label>
            </div>
            <div class="form-item mailing-lists">
            <div class="title"><label for="mailing-lists" >Получать по почте уведомления</label></div>
              <input type="checkbox" class="purple" id="requests-of-journalists">
              <label for="requests-of-journalists">Запросы журналистов (по будним дням в 10:00 и 15:00)</label>
              <input type="checkbox" class="purple" id="express-requests">
              <label for="express-requests">Срочные запросы топовых СМИ</label>
              <input type="checkbox" class="purple" id="account">
              <label for="account">Уведомления о критичных событиях, связанных с аккаунтом</label>
            </div>
            <div class="actions">
              <div class="actions-bottom">
                <a class="close grey button small-text black">Закрыть без изменений</a>
                <input type="submit" value="Сохранить" class="button small-text green-text grey">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
