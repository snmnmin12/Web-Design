<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@taglib uri="http://www.springframework.org/tags" prefix="spring"%>
<%@taglib uri="http://www.springframework.org/tags/form" prefix="form"%>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="<c:url value='/resources/css/bootstrap.min.css' />">
    <link rel="stylesheet" href ="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<c:url value='/resources/css/main.css' />">
	<title>Car</title>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Car Management</a>
            </div>
  
		    <ul class="nav navbar-nav">
		      <li><a href="${pageContext.request.contextPath}/index.jsp" >Home</a></li>
		      <li><a href="<c:url value='/all'/>">Cars</a></li>
		      <li><a href="<c:url value='/showusers'/>">Show Users</a></li>
		    </ul>
            
                  <ul class="nav navbar-nav navbar-right">
                  <c:choose>
                  	 <c:when test="${empty loggedInUser.username}">
                        <li><a href="<c:url value='/login'/>">Login</a></li>
                        <li><a href ="<c:url value='/register'/>">Sign Up</a></li>
                     </c:when>
                     <c:otherwise>
                        <li><a href = "#">Signed in as ${loggedInUser.username}</a></li>
                        <li><a href = "<c:url value='/logout'/>">Logout</a></li>
                        </c:otherwise>
                  </c:choose>
                  </ul>
        </div>
    </nav>


<!-- main content -->

