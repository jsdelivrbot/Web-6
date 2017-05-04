<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<body>
  <h2>Studenty</h2>
  <ol>
    <xsl:for-each select="studenci/student">
     <li>
         <xsl:choose>
         <xsl:when test="@plec='k'"><div class="k" style="color:red">
    <p><b><xsl:value-of select="nazwisko"/>&#160;</b>
        <u><xsl:value-of select="imie"/></u>
         Grupa: 
      <xsl:value-of select="grupa"/></p>
             </div></xsl:when>
         
         <xsl:otherwise><div class="m" style="color:blue">
             <p><b><xsl:value-of select="nazwisko"/>&#160;</b>
        <u><xsl:value-of select="imie"/></u>
         Grupa: 
      <xsl:value-of select="grupa"/></p>
             </div></xsl:otherwise>
             </xsl:choose>
        </li>
          
        
    </xsl:for-each>
    </ol>
</body>
</html>
</xsl:template>
</xsl:stylesheet>