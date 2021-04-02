<?php


class FunNReceta
{
    protected $infoCita;

    function InfoNReceta($data)
    {
        //print_r($data);
        $this->infoCita = $data;
    }

    function RenderNReceta()
    {
        $matriz2 = $this->infoCita[0];
        ?>
        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title></title>
    <meta name="generator" content="LibreOffice 6.4.4.2 (Linux)"/>
    <meta name="author" content="Usuario"/>
    <meta name="created" content="2020-07-03T03:23:38"/>
    <meta name="changedby" content="Usuario"/>
    <meta name="changed" content="2020-07-03T03:32:01"/>
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
    <colgroup width="142"></colgroup>
    <colgroup span="6" width="79"></colgroup>
    <tr>
        <td colspan=2 rowspan=4 height="77" align="left" valign=bottom><font color="#000000"><br><img src="../img/logo.png" width=64 height=61 hspace=79 vspace=9>
        </font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td colspan=4 rowspan=2 align="center" valign=bottom><b><font color="#000000">MINISTERIO DE SALUD PUBLICA Y ASISTENCIA SOCIAL<br>HOSPITAL NACIONAL ESPECIALIZADO DE VILLA NUEVA</font></b></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000">Nombre:</font></td>
        <td style="border-bottom: 1px solid #000000" colspan=6 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['Nombre'];?><br></font></td>
        </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000">HC:</font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" colspan=6 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['CitStrRegMedico'];?><br></font></td>
        </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000">Servicio</font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" colspan=6 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['EncStrNombre'];?><br></font></td>
        </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000">No. Cama /No. Clinica</font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" colspan=6 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['EncNumCama'];?><br></font></td>
        </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="left" valign=bottom><font color="#000000">Medicamento </font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Dosis</font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Medida</font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Via</font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Frecuencia</font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Lapso T.</font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000">Dia</font></td>
    </tr>
    <?php foreach ($matriz2['ArrayDetalles'] as $row) { ?>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="left" valign=bottom><font color="#000000"><?php echo $row['AlmacStrNomInsumo']?><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000"><?php echo $row['FarmNumCantDosis']?><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000"><?php echo $row['FarmStrDosisMedida']?><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000"><?php echo $row['FarmStrVia']?><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000"><?php echo $row['FarmNumFrecuencia']?><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000"><?php echo $row['FarmStrUnidadTiempo']?><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000"><?php echo $row['FarmDateDiaDar']?><br></font></td>
    </tr>
    <?php }//Fin de Foreach?>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000">Ordenes Medicas</font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 rowspan=3 align="center" valign=bottom><font color="#000000"><?php error_reporting(0);
                echo $matriz2['ArrayNombreMedico'][0]['OrdenesMedicas'] ?><br></font></td>
        </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000">Medico:</font></td>
        <td style="border-bottom: 1px solid #000000" colspan=3 align="center" valign=bottom><font color="#000000"><?php error_reporting(0);
                echo $matriz2['ArrayNombreMedico'][0]['NombreMedico'] ?><br></font></td>
        <td align="left" valign=bottom><font color="#000000">Firma:</font></td>
        <td style="border-bottom: 1px solid #000000" colspan=2 align="center" valign=bottom><font color="#000000"><br></font></td>
        </tr>
</table>
<!-- ************************************************************************** -->
</body>

</html>


        <?php
    }

}