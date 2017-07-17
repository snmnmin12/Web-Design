	    	<%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
	    	<c:forEach items="${style}" var="entry">
	    		 <div class="form-group">
				 <label class="col-sm-4 control-label">${entry.key} </label>
				 <div class="col-sm-8">
				 	<input type = "text" class = "form-control"  value = "${entry.value}">
				 </div>
				 </div>
	    	</c:forEach>