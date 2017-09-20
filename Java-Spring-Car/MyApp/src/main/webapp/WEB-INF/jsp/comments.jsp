<%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@taglib uri="http://www.springframework.org/tags/form" prefix="form"%>
<%@ taglib prefix = "fmt" uri = "http://java.sun.com/jsp/jstl/fmt" %>

<div class="container">

	<h2>Reviews</h2>
	<div class = "well">
	<c:choose>
	<c:when test="${not empty loggedInUser.username}">
            <form:form action = "${car.id}/comment/add" method = "POST" modelAttribute="singlereview">
                <div class="form-group row">
                    <div class="col-sm-8">
                     <form:input type = "text" class="form-control" path="reviewkey.username" value="${loggedInUser.username}" readonly="true"/>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8">
                     <form:input type = "text" class="form-control" path="reviewkey.carid" value="${car.id}" readonly="true"/>
                    </div>
                </div>
                <div class="form-group row">
                	<div class="col-sm-8">
                    <form:textarea path="comments" rows="5" cols="100%"/>
                    </div>
                </div>
                <div class="form-group">
                <button class = "btn btn-success" type="submit">Leave a comment!</button>
                </div>
            </form:form>
    </c:when>
    <c:otherwise>
    	<a class = "btn btn-success"  href="<c:url value='/login'/>">Leave a comment!</a>
    </c:otherwise>
    </c:choose>
	
         <hr>
   		<c:forEach items="${review}" var="entry">
			    <div class = "row">
                    <div class = "col-md-12">
                        <strong>${entry.reviewkey.username} </strong>
                        <span class = "pull-right"> <fmt:formatDate value="${entry.date}" pattern="yyyy-MM-dd HH:mm"/> </span>
                        <p>
                            ${entry.comments}
                        </p>
                    </div>
                </div>
   	</c:forEach>
   	</div>
</div>