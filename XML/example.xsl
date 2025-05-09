<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" 
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>
            <head>
                <title>XML to HTML Example</title>
            </head>
            <body>
                <h2>Note Details</h2>
                <table border="1">
                    <tr>
                        <th>To</th>
                        <th>From</th>
                        <th>Heading</th>
                        <th>Body</th>
                    </tr>
                    <tr>
                        <td><xsl:value-of select="note/to"/></td>
                        <td><xsl:value-of select="note/from"/></td>
                        <td><xsl:value-of select="note/heading"/></td>
                        <td><xsl:value-of select="note/body"/></td>
                    </tr>
                </table>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
