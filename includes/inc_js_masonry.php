<script>
jQuery111(document).ready(function($) {
  var $masonryContainer = $('.content-page-globale');

  $masonryContainer.masonry({
    columnWidth: '.masonry__column',
    gutter: '.masonry__gutter',
    itemSelector: '.masonry__item,.masonry--item'
  });
});
</script>