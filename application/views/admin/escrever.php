
 <div class="col-md-9">
      <?php echo form_open('CDEAdmin/escrever'); ?>
      <div class="modal-header">
        <h4><?php echo $title; ?></h4>
      </div>
        <div class="form-group">
          <label>Titulo</label>
          <input type="text" class="form-control" placeholder="Page Title" name="title">
        </div>
        <div class="form-group">
          <label>Corpo</label>
          <textarea id="editor2" class="form-control" name="body" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
        <button type="submit" class="btn btn-primary">Publicar</button>
    </form>
    </div>
  </div>
  </div>
</section>

