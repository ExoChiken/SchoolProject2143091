<section class="my-3 container" id="main">
<div class="row justify-content-around">
    <!-- main content -->
    <div class="col-lg-8" id="main">
          <div class="text-center my-2">
          <img src="assets/Capture.png" class="img-post col-10" alt="...">
            </div>
            <h2 class="title mx-3"><?= $data['post']['title'] ?></h2>
            <div class="d-flex my-4 mx-3">
                <small class="text-decoration-none">
                    <span class="posted-on"><i class="fa fa-calendar-alt"></i> <a class="text-decoration-none"  rel="bookmark"><time class="entry-date published" datetime="2015-01-07T07:07:21+00:00">January 7, 2015</time></a></span>
                    <span class="byline"> <i class="fa fa-user"></i> <span class="author vcard">
                        <a class="text-decoration-none" href="<?= BASEURL ?>/users/<?= $data['user']['id'] ?>"><?= $data['post']['username'] ?></a>
                    </span></span>
                    <span class="cat-links"><i class="fa fa-folder-open"></i>
                        <a class="text-decoration-none" href="<?= BASEURL ?>/category/<?= $data['post']['category_id'] ?>" rel="category tag"><?= $data['post']['category_title']?></a>
                    </span>
                </small>
            </div>
            <div class="main-text mx-3">
                <?= $data['post']['body'] ?>
            </div>
            </div>
            
            <!-- sidebar widget-->
            <div class="col-lg-4">
                            <!-- Search widget-->
                            <div class="card mb-4">
                                <div class="card-header">Search</div>
                                <div class="card-body">
                                    <form action="<?= BASEURL ?>/search" method="POST">
                                        <div class="input-group">
                                            <input name="search" id="search" class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                            <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Categories widget-->
                            <div class="card mb-4">
                                <div class="card-header">Categories</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mb-0">
                                            <?php foreach($data['category'] as $category) : ?>
                                                <li><a style="color:gray;" class="text-decoration-none" 
                                                    href="<?=BASEURL?>/category/<?= $category['category_id'] ?>">
                                                <?= $category['category_title'] ?></a></li>
                                            <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Side widget-->
                            <div class="card mb-4">
                                <div class="card-header">Side Widget</div>
                                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                            </div>
                        </div>
                        </div>
</section>