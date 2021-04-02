<?php

class FuncNotEnf
{
    protected $infoCia;

    function InfoNotEnf($data)
    {
        //print_r($data);
        $this->infoCia = $data;
    }

    function RenderNotEnf()
    {
        $matrix2 = $this->infoCia[0];
        ?>

        <!doctype html public "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
        <html
        <head>
            <meta http-equiv=Content-Type content="text/html; charset=utf-8">
            <meta name=ProgId content=Excel.Sheet>
            <meta name=Generator content="Aspose.Cell ">
            <link rel=File-List href="aif6q-gcjz2_files/filelist.xml">
            <link rel=Edit-Time-Data href="aif6q-gcjz2_files/editdata.mso">
            <link rel=OLE-Object-Data href="aif6q-gcjz2_files/oledata.mso">
            <!--[if gte mso 9]><xml>
                <o:DocumentProperties>
                    <o:Author>Usuario</o:Author>
                    <o:LastPrinted>2020-07-01T10:23:55Z</o:LastPrinted>
                    <o:Created>2020-06-30T12:03:53Z</o:Created>
                    <o:LastSaved>2020-07-07T12:29:34Z</o:LastSaved>
                </o:DocumentProperties>
            </xml><![endif]-->
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
                {
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
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
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                td
                {mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
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
                    vertical-align:bottom;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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

                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:bottom;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:middle;
                    white-space:nowrap;
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
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
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
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x23
                {
                    mso-style-parent:style0;
                    mso-number-format:"M\/d\/yyyy";
                    vertical-align:bottom;
                    white-space:nowrap;
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
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x25
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x26
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x27
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
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
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:none;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x29
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
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
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:2px solid windowtext;
                    border-bottom:none;
                    border-left:none;
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
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
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
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x33
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x34
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x35
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                -->
            </style>
            <!--[if gte mso 9]><xml>
                <x:ExcelWorkbook>
                    <x:ExcelWorksheets>
                        <x:ExcelWorksheet>
                            <x:Name>Sheet3</x:Name>
                            <x:WorksheetOptions>
                                <x:StandardWidth>2048</x:StandardWidth>
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
                    <x:WindowHeight>12576</x:WindowHeight>
                    <x:WindowWidth>23256</x:WindowWidth>
                    <x:WindowTopX>-108</x:WindowTopX>
                    <x:WindowTopY>-108</x:WindowTopY>
                    <x:RefModeR1C1/>
                    <x:TabRatio>600</x:TabRatio>
                    <x:ActiveSheet>0</x:ActiveSheet>
                </x:ExcelWorkbook>
            </xml><![endif]-->
        </head>
        <body link=blue vlink=purple >

        <table border=0 cellpadding=0 cellspacing=0 width=906 style='border-collapse:
 collapse;table-layout:fixed;width:679pt'>
            <col width=180 span=3 style='mso-width-source:userset;width:135pt'>
            <col width=93 span=2 style='mso-width-source:userset;width:69.75pt'>
            <col width=180 style='mso-width-source:userset;width:135pt'>
            <tr height=20 style='mso-height-source:userset;height:15.6pt' id='r0'>
                <td rowspan=7 height=148 class=x36 width=180 style='height:111.6pt;width:135pt;' align=left valign=top><span style='mso-ignore:vglayout;position:absolute;z-index:0;margin-left:8px;margin-top:10px;width:172px;height:124px'><img width=125 height=120 src="../img/logo.png" style="align-content: center"></span><span  style='mso-ignore:vglayout2'><table cellpadding=0 cellspacing=0><tr><td rowspan=7 height=148 class=x22 width=180 style='height:111.6pt;width:135pt;'></td></tr></table></span></td>
                <td class=x21 width=180 style='width:135pt;'></td>
                <td class=x21 width=180 style='width:135pt;'></td>
                <td class=x21 width=93 style='width:69.75pt;'></td>
                <td class=x21 width=93 style='width:69.75pt;'></td>
                <td class=x21 width=180 style='width:135pt;'></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:16.2pt' id='r1'>
                <td class=x21>Registro médico:</td>
                <td colspan=4 class=x24 style='border-bottom:2px solid windowtext;'><font><?php echo $matrix2['CitStrRegMedico'];?></font></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15.6pt' id='r2'>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:16.2pt' id='r3'>
                <td class=x21>Nombre de paciente:</td>
                <td colspan=4 class=x24 style='border-bottom:2px solid windowtext;'><font><?php echo $matrix2['Nombre'];?></font></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15.6pt' id='r4'>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:16.2pt' id='r5'>
                <td class=x21>Servicio encamamiento:</td>
                <td colspan=2 class=x24 style='border-bottom:2px solid windowtext;'><font><?php echo $matrix2['Servicio'];?></font></td>
                <td class=x35>Cama</td>
                <td class=x34 style="text-align: center"><font><?php echo $matrix2['Cama'];?></font></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:16.2pt' id='r6'>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r7'>
                <td colspan=6 rowspan=18 height=344 class=x25 style='border-right:2px solid windowtext;border-bottom:2px solid windowtext;height:258.3pt; text-align: justify-all'>
                    <font><?php echo $matrix2['HdiaNotaEnfermeria'];?></font>
                </td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r8'>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r9'>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r10'>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r11'>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r12'>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r13'>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r14'>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r15'>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r16'>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r17'>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r18'>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r19'>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r20'>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r21'>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r22'>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r23'>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r24'>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:16.2pt' id='r25'>
                <td height=19 class=x21 style='height:14.7pt;'></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15.6pt' id='r26'>
                <td height=20 class=x21 style='height:15.6pt;'></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td colspan=2 rowspan=3 height=62 class=x25 style='border-right:2px solid windowtext;border-bottom:2px solid windowtext;height:46.5pt;'></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:16.2pt' id='r27'>
                <td height=21 class=x21 style='height:16.2pt;'>Enfermero</td>
                <td colspan=2 class=x24 style='border-bottom:2px solid windowtext;'><font><?php echo $matrix2['SegStrNomUsuario'];?></font></td>
                <td class=x33>Firma</td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:16.2pt' id='r28'>
                <td height=21 class=x21 style='height:16.2pt;'></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:16.2pt' id='r29'>
                <td height=21 class=x21 style='height:16.2pt;'>Fecha y hora</td>
                <td class=x36><?php echo $matrix2['fecha'].' '.$matrix2['hora']; ?></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15.6pt' id='r30'>
                <td height=20 class=x21 style='height:15.6pt;'></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15.6pt' id='r31'>
                <td height=20 class=x21 style='height:15.6pt;'></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r32'>
                <td height=19 style='height:14.4pt;'></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r33'>
                <td height=19 style='height:14.4pt;'></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r34'>
                <td height=19 style='height:14.4pt;'></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r35'>
                <td height=19 style='height:14.4pt;'></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r36'>
                <td height=19 style='height:14.4pt;'></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r37'>
                <td height=19 style='height:14.4pt;'></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r38'>
                <td height=19 style='height:14.4pt;'></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r39'>
                <td height=19 style='height:14.4pt;'></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r40'>
                <td height=19 style='height:14.4pt;'></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r41'>
                <td height=19 style='height:14.4pt;'></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <![if supportMisalignedColumns]>
            <tr height=0 style='display:none'>
                <td width=180 style='width:135pt'></td>
                <td width=180 style='width:135pt'></td>
                <td width=180 style='width:135pt'></td>
                <td width=93 style='width:69.75pt'></td>
                <td width=93 style='width:69.75pt'></td>
                <td width=180 style='width:135pt'></td>
            </tr>
            <![endif]>
        </table>


        <script language = 'javascript' type='text/javascript'>
            function ChangeRowspanHiddenData()
            {
                var node;
                var params=["r0","r7","r26"];
                for (var i = 0;i>params.length; i++)
                {
                    node = document.getElementById(params[i]);
                    if (node != null)
                    {
                        node.style.display = "";
                    }
                }
            }
            ChangeRowspanHiddenData();
        </script>
        </body>

        <style>
            <!--
            .x36 {
                mso-style-parent: style0;
                mso-number-format: General;
                vertical-align: middle;
                white-space: nowrap;
                mso-pattern:auto;
                color:#000000;
                font-size:12pt;
                font-weight:400;
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