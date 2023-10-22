<div class="card m-4" style="width: 500px;">
  <div class="card-header">
    <h5>Update city</h5>
  </div>
  <form action="index.php?page=city&action=edit&id=<?php echo $citys['id']?>" method="post">
  <div class="mb-3">
    <label class="form-label">Name city</label>
    <input type="text" class="form-control" name="name" value="<?php echo $citys['name'] ?>">
  </div>
  <div class="mb-3">
  <label class="form-label">Nation</label>
<select class="form-control" name="nation">
  <option value="Vietnam" <?php if ($citys['nation'] == 'Vietnam') echo 'selected'; ?>>Viet Nam</option>
  <option value="Japan" <?php if ($citys['nation'] == 'Japan') echo 'selected'; ?>>Japan</option>
  <option value="China" <?php if ($citys['nation'] == 'China') echo 'selected'; ?>>China</option>
  <option value="America" <?php if ($citys['nation'] == 'America') echo 'selected'; ?>>America</option>
</select>
  </div>
  <div class="mb-3">
    <label class="form-label">Area</label>
    <input type="number" class="form-control" name="area" value="<?php echo $citys['area'] ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Population</label>
    <input type="number" class="form-control" name="population" value="<?php echo $citys['population'] ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">GDP</label>
    <input type="number" class="form-control" name="GDP" value="<?php echo $citys['GDP'] ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Introduce</label>
    <input type="text" class="form-control" name="introduce" value="<?php echo $citys['introduce'] ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-warning" href="index.php?page=city&action=show-list">Cancel</a>

</form>
</div>