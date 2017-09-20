<%@ include file="/resources/layout/header.jsp" %>

<div class="container">
	${loginError}
		<div class = "login-form">
					<h2> Please Sign in </h2>
					<form action="login" method="POST">
						<div>
							 <label for="username" class=sr-only>User Name: </label>
							 <input type="text" id="username" name="username"  placeholder="username" class="form-control"/>
						 </div>
						 <div>
							 <label for="password" class="sr-only">Password:</label>
							 <input type =password id="password" name="password" placeholder="password" class="form-control"/>
						 </div>
						 <button class="btn btn-primary form-control">Login</button>
					</form>
		</div>
	</div>
<%@ include file="/resources/layout/footer.jsp" %>