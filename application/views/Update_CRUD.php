<!DOCTYPE html>
<html> 
<head>
    <title>CRUD Templates Codeigniter Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <br />
        <h3 align="center">CRUD Templates Codeigniter Update</h3>
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">Create, Update, Delete templates</div>
            <div class="panel-body">

                    <?php echo form_open('Update_Crud/alterar'); ?>
                    <div class="form-group">
                        <label>Nome do arquivo</label>
                        <input type="text" name="header" class="form-control" value = "<?=@$dados->header?> " />
                        <span class="text-danger"><?php echo form_error('header'); ?></span>
                    </div>

                    <div class = "form-group">
                        <label>Tipos de template</label>
                        <select id = tiposTemp name="type" value = "<?=@$dados->type?>">
                            <option>Selecione um tipo de template</option>
                            <option value = "celebracao">Celebração</option>
                            <option value = "noticia">Notícia</option>
                            <option value = "campanha">Campanha</option>
                            <option value = "anuncio">Anúncio</option>
                        </select>
                    </div>

                    <?php print_r($dados);?>

                    <?php echo $dados->header.'---'?>

                    

                    <div class = "form-group">
                        <label>Conteúdo</label>                     
                            <textarea name="content" class="form-control" value="<?=@$dados->content?>"></textarea>
                    </div>

                    <button type="submit" class="btn btn-danger">Save</button><hr/>

                    <div class = "form-group">
                        <!--<input type="submit" name="create" value="Create" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--> 
                        <a href="<?php echo base_url(); ?>crud">Voltar</a>
                    </div>    
                    
                    <!--<a href = "<?php echo base_url(); ?>crud">Voltar</a>-->
            
            </div>
        </div>
    </div>
</body>
</html>

