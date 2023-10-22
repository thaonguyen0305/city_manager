 <div class="card m-4" style="width: 500px;">
  <div class="card-header">
    <h5>Add a new city</h5>
  </div>
  <form action="index.php?page=city&action=store" method="post">
  <div class="mb-3">
    <label class="form-label">Name city</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label class="form-label">Nation</label>
    <select class="form-control" name="nation">
  <option value="Vietnam">Viet Nam</option>
  <option value="Japan">Japan</option>
  <option value="China">China</option>
  <option value="America">America</option>
</select>
  </div>
  <div class="mb-3">
    <label class="form-label">Area</label>
    <input type="number" class="form-control" name="area">
  </div>
  <div class="mb-3">
    <label class="form-label">Population</label>
    <input type="number" class="form-control" name="population">
  </div>
  <div class="mb-3">
    <label class="form-label">GDP</label>
    <input type="number" class="form-control" name="GDP">
  </div>
  <div class="mb-3">
    <label class="form-label">Introduce</label>
    <input type="text" class="form-control" name="introduce">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-warning" href="index.php?page=city&action=show-list">Cancel</a>
</form>
</div>