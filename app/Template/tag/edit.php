<div class="page-header">
    <h2><?= t('Edit a tag') ?></h2>
</div>
<form method="post" action="<?= $this->url->href('TagController', 'update', array('tag_id' => $tag['id'])) ?>" autocomplete="off">
    <?= $this->form->csrf() ?>
    <?= $this->form->hidden('id', $values) ?>
    <?= $this->form->hidden('project_id', $values) ?>

    <?= $this->form->label(t('Name'), 'name') ?>
    <?= $this->form->text('name', $values, $errors, array('autofocus', 'required', 'maxlength="191"')) ?>

    <?= $this->form->label(t('Color'), 'color_id') ?>
    <?= $this->form->select('color_id', $colors, $values, $errors, array(), 'color-picker') ?>

    <?= $this->modal->submitButtons() ?>
</form>
