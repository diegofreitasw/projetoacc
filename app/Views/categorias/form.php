<?php echo $this->extend('_common/layout') ?>
<?php echo $this->section('content') ?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><?php echo anchor('', "Home") ?></li>
        <li class="breadcrumb-item"><?php echo anchor('categoria', "Categorias") ?></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
    </ol>
</nav>
<h1>Categorias</h1>
<div class="card">
    <div class="card-header">
        <?php echo $titulo; ?>
    </div>
    <div class="card-body">
        <?php echo form_open('categorias/store') ?>
        <div class="form-group col-sm-6">
            <label for="nome">Nome</label>
            <input
                type="text"
                name="nome"
                id="nome"
                class="form-control"
                autofocus="autofocus"
                value="<?php echo !empty($categoria['nome']) ? $categoria['nome'] : set_value('nome') ?>">
            <?php if (!empty($errors['nome'])) : ?>
            <div class="alert alert-danger mt-2"><?php echo $errors['nome'] ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group col-sm-6">
            <label for="descricao">Descrição</label>
            <input
                type="text"
                name="descricao"
                id="descricao"
                class="form-control"
                autofocus="autofocus"
                value="<?php echo !empty($categoria['descricao']) ? $categoria['descricao'] : set_value('descricao') ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="ch_max">Carga Horária Maxima</label>
            <input
                type="text"
                name="ch_max"
                id="ch_max"
                class="form-control"
                autofocus="autofocus"
                value="<?php echo !empty($categoria['ch_max']) ? $categoria['ch_max'] : set_value('ch_max') ?>">

        </div>
        <div class="form-group col-sm-4">
            <label for="curso_idcurso">Curso</label>
            <?php $options = [
                '' => 'Selecione',
                '1' => 'TS1',
                '2' => 'TS2',
                '3' => 'TS3'
            ]; ?>
            <?php echo form_dropdown('curso_idcurso', $options, !empty($categoria['curso_idcurso']) ? $categoria['curso_idcurso'] : set_value('curso_idcurso'), ['curso_idcurso' => 'curso_idcurso', 'class' => 'form-control']) ?>

        </div>
        <div class="form-group col-sm-12">
            <input type="submit" class="btn btn-primary" value="Salvar">
        </div>

        <?php echo form_close() ?>
    </div>
</div>
<?php echo $this->endSection('content') ?>