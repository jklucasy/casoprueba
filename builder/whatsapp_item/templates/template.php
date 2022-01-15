<div class="chat_item">
  <a class="miembro online" target="_blank" href="https://api.whatsapp.com/send?phone=<?= $props['telef'] ?>&text=<?= $props['mensaje'] ?>">
    <div class="avatar">
        <div class="avatar_img" style="background: url(<?= $props['image'] ?>) center center no-repeat; background-size: cover;"></div>
    </div>
    <div class="miembro_info">
       <div class="nombre"><?= $props['title'] ?></div>
       <div class="estado"><?= $props['meta'] ?></div>
    </div>
  </a>
</div>
