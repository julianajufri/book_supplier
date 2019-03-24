<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->userID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->userID], ['confirm' => __('Are you sure you want to delete # {0}?', $user->userID)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->userID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('UName') ?></th>
            <td><?= h($user->uName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UPhone') ?></th>
            <td><?= h($user->uPhone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UEmail') ?></th>
            <td><?= h($user->uEmail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UAddress') ?></th>
            <td><?= h($user->uAddress) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AuthorID') ?></th>
            <td><?= h($user->authorID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserID') ?></th>
            <td><?= $this->Number->format($user->userID) ?></td>
        </tr>
    </table>
</div>
