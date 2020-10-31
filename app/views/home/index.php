<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Elofy Food</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="public/css/elofy-food.css" rel="stylesheet">
    <link href="public/css/breakpoint.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar fixed-top bg">
        <a href="#" class="pl-lg-5 ml-lg-5">
            <img src="public/images/LOGO2.webp" alt="">
        </a>
    </nav>

    <main role="main" class="container px-0">
        <div class="data-table mb-5">
            <div class="top pt-3">
                <div class="row">
                    <div class="col-8 col-md-8">
                        <div class="row">
                            <div class="col-1">
                                <!-- Dropdown filter -->
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle px-0 btn-filter" id="dropdownFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="public/images/filter.jpeg" alt="filter button">
                                    </button>
                                    <div class="dropdown-menu drop-radio px-2" aria-labelledby="dropdownFilter">
                                        <form action="" method="post" id="filterRadio">
                                            <span class="pl-2">Ordenar por</span>
                                            <div class="form-check px-2 py-1">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Todos
                                                </label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1">
                                            </div>
                                            <div class="form-check px-2 py-1">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    Mais altos
                                                </label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2">
                                            </div>
                                            <div class="form-check px-2 py-1">
                                                <label class="form-check-label" for="exampleRadios3">
                                                    Medianos
                                                </label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="3">
                                            </div>
                                            <div class="form-check px-2 py-1">
                                                <label class="form-check-label" for="exampleRadios4">
                                                    Mais baixos
                                                </label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="4">
                                            </div>
                                            <hr>
                                            <span class="pl-2">Outros</span>
                                            <div class="form-check px-2 py-1">
                                                <label class="form-check-label" for="exampleRadios5">
                                                    Acima do peso
                                                </label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="5">
                                            </div>
                                            <div class="form-check px-2 py-1">
                                                <label class="form-check-label" for="exampleRadios6">
                                                    Peso ideal
                                                </label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="6">
                                            </div>
                                            <div class="form-check px-2 py-1">
                                                <label class="form-check-label" for="exampleRadios7">
                                                    Abaixo do peso
                                                </label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios7" value="7">
                                            </div>
                                            <div class="form-check px-2 py-1">
                                                <label class="form-check-label" for="exampleRadios8">
                                                    Intole. lactose
                                                </label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios8" value="8">
                                            </div>
                                            <div class="form-check px-2 py-1">
                                                <label class="form-check-label" for="exampleRadios9">
                                                    Atletas
                                                </label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios9" value="9">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /Dropdown filter -->
                            </div>
                            <!-- Search -->
                            <div class="col-md-11 col-10">
                                <form action="">
                                    <div class="form-group col-10 search">
                                        <input type="text" name="search" id="search" class="form-control" onkeyup="search()" placeholder="Search">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                        </svg>
                                    </div>
                                </form>
                            </div>
                            <!-- /Search -->

                        </div>
                    </div>
                    <!-- Dropdown buttons new users -->
                    <div class="col-4 new-user">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle float-right" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                </svg>
                                Adicionar
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ModalCSV">Importar CSV</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#storeModal">Novo usuário</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Dropdown buttons new users -->
                </div>
            </div>
            <!-- Table user -->
            <div class="table-responsive">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">
                                <input type="checkbox" name="checks">
                            </th>
                            <th scope="col">Nome</th>
                            <th scope="col" class="text-right">Altura</th>
                            <th scope="col" class="text-right">Lactose</th>
                            <th scope="col" class="text-right">Peso</th>
                            <th scope="col" class="text-right">Atleta</th>
                            <th scope="col" class="text-right pr-5"><i class="fas fa-ellipsis-h pr-1"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($users as $user) :
                        ?>
                            <tr class="data-row">
                                <th>
                                    <input type="checkbox" name="check" id="check" class="check">
                                </th>
                                <td class="nome"><?= $user['nome_usuario']; ?></td>
                                <td class="altura text-right"><?= $user['altura']; ?></td>
                                <td class="lactose text-right"><?= $user['lactose']; ?></td>
                                <td class="peso text-right"><?= $user['peso']; ?></td>
                                <td class="atleta text-right"><?= $user['atleta']; ?></td>
                                <td class="text-right pr-4">
                                    <button class="mr-2 edit" data-toggle="modal" data-target="#editModal" data-id="<?= $user['id']; ?>" data-name="<?= $user['nome_usuario']; ?>" data-altura="<?= $user['altura']; ?>" data-lactose="<?= $user['lactose']; ?>" data-peso="<?= $user['peso']; ?>" data-atleta="<?= $user['atleta']; ?>"><i class="fas fa-pen"></i></button>
                                    <a href="index.php?controller=delete&id=<?php echo $user['id']; ?>" data-confirm='Deseja realmente excluir?' class="mr-2 delete"><i class="fas fa-trash-alt"></i></a>
                                    <span class="open-card">
                                        <span><i class="fas fa-ellipsis-h more"></i></span>
                                        <div class="times">
                                            <span><i class="fas fa-times"></i></span>
                                        </div>
                                        <div class="card-actions">
                                            <button data-toggle="modal" data-target="#exampleModal" data-name="<?= $user['nome_usuario']; ?>" data-altura="<?= $user['altura']; ?>" data-lactose="<?= $user['lactose']; ?>" data-peso="<?= $user['peso']; ?>" data-atleta="<?= $user['atleta']; ?>">View</button>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /Table user -->

            <!-- Bottom table -->
            <div class="bottom">
                <div class="row">
                    <div class="col-6">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-6">
                                <form class="float-right per-page">
                                    <label for="">Rows per page </label>
                                    <select name="state" id="maxRows">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-3">
                                <p><span class="pagination-info"></span> of <span class="totalData"></span></p>
                            </div>
                            <div class="col-3">
                                <nav class="">
                                    <ul class="pagination">
                                        <button class="prev" disabled><i class="fas fa-chevron-left"></i></button>
                                        <button class="next"><i class="fas fa-chevron-right"></i></button>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Bottom table -->
        </div>
    </main><!-- /.container -->

    <!-- Modal CSV-->
    <div class="modal fade" id="ModalCSV" tabindex="-1" aria-labelledby="ModalCSVLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="ModalCSVLabel">Importar CSV</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="index.php?controller=saveCSV" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" name="file-csv" id="file-csv">
                        </div>
                        <div class="modal-footer">
                            <button class="btn save float-right" type="submit">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal CSV -->

    <!-- Modal Store -->
    <div class="modal fade" id="storeModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="storeModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="storeModalLongTitle">Novo usuário</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="index.php?controller=store" method="post">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" name="nome" id="modal-input-nome" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Altura</label>
                            <div class="col-sm-10">
                                <input type="text" name="altura" id="modal-input-altura" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Lactose</label>
                            <div class="col-sm-9">
                                <select name="lactose" id="modal-input-lactose" class="form-control">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Peso</label>
                            <div class="col-sm-10">
                                <input type="text" name="peso" id="modal-input-peso" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Atleta</label>
                            <div class="col-sm-10">
                                <select name="atleta" id="modal-input-atleta" class="form-control">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn save">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal Store -->


    <!-- Modal Edit-->
    <div class="modal fade" id="editModal" data-backdrop="static" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="editModalLabel">Editar usuário</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="index.php?controller=update" method="post">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Altura</label>
                            <div class="col-sm-10">
                                <input type="text" name="altura" id="altura" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Lactose</label>
                            <div class="col-sm-9">
                                <select name="lactose" id="lactose" class="form-control">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Peso</label>
                            <div class="col-sm-10">
                                <input type="text" name="peso" id="peso" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Atleta</label>
                            <div class="col-sm-10">
                                <select name="atleta" id="atleta" class="form-control">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn save">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal Edit-->

    <!-- Modal View-->
    <div class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Detalhes do usuário</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row info-user">
                        <div class="col-md-2">
                            <p class="text-right">Nome: </p>
                        </div>
                        <div class="col-md-10">
                            <input type="text" id="nome" class="form-control" disabled>
                        </div>
                        <div class="col-md-2">
                            <p class="text-right">Altura: </p>
                        </div>
                        <div class="col-md-10">
                            <input type="text" id="altura" class="form-control" disabled>
                        </div>
                        <div class="col-md-2">
                            <p class="text-right">Lactose: </p>
                        </div>
                        <div class="col-md-10">
                            <input type="text" id="lactose" class="form-control" disabled>
                        </div>
                        <div class="col-md-2">
                            <p class="text-right">Peso: </p>
                        </div>
                        <div class="col-md-10">
                            <input type="text" id="peso" class="form-control" disabled>
                        </div>
                        <div class="col-md-2">
                            <p class="text-right">Atleta: </p>
                        </div>
                        <div class="col-md-10">
                            <input type="text" id="atleta" class="form-control" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal View -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c4f9f0a6a1.js" crossorigin="anonymous"></script>


    <script src="public/js/elofy-table.js"></script>

    <script>
        $('#maxRows').change(function(event) {
            var selectedcategory = $(this).children("option:selected").val();
            sessionStorage.setItem("itemName", selectedcategory);
        });

        $('select').find('option[value=' + sessionStorage.getItem('itemName') + ']').attr('selected', 'selected');

        $('#filterRadio input').on('change', function() {
            this.form.submit();
        });


        $(document).ready(function() {
            $('#search').on('keyup', function() {
                let value = $(this).val().toLowerCase();
                $('#myTable tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
            $('a[data-confirm]').click(function(ev) {
                var href = $(this).attr('href');
                if (!$('#confirm-delete').length) {
                    $('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog modal-sm modal-dialog-centered"><div class="modal-content"><div class="modal-header  text-dark">Excluir <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Deseja realmente excluir?</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button><a class="btn btn-danger text-white" id="dataComfirmOK">Excluir</a></div></div></div></div>');
                }
                $('#dataComfirmOK').attr('href', href);
                $('#confirm-delete').modal({
                    show: true
                });
                return false;

            });

        });

        let table = $('#myTable');
        let tbody_check = table.find('tbody input:checkbox');

        $(function() {
            tbody_check.on('change', function() {
                $(this).closest('tr').toggleClass('bg_tr');
            });

            table.find('thead input:checkbox').change(function() {
                let c = this.checked;
                tbody_check.prop('checked', c).closest("tr").toggleClass('bg_tr');
            });
        });

        $('#exampleModal').on('show.bs.modal', function(event) {
            let button = $(event.relatedTarget);
            let nome = button.data('name');
            let altura = button.data('altura');
            let lactose = button.data('lactose');
            let peso = button.data('peso');
            let atleta = button.data('atleta');
            let modal = $(this)

            modal.find('#nome').val(nome)
            modal.find('#altura').val(altura)
            modal.find('#lactose').val(lactose)
            modal.find('#peso').val(peso)
            modal.find('#atleta').val(atleta)

        })
        $('#editModal').on('show.bs.modal', function(event) {
            let button = $(event.relatedTarget);
            let id = button.data('id');
            let nome = button.data('name');
            let altura = button.data('altura');
            let lactose = button.data('lactose');
            let peso = button.data('peso');
            let atleta = button.data('atleta');
            let modal = $(this)

            modal.find('#id').val(id)
            modal.find('#nome').val(nome)
            modal.find('#altura').val(altura)
            modal.find('#lactose').val(lactose)
            modal.find('#peso').val(peso)
            modal.find('#atleta').val(atleta)

        })
    </script>
</body>

</html>