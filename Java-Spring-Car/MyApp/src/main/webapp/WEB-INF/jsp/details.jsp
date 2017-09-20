<%@ include file="/resources/layout/header.jsp" %>

<div class = "container">
<!--     <h3 align="center" >Details</h3> -->
	<div class = 'row'>
					    
		    <div class = 'col-md-7 '>   
		    	<img src="${car.picture}" alt="picture"/>
	      	</div>
	
		    <div class = 'col-md-4 '> 
			     <form:form action="do" method="POST" modelAttribute="car" class = "form-horizontal">
				     <div class="form-group">
					 <label>Car Maker Name: </label>
					 <form:input class = "form-control"  path="makeName" />
					 </div>
					 
					 <div class="form-group">
					 <label>Car Model Name: </label>
					 <form:input class = "form-control"  path="modelName" />
					 </div>
					 
					 <div class="form-group">
					 <label>Car Production Name: </label>
					 <form:input class = "form-control"  path= "prodyear" />
					 </div>
					 
					 <div class="form-group">
					 <label>Car Style Id: </label>
					 <form:input class = "form-control" path="styleId" readonly="true"/>
					 </div>
					 
					 <div class="form-group">
					 <label>Car Picture Link: </label>
					 <form:input class = "form-control" path="picture"/>
					 </div>
					 
					 <div class="form-group">
						<input type="submit" name="action" class="btn btn-primary" value="Edit">
						<input type="submit" name="action" class ="btn btn-danger" value="Delete">
					 </div>
					 
			     </form:form>
		   </div>
    </div>
  
   <hr>
   <h2>Technical Parameters</h2>
   <hr>
   
   <div class = 'row'>
	    <div class = 'col-md-5 '>
		   <jsp:include page="style.jsp">
    		<jsp:param name="style" value="${style}" />
			</jsp:include>
		</div>
		<div class = 'col-md-1'></div>
		<div class = "col-md-5">
			<jsp:include page="engine.jsp">
    		<jsp:param name="engine" value="${engine}" />
			</jsp:include>
		</div>
   </div> 
   
</div>

<hr>
	<jsp:include page="comments.jsp">
	  		<jsp:param name="car" value="${car}" />
	  		<jsp:param name="singlereview" value="${singlereview}" />
	</jsp:include>


<%@ include file="/resources/layout/footer.jsp" %>