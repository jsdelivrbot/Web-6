<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" encoding="utf-8" indent="yes" />
<xsl:template match="/">
<xsl:text disable-output-escaping='yes'>&lt;!DOCTYPE html&gt;</xsl:text>
<html lang="pl">
<head>
<title>Wybitni sportowcy</title>
<style>
*{
    margin: 0; 
    padding: 0; 
    box-sizing: border-box;
}
img{float: left; margin: 0 10px 10px 0;
border: 1px solid black;
    width: 50%;
    max-height:300px;}
body{background-color:lightgray;margin: 0 25 0 25;}
#wrapper{max-width=800px; maring 0 auto; background-color: lightgray;}
h1{text-align: center;}
p{
    text-align: justify;
    line-height: 25px;
    font-size: 18px;
    padding: 5px 0;
}
li{margin:0 0 0 20px;}
.osoba{
width:800px;
    height:300px;
border: 5px solid grey;
margin: 5px auto;
background-color:aquamarine;}
h3{color:crimson; margin 0 0 0 5px;}
span{font-weight: bold;  color:midnightblue;}
h4{font-size:20px; color:orange;}
</style>
</head>
<body>
<div id="wrapper">
  <h1>Wybitni sportowcy</h1>
<xsl:for-each select="wybitni/sportowcy/sportowiec">
<div class="osoba">
<h3><img src="{zdjecie}" alt="{zdjecie}"/><xsl:value-of select="imie"/>&#160;<xsl:value-of select="nazwisko"/></h3>
<p><span>Adres:</span> ul. <xsl:value-of select="adres/ulica"/>&#160;<xsl:value-of select="adres/nr_domu"/><br/><xsl:value-of select="adres/miasto"/>&#160;<xsl:value-of select="adres/kod_pocztowy"/></p><p><span>Data urodzenia:</span> <xsl:value-of select="data_urodzenia"/></p>
<p><span>Numer telefonu:</span> <xsl:value-of select="nr_telefonu"/></p>
<p><span>Pesel:</span> <xsl:value-of select="pesel"/>
</p>
<xsl:variable name="imiee" select="imie" />
<h4>Zwycięzca wydarzeń:</h4>
 <xsl:for-each select="/wybitni/wydarzenia/wydarzenie">

<xsl:choose>
  <xsl:when test="zwyciezca/imie = $imiee">

                       <xsl:value-of select="nazwa"/><br/>
 </xsl:when>
</xsl:choose>
  </xsl:for-each>
</div>
</xsl:for-each>
</div>
</body>
</html>
</xsl:template>
</xsl:stylesheet>

