
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            <span class="font-weight-bold"><?= $data['user']['username'] ?>
            </span><span class="text-black-50"><?= $data['user']['user_id'] ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form action="<?= BASEURL?>/admin_login/update" method="POST">
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" name="username" value="<?= $data['user']['username'] ?>"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" value="<?= $data['user']['user_id'] ?>" name="id"></div>
                        <div class="col-md-12"><label class="labels">password</label><input type="text" class="form-control" name="password" value="<?= $data['user']['password'] ?>"></div>
                    </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>