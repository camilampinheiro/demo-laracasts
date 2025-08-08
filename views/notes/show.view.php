<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="mt-6 flex items-center gap-3"><?= htmlspecialchars($note['body']); ?></p>

    <footer class="mt-10 flex gap-4">
      <a href="/note/edit?id=<?= $note['id'];?>" class="rounded-md bg-[#1C242D] px-6 py-2 text-sm font-semibold text-white shadow-xs hover:bg-gray-700">
        Edit
      </a>

      <form method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?=$note['id']; ?>">
        <button class="rounded-md bg-red-700 px-6 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-800 cursor-pointer">
          Delete
        </button>
      </form> 
    </footer>

  </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>