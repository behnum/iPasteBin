import Clipboard from './Clipboard';

(function() {

  let clip = new Clipboard();
  let clipElem = $('a#clipboard');
  clipElem.on('click', function(e) {
    e.preventDefault();

    clip.showPanel();
    return;
  })

  let itext = $('textarea#iText');
  let defaultText = "Start Typing . . .";

  itext.keydown(function() {
    if (itext.val() == defaultText) {
      itext.val('');
    }

    if(itext.val().indexOf(defaultText) >= 0) {
      itext.val('');
    }
  });

})(jQuery);
