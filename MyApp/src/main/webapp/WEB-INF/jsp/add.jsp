<%@ include file="/resources/layout/header.jsp" %>

<div class = "container" >
	     <h3>${pageContext.request.contextPath}</h3>
     <div class = 'col-md-4 '>
	     <form:form  method="POST" modelAttribute="car" class = "form-horizontal"> 
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
			 <form:input class = "form-control" path="styleId" />
			 </div>
			 
			 <div class="form-group">
			 <label>Car Picture Link: </label>
			 <form:input class = "form-control" path="picture" id="pictureAdded" />
			 </div> 
			 
			 <div class="form-group">
				<input type="submit" name="add" class= "btn" value="Add" />
			 </div>
	    </form:form> 
    </div>
    				   
    <div class = 'col-md-7 '>
        <img src="<c:url value="/resources/img/default.png"/>" id="showpicture" alt=""/>
     </div>
</div>

<%@ include file="/resources/layout/footer.jsp" %>