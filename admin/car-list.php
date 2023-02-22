<?php

include("inc/header.php");

if(empty($_SESSION["user_id"])) {
    header("Location: ./sign-in.php");
} 
?>


<div id="page-inner">
    <div class="row">
       <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
               Car Models
           </div>
           <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables_car">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Make</th>
                            <th>Model</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sql = "SELECT * from car_models";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                 ?>
                                 <tr>
                                     <td><?php echo $row["year"] ?></td>
                                     <td><?php echo $row["make"] ?></td>
                                     <td><?php echo $row["model"] ?></td>
                                     <td>
                                        <a href="delete-record.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure you want to Delete?');">Delete</a>
                                     </td>
                                 </tr>
                           <?php }
                        } 
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    
</div>
</div>
</div>

<?php

include("inc/footer.php");
?>
