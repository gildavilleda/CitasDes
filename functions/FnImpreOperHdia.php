<?php
/*Autor: Jasson Rodriguez
  Fecha: 01-09-2020*/
class FnImpreOperHdia
{
    protected $infoCita;

    function InfoOperHdia($data)
    {
        //print_r($data);
        $this->infoCita = $data;
    }

    function RenderOperHdia()
    {
        $matriz2 = $this->infoCita[0];
        ?>
        <!DOCTYPE html PUBLIC "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
        <!-- saved from url=(0140)https://dl.ioconvert.com/document/20200901161341a14f732254b64a7fad7a6b015b60b9ff/formato-cirugia-hdia-2f4e66afa135ca5f667d53a2789914bd8.html -->
        <!--<!<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="ProgId" content="Excel.Sheet">
        <meta name="Generator" content="Aspose.Cell ">
        <link rel="File-List" href="https://dl.ioconvert.com/document/20200901161341a14f732254b64a7fad7a6b015b60b9ff/ap7jh-kqux3_files/filelist.xml">
        <link rel="Edit-Time-Data" href="https://dl.ioconvert.com/document/20200901161341a14f732254b64a7fad7a6b015b60b9ff/ap7jh-kqux3_files/editdata.mso">
        <link rel="OLE-Object-Data" href="https://dl.ioconvert.com/document/20200901161341a14f732254b64a7fad7a6b015b60b9ff/ap7jh-kqux3_files/oledata.mso">
        [if gte mso 9]><xml>-->
        <!--<o:DocumentProperties>
         <o:Author>jasson rodriguez</o:Author>
         <o:LastPrinted>2020-08-31T13:06:01Z</o:LastPrinted>
         <o:Created>2020-08-28T13:09:42Z</o:Created>
         <o:LastSaved>2020-08-31T14:00:18Z</o:LastSaved>
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
                margin:0.75in 0.25in 0.75in 0.25in;
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
                font-size:11pt;
                font-weight:700;
                font-style:normal;
                font-family:"Calibri","sans-serif"; }
            .font3
            {
                color:#000000;
                font-size:18pt;
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
            .x24
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
            .x28
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
                border-top:none;
                border-right:none;
                border-bottom:1px solid windowtext;
                border-left:none;
                mso-diagonal-down:none;
                mso-diagonal-up:none;
                mso-protection:locked visible;
            }
            .x29
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
                border-top:2px solid windowtext;
                border-right:none;
                border-bottom:none;
                border-left:none;
                mso-diagonal-down:none;
                mso-diagonal-up:none;
                mso-protection:locked visible;
            }
            .x30
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
                border-top:2px solid windowtext;
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
                border-top:none;
                border-right:none;
                border-bottom:none;
                border-left:2px solid windowtext;
                mso-diagonal-down:none;
                mso-diagonal-up:none;
                mso-protection:locked visible;
            }
            .x32
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
            .x33
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
                border-top:none;
                border-right:2px solid windowtext;
                border-bottom:none;
                border-left:none;
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
                border-top:none;
                border-right:none;
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
                border-top:none;
                border-right:none;
                border-bottom:2px solid windowtext;
                border-left:none;
                mso-diagonal-down:none;
                mso-diagonal-up:none;
                mso-protection:locked visible;
            }
            .x36
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
                border-top:none;
                border-right:2px solid windowtext;
                border-bottom:2px solid windowtext;
                border-left:none;
                mso-diagonal-down:none;
                mso-diagonal-up:none;
                mso-protection:locked visible;
            }
            .x37
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
                font-weight:700;
                font-style:normal;
                font-family:"Calibri","sans-serif";
                border-top:2px solid windowtext;
                border-right:none;
                border-bottom:none;
                border-left:2px solid windowtext;
                mso-diagonal-down:none;
                mso-diagonal-up:none;
                mso-protection:locked visible;
            }
            .x38
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
            .x39
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
            .x40
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
                border-top:1px solid windowtext;
                border-right:none;
                border-bottom:none;
                border-left:none;
                mso-diagonal-down:none;
                mso-diagonal-up:none;
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
                            <x:TopRowVisible>15</x:TopRowVisible>
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
        <body link="blue" vlink="purple">

        <table border="0" cellpadding="0" cellspacing="0" width="677" style="border-collapse:
 collapse;table-layout:fixed;width:507pt">
            <colgroup><col width="63" style="mso-width-source:userset;width:47.25pt">
                <col width="39" style="mso-width-source:userset;width:29.25pt">
                <col width="15" style="mso-width-source:userset;width:11.25pt">
                <col width="41" style="mso-width-source:userset;width:30.75pt">
                <col width="33" style="mso-width-source:userset;width:24.75pt">
                <col width="118" style="mso-width-source:userset;width:88.5pt">
                <col width="108" style="mso-width-source:userset;width:81pt">
                <col width="40" style="mso-width-source:userset;width:30pt">
                <col width="220" style="mso-width-source:userset;width:165pt">
            </colgroup><tbody><tr height="20" style="mso-height-source:userset;height:15pt" id="r0">
                <td colspan="9" rowspan="4" height="80" class="x41" width="677" style="height:60pt;" align="left" valign="top"><span style="mso-ignore:vglayout;position:absolute;z-index:0;margin-left:13px;margin-top:0px;width:78px;height:79px"><img width="78" height="79" src="../img/logo.png" name="Imagen 2"></span><span style="mso-ignore:vglayout2"><table cellpadding="0" cellspacing="0"><tbody><tr><td colspan="9" rowspan="4" height="80" class="x22" width="677" style="height:60pt;">Hospital Nacional Especializado <br>de Villa Nueva</td></tr></tbody></table></span></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r1">
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r2">
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r3">
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r4">
                <td height="20" style="height:15pt"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r5">
                <td height="20" style="height:15pt;">Nombre:</td>
                <td colspan="5" class="x23" style="border-bottom:1px solid windowtext;"><?php echo $matriz2['Nombre'];?></td>
                <td>No. Expediente:</td>
                <td colspan="2" class="x23" style="border-bottom:1px solid windowtext;"><?php echo $matriz2['CitStrRegMedico'];?></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r6">
                <td height="20" style="height:15pt"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r7">
                <td height="20" style="height:15pt;">Edad:</td>
                <td colspan="4" class="x23" style="border-bottom:1px solid windowtext;"><?php echo $matriz2['HdiaNumEdad'];?></td>
                <td class="x38"><span style="float:right">Fecha:</span></td>
                <td class="x25"><?php echo $matriz2['HdiaDatFecha'];?></td>
                <td>Hora:</td>
                <td class="x28"><?php echo $matriz2['HdiaDatHora'];?></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r8">
                <td height="20" style="height:15pt"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r9">
                <td height="20" style="height:15pt;">Diagnóstico Pre-operatorio:</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="4" class="x23" style="border-bottom:1px solid windowtext;"><?php echo $matriz2['HdiaDiagIngreso'];?></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r10">
                <td height="20" style="height:15pt"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r11">
                <td height="20" style="height:15pt;">Diagnóstico Post-operatorio:</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="4" class="x23" style="border-bottom:1px solid windowtext;"><?php /*echo $matriz2['HdiaDatHora'];*/?></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r12">
                <td height="20" style="height:15pt"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r13">
                <td height="20" style="height:15pt;">Cirugía Planeada:</td>
                <td></td>
                <td></td>
                <td colspan="6" class="x23" style="border-bottom:1px solid windowtext;"><?php echo $matriz2['HdiaProcedimiento'];?></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r14">
                <td height="20" style="height:15pt"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r15">
                <td height="20" style="height:15pt;">Cirugía Realizada:</td>
                <td></td>
                <td></td>
                <td colspan="6" class="x23" style="border-bottom:1px solid windowtext;"><?php echo $matriz2['HdiaStrProcRealizado'];?></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r16">
                <td height="20" style="height:15pt"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r17">
                <td height="20" style="height:15pt;">Cirujado:</td>
                <td colspan="5" class="x23" style="border-bottom:1px solid windowtext;"><?php echo $matriz2['SegStrNomUsuario'];?></td>
                <td class="x38"><span style="float:right">Pediatra:</span></td>
                <td colspan="2" class="x23" style="border-bottom:1px solid windowtext;"><?php /*echo $matriz2['HdiaStrProcRealizado'];*/?></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r18">
                <td height="20" style="height:15pt"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r19">
                <td height="20" style="height:15pt;">Intrumentista:</td>
                <td></td>
                <td colspan="4" class="x23" style="border-bottom:1px solid windowtext;"><?php echo $matriz2['Instrumentista'];?></td>
                <td class="x38"><span style="float:right">Circulante:</span></td>
                <td colspan="2" class="x23" style="border-bottom:1px solid windowtext;"><?php echo $matriz2['Circulante'];?></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r20">
                <td height="20" style="height:15pt;"></td>
                <td></td>
                <td class="x27"></td>
                <td class="x27"></td>
                <td class="x27"></td>
                <td class="x27"></td>
                <td class="x38"></td>
                <td class="x27"></td>
                <td class="x27"></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r21">
                <td height="20" style="height:15pt;">Anestesiólogo:</td>
                <td></td>
                <td colspan="7" class="x23" style="border-bottom:1px solid windowtext;"><?php echo $matriz2['Anestesiologo'];?></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r22">
                <td height="20" style="height:15pt;"></td>
                <td></td>
                <td class="x27"></td>
                <td class="x27"></td>
                <td class="x27"></td>
                <td class="x27"></td>
                <td class="x38"></td>
                <td class="x27"></td>
                <td class="x27"></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r23">
                <td colspan="2" height="20" class="x39" style="mso-ignore:colspan;height:15pt;">Anestasia:</td>
                <td colspan="7" class="x24">
                    <?php foreach ($matriz2['ArrayAnestesia'] as $row) { ?>
                        <?php echo $row['HdiaStrAnesAplicada'].' | '; ?>
                    <?php }//Fin de Foreach
                    ?>
                </td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r24">
                <td height="20" class="x39" style="height:15pt;"></td>
                <td class="x39"></td>
                <td class="x40"></td>
                <td class="x40"></td>
                <td class="x40"></td>
                <td class="x40"></td>
                <td class="x40"></td>
                <td class="x40"></td>
                <td class="x40"></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r25">
                <td height="20" style="height:15pt;">Otro:</td>
                <td colspan="8" class="x23" style="border-bottom:1px solid windowtext;"></td>
            </tr>
            <tr height="21" style="mso-height-source:userset;height:15.75pt" id="r26">
                <td height="21" style="height:15.75pt;"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <div>
                        <b>PROCEDIMIENTO:</b>
                        <br>

                        <textarea rows="15" cols="" style="width: 670px;
                                height: 300px; border: black 4px solid;"><?php echo $matriz2['HdiaStrDiagnostico'];?></textarea>
                    </div>
                </td>

            </tr>

            <!--[endif]-->
            </tbody></table>

        <script language="javascript" type="text/javascript">
            function ChangeRowspanHiddenData()
            {
                var node;
                var params=["r0"];
                for (var i = 0;i < params.length; i++)
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


        <style>
            <!--
            .x41
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

        </body></html>


        <?php
    }

}