
$(document).ready(function(){
  collapsibleSeparatorToggle();
});

//
function collapsibleSeparatorToggle() {
  
  $(".separator-collapsible").click(function(e) {
      // do not trigger show/hide function if the separator title link is clicked
      if($(e.target).is('a')){
          e.preventDefault();
          return;
      }
      _collapsableSeparators_showHide($(this), 300);
    });
  
  // close all separators that are closed by default
  $(".separator-collapsible.separator-collapsed").each(function() {
      _collapsableSeparators_showHide($(this), 0);
    });
}

function _collapsableSeparators_showHide(separatorDiv, duration) {
  
  // switch from up to down icons or vice versa
  var separatorCollapseBtn = separatorDiv.find('i.separator-collapse-btn');
  if (separatorCollapseBtn.hasClass('glyphicon-chevron-up')){
    separatorCollapseBtn.removeClass('glyphicon-chevron-up');
    separatorCollapseBtn.addClass('glyphicon-chevron-down');
  }
  else if (separatorCollapseBtn.hasClass('glyphicon-chevron-down')) {
    separatorCollapseBtn.removeClass('glyphicon-chevron-down');
    separatorCollapseBtn.addClass('glyphicon-chevron-up');
  }
  
  // toggle show/hide
  match   = separatorDiv.next("div");
  while (match.length > 0) {
    if (match.hasClass('separator')) { return; } // stop collapsing on the next header bar separator
    
    match.slideToggle(duration);
    
    // resize iframe height that is initially set to 0 when under a closed-by-default separator
    if (match.find('iframe.uploadIframe').length) {
      resizeIframe(match.find('iframe.uploadIframe').attr('id'), 500);
    }
    
    match = match.next("div"); // get the next field's div
    if(!match) { return; }
  }
}
