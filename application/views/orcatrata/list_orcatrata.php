<div class="container-fluid">
    <div class="row">

        <div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
    			<li role="presentation"><a href="#proxima" aria-controls="proxima" role="tab" data-toggle="tab">Or�amentos Aprovados</a></li>
                <li role="presentation" class="active"><a href="#anterior" aria-controls="anterior" role="tab" data-toggle="tab">Or�amentos N�o Aprovados</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

    			<!-- Pr�ximas Consultas -->
                <div role="tabpanel" class="tab-pane" id="proxima">

                    <?php
                    if ($aprovado) {

                        foreach ($aprovado->result_array() as $row) {
                    ?>

                    <div class="bs-callout bs-callout-success" id=callout-overview-not-both>

                        <a class="btn btn-success" href="<?php echo base_url() . 'orcatrata/alterar/' . $row['idApp_OrcaTrata'] ?>" role="button">
                            <span class="glyphicon glyphicon-edit"></span> Editar Dados
                        </a>

                        <br><br>

                        <h4>
                            <span class="glyphicon glyphicon-calendar"></span> <b>Data do Or�amento:</b> <?php echo $row['DataOrca']; ?>
                        </h4>

                        <p>
                            <?php if ($row['ProfissionalOrca']) { ?>
                            <span class="glyphicon glyphicon-user"></span> <b>Profissional:</b> <?php echo $row['ProfissionalOrca']; ?> -
                            <?php } if ($row['AprovadoOrca']) { ?>
                            <span class="glyphicon glyphicon-thumbs-up"></span> <b>Or�amento Aprovado?</b> <?php echo $row['AprovadoOrca']; ?>
                            <?php } ?>

                        </p>
                        <p>
                            <span class="glyphicon glyphicon-pencil"></span> <b>Obs:</b> <?php echo nl2br($row['ObsOrca']); ?>
                        </p>

                    </div>

                    <?php
                        }
                    } else {
                        echo '<br><div class="alert alert-info text-center" role="alert"><b>Nenhum registro</b></div>';
                    }
                    ?>

                </div>

                <!-- Hist�rico de Consultas -->
                <div role="tabpanel" class="tab-pane active" id="anterior">

                    <?php
                    if ($naoaprovado) {

                        foreach ($naoaprovado->result_array() as $row) {
                    ?>

                    <div class="bs-callout bs-callout-danger" id=callout-overview-not-both>

                        <a class="btn btn-danger" href="<?php echo base_url() . 'orcatrata/alterar/' . $row['idApp_OrcaTrata'] ?>" role="button">
                            <span class="glyphicon glyphicon-edit"></span> Editar Dados
                        </a>

                        <br><br>

                        <h4>
                            <span class="glyphicon glyphicon-calendar"></span> <b>Data do Or�amento:</b> <?php echo $row['DataOrca']; ?>
                        </h4>

                        <p>
                            <?php if ($row['ProfissionalOrca']) { ?>
                            <span class="glyphicon glyphicon-user"></span> <b>Profissional:</b> <?php echo $row['ProfissionalOrca']; ?> -
                            <?php } if ($row['AprovadoOrca']) { ?>
                            <span class="glyphicon glyphicon-thumbs-up"></span> <b>Or�amento Aprovado?</b> <?php echo $row['AprovadoOrca']; ?>
                            <?php } ?>

                        </p>
                        <p>
                            <span class="glyphicon glyphicon-pencil"></span> <b>Obs:</b> <?php echo nl2br($row['ObsOrca']); ?>
                        </p>

                    </div>

                    <?php
                        }
                    } else {
                        echo '<br><div class="alert alert-info text-center" role="alert"><b>Nenhum registro</b></div>';
                    }
                    ?>

                </div>

            </div>

        </div>

    </div>

</div>
