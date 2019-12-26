<!DOCTYPE html>
<html> 
<head>
    <title>CRUD Templates Codeigniter Delete</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <br />
        <h3 align="center">CRUD Templates Codeigniter Delete</h3>
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">Create, Update, Delete templates</div>
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
                   <!-- <div class = "form-group"> -->
                        
                       <!-- <input type="submit" name="create" value="Create" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                     <!--   <a href="<?php echo base_url(); ?>crud/create">Create</a> -->
                   <!-- </div> -->   


                   <!-- <div class = "form-group"> -->    

                       <!-- <input type="submit" name="update" value="Update" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                     <!--   <a href="<?php echo base_url(); ?>crud/update">Update</a> -->
                        

                   <!-- </div> -->
                        

                  <!--  <div class = "form-group"> -->
                    
                       <!-- <input type="submit" name="delete" value="Delete" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                    <!--    <a href="<?php echo base_url(); ?>crud/delete">Delete</a> -->
                        

                   <!-- </div> -->

                        <!--<a href="<?php echo base_url(); ?>register">Register</a>-->
                    
                        <div class = "form-group">
                        <!--<input type="submit" name="create" value="Create" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--> 
                            <a href="<?php echo base_url(); ?>crud">Mostrar templates </a>
                        </div>  

                    <head>    
                    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #080808;
  text-align: center;
  padding: 2px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Templates</h2>

<table>
  <tr>
    <th>Nome</th>
    <th>Conteúdo</th>
    <th>Tipo</th>
    <th>Numeração</th>
    <th>Ações</th>
  </tr>
  <tr>
    <td>

    <?php

        $query = $this->db->query('SELECT * FROM templates');

        foreach ($query->result_array() as $row)
        {
                echo $row['header'].'<br>'.'<hr/>'; 
        }


    ?>

    </td>
        <td>
    <?php

    $query = $this->db->query('SELECT * FROM templates');

    foreach ($query->result_array() as $row)
    {
        echo $row['content'].'<br>'.'<hr/>'; 
    }



?>

</td>
<td>
<?php

$query = $this->db->query('SELECT * FROM templates');

foreach ($query->result_array() as $row)
{
    echo $row['type'].'<br>'.'<hr/>'; 
}



?>
</td>
<td>
<?php

$query = $this->db->query('SELECT * FROM templates');

foreach ($query->result_array() as $row)
{
    echo $row['ID'].'<br>'.'<hr/>'; 
}

?>
</td>
<td>
<?php

    $query = $this->db->query('SELECT * FROM templates');

    foreach ($query->result_array() as $row)
    {
       
       
       echo anchor('Delete_Crud/validation/'.$row['ID'], 'Delete').'<br>'.'<hr/>';
      //  echo form_open('Delete_Crud/validation').'<button type="submit" class="btn btn-danger" name = "botao" value = "botao">Deletar</button>'.'<br>'.'<hr/>';
        /*if(form_open('Delete_Crud/validation') == true){
            $cont = $this->db->query('SELECT createdUser FROM templates');
        }*/
        
    }

    

?>
</td>
  </tr>
  <!--<tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>-->
</table>
</body>


            </div>
        </div>
    </div>
</body>
</html>

