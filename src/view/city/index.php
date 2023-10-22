<div class="card">
  <div class="card-header">
   <h3 class="text-danger" >Cities list</h3> 
  </div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">City name</th>
      <th scope="col">Nation</th>
    </tr>
  </thead>
  <tbody>
    <?php if (count($city)>0) :  ?>
    <?php foreach ($city as $key => $citys) : ?>
    <tr>
      <td scope="row"><?php echo $key + 1?></td>
      <td><a href="index.php?page=city&action=info&id=<?php echo $citys['id']?>" class="text-info"><?php echo $citys['name']?></a1></td>
      <td><?php echo $citys['nation']?></td>
      <td><a href="index.php?page=city&action=delete&id=<?php echo $citys['id']?>" class="btn btn-outline-danger">Delete</a></td>
      <td><a href="index.php?page=city&action=update&id=<?php echo $citys['id']?>" class="btn btn-outline-primary">Edit</a></td>
    </tr>
    <?php endforeach; ?>
    <?php else : ?>
        <tr><td colspan="5">No data</td></tr>
    <?php endif ; ?>
  </tbody>
</table>
<a class="btn btn-success" href="index.php?page=city&action=add">Add new city</a>
</div>