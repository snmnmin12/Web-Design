

$(function() {
  $('#my-form').on("submit",function(e) {
     e.preventDefault(); // cancel the actual submit

    var html = "";
    html += $("textarea").val();;
    
    html = html.replace(/(?:\r\n|\r|\n)/g, '<br />');
    
    $("textarea").val(html);

    e.currentTarget.submit();
  });
  
  
});
