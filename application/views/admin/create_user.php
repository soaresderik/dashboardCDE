 <div class="col-md-9">
      <?php echo form_open('CDEAdmin/create'); ?>
      <div class="modal-header">
        <h4><?php echo $title; ?></h4>
      </div>
        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" placeholder="Nome de usuario" name="nome">
        </div>
        <div class="form-group">
          <label>E-mail</label>
          <input type="email" class="form-control" placeholder="Digite seu email" name="email">
        </div>
        <div class="form-group">
          <label>Senha:</label>
          <input type="password" class="form-control" placeholder="Digite sua senha" name="senha">
        </div>
        <div class="form-group">
          <label>Confirmar senha:</label>
          <input type="password" class="form-control" placeholder="Confirmar sua senha" name="confirmar">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    </div>
  </div>
  </div>
</section>

