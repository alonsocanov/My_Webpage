<!-- Masthead -->
<header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Explore my profile</h1>
        </div>

      </div>
    </div>
  </header>

  <!-- Experience -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
	    <?php foreach ($projects as $project): ?>
        <div class="col-lg-12">
          <div class="text-left">
            <h3><?= $project['title'] ?></h3>
            <p class="lead mb-0"><?= $project['description'] ?></p>
            <div class="text-right">
              <h6><?= $project['start_date']?></h6>
              <h6><?= $project['location']?></h6>
            </div>
            <?= $project['content'] ?>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
  </section>



  <!-- Call to Action -->
  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Ready to get started? Sign up now!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
