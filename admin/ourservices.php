<?php
session_start();
include ("../middelwar/adminMiddleware.php");
include("./includes/header.php"); 
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Our Serverces</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>MText</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $topservice = GetAll("services");
                            if(mysqli_num_rows($topservice) > 0){

                                foreach($topservice as $item)
                                {
                                   ?>
                                     <tr>
                                        <td><?= $item['title']; ?></td>
                                        <td style="overflow: hidden;">
                                            
                                            <!-- <input type="text" name="" id=""> -->
                                            <textarea name="text" id="" cols="30" rows="10" readonly><?= $item['text']; ?></textarea>
                                        </td>
                        
                                        <td> <a href="edit-services.php?id=<?=$item['id']; ?>" class="btn btn-primary">Edit</a></td>
                                     </tr>
                                   <?php
                                }

                            }else{
                                echo "No records found";
                            }

                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("./includes/footer.php");