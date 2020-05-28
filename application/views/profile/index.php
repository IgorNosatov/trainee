<div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h3 class="pt-5">Full Name: Igor Nosatov</h3>
        <h5 class="pt-3 pb-3">Short info about blogger: </h5>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

        <h3 class="pt-3 pb-3">Add new post</h3>
        <form class="p-3 pb-4">
          <div class="form-group">
            <label for="inputEmail">Email address</label>
            <input type="email" class="form-control" id="inputEmail">
          </div>
          <div class="form-group">
            <label for="inputThema">Post Theme</label>
            <input type="text" class="form-control" id="inputThema">
          </div>
          <div class="form-group">
            <label for="formControlTextarea">Message</label>
            <textarea class="form-control" id="formControlTextarea1" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-sm-12 col-md-6">
        <h3 class="pt-5 pb-4">Post made by Igor Nosatov</h3>
        <?php foreach ($posts as $val) : ?>
        <h3><?php echo $val['name']; ?></h3>
        <p><?php echo $val['description']; ?></p>
        <hr>
      <?php endforeach; ?>
      </div>
    </div>
  </div>