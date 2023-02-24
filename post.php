<?php 
  include_once("templates/header.php");

  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
      if($post['id'] == $postId) {
        $currentPost = $post;
      }
    }

  }

?>

  <main id="post-container">
    <div class="container">
      <h1 id="main-title"><?= $currentPost['title'] ?></h1>
      <p id="post-description"><?= $currentPost['description'] ?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title'] ?>">
      </div>
      <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptatum facere quam inventore expedita ea, quod harum eius qui perferendis. Eos exercitationem quasi ipsum itaque quod quis accusamus, maiores molestias?
      Voluptatum omnis quod ipsam rerum laudantium mollitia architecto unde possimus reiciendis consequatur. Exercitationem perferendis dicta nemo accusamus nisi adipisci repellendus, pariatur repudiandae soluta sit blanditiis. Est porro ipsam ipsum sint?
      Quam sunt doloremque ullam facilis officia voluptatibus similique labore, reiciendis vel saepe maxime culpa eveniet dolorem laboriosam corporis qui dolore? Facere assumenda delectus, ea voluptatum enim accusantium maxime doloremque repellat!
      Quam nemo recusandae cum hic, rerum numquam voluptatum iste accusamus dolorem et sequi rem, optio tempore laborum minima sunt at voluptatem eos expedita commodi, unde veniam! Vitae facere quae libero!
      Ab quisquam placeat sunt odit minus neque dolore sint harum velit assumenda error obcaecati, suscipit dolor commodi, numquam, alias quidem est maiores delectus. Dolorum, ad sequi. Unde perspiciatis dolore quidem.</p>
      <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptatum facere quam inventore expedita ea, quod harum eius qui perferendis. Eos exercitationem quasi ipsum itaque quod quis accusamus, maiores molestias?
      Voluptatum omnis quod ipsam rerum laudantium mollitia architecto unde possimus reiciendis consequatur. Exercitationem perferendis dicta nemo accusamus nisi adipisci repellendus, pariatur repudiandae soluta sit blanditiis. Est porro ipsam ipsum sint?
      Quam sunt doloremque ullam facilis officia voluptatibus similique labore, reiciendis vel saepe maxime culpa eveniet dolorem laboriosam corporis qui dolore? Facere assumenda delectus, ea voluptatum enim accusantium maxime doloremque repellat!
      Quam nemo recusandae cum hic, rerum numquam voluptatum iste accusamus dolorem et sequi rem, optio tempore laborum minima sunt at voluptatem eos expedita commodi, unde veniam! Vitae facere quae libero!
      Ab quisquam placeat sunt odit minus neque dolore sint harum velit assumenda error obcaecati, suscipit dolor commodi, numquam, alias quidem est maiores delectus. Dolorum, ad sequi. Unde perspiciatis dolore quidem.</p>
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
