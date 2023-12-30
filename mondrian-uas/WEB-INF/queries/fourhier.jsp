<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="org.apache.derby.jdbc.EmbeddedDriver" jdbcUrl="jdbc:mysql://localhost/adventureworks_dw?user=root&password=" catalogUri="C:\xampp\tomcat\webapps\mondrian\WEB-INF\queries\coba.xml"
   jdbcUser="root" jdbcPassword="" connectionPooling="false">
   
   select {[Measures].[Total Pembelian]} on columns, {([product].[Semua Produk],
    [Ship Method].[Semua Pengiriman],[Vendor].[Semua Vendor],[Waktu].[Semua Waktu])} on rows from Pembelian
</jp:mondrianQuery>

<c:set var="title01" scope="session">Pivot Table Fact Purchase Using Mondrian</c:set>
