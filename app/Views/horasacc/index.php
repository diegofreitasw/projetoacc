<?php echo $this->extend('_common/layout') ?>
<?php echo $this->section('content') ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><?php echo anchor('', "Home") ?></li>
        <li class="breadcrumb-item active" aria-current="page">Horas ACC</li>
    </ol>
</nav>
<div class="card">
    <div class="card-header">
        <div
            class="row no-gutters d-flex justify-content-center justify-content-sm-start">
            <div class="text-center">Último registros encontrados -
                <strong class="text-uppercase"><?php echo date("m/Y") ?></strong>
            </div>
            <div class="d-none d-sm-block">&nbsp; - &nbsp;</div>
            <div class="text-center"></div>
        </div>
    </div>
    <div class="card-body">
        <div
            class="row no-gutters d-flex justify-content-center justify-content-sm-between">
            <div class="my-3"></div>

            <div class="form-group d-flex justify-content-center my-3">
                <input
                    type="search"
                    name="search"
                    autocomplete="off"
                    placeholder="busca..."
                    class="form-control"
                    value="<?php echo !empty($search) ? $search : '' ?>">
                <input type="submit" class="ml-2 btn btn-primary" value="OK">
            </div>
        </form>
    </div>
    <div class="row no-gutters d-flex justify-content-center">

        <input type="hidden" name="mes" value="">
    </form>
</div>
<div class="row no-gutters d-flex justify-content-center mb-3"></div>
<div class="my-3"><button type="button" class="btn btn-primary">Adicionar Categoria</button></div>
<div class="table-responsive">
    <table class="table table-stripped table-hover">
        <thead>
            <tr class="bg-dark text-white">
                <th>Id</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>CH Maxima</th>
                <th>Curso</th>
                <th class="text-center">Ação</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td colspan="7" class="bg-light text-uppercase font-weight-bold">
                    <span class=" ml-2 py-2">
                        <small></small>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

<?php echo $this->endSection('content') ?>