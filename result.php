<?php
// アイテムを保存する配列を定義
$items = array(
  array(
    'name' => 'サロンA',
    'area' => '東京都',
    'type' => '脱毛サロン',
    'tags' => array('腕', '医療脱毛', '全身脱毛', '19時以降可能'),
    'image' => './images/top/test-01.webp',
    'description' => 'サロンAは、東京都にある脱毛サロンです。医療脱毛の取り扱いがあり、が可能です。また、19時以降も営業しているので、仕事帰りに通うことができます。',
  ),
  array(
    'name' => 'サロンB',
    'area' => '大阪府',
    'type' => '脱毛サロン',
    'tags' => array('顔', 'VIO脱毛', '分割可能'),
    'image' => './images/top/test-02.webp',
    'description' => 'サロンBは、大阪府にある脱毛サロンです。全身脱毛の取り扱いがあり、分割払いも可能です。',
  ),
  array(
    'name' => 'サロンC',
    'area' => '北海道',
    'type' => '医療脱毛',
    'tags' => array('背中', 'VIO脱毛', '19時以降可能'),
    'image' => './images/top/test-03.webp',
    'description' => 'サロンCは、北海道にある医療脱毛サロンです。VIO脱毛の取り扱いがあり、19時以降も営業しているので、仕事帰りに通うことができます。',
  ),
);

// 検索条件を取得
$area = $_POST['area'];
$type = $_POST['type'];

// 検索結果を保存する配列を定義
$results = array();
foreach ($items as $item) {
  $match = true;
  // エリアが指定されている場合は、一致するアイテムをフィルタリング
  if ($area != '') {
    if ($item['area'] != $area) {
      $match = false;
    }
  }
  // タイプが指定されている場合は、一致するアイテムをフィルタリング
  if ($type != '') {
    if ($item['type'] != $type) {
      $match = false;
    }
  }
  // こだわり条件をフィルタリング
  if (isset($_POST['tags']) && is_array($_POST['tags'])) {
    foreach ($_POST['tags'] as $tag) {
      if (!in_array($tag, $item['tags'])) {
        $match = false;
        break;
      }
    }
  }
  // アイテムが一致する場合は、結果に追加
  if ($match) {
    $results[] = $item;
  }
}; ?>




<?php include('header.php'); ?>
<main class="resultMain">
  <section class="my-24">
    <h1 class="text-center text-slate-800 mb-20 text-3xl to-blue-900 font-bold">検索結果</h1>
    <div class="max-w-5xl mx-auto">
      <?php
      // 検索結果を出力
      if (count($results) > 0) {
        foreach ($results as $result) : ?>
          <div class="mb-20 last:mb-0">
            <figure class="mb-5">
              <img src="<?php echo $result['image']; ?>" alt="<?php echo $result['name']; ?>" />
            </figure>
            <h2 class="text-2xl mb-5 font-semibold text-sky-600"><?php echo $result['name']; ?></h2>
            <p class="text-sm"><?php echo $result['description']; ?></p>
          </div>
      <?php endforeach;
      } else {
        echo '該当するサロンが見つかりませんでした';
      }
      ?>
    </div>
  </section>
</main>

<?php include('footer.php'); ?>