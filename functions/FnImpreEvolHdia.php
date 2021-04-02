<?php
/*Autor: Jasson Rodriguez
  Fecha: 11-09-2020*/
class FnImpreEvolHdia
{
    protected $infoCita;

    function InfoEvolHdia($data)
    {
        //print_r($data);
        $this->infoCita = $data;
    }

    function RenderEvolHdia()
    {
        $matriz2 = $this->infoCita[0];
        ?>

        <!doctype html public "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
        <html>

        <head>
            <meta http-equiv=Content-Type content="text/html; charset=utf-8">
            <meta name=ProgId content=Excel.Sheet>
            <meta name=Generator content="Aspose.Cell ">
            <link rel=File-List href="aq37o-ny6su_files/filelist.xml">
            <link rel=Edit-Time-Data href="aq37o-ny6su_files/editdata.mso">
            <link rel=OLE-Object-Data href="aq37o-ny6su_files/oledata.mso">
            <!--[if gte mso 9]><xml>
                <o:DocumentProperties>
                    <o:Author>Marisol Camey</o:Author>
                    <o:Created>2020-09-08T12:37:36Z</o:Created>
                    <o:LastSaved>2020-09-21T12:25:50Z</o:LastSaved>
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
                    margin:25pt;
                    mso-header-margin:0.3in;
                    mso-footer-margin:0.3in;
                    mso-page-orientation:Portrait;
                }
                #tblImpresion {
                    page-break-inside:auto
                }
                #r13 {
                    page-break-inside:avoid;
                    page-break-after:auto;
                }


                tr
                {mso-height-source:auto;
                    mso-ruby-visibility:none;}
                col
                {mso-width-source:auto;
                    mso-ruby-visibility:none;}
                br
                {mso-data-placement:same-cell;}
                .style0
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
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
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
                .x23
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:right;
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
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
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
                .x27
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
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
                .x28
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
                .x29
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
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x30
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:18pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x31
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
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
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x33
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
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
                .x34
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
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
                .x35
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
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
                .x36
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
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
                .x37
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align: middle;
                    white-space:normal;
                    word-wrap: break-word;
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
                .x38
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
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x39
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
                .x40
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
                    <x:WindowTopX>28680</x:WindowTopX>
                    <x:WindowTopY>-120</x:WindowTopY>
                    <x:RefModeR1C1/>
                    <x:TabRatio>600</x:TabRatio>
                    <x:ActiveSheet>0</x:ActiveSheet>
                </x:ExcelWorkbook>
            </xml><![endif]-->
        </head>
        <body link=blue vlink=purple >

        <table border=0 cellpadding=0 cellspacing=0 width=967 style='border-collapse:
 collapse;table-layout:fixed;width:725pt' id="tblImpresion">
            <col width=80 span=6 style='width:70pt'>
            <col width=77 style='mso-width-source:userset;width:57.75pt'>
            <col width=80 span=2 style='width:60pt'>
            <col width=250 style='mso-width-source:userset;width:187.5pt'>

            <tr height=31 style='mso-height-source:userset;height:23.25pt' id='r0'>
                <td colspan=10 rowspan="2" height=31 width=967 style='height:23.25pt;' align=left valign=top><span style='mso-ignore:vglayout;position:absolute;z-index:0;margin-left:68px;margin-top:0px;width:79px;height:80px'><img width=105 height=105 src="../img/logo.png"></span><span  style='mso-ignore:vglayout2'><table cellpadding=0 cellspacing=0><tr><td colspan=12 height=31 class=x30 width=967 style='height:23.25pt;'>Hospital Nacional Especializado <br> de Villa Nueva</td></tr></table></span></td>
            </tr>
            <!--<tr height=31 style='mso-height-source:userset;height:23.25pt' id='r1'>
                <td colspan="11" height=31 class=x30 style='height:23.25pt; text-align: center'></td>
            </tr>-->
            <tr height=31 style='mso-height-source:userset;height:23.25pt' id='r2'>
                <td colspan=9 height=31 class=x30 style='height:23.25pt;'></td>
                <td></td>
            </tr>
            <tr height=31 style='mso-height-source:userset;height:23.25pt' id='r3'>
                <td height=31 class=x21 style='height:23.25pt;'></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r4'>
                <td colspan=10 height=20 class=x31 style='height:15pt;'>EVOLUCIÓN HOSPITAL DE DÍA</td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r5'>
                <td height=20 class=x25 style='height:15pt;'></td>
                <td class=x25></td>
                <td class=x25></td>
                <td class=x25></td>
                <td class=x25></td>
                <td class=x25></td>
                <td class=x25></td>
                <td class=x25></td>
                <td class=x25></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r6'>
                <td height=20 class=x25 style='height:15pt;'></td>
                <td class=x25></td>
                <td class=x25></td>
                <td class=x25></td>
                <td class=x25></td>
                <td class=x25></td>
                <td class=x25></td>
                <td class=x25></td>
                <td class=x25></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r7'>
                <td height=20 class=x22 style='height:15pt;'>Nombre:</td>
                <td colspan=5 class=x33 style='border-bottom:1px solid windowtext;'><?php echo $matriz2['Nombre'];?></td>
                <td colspan=2 class=x32>No. Expediente:</td>
                <td class=x29 colspan="2" style="text-align: center"><?php echo $matriz2['CitStrRegMedico'];?></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r8'>
                <td height=20 class=x22 style='height:15pt;'></td>
                <td colspan=2 class=x38></td>
                <td colspan=2 class=x38></td>
                <td class=x22></td>
                <td class=x22></td>
                <td colspan=2 class=x39></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r9'>
                <td height=20 class=x22 style='height:15pt;'>Edad:</td>
                <td colspan=4 class=x33 style='border-bottom:1px solid windowtext;'><?php echo $matriz2['EdadPaciente'];?></td>
                <td class=x23></td>
                <td class=x24></td>
                <td colspan=2 class=x40></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r10'>
                <td height=20 colspan=6 style='height:15pt;mso-ignore:colspan;'></td>
                <td></td>
                <td colspan=2 style='mso-ignore:colspan;'></td>
                <td></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:15.75pt' id='r11'>
                <td height=21 style='height:15.75pt;'></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>


            <tr height=21 style='mso-height-source:userset;height:15.75pt' id='r12'>
                <td colspan=1 height=17 class=x34 style='border-right:1px solid windowtext;border-bottom:2px solid windowtext;height:12.75pt;'>FECHA Y HORA</td>
                <td colspan=7 class=x35 style='border-right:2px solid windowtext;border-bottom:2px solid windowtext;'>TRATAMIENTO Y OBSERVACIONES</td>
                <td class=x27 colspan=2>FIRMA</td>
            </tr>

            <?php
            $cont = 1; foreach ($matriz2['ArrayEvoluciones'] as $row) { ?>

            <tr height=86 style='mso-height-source:userset;height:130pt' id='r13'>
                <td colspan=1 height=83 class=x37 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:62.25pt;'><?php echo $row['datFechaHora'] ?></td>
                <td colspan=7 class=x37 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'><?php echo $row['strEvolucionHdia'] ?></td>
                <td class=x26 colspan=2></td>
            </tr>

            <?php }//Fin de Foreach?>


        <?php
        for($j=$cont; $j<6; $j++){ ?>

            <tr height=80 style='mso-height-source:userset;height:60pt;mso-xlrowspan:4' id='r14'>
                <td height=80 colspan=6 style='height:60pt;mso-ignore:colspan;'></td>
                <td></td>
                <td colspan=2 style='mso-ignore:colspan;'></td>
                <td></td>
            </tr>

        <?php	} ?>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r15'>
                <td height=20 style='height:15pt;'></td>
                <td class=x28></td>
                <td></td>
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
                <td width=77 style='width:57.75pt'></td>
                <td width=80 style='width:60pt'></td>
                <td width=80 style='width:60pt'></td>
                <td width=250 style='width:187.5pt'></td>
            </tr>
            <![endif]>
        </table>

        </body>

        <style>
            <!--
            .x41
            {
                mso-style-parent:style0;
                mso-number-format:General;
                vertical-align:middle;
                white-space:normal;word-wrap:break-word;
                mso-pattern:auto;
                color:#000000;
                font-size:18pt;
                font-weight:700;
                font-style:normal;
                font-family:"Arial","sans-serif";
                mso-protection:locked visible;
            }
            -->

            body:after{
                content: url("../img/logo.png");
                font-size: 15em;
                color: rgba(52, 166, 214, 0.4);
                z-index: 9999;
                opacity: 0.1;

                display: flex;
                align-items: center;
                justify-content: center;
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;

                -webkit-pointer-events: none;
                -moz-pointer-events: none;
                -ms-pointer-events: none;
                -o-pointer-events: none;
                pointer-events: none;

                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                -o-user-select: none;
                user-select: none;
            }
        </style>
        </html>


        <?php
    }

}