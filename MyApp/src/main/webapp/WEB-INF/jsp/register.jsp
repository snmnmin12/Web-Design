<%@ include file="/resources/layout/header.jsp" %>

<div class="container">
	<form:form modelAttribute="user" method="POST">
  		<div class="form-group row">
		 <label class="col-md-2 control-label">User Name </label>
			 <div class="col-md-5">
			 	<form:input type = "text" class = "form-control"  path="username"/>
			 </div>
		 </div>
		 
		 <div class="form-group row">
		 <label class="col-md-2 control-label">Password </label>
			 <div class="col-md-5">
			 	<form:input type = "text" class = "form-control"  path="password"/>
			 </div>
		 </div>
	
		<div class="form-group row">
		 <label class="col-md-2 control-label">Phone </label>
			 <div class="col-md-5">
			 	<form:input type = "text" class = "form-control"  path="phone"/>
			 </div>
		 </div>
		 
	    <div class="form-group row">
		 <label class="col-md-2 control-label">Email </label>
			 <div class="col-md-5">
			 	<form:input type = "text" class = "form-control"  path="email"/>
			 </div>
		 </div>
		 
		<div class="form-group row">
		 <label class="col-md-2 control-label">Description </label>
			 <div class="col-md-5">
			 	<form:textarea type = "text" class = "form-control" path="description" rows="5" cols="20"/>
			 </div>
		 </div>
		 
		 <div class="form-group row">
			 <div class="col-md-5 col-md-offset-2">
			 	<input class="btn btn-success" type="submit" name="register" value="Sign Up" />
			 </div>
		 </div>
	</form:form>
</div>




<%@ include file="/resources/layout/footer.jsp" %>