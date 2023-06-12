<?php
include_once("templates/header.php");

if (isset($_GET["id"])) {
    $postId = $_GET["id"];
    $currentPost;

    foreach ($posts as $post) {
        if ($post["id"] == $postId) {
            $currentPost = $post;
        }
    }
}
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost["title"] ?></h1>
        <p id="post-description"><?= $currentPost["description"] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $currentPost["title"] ?>"
                title="<?= $currentPost["title"] ?>">
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, minus totam
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, minus totam
                veritatis amet rem ab, esse nam fuga nobis cumque sunt, odit ratione laudantium deserunt! Vero commodi
                neque dolore numquam!
                Quis est commodi atque sapiente unde corporis beatae! Placeat ex, veniam quam nihil, provident
                voluptates hic voluptate autem delectus blanditiis omnis, fugit temporibus suscipit ducimus repudiandae
                debitis cumque eos! Expedita.
                Fuga recusandae sapiente amet. Quasi doloremque illo, rerum libero ea soluta eveniet qui vero temporibus
                hic commodi sequi exercitationem culpa modi dolorem repudiandae odio at expedita ut. Excepturi, veniam
                quam?
                Sunt inventore dolorem sapiente et, quam unde accusantium magnam numquam architecto alias rem.
                Recusandae, corrupti quae ad fuga eligendi esse ipsa, deleniti ducimus sapiente molestiae unde
                blanditiis quos quibusdam. Hic!
                Quibusdam ad facilis quos obcaecati? Ut maiores animi quasi, vitae ab facilis culpa nulla consequuntur
                at esse autem officiis excepturi fuga! Sed, similique sequi cupiditate doloribus quaerat fuga laborum
                nobis.</p>
        </div>
    </div>

    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tags-list">
            <?php foreach ($currentPost["tags"] as $tag) : ?>
            <li><a href="#" title="<?= $tag ?>"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
            <li><a href="#" title="<?= $category ?>"><?= $category ?></a></li>
            <?php endforeach; ?>

        </ul>

    </aside>
</main>
<?php
include_once("templates/footer.php");
?>