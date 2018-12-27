// Stops youtube embed video when closing lightbox
jQuery('#exampleModal').on('hidden.bs.modal', function(e) {
  jQuery('#exampleModal iframe').attr(
    'src',
    jQuery('#exampleModal iframe').attr('src')
  );
});

console.log('hello from /src/js/custom-jquery');
