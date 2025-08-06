<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <!-- <p class="mb-6 bg-[#1C242D] py-3 text-white mt-6 w-1/9 text-center rounded-md hover:bg-gray-700">
      <a href="/notes">go back...</a>
    </p> -->
    <p class="mt-6"><?= htmlspecialchars($note['body']); ?></p>

    <form class="mt-6" method="POST">
      <input type="hidden" name="id" value="<?=$note['id']; ?>">
      <button class="bg-red-700 py-3 text-white mt-6 w-1/9 text-center rounded-md hover:bg-red-800 cursor-pointer">
        Delete
      </button>
    </form>
  </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>