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
                
                    <!--<div class="form-group">
                        <label>Enter Email Address</label>
                        <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                    </div>-->
                    <!--<div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                    </div>-->
                   <!-- <div class = "form-group">
                        
                       <!-- <input type="submit" name="create" value="Create" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                       <!-- <a href="<?php echo base_url(); ?>crud/create">Create</a>-->
                    <!--</div>    


                    <div class = "form-group">    

                       <!-- <input type="submit" name="update" value="Update" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <!--<a href="<?php echo base_url(); ?>crud/update">Update</a>-->
                        

                    
                        

                   <!-- <div class = "form-group">-->
                    
                       <!-- <input type="submit" name="delete" value="Delete" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <!--<a href="<?php echo base_url(); ?>crud/delete">Delete</a>-->
                        

                    <!--</div>-->

                        <!--<a href="<?php echo base_url(); ?>register">Register</a>-->


                        <?=form_open('Update_Crud/validation')?>


                    <div class="form-group">
                        <label>Nome do arquivo</label>
                        <input type="text" name="header" class="form-control" value="<?php echo set_value('header'); ?>" />
                        <span class="text-danger"><?php echo form_error('header'); ?></span>
                    </div>

                    <div class = "form-group">
                        <label>Tipos de template</label>
                        <select id = tiposTemp name="type" value ="<?php echo set_value('type');?>">
                            <option>Selecione um tipo de template</option>
                            <option value = "celebracao">Celebração</option>
                            <option value = "noticia">Notícia</option>
                            <option value = "campanha">Campanha</option>
                            <option value = "anuncio">Anúncio</option>
                        </select>
                    </div>

                    <div class = "form-group">
                        <label>Conteúdo</label>
                        <!--<select onchange="location=this.value" id = contTemp>
                            <option>escolha</option>
                            <option value="http://">1</option>
                            <option value="http://">2</option>
                        </select>-->
                       <!-- <form action="C:\Users\Mehmet\Desktop\USBWebserver v8.6\root\marketing.guianaturquia.com" method="get"> <input type="submit" value="Selecione um template"/></form>-->
                       <!--<a href=""><button>Selecione um template</button></a>-->
                       <!--<form action="envia_template.php" method="post" enctype="multipart/form-data"> <input type="file" name="Arquivo" id="Arquivo"><br> <input type="submit" value="Enviar"> <input type="reset" value="Apagar">-->

                     
                       <textarea name="content" class="form-control" value="<?php echo set_value('content'); ?>"  </textarea>

                    </div>

                   <!-- <a href = "<?php echo base_url(); ?>crud">Voltar</a>-->

                    <!--<div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                    </div>-->

                    <button type="submit" class="btn btn-danger">Save</button>

                    <div class = "form-group">
                        <!--<input type="submit" name="create" value="Create" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--> 
                        <a href="<?php echo base_url(); ?>crud">Voltar</a>
                    </div>    
                    
                    <!--<a href = "<?php echo base_url(); ?>crud">Voltar</a>-->
                </div>
            </div>
        </div>
    </div>
</body>
</html>

