<!DOCTYPE html>
<html> 
<head>
    <title>CRUD Templates Codeigniter Delete</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <br />
        <h3 align="center">CRUD Templates Codeigniter Mostrar</h3>
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
                        

                    <div class = "form-group">
                    
                       <!-- <input type="submit" name="delete" value="Delete" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <a href="<?php echo base_url(); ?>crud/delete">Delete</a>
                        

                    </div>

                        <!--<a href="<?php echo base_url(); ?>register">Register</a>-->
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>

