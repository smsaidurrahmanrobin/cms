<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">

 <!-- Navigation -->
       
<?php include "includes/admin_navigation.php"; ?>     
   <!-- /.navbar-collapse -->     
        
 <?php if($_SESSION['user_role'] === 'admin'){ ?>       

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       
                       
                       <center> <h1 class="page-header">
                           Categories <page></page>
                            <small><?php echo $_SESSION['username']; ?></small>
                        </h1> </center>
                        
                        <div class="col-xs-6">
                        
                        <?php 
                            insert_categories();
                            
                            ?>
                        
                        
                        
                        
                        
                        
                        <form action="" method="post">
                          
                           <div class="form-group">
                             <label for="cat_title">Add Category</label>  
                               <input class="form-control " type="text" name="cat_title"> 
                           </div> 
                              
                            <div class="form-group">
                               
                               <input class="btn btn-success" type="submit" name="submit" value="Add Category"> 
                           </div> 
                            
                            
                        </form>
                        
                        <?php //update and include query
                            
                           if(isset($_GET['edit'])){
                               $cat_id = $_GET['edit'];
                               include "includes/update_categories.php";
                               
                           } 
                            
                            ?>
                        
                        
                        
                        </div> <!--add category form-->
                        
                        <div class="col-xs-6">
                        
                        
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                
                                
                            <?php 
                                find_all_categories();
                            ?>
                                    
                                    
                            <?php 
                            
                            delete_categories();
                            
                            ?>        
                                    
                                </tr>
                            </tbody>
                        </table>
                        
                        </div>
                        
                        
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php } else{
    
     
    echo "<script'>alert('You do not have the permission to enter this page!')</script>";  
    header("Location: index.php");    
  
} ?>
   
   
    </div>
    <!-- /#wrapper -->
    
   <?php include "includes/admin_footer.php"; ?>