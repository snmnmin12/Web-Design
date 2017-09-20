<%@ include file="/resources/layout/header.jsp" %>
<%@ include file="jumbo.jsp" %>


<div class = "container">
    <h3 align="center" >Car List</h3>
   
	    <div class="row">
	    	<c:forEach items="${pb.beanList}" var="cstm">
			  <div class="col-xs-6 col-md-4">
			    <div class="thumbnail">
			      <img src="${cstm.picture}" alt="picture"/>
			      <div class = "caption">
			      		<p><strong>Maker</strong>:${cstm.makeName} &nbsp; &nbsp; &nbsp; &nbsp; <strong>Model</strong>:${cstm.modelName} </p> 
			      		<p><strong>Year</strong>: ${cstm.prodyear} &nbsp; &nbsp; &nbsp;
			      		<a href="<c:url value='/details/${cstm.id}'/>"  class="btn btn-primary" role="button" >More Information</a>
			      </div>
			    </div>
			  </div>
			 </c:forEach>
		</div>
<br/>

<c:set var="url" value='<%=this.getClass().getSimpleName().replaceFirst("_jsp","")%>' />

<div class = 'center'>
    ${pb.pc}/${pb.tp} Pages
    <a href="${url}?pc=1">First</a>
    <c:if test="${pb.pc>1}">
        <a href="${url}?pc=${pb.pc-1}">Previous</a>
    </c:if>

    <c:choose>
        <c:when test="${pb.tp<=10}">
            <c:set var="begin" value="1"/>
            <c:set var="end" value="${pb.tp}"/>
        </c:when>
        <c:otherwise>
            <c:set var="begin" value="${pb.pc-5}"/>
            <c:set var="end" value="${pb.pc+4}"/>
            <%--control begnning--%>
            <c:if test="${begin<1}">
                <c:set var="begin" value="1"/>
                <c:set var="end" value="10"/>
            </c:if>
            <%--control end--%>
            <c:if test="${end>pb.tp}">
                <c:set var="end" value="${pb.tp}"/>
                <c:set var="begin" value="${pb.tp-9}"/>
            </c:if>
        </c:otherwise>
    </c:choose>

    <%--iterate the whole list--%>
    <c:forEach var="i" begin="${begin}" end="${end}">
        <c:choose>
            <c:when test="${i eq pb.pc}">
                [${i}]
            </c:when>
            <c:otherwise>
                <a href="${url}?pc=${i}">[${i}]</a>
            </c:otherwise>
        </c:choose>

    </c:forEach>


    <c:if test="${pb.pc<pb.tp}">
    <a href="${url}?pc=${pb.pc+1}">Next</a>
    </c:if>
    <a href="${url}?pc=${pb.tp}">Last</a>

</div>

</div>
<%@ include file="/resources/layout/footer.jsp" %>