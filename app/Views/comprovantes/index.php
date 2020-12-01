<?php echo $this->extend('_common/layout') ?>
<?php echo $this->section('content') ?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><?php echo anchor('', "Home") ?></li>
        <li class="breadcrumb-item active" aria-current="page">Comprovantes ACC</li>
    </ol>
</nav>
<h1>Comprovantes</h1>
<div class="card">
    <div class="card-header">
        Comprovantes -
        
        registro(s) encontrado(s)
    </div>
    <div class="card-body">
        <div
            class="row no-gutters d-flex justify-content-center justify-content-sm-between">
            <div class="my-3">
                <?php echo anchor("comprovantes/create", 'Novo Comprovante', ['class' => 'btn btn-primary btn-sm']) ?>
            </div>
            <?php echo form_open('comprovantes', ['class' => 'form-inlie', 'method' => 'GET']) ?>
            <div class="form-group d-flex justify-content-center my-3"></div>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-stripped table-hover">
            <thead>
                <tr class="bg-dark text-white">
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Ano</th>
                    <th>Data Inicio</th>
                    <th>Data Fim</th>
                    <th>CH Realizada</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Arquivo</th>
                    <th>Instituição</th>
                    <th>Observação</th>
                    
                    <th class="text-center">Ação</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($comprovantes as $comprovante) : ?>
                <tr>

                    <td><?php echo $comprovante['idcomprovantes_acc'] ?></td>

                    <td><?php echo $comprovante['nome'] ?></td>

                    <td><?php echo $comprovante['ano'] ?></td>

                    <td><?php echo $comprovante['dt_ini'] ?></td>

                    <td><?php echo $comprovante['dt_fim'] ?></td>

                    <td><?php echo $comprovante['ch_realizada'] ?></td>

                    <td><?php echo $comprovante['cidade'] ?></td>

                    <td><?php echo $comprovante['estado'] ?></td>

                    <td><?php echo $comprovante['arquivo'] ?></td>

                    <td><?php echo $comprovante['instituicao'] ?></td>

                    <td><?php echo $comprovante['obs'] ?></td>

                    

                    <td class="text-center">
                       
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
  
</div>
</div>

<?php echo $this->endSection('content') ?>
