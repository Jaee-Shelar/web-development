<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; margin: 20px; }
                .student { border: 2px solid #333; padding: 10px; margin: 10px; border-radius: 5px; background-color: #f9f9f9; }
                .name { font-weight: bold; font-size: 18px; color: #0044cc; }
                .age { font-style: italic; color: #666; }
                .course { color: #008000; font-weight: bold; }
            </style>
        </head>
        <body>
            <h2>Student List</h2>
            <xsl:apply-templates select="students/student"/>
        </body>
        </html>
    </xsl:template>

    <xsl:template match="student">
        <div class="student">
            <div class="name">Name: <xsl:value-of select="name"/></div>
            <div class="age">Age: <xsl:value-of select="age"/></div>
            <div class="course">Course: <xsl:value-of select="course"/></div>
        </div>
    </xsl:template>
</xsl:stylesheet>
