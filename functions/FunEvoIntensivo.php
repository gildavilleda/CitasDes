<?php


class FunEvoIntensivo
{
    protected $infoCita;

    function InfoEvolucionInten($data)
    {
        //print_r($data);
        $this->infoCita = $data;
    }

    function RenderEvolucionInten()
    {
        $matriz2 = $this->infoCita[0];
        ?>
        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

        <html>
        <head>

            <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
            <title></title>
            <meta name="generator" content="LibreOffice 6.4.4.2 (Linux)"/>
            <meta name="author" content="Marisol Camey"/>
            <meta name="created" content="2020-06-30T20:34:25"/>
            <meta name="changedby" content="Marisol Camey"/>
            <meta name="changed" content="2020-07-01T16:31:41"/>
            <meta name="AppVersion" content="16.0300"/>
            <meta name="ContentTypeId" content="0x010100B366DB8D63E3324CAA27DE38931CC863"/>
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
            <colgroup width="104"></colgroup>
            <colgroup width="75"></colgroup>
            <colgroup width="79"></colgroup>
            <colgroup width="76"></colgroup>
            <colgroup width="97"></colgroup>
            <colgroup width="79"></colgroup>
            <colgroup width="85"></colgroup>
            <tr>
                <td rowspan=4 height="80" align="left" valign=bottom><font color="#000000"><br><img src="../img/logo.png" width=60 height=61 hspace=29 vspace=19>
                    </font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td colspan=4 align="center" valign=bottom><b><font color="#000000">MINISTERIO DE SALUD PUBLICA Y ASISTENCIA SOCIAL</font></b></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td colspan=4 align="center" valign=bottom><b><font color="#000000">HOSPITAL NACIONAL ESPECIALIZADO DE VILLA NUEVA</font></b></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
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
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-bottom: 1px solid #a6a6a6" height="20" align="left" valign=bottom><font color="#000000">Fecha y Hora</font></td>
            
                <td style="border-bottom: 1px solid #000000" colspan=6 align="center" valign=bottom><font color="#000000"><br><?php echo $matriz2['IntenDate'];?></font></td>
            </tr>
            <tr>
                <td style="border-bottom: 1px solid #a6a6a6; border-left: 1px solid #a6a6a6; border-right: 1px solid #a6a6a6" height="20" align="left" valign=bottom><font color="#000000">Registro médico</font></td>
                
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #a6a6a6" colspan=6 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['IntenStrRegMedico'];?><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #a6a6a6; border-bottom: 1px solid #a6a6a6; border-left: 1px solid #a6a6a6; border-right: 1px solid #a6a6a6" height="20" align="left" valign=bottom><font color="#000000">Nombre</font></td>
               
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #a6a6a6" colspan=6 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['Nombre'];?><br></font></td>
            </tr>
                    
            <tr>
                <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
             <?php
       $contador;

       foreach ($matriz2['ArrayInten'] as $row) {
           $Grupo=$row['IntenStrDescripcion'];
           if ($contador!=$Grupo){?>
                <tr>
                <td   style="border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black"  colspan=8 align="center" valign=bottom bgcolor="#9DC3E6"><font color="#000000"><?php echo ($row['IntenStrDescripcion']); ?><br></font></td>
                 </tr>
         <?php }
 
          ?>

            <tr>
                <td style="border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black"  
                 colspan=2 align="center" valign=bottom><font color="#000000"><?php echo ($row['IntenStrCampDescripcion']); ?><br></font></td>
                <td style="border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black"
                 colspan=6 align="center" valign=bottom><font color="#000000"><?php echo ($row['IntenStrTextoChequeo']); ?><br></font></td>
                
            </tr>
            <?php
           $contador=$Grupo;
       }

       //Fin de Foreach?>

              
              <tr>
                <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td colspan=7 height="20" align="center" valign=bottom bgcolor="#9DC3E6"><font color="#000000">GLASGOW</font></td>
            </tr>
           
       



            <?php foreach ($matriz2['ArrayGlasgow'] as $row) { ?>
                <tr>

                    <td style="border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black" colspan=2 align="center" valign=bottom><font color="#000000"><?php echo $row['IntenStrDescripcion'] ?><br></font></td>
                    <td style="border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black" colspan=6 align="center" valign=bottom><font color="#000000"><?php echo $row['IntenNumValorEscala'] ?><br></font></td>
                </tr>

            <?php }//Fin de Foreach?>
            <tr>
                <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>

            <tr>
                <td style="border-top: 1px solid #a6a6a6; border-bottom: 1px solid #a6a6a6; border-left: 1px solid #a6a6a6; border-right: 1px solid #a6a6a6" colspan=7 height="20" align="center" valign=bottom bgcolor="#9DC3E6"><font color="#000000">CIE10</font></td>
            </tr>

            <tr>
                <td style="border-left: 1px solid #a6a6a6" height="20" align="left" valign=bottom><font color="#000000">CODIGO</font></td>
                <td style="border-right: 1px solid #a6a6a6" colspan=6 align="center" valign=bottom><font color="#000000">DESCRIPCION</font></td>
            </tr>

            <?php foreach ($matriz2['ArrayCIE'] as $row) { ?>
                <tr>

                    <td style="border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black" colspan=2 align="center" valign=bottom><font color="#000000"><?php echo $row['HdiaStrCodCie'] ?><br></font></td>
                    <td style="border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black" colspan=6 align="center" valign=bottom><font color="#000000"><?php echo $row['HdiaStrDiagnostico'] ?><br></font></td>
                </tr>

            <?php }//Fin de Foreach?>




      


            <tr>
                <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
                <td colspan=6 align="center" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #a6a6a6; border-left: 1px solid #a6a6a6; border-right: 1px solid #a6a6a6" height="20" align="left" valign=bottom><font color="#000000">Nombre Médico</font></td>
                <td style="border-top: 1px solid #a6a6a6; border-bottom: 1px solid #000000; border-right: 1px solid #a6a6a6" colspan=6 align="center" valign=bottom><font color="#000000"><?php echo $matriz2['SegStrNomUsuario'];?><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid #a6a6a6; border-right: 1px solid #a6a6a6" height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
                <td style="border-right: 1px solid #a6a6a6" colspan=6 align="center" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-bottom: 1px solid #a6a6a6; border-left: 1px solid #a6a6a6; border-right: 1px solid #a6a6a6" height="35" align="left" valign=bottom><font color="#000000">Firma</font></td>
                <td style="border-left: 1px solid #a6a6a6; border-right: 1px solid #a6a6a6" colspan=6 align="center" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000" colspan=6 align="center" valign=bottom><font color="#000000"><br></font></td>
            </tr>
        </table>
        <!-- ************************************************************************** -->
        </body>

        </html>



        <?php
    }

}
