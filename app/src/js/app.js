$(function() {
  console.log('yo !');
  $( ".menu i" ).click(function() {
    $( ".nav" ).slideToggle( "slow", function() {
      //Animation complete.
    });
  });
});
