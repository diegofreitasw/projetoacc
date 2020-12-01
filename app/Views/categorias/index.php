<?php echo $this->extend('_common/layout') ?>
<?php echo $this->section('content') ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><?php echo anchor('', "Home") ?></li>
        <li class="breadcrumb-item active" aria-current="page">Categorias ACC</li>
    </ol>
</nav>
<h1>Categorias</h1>
<div class="card">
    <div class="card-header">
        Categorias -
        <?php echo count($categorias) ?>
        registro(s) encontrado(s)
    </div>
    <div class="card-body">
        <div
            class="row no-gutters d-flex justify-content-center justify-content-sm-between">
            <div class="my-3">
            <?php echo anchor("categorias/create", 'Nova Categoria', ['class' => 'btn btn-primary btn-sm']) ?>
            </div>            
            <?php echo form_open('categorias', ['class' => 'form-inlie', 'method' => 'GET']) ?>
            <div class="form-group d-flex justify-content-center my-3"></div>
            </form>
        </div>

    <div class="table-responsive">
        <table class="table table-stripped table-hover">
            <thead>
                <tr class="bg-dark text-white">
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Carga Horária Máxima</th>
                    <th>Curso</th>
                    <th class="text-center">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($categorias as $categoria) : ?>
                <tr>

                    <td><?php echo $categoria['idcategoria_acc'] ?></td>

                    <td><?php echo $categoria['nome'] ?></td>

                    <td><?php echo $categoria['descricao'] ?></td>

                    <td><?php echo $categoria['idcategoria_acc'] ?></td>

                    <td><?php echo $categoria['ch_max'] ?></td>

                    <td><?php echo $categoria['curso_idcurso'] ?></td>
                    <td class="text-center">
                        <?php echo anchor("categoria/{$categoria['curso_idcurso']}/edit", 'Editar', ['class' => 'btn btn-success btn-sm']) ?>
                        -
                        <?php echo anchor("categoria/{$categoria['curso_idcurso']}/delete", 'Excluir', ['class' => 'btn btn-danger btn-sm']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="text-center"><?php echo  $pager->links('default','bootstrap_pager') ?></div>
</div>
</div>

<?php echo $this->endSection('content') ?>