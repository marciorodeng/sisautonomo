<?php if (isset($msg)) echo $msg; ?>

<div class="row">

    <div class="col-md-2"></div>
    <div class="col-md-8">

        <?php echo validation_errors(); ?>

        <div class="panel panel-primary">

            <div class="panel-heading"><strong><?php echo $titulo; ?></strong></div>
            <div class="panel-body">

                <p><b>Nome do Atividade</b>: *</p>

                <div class="row">
                    <?php echo form_open($form_open_path, 'role="form"'); ?>
                    <div class="col-md-6">
                        <input type="text" class="form-control" maxlength="45"
                               autofocus name="Atividade" value="<?php echo $query['Atividade'] ?>">
                    </div>

                    <div class="col-md-6">
                        <?php echo $button ?>
                    </div>
                    
                    <input type="hidden" name="idApp_Atividade" value="<?php echo $query['idApp_Atividade']; ?>">
                    </form>

                </div>

                <br>                
                
                <?php if (isset($list)) echo $list; ?>

            </div>

        </div>

    </div>
    <div class="col-md-2"></div>

</div>