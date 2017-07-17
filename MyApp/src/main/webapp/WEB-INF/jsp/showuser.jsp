<%@ include file="/resources/layout/header.jsp" %>

<div class="container">


	<form:form action="showusers" modelAttribute="user" method="POST">
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
			 	<input class="btn btn-success" type="submit" name="action" value="Add" />
				<input class="btn btn-primary" type="submit" name="action" value="edit">
				<input class="btn btn-danger"  type="submit" name="action" value="delete">
			 </div>
		 </div>
	</form:form>

<br><hr>

	<div >
	<h2>User Management</h2>
		<table class="table table-bordered">
			<tr> 
				<th>Username</th><th>Password</th> <th>Phone</th> <th>Email</th><th>description</th><th>Operation</th>
			</tr>
			<c:forEach items="${allusers}" var="user">
				<tr>
					<td>${user.username}</td>
					<td>${user.password}</td>
					<td>${user.phone}</td>
					<td>${user.email}</td>
					<td>${user.description}</td>
					<td>
						<a href="<c:url value='/showusers?id=${user.username}'/>">Select</a>
					</td>
				</tr>
			</c:forEach>
		</table>
	</div>

</div>


<%@ include file="/resources/layout/footer.jsp" %>