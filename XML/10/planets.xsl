<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<head>
</head>
<body>
  <h1>Planety</h1>
    <xsl:for-each select="SOLAR_SYSTEM/PLANETS/PLANET">

             <div class='kolor' style="color:{@COLOR}">
                 <h3><xsl:value-of select="NAME"/></h3>
             </div>
    </xsl:for-each>
</body>
</html>
</xsl:template>
</xsl:stylesheet>