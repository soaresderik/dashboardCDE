
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Posts</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Posts...">
                      </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Title</th>
                        <th>Published</th>
                        <th>Created</th>
                        <th></th>
                      </tr>
                      <?php foreach($posts as $post): ?>
                      <tr>
                        <td><?php echo $post['title']; ?></td>
                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                        <td><?php echo $post['created_at']; ?></td>
                        <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger" href="<?php echo base_url(); ?>CDEAdmin/deletar/<?php echo $post['id']; ?>">Delete</a></td>
                      </tr>
                    <?php endforeach; ?>
                    </table>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>
