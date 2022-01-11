<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body style="font-family:Arial;font-size:18pt;background-color:#EEEEEE">
<xsl:for-each select="Catalog/Book">
  <div style="background-color:teal;color:white;padding:4px">
    <span style="font-weight:bold"><xsl:value-of select="Title"/></span>
    <!-- <xsl:value-of select="Price"/> -->
    </div>
  <div style="margin-left:20px;margin-bottom:1em;font-size:12pt">    
    <xsl:value-of select="Publication"/>
    <div>
    <span style="font-style:italic">The Author of the book is(<xsl:value-of select="Author"/>)</span>
    </div>
    <div>
    <span style="font-style:italic">The book is published by(<xsl:value-of select="Publication"/>)</span>
    </div>
    <div>
    <span style="font-style:italic">The Current Edition of the book is(<xsl:value-of select="Edition"/>)</span>
    </div>
    <div>
    <span style="font-style:italic">The book is avilable with the printed price of (<xsl:value-of select="Price"/>)</span>
    </div>

    <span style="font-style:italic">the ISBN number of book is-(<xsl:value-of select="ISBN"/>)</span>
    
  </div>
</xsl:for-each>
</body>
</html>