<div class="conteiner p-3 mt-5 ms-5">
<div class="row">
    <div class="col-md-4 p-5 ms-5">
        <h4 class="ms-1">Add student details</h4>
        <form method="post">
        <input type="text" name="sname" placeholder="student name" required class="form-control mt-4">
        <input type="text" name="year" placeholder="student year"required class="form-control mt-3">
        <input type="text" name="contect" placeholder="contect no"required class="form-control mt-3">
        <input type="text" name="sid" placeholder="student id"required class="form-control mt-3">
        <button type="submit" name="submit" class="btn btn sm btn bg-primary mt-4 text-white">Add</button>
        </form>
    </div>

    <!-- table -->

    <div class="col-md-7 p-5">
        <table class="table table responsive">
            <tr>
                
                <th>no</th>
                <th>name</th>
                <th>year</th>
                <th>contect no</th>
                <th>id</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
          <?php 
            foreach($fetch as $fetch1) 
            {
            ?>

            <tr>
                
                <td><?php echo $fetch1["id"]?></td>
                <td><?php echo $fetch1["name"]?></td>
                <td><?php echo $fetch1["year"]?></td>
                <td><?php echo $fetch1["contect_no"]?></td>
                <td><?php echo $fetch1["student_id"]?></td>
                <td><a href="<?php $mainurl?>update?upd=<?php echo $fetch1["id"]?>" class="btn btn-sm btn-primary"><span class="bi bi-pencil"></span></a></td>
                <td><a href="?delid=<?php echo $fetch1["id"]?>" class="btn btn-sm btn-danger text-white"><span class="bi bi-trash"></span></a></td>
                <?php
            }
                ?>
            </tr>

        </table>
    </div>
</div>
</div>


