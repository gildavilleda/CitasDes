<?php


class FunEncEvolucion
{
    protected $infoCita;

    function InfoEvolucion($data)
    {
        //print_r($data);
        $this->infoCita = $data;
    }

    function RenderEvolucion()
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
    <meta name="created" content="2020-06-28T16:16:51"/>
    <meta name="changedby" content="Usuario"/>
    <meta name="changed" content="2020-06-28T16:52:19"/>
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
    <colgroup width="119"></colgroup>
    <colgroup span="3" width="79"></colgroup>
    <colgroup width="91"></colgroup>
    <tr>
        <td rowspan=5 height="96" align="left" valign=bottom><font color="#000000"><br><img src="../img/logo.png" width=60 height=61 hspace=29 vspace=19>
        </font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td colspan=4 rowspan=2 align="center" valign=bottom><b><font color="#000000">MINISTERIO DE SALUD PUBLICA Y ASISTENCIA SOCIAL<br>HOSPITAL NACIONAL ESPECIALIZADO DE VILLA NUEVA</font></b></td>
        </tr>
    <tr>
        </tr>
    <tr>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000">Fecha y Hora:</font></td>
        <td style="border-bottom: 2px solid #000000" colspan=4 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['fecha'].' '.$matriz2['hora'];?><br></font></td>
        </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000">Registro Médico:</font></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000" colspan=4 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['CitStrRegMedico'];?><br></font></td>
        </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000">Nombre:</font></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000" colspan=4 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['Nombre'];?><br></font></td>
        </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000">Diagnostico:</font></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=4 rowspan=3 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['HdiaStrDiagnostico'];?><br></font></td>
        </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
        </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000">Datos Subjetivos:</font></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=4 rowspan=3 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['HdiaStrDatSubjetivos'];?><br></font></td>
        </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
        </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000">Datos Objetivos:</font></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=4 rowspan=3 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['HdiaStrDatObjetivos'];?><br></font></td>
        </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
        </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000">Ordenes Medicas:</font></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=4 rowspan=3 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['HdiaStrOrdenesMedicas'];?><br></font></td>
        </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
        </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000">Comentario:</font></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=4 rowspan=3 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['HdiaStrComentario'];?><br></font></td>
        </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
        </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000">Ventilacion:</font></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=4 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['HdiaStrVentilacion'];?><br></font></td>
        </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000">Prueba Hisopado:</font></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" align="left" valign=bottom><font color="#000000"><?php echo $matriz2['HdiaStrHisopado'];?><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000">Antigeno:</font></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" align="left" valign=bottom><font color="#000000"><?php echo $matriz2['HdiaStrAntogeno'];?><br></font></td>
    </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000">Detalle Hisopado:</font></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=4 rowspan=3 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['HdiaStrDetalleHisopado'];?><br></font></td>
        </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
        </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
     <?php foreach ($matriz2['ArrayCIE'] as $row) { ?>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000">Codigos CIE10:</font></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=4 align="center" valign=bottom><font color="#000000"><?php echo $row['HdiaStrCodCie'].' '. $row['HdiaStrDiagnostico'] ?><br></font></td>
        </tr>
        <?php }//Fin de Foreach?>
            
        
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000">Nombre Medico:</font></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=4 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['SegStrNomUsuario'];?><br></font></td>
        </tr>
    <tr>
        <td height="19" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="20" align="left" valign=bottom><font color="#000000">Firma:</font></td>
        <td style="border-bottom: 2px solid #000000" colspan=4 align="center" valign=bottom><font color="#000000"><br></font></td>
        </tr>
</table>
<!-- ************************************************************************** -->
</body>

</html>


        <?php
    }

}