<div class="container-sm">
            <h1 class="my-5">Make New Post</h1>
            <form action="<?= BASEURL ?>/admin_login/savePost" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input type="text" class="form-control border" id="title" name="title">
                </div>
                <div class="mb-3 d-none">
                    <label for="exampleFormControlInput1" class="form-label">slug</label>
                    <input type="text" class="form-control" id="user_id" name="user_id" value="<?= $data['login_id']?>">
                </div>
                <div class="mb-3">
                    <label for="summernote">Text Editor</label>
                    <textarea id="summernote" class="form-control" id="body" name="body"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="form-select">Category</label>
                        <select class="form-select form-select-lg" aria-label="select example" id="category_id" name="category_id">
                            <?php foreach($data['category'] as $category) :?>
                                <option value="<?= $category['category_id']?>"><?= $category['category_title']?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success my-4">Save</button>
                </div>
            </form>
</div>