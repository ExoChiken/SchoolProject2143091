
<div class="container my-3">

    <h2>Make A shortlink</h2>
    <form action = "<?= BASEURL ?>/admin_login/shortLinkNoAds" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Input Link</label>
            <input type="text" class="form-control border" id="link" name="link">
            <input type="text" class="form-control d-none" value="<?= $data['login_id']?>" id="user_id" name="user_id">
        </div>
        <button type="submit" class="btn btn-primary">No Ads</button>
    </form>
    <div class="row">
    <div class="col">
        <h3>long link</h3>
        <?php  $no = 1; foreach($data['shrtLink'] as $shrtLink) : ?>
                <li class="border list-group-item">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><?=$no++?>. <?= $shrtLink['LongLink'] ?></div>
                    </div>
                </li>
            <?php endforeach; ?>
        </div>
    <div class="col">
        <h3>short link</h3>
        <?php foreach($data['shrtLink'] as $shrtLink) : ?>
            <li class="border list-group-item">
                <div class="ms-2 me-auto">
                    <div class="fw-bold"><?=BASEURL?>/short/<?=$shrtLink['shortLink'] ?></div>
                </div>
            </li>
        <?php endforeach; ?>
    </div>

  </div>
        <!--  -->
    <h2 class="my-4">Daftar Postingan</h2>
        <ol class="pt-4 list-group list-group-numbered">
            <?php foreach($data['post'] as $post) : ?>
                <li class="border list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><?= $post['title'] ?></div>
                    </div> 
                    <a href= "<?= BASEURL;?>/admin_login/detail/<?=$post['id'] ?>" type="submit" class="btn btn-success position-relative">
                        Detail
                    </a>
                    <a href="<?= BASEURL; ?>/admin_login/deletePost/<?= $post['id'] ?>" type="submit" name="id" class="btn btn-danger position-relative ms-2" onclick="return confirm('Hapus data?');">
                        Hapus
                    </a>
                    <a href="<?= BASEURL; ?>/admin_login/updatePost/<?= $post['id'] ?>" type="submit" class="btn btn-primary position-relative ms-2">
                        Update
                    </a>
                </li>
            <?php endforeach; ?>
        </ol>

            
</div>