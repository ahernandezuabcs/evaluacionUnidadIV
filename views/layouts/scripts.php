<!-- Required Js -->
<script src="<?= BASE_PATH ?>/assets/js/plugins/popper.min.js"></script>
<script src="<?= BASE_PATH ?>/assets/js/plugins/simplebar.min.js"></script>
<script src="<?= BASE_PATH ?>/assets/js/plugins/bootstrap.min.js"></script>
<script src="<?= BASE_PATH ?>/assets/js/fonts/custom-font.js"></script>
<script src="<?= BASE_PATH ?>/assets/js/pcoded.js"></script>
<script src="<?= BASE_PATH ?>/assets/js/plugins/feather.min.js"></script>

<script>
  // Asegúrate de que las funciones están definidas antes de llamarlas
  if (typeof layout_change === 'function') {
    layout_change('light');
  } else {
    console.error('La función layout_change no está definida');
  }
</script>

<script>
  if (typeof layout_sidebar_change === 'function') {
    layout_sidebar_change('light');
  } else {
    console.error('La función layout_sidebar_change no está definida');
  }
</script>

<script>
  if (typeof change_box_container === 'function') {
    change_box_container('false');
  } else {
    console.error('La función change_box_container no está definida');
  }
</script>

<script>
  if (typeof layout_caption_change === 'function') {
    layout_caption_change('true');
  } else {
    console.error('La función layout_caption_change no está definida');
  }
</script>

<script>
  if (typeof layout_rtl_change === 'function') {
    layout_rtl_change('false');
  } else {
    console.error('La función layout_rtl_change no está definida');
  }
</script>

<script>
  if (typeof preset_change === 'function') {
    preset_change('preset-1');
  } else {
    console.error('La función preset_change no está definida');
  }
</script>