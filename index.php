<?php include('header.php'); ?>
<main class="topMain">
  <section class="my-24">
    <h1 class="text-center text-slate-800 mb-8 text-3xl to-blue-900 font-bold">検索フォーム</h1>
    <form action="result.php" method="post" class="max-w-3xl mx-auto">
      <div class="mb-5 pb-5 border-b-stone-600 border-b">
        <label for="area" class="block mb-2 font-semibold">地域</label>
        <select name="area" class="p-1 border border-stone-600">
          <option value="">指定なし</option>
          <option value="北海道">北海道</option>
          <option value="東京都">東京都</option>
          <option value="大阪府">大阪府</option>
        </select>
      </div>
      <div class="mb-5 pb-5 border-b-stone-600 border-b">
        <label for="type" class="block mb-2 font-semibold">種類</label>
        <select name="type" class="p-1 border border-stone-600">
          <option value="">指定なし</option>
          <option value="医療脱毛">医療脱毛</option>
          <option value="脱毛サロン">脱毛サロン</option>
        </select>
      </div>
      <div class="mb-5 pb-5 border-b-stone-600 border-b">
        <label for="tags" class="block mb-2 font-semibold">部位</label>
        <input type="checkbox" name="tags[]" value="顔">顔
        <input type="checkbox" name="tags[]" value="腕">腕
        <input type="checkbox" name="tags[]" value="足">足
        <input type="checkbox" name="tags[]" value="背中">背中
        <input type="checkbox" name="tags[]" value="全身">全身
      </div>
      <div class="mb-10 pb-5 border-b-stone-600 border-b">
        <label for="tags" class="block mb-2 font-semibold">こだわり条件</label>
        <input type="checkbox" name="tags[]" value="VIO脱毛">VIO脱毛
        <input type="checkbox" name="tags[]" value="19時以降可能">19時以降可能
        <input type="checkbox" name="tags[]" value="分割可能">分割可能
        <input type="checkbox" name="tags[]" value="医療脱毛専門">医療脱毛専門
        <input type="checkbox" name="tags[]" value="駅チカ">駅チカ
      </div>
      <button type="submit" class="bg-slate-200 py-2 text-center rounded-md mx-auto block w-48">検索</button>
    </form>
  </section>
</main>
<?php include('footer.php'); ?>