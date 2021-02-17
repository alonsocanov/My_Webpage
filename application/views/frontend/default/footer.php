  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0"> <?=$this->config->item('rights')?></p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
          <?php if ($this->_social_networks): ?>
            <?php foreach ($this->_social_networks as $social_network): ?>
              <li class="list-inline-item mr-3">
                <a href="<?= $social_network['url']?>">
                  <i class="fab <?= $social_network['faicon']?> fa-2x fa-fw"></i>
                </a>
              </li>
            <?php endforeach; ?>
          <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?=base_url()?>assets/frontend/default/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/frontend/default/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
