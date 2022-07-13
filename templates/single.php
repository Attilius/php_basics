<main class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img width="100%" class="mt-2 mb-2 mx-1" title="<?= $image['title']; ?>" src="<?= $image['url']; ?>" />
        </div>
        <div class="col-md-6">
            <form method="post" action="/php_basics/image/<?php echo $image['id'] ?>/edit">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input id="title" value="<?php echo $image['title'] ?>" class="form-control" placeholder="Enter the title here." />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            <form class="mt-5" method="post" action="/php_basics/image/<?php echo $image['id'] ?>/delete">
                <div class="form-group">
                    <label for="title">Danger zone</label>
                </div>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</main>
