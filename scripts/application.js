jQuery(document).ready(function() {
  jQuery(".content").hide();
  jQuery(".content:first").show();
  //toggle the componenet with class msg_body
  jQuery(".heading").click(function()
  {
    jQuery(this).next(".content").slideToggle(500);
  });
});
