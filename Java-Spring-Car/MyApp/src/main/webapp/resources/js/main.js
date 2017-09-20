/**
 * 
 */
var deleteLinks = document.querySelectorAll('.delete');
for (var i = 0; i < deleteLinks.length; i++) {
  deleteLinks[i].addEventListener('click', function(event) {
      event.preventDefault();
      var choice = confirm("Are you sure you want to delete?");
      if (choice) {
//    	window.location.href = this.getAttribute('href');
      }
  });
}
