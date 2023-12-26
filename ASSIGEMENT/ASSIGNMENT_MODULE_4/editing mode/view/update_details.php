<!-- model -->
           
            <form method="post" class=" col-md-4 p-4 ms-5 mt-5">

          
                <h3 align="center">update details</h3>
                <?php
                foreach($fetch2 as $fetch3)
                {
                ?>
               
                <input type="text" name="sname" value="<?php echo $fetch3["name"]?>" required class="form-control mt-4">
                <input type="text" name="year" value="<?php echo $fetch3["year"]?> "  required class="form-control mt-3">
                <input type="text" name="contect" value="<?php echo $fetch3["contect_no"]?>" required class="form-control mt-3">
                <input type="text" name="sid" value="<?php echo $fetch3["student_id"]?>" required class="form-control mt-3">
                <button type="submit" name="sub" class="btn btn sm btn bg-primary mt-4 text-white">Update</button>
                <?php
                }
                ?>
               
                </form>
             
               

      