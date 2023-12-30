<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
  <%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
    <%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>

      <jp:mondrianQuery id="query01" jdbcDriver="net.sourceforge.jtds.jdbc.Driver"
        jdbcUrl="jdbc:mysql://localhost/adventureworks_dw?user=root&password="
        catalogUri="C:\xampp\tomcat\webapps\mondrian\WEB-INF\queries\coba.xml" jdbcUser="root" jdbcPassword=""
        connectionPooling="false">
        select {[Measures].[Total Penjualan]} on columns, {([product].[Semua Produk],
        [Sales Territory].[Semua Wilayah],[Waktu].[Semua Waktu])} on rows from Penjualan
      </jp:mondrianQuery>

      <c:set var="title01" scope="session">Pivot Table Fact Sales using Mondrian</c:set>