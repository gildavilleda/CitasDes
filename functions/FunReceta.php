<?php


class FunReceta
{
    protected $infoCita;

    function InfoReceta($data)
    {
        //print_r($data);
        $this->infoCita = $data;
    }

    function RenderReceta()
    {
        $matriz2 = $this->infoCita[0];
        ?>
        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

        <html>
        <head>

            <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
            <title></title>
            <meta name="generator" content="LibreOffice 6.3.4.2 (Linux)"/>
            <meta name="author" content="Vaneska Corado"/>
            <meta name="created" content="2020-04-08T17:32:01"/>
            <meta name="changedby" content="Usuario"/>
            <meta name="changed" content="2020-04-08T21:32:26"/>
            <meta name="AppVersion" content="16.0300"/>
            <meta name="DocSecurity" content="0"/>
            <meta name="HyperlinksChanged" content="false"/>
            <meta name="LinksUpToDate" content="false"/>
            <meta name="ScaleCrop" content="false"/>
            <meta name="ShareDoc" content="false"/>

            <style type="text/css">
                body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Calibri"; font-size:x-small }
                a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  }
                a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  }
                comment { display:none;  }
            </style>

        </head>

        <body>
        <table cellspacing="0" border="0">
            <colgroup width="29"></colgroup>
            <colgroup width="56"></colgroup>
            <colgroup width="67"></colgroup>
            <colgroup width="86"></colgroup>
            <colgroup width="16"></colgroup>
            <colgroup width="203"></colgroup>
            <colgroup width="27"></colgroup>
            <tr>
                <td style="border-top: 2px solid #000000; border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-top: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-top: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-top: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-top: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-top: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-top: 2px solid #000000; border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="50" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td  colspan=5 align="center" valign=middle><font face="Arial" size=3 color="#000000"><img src="../img/logo.png" style="width: 75px; height: 75px; align-content: center"></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="50" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td colspan=5 align="center" valign=middle><font face="Arial" size=3 color="#000000">HOSPITAL NACIONAL ESPECIALIZADO DE VILLA NUEVA</font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="30" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td colspan=5 align="center" valign=middle><font face="Arial" size=3 color="#000000">RECETA</font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="26" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td colspan=2 align="left" valign=bottom><font face="Arial" size=3 color="#000000">Fecha</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Arial" size=3 color="#000000"><?php echo $matriz2['HdiaDatFecha'];?><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="13" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="19" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000">Registro Médico</font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="19" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=bottom><font face="Arial" size=3 color="#000000"><?php echo $matriz2['CitStrRegMedico'];?><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="13" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-bottom: 1px solid #000000" colspan=5 align="left" valign=bottom><font face="Arial" size=3 color="#000000">Nombre paciente</font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=bottom><font face="Arial" size=3 color="#000000"><?php echo $matriz2['NombrePaciente'];?><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="13" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td colspan=2 align="left" valign=bottom><font face="Arial" size=3 color="#000000">Médico</font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=bottom><font face="Arial" size=3 color="#000000"><?php echo $matriz2['SegStrNomUsuario'];?><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="13" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-bottom: 1px solid #000000" colspan=5 align="left" valign=bottom><font face="Arial" size=3 color="#000000">Receta</font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 rowspan=5 align="center" valign=bottom><font face="Arial" size=3 color="#000000"><?php echo $matriz2['HdiaStrReceta'];?><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="center" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="center" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="center" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="center" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="center" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000">Sello</font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font face="Arial" size=3 color="#000000">Firma</font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=4 align="center" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="center" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="center" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="center" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td align="center" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-bottom: 2px solid #000000; border-left: 2px solid #000000" height="22" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-bottom: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-bottom: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-bottom: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-bottom: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-bottom: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
                <td style="border-bottom: 2px solid #000000; border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=3 color="#000000"><br></font></td>
            </tr>
        </table>
        <!-- ************************************************************************** -->
        </body>

        </html>

        <?php
    }

}