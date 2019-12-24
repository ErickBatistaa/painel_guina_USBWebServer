<!DOCTYPE html>
<html> 
<head>
    <title>CRUD Templates Codeigniter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <br />
        <h3 align="center">CRUD Templates Codeigniter</h3>
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
                    <div class = "form-group">
                        
                       <!-- <input type="submit" name="create" value="Create" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <a href="<?php echo base_url(); ?>crud/create">Create</a>
                    </div>    


                    <div class = "form-group">    

                       <!-- <input type="submit" name="update" value="Update" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <a href="<?php echo base_url(); ?>crud/update">Update</a>
                        

                    </div>

                   <!-- <div class = "form-group"> -->    

                        <!-- <input type="submit" name="update" value="Update" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                       <!-- <a href="<?php echo base_url(); ?>crud/mostrar_templates">Mostrar templates</a> -->
                        

                    <!-- </div> -->
                        

                    <div class = "form-group">
                    
                       <!-- <input type="submit" name="delete" value="Delete" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <a href="<?php echo base_url(); ?>crud/delete">Delete</a>
                        

                    </div>
                        
                    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
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
  </tr>
  <tr>
    <td>

    <?php

        $query = $this->db->query('SELECT * FROM templates');

        foreach ($query->result_array() as $row)
        {
                echo $row['header'].'<br>'; 
        }


    ?>

    </td>
        <td>
    <?php

    $query = $this->db->query('SELECT * FROM templates');

    foreach ($query->result_array() as $row)
    {
        echo $row['content'].'<br>'; 
    }



?>

</td>
<td>
<?php

$query = $this->db->query('SELECT * FROM templates');

foreach ($query->result_array() as $row)
{
    echo $row['type'].'<br>'; 
}



?>
</td>
<td>
<?php

$query = $this->db->query('SELECT * FROM templates');

foreach ($query->result_array() as $row)
{
    echo $row['createdUser'].'<br>'; 
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
                        <!--<a href="<?php echo base_url(); ?>register">Register</a>-->
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>

