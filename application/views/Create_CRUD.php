<!DOCTYPE html>
<html> 
<head>
    <title>CRUD Templates Codeigniter Create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <br />
        <h3 align="center">CRUD Templates Codeigniter Create</h3>
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">Create templates</div>
            <div class="panel-body">
              <?php   
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata('message').'
                    </div>
                    ';
                }
                ?> 
                
                    <div class="form-group">
                        <label>Nome do arquivo</label>
                        <input type="text" name="user_header" class="form-control" value="<?php echo set_value('user_header'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_header'); ?></span>
                    </div>

                    <div class = "form-group">
                        <label>Tipos de template</label>
                        <select id = tiposTemp>
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
                       <form enctype="multipart/form-data" action="<?php echo base_url(); ?>crud/create/validation" method="POST">
                            <!-- MAX_FILE_SIZE deve preceder o campo input -->
                            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                            <!-- O Nome do elemento input determina o nome da array $_FILES -->
                            <input name="userfile" type="file" />
                            <input type="submit" value="Enviar arquivo" />
                        </form>
                      
                    </div>
                    <!--<div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                    </div>-->
                    <div class = "form-group">
                        <!--<input type="submit" name="create" value="Create" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--> 
                        <a href="<?php echo base_url(); ?>crud">Retornar</a>
                    </div>    


                    <!--<div class = "form-group">    

                        <input type="submit" name="update" value="Update" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo base_url(); ?>crud/update">Update</a>
                        

                    </div>
                        

                    <div class = "form-group">
                    
                        <input type="submit" name="delete" value="Delete" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        <a href="<?php echo base_url(); ?>crud/delete">Delete</a>
                        

                    </div>-->

                        <!--<a href="<?php echo base_url(); ?>register">Register</a>-->
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>

