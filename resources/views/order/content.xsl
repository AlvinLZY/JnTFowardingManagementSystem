<!--author:Loke Choon Keat-->
<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" 
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
<h2>Content Description</h2>
<table border="1">
<tr bgcolor="#9acd32">
  <th>Parcel</th>
  <th>Price</th>
  <th>Description</th>
</tr>
<xsl:for-each select="menu/item">
<tr> 
  <td>
  <xsl:value-of select="parcel" />
  </td>
  <td>
  <xsl:value-of select="price" />
  </td>
  <td>
  <xsl:value-of select="description" />
  </td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>