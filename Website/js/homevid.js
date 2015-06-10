$('#volume').click(function(){
   $('video')[0].muted ^= 1;
   $(this).toggleClass('mute');
});
