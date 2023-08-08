<?php
    include_once("templates/header.php");
    

    if (isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach ($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }

?>
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/post.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/aside.css">
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, quibusdam numquam. Et expedita, odit veniam ducimus inventore laudantium eaque suscipit alias officiis earum enim dolor assumenda quia provident ab non.
            Reiciendis alias modi, inventore quos minima laborum veniam vero sit! Placeat debitis excepturi quasi obcaecati. Quos rerum eos, in numquam labore, maxime saepe, distinctio magnam amet reiciendis recusandae fuga unde.
            Perferendis perspiciatis laudantium, qui suscipit necessitatibus laborum tenetur voluptas sunt obcaecati quis eum iure tempora, repellat laboriosam, cupiditate voluptatum est molestiae repudiandae eos? Voluptatem expedita, blanditiis harum autem provident repellat.
            Vero recusandae repellat magni, ipsam nostrum sed commodi corporis esse fugiat in sit minima quos, illo temporibus. Eveniet maiores iure deleniti deserunt iusto dolores nesciunt quidem omnis. Sint, debitis quisquam.
            Fugiat delectus consequatur exercitationem esse, quidem dolorem suscipit doloribus harum voluptate libero labore officiis quis provident vero, cum quod iste. Alias pariatur animi veritatis. Neque dolorem quam voluptatum voluptas quos.</p>
        </div>
        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
        </aside>
    </main>    
<?php
    include_once("templates/footer.php");
?>