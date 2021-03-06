<?php include_once('inc/head.php'); ?>

<body>

    <!-- HEADER -->
    <?php include_once('inc/adm_header.php'); ?>

    <main class="container-fluid m-0 p-0">

        <section class="container my-3 py-5" id="adm">
            <!-- TABELA DE GRUPOS DE SERVIÇOS -->
            <article class="mt-5 px-0">
                <div class="panel p-3">
                    <div class="panel-heading">
                        Grupos de Serviços
                    </div>
                    <hr>
                    <div>
                        <table id="tblGrid" class="table table-striped table-bordered" cellspacing="0">
                            <thead class="text-center">
                                <tr>
                                    <th>ID
                                    </th>
                                    <th>Nome
                                    </th>
                                    <th>Descrição
                                    </th>
                                    <th>Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <th scope="row">id</th>
                                    <td>nome</td>
                                    <td>descricao</td>
                                    <td>ícones (editar/excluir)..</td>
                                </tr>
                                <tr class="text-center">
                                    <th scope="row">id</th>
                                    <td>nome</td>
                                    <td>descricao</td>
                                    <td>ícones (editar/excluir)..</td>
                                </tr>
                                <tr class="text-center">
                                    <th scope="row">id</th>
                                    <td>nome</td>
                                    <td>descricao</td>
                                    <td>ícones (editar/excluir)..</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="form-group row px-3">
                        <button type="submit" class="btn btn-primary ml-auto" id="botao-login">Novo</button>
                    </div>
                </div>
            </article>

            <article class="mt-5 px-0">
                <div class="panel p-3">
                    <div class="panel-heading">
                        Serviços
                    </div>
                    <hr>
                    <div>
                        <table id="tblGrid" class="table table-striped table-bordered" cellspacing="0">
                            <thead class="text-center">
                                <tr>
                                    <th>ID
                                    </th>
                                    <th>Nome
                                    </th>
                                    <th>Descrição
                                    </th>
                                    <th>Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr class="text-center">
                                    <th scope="row">id</th>
                                    <td>nome</td>
                                    <td>descricao</td>
                                    <td>ícones (editar/excluir)..</td>
                                </tr>
                                <tr class="text-center">
                                    <th scope="row">id</th>
                                    <td>nome</td>
                                    <td>descricao</td>
                                    <td>ícones (editar/excluir)..</td>
                                </tr>
                                <tr class="text-center">
                                    <th scope="row">id</th>
                                    <td>nome</td>
                                    <td>descricao</td>
                                    <td>ícones (editar/excluir)..</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <hr>
                    <div class="form-group row px-3">
                        <button type="submit" class="btn btn-primary ml-auto" id="botao-login">Novo</button>
                    </div>
                </div>
            </article>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include_once('inc/footer.php'); ?>
</body>

</html>