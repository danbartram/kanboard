<div class="sidebar">
    <ul>
        <li <?= $this->app->checkMenuSelection('DashboardController', 'show') ?>>
            <?= $this->url->link(t('Overview'), 'DashboardController', 'show', array('user_id' => $user['id'])) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('DashboardController', 'projects') ?>>
            <?= $this->url->link(t('My projects'), 'DashboardController', 'projects', array('user_id' => $user['id'])) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('DashboardController', 'tasks') ?>>
            <?= $this->url->link(t('My tasks'), 'DashboardController', 'tasks', array('user_id' => $user['id'])) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('DashboardController', 'subtasks') ?>>
            <?= $this->url->link(t('My subtasks'), 'DashboardController', 'subtasks', array('user_id' => $user['id'])) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('DashboardController', 'calendar') ?>>
            <?= $this->url->link(t('My calendar'), 'DashboardController', 'calendar', array('user_id' => $user['id'])) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('DashboardController', 'activity') ?>>
            <?= $this->url->link(t('My activity stream'), 'DashboardController', 'activity', array('user_id' => $user['id'])) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('DashboardController', 'notifications') ?>>
            <?= $this->url->link(t('My notifications'), 'DashboardController', 'notifications', array('user_id' => $user['id'])) ?>
        </li>
        <?= $this->hook->render('template:dashboard:sidebar') ?>
    </ul>
</div>
