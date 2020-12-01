<?php echo $this->extend('_common/layout') ?>
<?php echo $this->section('content') ?>


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><?php echo anchor('', "Home") ?></li>
        <li class="breadcrumb-item active" aria-current="page">Usuários</li>
    </ol>
</nav>

<h1>Usuários</h1>
<div class="card">
    <div class="card-header">
       
    </div>
    <div class="card-body">
        <?php echo form_open('usuarios/store', ['novalidate' => true]) ?>
        <div class="form-group col-sm-6">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" autofocus="autofocus" requerid value="<?php echo set_value('nome')?>">
            
           
          
        </div>
       
        <div class="form-group col-sm-12">
            <input type="submit" class="btn btn-primary" value="Salvar">
        </div>

        <?php echo form_close() ?>
    </div>
</div>

<?php echo $this->endSection('content') ?>