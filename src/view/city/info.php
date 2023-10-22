<div class="card m-4" style="width: 500px;">
  <div class="card-header">
    <h3><?php echo $citys['name']; ?><h3>
    <button type="button" class="btn btn-outline-dark" href="index.php?page=city&action=show-list">Show list cities</button>   
  </div>
    <p>Name: <?php echo $citys['name']; ?></p>
    <p>Nation: <?php echo $citys['nation']; ?></p>
    <p>Area: <?php echo $citys['area']; ?></p>
    <p>Population: <?php echo $citys['population']; ?></p>
    <p>GDP: <?php echo $citys['GDP']; ?></p>
    <p>Introduction: <?php echo $citys['introduce']; ?></p>
    <td><a href="index.php?page=city&action=delete&id=<?php echo $citys['id']?>" class="btn btn-outline-danger">Delete</a></td><br/>
    <td><a href="index.php?page=city&action=update&id=<?php echo $citys['id']?>" class="btn btn-outline-primary">Edit</a></td>
</div>