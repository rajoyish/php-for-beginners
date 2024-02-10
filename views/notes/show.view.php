<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
      <a href="/notes" class="rounded bg-slate-500 px-2 py-1 text-slate-100 shadow-md transition-all duration-300 ease-in-out hover:border hover:border-slate-500 hover:bg-transparent hover:text-slate-500">◀ Go Back
      </a>
    </p>
    <p><?= htmlspecialchars($note['body']) ?></p>

    <footer class="mt-8 flex gap-4">
      <a href="/note/edit?id=<?= $note['id'] ?>" class="inline-flex justify-center rounded-md border border-transparent bg-slate-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-500 focus:ring-offset-2">Edit</a>

      <form method="POST">
        <input type="hidden" name="_method" value="DELETE" />
        <input type="hidden" name="id" value="<?= $note['id'] ?>" />
        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-rose-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2">Delete</button>
      </form>
    </footer>

  </div>
</main>

<?php require base_path('views/partials/footer.php') ?>