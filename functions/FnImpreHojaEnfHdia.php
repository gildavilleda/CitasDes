<?php
/*Autor: Jasson Rodriguez
  Fecha: 11-09-2020*/
class FnImpreHojaEnfHdia
{
    protected $infoCita;

    function InfoHojaEnfHdia($data)
    {
        //print_r($data);
        $this->infoCita = $data;
    }

    function RenderHojaEnfHdia()
    {
        $matriz2 = $this->infoCita[0];
        ?>

        <html>

        <head>
            <meta http-equiv=Content-Type content="text/html; charset=utf-8">
            <meta name=ProgId content=Excel.Sheet>
            <meta name=Generator content="Aspose.Cell ">
            <link rel=File-List href="a9wv9-jb78q_files/filelist.xml">
            <link rel=Edit-Time-Data href="a9wv9-jb78q_files/editdata.mso">
            <link rel=OLE-Object-Data href="a9wv9-jb78q_files/oledata.mso">

            <style>
                <!--table
                {mso-displayed-decimal-separator:"\.";
                    mso-displayed-thousand-separator:"\,";}
                @page
                {
                    mso-header-data:"";
                    mso-footer-data:"";
                    margin:0.75in 0.7in 0.75in 0.7in;
                    mso-header-margin:0.3in;
                    mso-footer-margin:0.3in;
                    mso-page-orientation:Portrait;
                }
                tr
                {mso-height-source:auto;
                    mso-ruby-visibility:none;}
                col
                {mso-width-source:auto;
                    mso-ruby-visibility:none;}
                br
                {mso-data-placement:same-cell;}
                ruby
                {ruby-align:left;}
                .style0
                {
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border:none;
                    mso-protection:locked visible;
                    mso-style-name:Normal;
                    mso-style-id:0;}
                .font0
                {
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font1
                {
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                .font2
                {
                    color:#000000;
                    font-size:18pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                .font3
                {
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font4
                {
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                td
                {mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border:none;
                    mso-protection:locked visible;
                    mso-ignore:padding;}
                .style0
                {
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Normal";
                }
                .style1
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style2
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style3
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style4
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style5
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style6
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style7
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style8
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style9
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style10
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style11
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style12
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style13
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style14
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x15
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .style16
                {
                    mso-number-format:"0%";
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Percent";
                }
                .style17
                {
                    mso-number-format:"_\(\0022$\0022* \#\,\#\#0\.00_\)\;_\(\0022$\0022* \(\#\,\#\#0\.00\)\;_\(\0022$\0022* \0022-\0022??_\)\;_\(\@_\)";
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Currency";
                }
                .style18
                {
                    mso-number-format:"_\(\0022$\0022* \#\,\#\#0_\)\;_\(\0022$\0022* \(\#\,\#\#0\)\;_\(\0022$\0022* \0022-\0022_\)\;_\(\@_\)";
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Currency [0]";
                }
                .style19
                {
                    mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \(\#\,\#\#0\.00\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Comma";
                }
                .style20
                {
                    mso-number-format:"_\(* \#\,\#\#0_\)\;_\(* \(\#\,\#\#0\)\;_\(* \0022-\0022_\)\;_\(\@_\)";
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Comma [0]";
                }
                .x21
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:18pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x22
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:18pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x23
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x24
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:right;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x25
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x26
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x27
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x28
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x29
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x30
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x31
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x32
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x33
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x34
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                -->
            </style>
            <!--[if gte mso 9]><xml>
                <x:ExcelWorkbook>
                    <x:ExcelWorksheets>
                        <x:ExcelWorksheet>
                            <x:Name>Hoja1</x:Name>
                            <x:WorksheetOptions>
                                <x:StandardWidth>2560</x:StandardWidth>
                                <x:Print>
                                    <x:ValidPrinterInfo/>
                                    <x:PaperSizeIndex>1</x:PaperSizeIndex>
                                    <x:HorizontalResolution>600</x:HorizontalResolution>
                                    <x:VerticalResolution>600</x:VerticalResolution>
                                </x:Print>
                                <x:Selected/>
                            </x:WorksheetOptions>
                        </x:ExcelWorksheet>
                    </x:ExcelWorksheets>
                    <x:WindowHeight>15840</x:WindowHeight>
                    <x:WindowWidth>29040</x:WindowWidth>
                    <x:WindowTopX>-120</x:WindowTopX>
                    <x:WindowTopY>-120</x:WindowTopY>
                    <x:RefModeR1C1/>
                    <x:TabRatio>600</x:TabRatio>
                    <x:ActiveSheet>0</x:ActiveSheet>
                </x:ExcelWorkbook>
            </xml><![endif]-->
        </head>
        <body link=blue vlink=purple >

        <table border=0 cellpadding=0 cellspacing=0 width=749 style='border-collapse:
 collapse;table-layout:fixed;width:561pt'>
            <col width=80 span=6 style='width:60pt'>
            <col width=109 style='mso-width-source:userset;width:81.75pt'>
            <col width=80 span=2 style='width:60pt'>
            <tr height=31 style='mso-height-source:userset;height:23.25pt' id='r0'>
                <td colspan=9 height=31 class=x35 width=749 style='height:23.25pt;' align=left valign=top><span style='mso-ignore:vglayout;position:absolute;z-index:0;margin-left:68px;margin-top:0px;width:79px;height:80px'><img width=79 height=80 src="a9wv9-jb78q_files\image000.png" name='Imagen 2'></span><span  style='mso-ignore:vglayout2'><table cellpadding=0 cellspacing=0><tr><td colspan=9 height=31 class=x22 width=749 style='height:23.25pt;'>Hospital Nacional Especializado</td></tr></table></span></td>
            </tr>
            <tr height=31 style='mso-height-source:userset;height:23.25pt' id='r1'>
                <td colspan=9 height=31 class=x22 style='height:23.25pt;'>de Villa Nueva</td>
            </tr>
            <tr height=31 style='mso-height-source:userset;height:23.25pt' id='r2'>
                <td colspan=9 height=31 class=x22 style='height:23.25pt;'></td>
            </tr>


            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r4'>
                <td colspan=9 height=20 class=x29 style='height:15pt;'>HOJA DE ENFERMERÍA</td>
            <tr height=31 style='mso-height-source:userset;height:23.25pt' id='r3'>
                <td height=31 class=x21 style='height:23.25pt;'></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r5'>
                <td height=20 class=x23 style='height:15pt;'>Nombre:</td>
                <td colspan=5 class=x25 style='border-bottom:1px solid windowtext;'><?php echo $matriz2['Nombre'];?></td>
                <td class=x23>No. Expediente:</td>
                <td colspan=2 class=x25 style='border-bottom:1px solid windowtext;'><?php echo $matriz2['CitStrRegMedico'];?></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r6'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td colspan=2 class=x27></td>
                <td colspan=2 class=x27></td>
                <td class=x23></td>
                <td class=x23></td>
                <td colspan=2 class=x27></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r7'>
                <td height=20 class=x23 style='height:15pt;'>Edad:</td>
                <td colspan=4 class=x25 style='border-bottom:1px solid windowtext;'><?php echo $matriz2['EdadPaciente'];?></td>
                <td class=x24></td>
                <td class=x28></td>
                <td colspan=2 class=x26></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r8'>
                <td height=20 colspan=6 style='height:15pt;mso-ignore:colspan;'></td>
                <td></td>
                <td colspan=2 style='mso-ignore:colspan;'></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:15.75pt' id='r9'>
                <td height=21 style='height:15.75pt;'></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:15.75pt' id='r10'>
                <td colspan=2 height=17 class=x31 style='border-right:1px solid windowtext;border-bottom:2px solid windowtext;height:12.75pt;'>FECHA Y HORA</td>
                <td colspan=7 class=x32 style='border-right:2px solid windowtext;border-bottom:2px solid windowtext;'>TRATAMIENTO Y OBSERVACIONES</td>
            </tr>

            <?php foreach ($matriz2['ArrayOrdenes'] as $row) { ?>
                <tr height=20 style='mso-height-source:userset;height:15pt' id='r11'>
                    <td colspan=2 height=17 class=x30 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:12.75pt;'><?php echo $row['datFechaHora'] ?></td>
                    <td colspan=7 class=x30 style='border-right:1px solid windowtext; border-bottom:1px solid windowtext; white-space: normal; word-wrap: break-word;'><?php echo $row['strTrataObser'] ?></td>
                </tr>
            <?php }//Fin de Foreach
            ?>

            <tr height=80 style='mso-height-source:userset;height:60pt;mso-xlrowspan:4' id='r12'>
                <td height=80 colspan=6 style='height:60pt;mso-ignore:colspan;'></td>
                <td></td>
                <td colspan=2 style='mso-ignore:colspan;'></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r13'>
                <td height=20 style='height:15pt;'></td>
                <td class=x34></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <![if supportMisalignedColumns]>
            <tr height=0 style='display:none'>
                <td width=80 style='width:60pt'></td>
                <td width=80 style='width:60pt'></td>
                <td width=80 style='width:60pt'></td>
                <td width=80 style='width:60pt'></td>
                <td width=80 style='width:60pt'></td>
                <td width=80 style='width:60pt'></td>
                <td width=109 style='width:81.75pt'></td>
                <td width=80 style='width:60pt'></td>
                <td width=80 style='width:60pt'></td>
            </tr>
            <![endif]>
        </table>

        </body>

        <style>
            <!--
            .x35
            {
                mso-style-parent:style0;
                mso-number-format:General;
                text-align:general;
                vertical-align:middle;
                white-space:normal;word-wrap:break-word;
                background:auto;
                mso-pattern:auto;
                color:#000000;
                font-size:18pt;
                font-weight:700;
                font-style:normal;
                font-family:"Arial","sans-serif";
                mso-protection:locked visible;
            }
            -->
        </style>
        </html>



        <?php
    }

}