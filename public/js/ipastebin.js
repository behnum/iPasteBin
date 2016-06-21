(function() {

    //caching
    var itext = $('textarea#iText');
    var defaultText = "Start Typing . . .";

    itext.keydown(function() {
      if (itext.val() == defaultText) {
        itext.val('');
      }

      if(itext.val().indexOf(defaultText) >= 0) {
        itext.val('');
      }
    });

})(jQuery);
