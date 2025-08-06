<?php require base_path ('views/partials/head.php'); ?>
<?php require base_path ('views/partials/nav.php'); ?>
<?php require base_path ('views/partials/banner.php'); ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <ul>
      <?php foreach ($notes as $note): ?>
        <li class="mt-3">
          <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
            <?= htmlspecialchars($note['body']); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

    <p class="text-white mt-10">
      <a href="/notes/create" class="bg-[#1C242D] p-4 text-center rounded-md hover:bg-gray-700">Create Note</a>
    </p>
  </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>