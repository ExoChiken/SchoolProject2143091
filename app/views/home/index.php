        <!-- Page content-->

        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="<?= BASEURL ?>/post/<?=$data['hero'][0]['id']?>"><img class="card-img-top" src="<?= BASEURL ?>/assets/Capture.png " alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2023</div>
                            <h2 class="card-title"><?= $data['hero'][0]['title'] ?></h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <a class="btn btn-primary" href="<?= BASEURL ?>/post/<?=$data['hero'][0]['id']?>!">Read more →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <?php foreach($data['post'] as $post) :?>
                            <div class="col-lg-6">
                                <!-- Blog post-->
                                <div class="card mb-4">
                                    <a href="<?= BASEURL ?>/post/<?=$post['id']?>"><img class="card-img-top" src="<?= BASEURL ?>/assets/Capture.png" alt="..." /></a>
                                    <div class="card-body">
                                        <div class="small text-muted">January 1, 2023</div>
                                        <h2 class="card-title h4"><?= $post['title'] ?></h2>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                        <a class="btn btn-primary" href="<?= BASEURL ?>/post/<?=$post['id']?>">Read more →</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <!-- Pagination-->
                    
                </div>
                <!-- Side widgets-->
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
        </div>