<?php

$el = $this->el('div', [

    'class' => [
        'example-element'
    ]

]);
?>

<?= $el($props, $attrs) ?>

<div class="whatsapp <?= $props['radio_group'] ?>" id="wa_btn">
  <div class="whatsapp_txt"><?= $props['title'] ?></div>
  <div class="whatsapp_icon">
    <span id="icon" uk-icon="icon:<?= $props['icon'] ?>" uk-svg></span>
    <span id="close" uk-icon="icon:close" uk-svg></span>
  </div>
</div>

  <div class="chat_box" id="wa_chat">
    <div class="chat_header">
      <div class="chat_titulo"><?= $props['texto1'] ?></div>
      <div class="chat_msj"><?= $props['texto2'] ?></div>
  </div>

  <div class="chat_body">
    <div class="sub_msj"><?= $props['texto3'] ?></div>

  <div class="chat_list">
        <?php foreach ($children as $child) : ?>
          <?= $builder->render($child, ['element' => $props]) ?>
        <?php endforeach ?>
    </div>
  </div>
</div>


<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', ()=>{
    let btn = document.getElementById('wa_btn');
    let chat= document.getElementById('wa_chat');
   

    btn.addEventListener('click', ()=>{
      chat.classList.toggle('fade_left')
      chat.classList.toggle('activo')
      chat.classList.toggle('fade_in')
      btn.classList.toggle('activo')
     
    })
  })
</script>
