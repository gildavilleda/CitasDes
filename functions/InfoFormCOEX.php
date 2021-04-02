<?php


class InfoFormCOEX
{
    protected $infoCita;

    function InfoFormCita($data)
    {
        $this->infoCita = $data;
    }

    function RenderInfoCOEX2()
    {
        $matriz2 = $this->infoCita[0];
        ?>

        <!doctype html public "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
        <html>

        <head>
            <meta http-equiv=Content-Type content="text/html; charset=utf-8">
            <meta name=ProgId content=Excel.Sheet>
            <meta name=Generator content="Aspose.Cell ">
            <link rel=File-List href="a0hlk-ms0y6_files/filelist.xml">
            <link rel=Edit-Time-Data href="a0hlk-ms0y6_files/editdata.mso">
            <link rel=OLE-Object-Data href="a0hlk-ms0y6_files/oledata.mso">
            <!--[if gte mso 9]><xml>
                <o:DocumentProperties>
                    <o:Author>Marisol Camey</o:Author>
                    <o:LastPrinted>2020-09-08T08:29:38Z</o:LastPrinted>
                    <o:Created>2020-02-25T08:57:32Z</o:Created>
                    <o:LastSaved>2020-09-18T08:06:26Z</o:LastSaved>
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
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font3
                {
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font4
                {
                    color:#000000;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font5
                {
                    color:#000000;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font6
                {
                    color:#000000;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font7
                {
                    color:#000000;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font8
                {
                    color:#000000;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
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
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
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
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
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
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
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
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x26
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
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
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x28
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
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
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x30
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x31
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x32
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x33
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:top;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x34
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:top;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x35
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x36
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
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
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x38
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:none;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x39
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x40
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x41
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x42
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x43
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x44
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x45
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x46
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x47
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x48
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x49
                {
                    mso-style-parent:style0;
                    mso-number-format:"M\/d\/yyyy";
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x50
                {
                    mso-style-parent:style0;
                    mso-number-format:"M\/d\/yyyy";
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x51
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x52
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x53
                {
                    mso-style-parent:style0;
                    mso-number-format:"\[$-F400\]h\:mm\:ss\\ AM\/PM";
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x54
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x55
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x56
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x57
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x58
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x59
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x60
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x61
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x62
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:top;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x63
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x64
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x65
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:top;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x66
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x67
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x68
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x69
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x70
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x71
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x72
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x73
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x74
                {
                    mso-style-parent:style0;
                    mso-number-format:"M\/d\/yyyy";
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x75
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x76
                {
                    mso-style-parent:style0;
                    mso-number-format:"M\/d\/yyyy";
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x77
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x78
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x79
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x80
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x81
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x82
                {
                    mso-style-parent:style0;
                    mso-number-format:"\[$-F400\]h\:mm\:ss\\ AM\/PM";
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x83
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x84
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x85
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x86
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x87
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x88
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x89
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x90
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x91
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:none;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x92
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:none;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x93
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
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
                .x94
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x95
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x96
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x97
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x98
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x99
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x100
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:top;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x101
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:top;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x102
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
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
                                    <x:Scale>65</x:Scale>
                                    <x:HorizontalResolution>200</x:HorizontalResolution>
                                    <x:VerticalResolution>200</x:VerticalResolution>
                                </x:Print>
                                <x:ShowPageBreakZoom/>
                                <x:Zoom>93</x:Zoom>
                                <x:Selected/>
                                <x:TopRowVisible>39</x:TopRowVisible>
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
                <x:ExcelName>
                    <x:Name>PRINT_AREA</x:Name>
                    <x:SheetIndex>1</x:SheetIndex>
                    <x:Formula>=Hoja1!$A$1:$M$109</x:Formula>
                </x:ExcelName>
            </xml><![endif]-->
        </head>
        <body link=blue vlink=purple>

        <table border=0 cellpadding=0 cellspacing=0 width=1263 style='border-collapse:
 collapse;table-layout:fixed;width:947pt;'>
            <col width=32 style='mso-width-source:userset;width:24pt'>
            <col width=61 style='mso-width-source:userset;width:45.75pt'>
            <col width=96 style='mso-width-source:userset;width:72pt'>
            <col width=61 span=4 style='mso-width-source:userset;width:45.75pt'>
            <col width=154 style='mso-width-source:userset;width:115.5pt'>
            <col width=54 style='mso-width-source:userset;width:40.5pt'>
            <col width=70 style='mso-width-source:userset;width:52.5pt'>
            <col width=75 style='mso-width-source:userset;width:56.25pt'>
            <col width=137 style='mso-width-source:userset;width:102.75pt'>
            <col width=20 style='mso-width-source:userset;width:15pt'>
            <col width=40 span=4 style='width:50pt'>
            <td height=20 class=x103 width=32 style='height:15pt;width:24pt;' align=left valign=top><span style='mso-ignore:vglayout;position:absolute;z-index:0;margin-left:28px;margin-top:19px;width:76px;height:66px'><img width=70 height=70 src="../img/logo.png"></span><span  style='mso-ignore:vglayout2'><table cellpadding=0 cellspacing=0><tr><td height=20 class=x23 width=32 style='height:15pt;width:24pt;'><a name="PRINT_AREA" ><span style='font-size:11pt;color:#000000;font-weight:400;text-decoration:none;text-line-through:none;font-family:"Calibri";'></span></a></td></tr></table></span></td>
            <td class=x23 width=61 style='width:45.75pt;'></td>
            <td class=x23 width=96 style='width:72pt;'></td>
            <td class=x23 width=61 style='width:45.75pt;'></td>
            <td class=x23 width=61 style='width:45.75pt;'></td>
            <td class=x23 width=61 style='width:45.75pt;'></td>
            <td class=x23 width=61 style='width:45.75pt;'></td>
            <td class=x23 width=154 style='width:115.5pt;'></td>
            <td class=x23 width=54 style='width:40.5pt;'></td>
            <td class=x23 width=70 style='width:52.5pt;'></td>
            <td class=x23 width=75 style='width:56.25pt;'></td>
            <td class=x23 width=137 style='width:102.75pt;'></td>
            <td class=x22 width=20 style='width:15pt;'></td>
            </tr>
            <tr height=14 style='mso-height-source:userset;height:10.5pt' id='r1'>
                <td height=14 class=x23 style='height:10.5pt;'></td>
                <td colspan=2 rowspan=4 height=63 class=x43 style='height:47.25pt;'></td>
                <td colspan=7 class=x44>MINISTERIO DE SALUD PÚBLICA Y ASISTENCIA SOCIAL</td>
                <td rowspan=4 height=63 class=x43 style='height:47.25pt;'></td>
                <td rowspan=4 height=61 class=x45 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:45.75pt;'>CÓDIGO<span style='mso-spacerun:yes'>&nbsp; </span>044</td>
                <td class=x22></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12pt' id='r2'>
                <td height=16 class=x23 style='height:12pt;'></td>
                <td colspan=7 class=x44>HOSPITAL NACIONAL ESPECIALIZADO DE VILLA NUEVA</td>
                <td class=x22></td>
            </tr>
            <tr height=13 style='mso-height-source:userset;height:9.75pt' id='r3'>
                <td height=13 class=x23 style='height:9.75pt;'></td>
                <td colspan=7 rowspan=2 height=33 class=x44 style='height:24.75pt;'>HOJA DE DOCUMENTACIÓN Y REGISTRO DE CONSULTA EXTERNA</td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r4'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r5'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r6'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td colspan=2 class=x46 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>APELLIDOS: </td>
                <td colspan=5 class=x47 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'><?php echo $matriz2['CitStrApellido']." ".$matriz2['CitStrApellido2']." ". $matriz2['CitStrApellidoCasada']; ?></td>
                <td colspan=2 class=x48 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>FECHA DE IMPRESIÓN:</td>
                <td colspan=2 class=x49 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'><?php echo $matriz2['FechaImpresion']; ?></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r7'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td colspan=2 class=x46 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>NOMBRES: </td>
                <td colspan=5 class=x47 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'><?php echo $matriz2['CitStrNombre']." ". $matriz2['CitStrNombre2']?></td>
                <td colspan=2 class=x48 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>REGISTRO CLÍNICO:</td>
                <td colspan=2 class=x47 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'><?php echo str_replace("-", "", $matriz2['CitStrRegMedico']); ?></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r8'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td colspan=2 class=x46 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>FECHA DE NACIMIENTO:</td>
                <td colspan=2 class=x50 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'><?php echo $matriz2['FecNacimiento']; ?></td>
                <td class=x36>EDAD:</td>
                <td colspan=2 class=x51 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'><?php echo $matriz2['EdadPaciente']; ?></td>
                <td colspan=2 class=x48 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>DPI/CUI:</td>
                <td colspan=2 class=x47 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'><?php echo $matriz2['CitNumCUI']; ?></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r9'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x25></td>
                <td class=x25></td>
                <td class=x26></td>
                <td class=x26></td>
                <td class=x27></td>
                <td colspan=2 class=x52></td>
                <td colspan=2 class=x48 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>HORA DE IMPRESIÓN:</td>
                <td colspan=2 class=x53 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'><?php date_default_timezone_set("America/Guatemala");
                    echo date('h:i:s A'); ?></td>
                <td class=x22></td>
            </tr>
            <tr height=11 style='mso-height-source:userset;height:8.45pt' id='r10'>
                <td height=11 class=x23 style='height:8.45pt;'></td>
                <td colspan=2 class=x44></td>
                <td colspan=2 class=x54></td>
                <td class=x28></td>
                <td class=x26></td>
                <td colspan=2 class=x54></td>
                <td class=x25></td>
                <td class=x25></td>
                <td class=x23></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r11'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x25></td>
                <td class=x25></td>
                <td class=x29></td>
                <td class=x29></td>
                <td class=x28></td>
                <td class=x26></td>
                <td class=x29></td>
                <td class=x29></td>
                <td class=x25></td>
                <td class=x25></td>
                <td class=x23></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r12'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x30>REFERIDO</td>
                <?php
                function marcarReferido($bool, $option)
                {
                    if ($bool == $option) {
                        echo "X";
                    }
                }

                ?>
                <td class=x38><b><font color="#000000">SI </font></b><?php marcarReferido($matriz2['CitStrReferido'], 'S'); ?></td>
                <td class=x38><b><font color="#000000">NO </font></b><?php marcarReferido($matriz2['CitStrReferido'], 'N'); ?></td>
                <td colspan=3 class=x55>LUGAR DE REFERENCIA:</td>
                <td colspan=5 class=x48 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'><?php echo $matriz2['CitStrLugRef']; ?></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r13'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td colspan=2 class=x48 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>OBSERVACIONES:</td>
                <td colspan=9 class=x48 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'><?php echo $matriz2['CitStrObservacion']; ?></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r14'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td colspan=11 class=x55></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r15'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td colspan=2 class=x48 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CONTACTOS:</td>
                <td colspan=5 class=x56 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'></td>
                <td colspan=2 class=x57 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'></td>
                <td colspan=2 class=x57 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'></td>
                <td class=x22></td>
            </tr>
            <?php
            $cont = 1 ; foreach ($matriz2['ArrayContactos'] as $row) { ?>
                <tr height=20 style='mso-height-source:userset;height:15pt' id='r16'>
                    <td height=20 class=x23 style='height:15pt;'></td>
                    <td class=x36>NOMBRE:</td>
                    <td colspan=6 class=x57 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'><?php echo $row['CitStrContacto'] .' | No. Telefono: '. $row['CitNumTelefono'] .' |'?></td>
                    <td colspan=2 class=x48 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>RELACIÓN FAMILIAR:</td>
                    <td colspan=2 class=x48 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'><?php echo $row['CitStrParentesco'] ?></td>
                    <td class=x22></td>
                </tr>
            <?php }//Fin de Foreach ?>

             <?php
        for($j=$cont; $j<4; $j++){ ?>

            <tr height=20 style='mso-height-source:userset;height:15pt' id='r19'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x24></td>
                <td class=x24></td>
                <td colspan=6 class=x55></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
        <?php	} ?>


            <tr height=20 style='mso-height-source:userset;height:15pt' id='r20'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td colspan=10 class=x42>SISTEMA DE CLASIFICACIÓN DE PACIENTE:<span style='mso-spacerun:yes'>&nbsp; </span>(Marcar con una X la casilla que corresponde)</td>
                <td class=x41></td>
                <td class=x22></td>
            </tr>
            <tr height=4 style='mso-height-source:userset;height:3pt' id='r21'>
                <td height=4 class=x23 style='height:3pt;'></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x41></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r22'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x39>NIVEL 5</td>
                <td class=x39></td>
                <td class=x39>NIVEL 4</td>
                <td class=x39></td>
                <td class=x39>NIVEL 3</td>
                <td class=x39></td>
                <td class=x39>NIVEL 2</td>
                <td class=x39></td>
                <td class=x39>NIVEL 1</td>
                <td class=x39></td>
                <td class=x35></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r23'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td colspan=2 class=x56 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>SIN URGENCIA</td>
                <td colspan=2 class=x56 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>URGENCIA MENOR</td>
                <td colspan=2 class=x56 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>URGENCIA</td>
                <td colspan=2 class=x56 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>EMERGENCIA</td>
                <td colspan=2 class=x56 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>RIESGO VITAL</td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r24'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td colspan=2 class=x56 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>AZUL</td>
                <td colspan=2 class=x56 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>VERDE</td>
                <td colspan=2 class=x56 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>AMARILLO</td>
                <td colspan=2 class=x56 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>NARANJA</td>
                <td colspan=2 class=x56 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>ROJO</td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=4 style='mso-height-source:userset;height:3pt' id='r25'>
                <td height=4 class=x23 style='height:3pt;'></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x37></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:15.75pt' id='r26'>
                <td height=21 class=x23 style='height:15.75pt;'></td>
                <td colspan=10 class=x42>SE EVALUA PACIENTE EN CLÍNICA DE CLASIFICACIÓN Y SE REFIERE PARA SU CONTINUIDAD A LA ESPECIALIDAD:</td>
                <td class=x41></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r27'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x23>MC:</td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x35></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r28'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x35></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r29'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r30'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x23>HEA:</td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r31'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r32'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r33'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r34'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=21 style='mso-height-source:userset;height:15.75pt' id='r35'>
                <td height=21 class=x23 style='height:15.75pt;'></td>
                <td colspan=2 class=x23 style='mso-ignore:colspan;'>IMPRESIÓN CLÍNICA:</td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r36'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r37'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x23></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=79 style='mso-height-source:userset;height:59.25pt' id='r38'>
                <td height=79 class=x23 style='height:59.25pt;'></td>
                <td colspan=4 class=x60></td>
                <td class=x24></td>
                <td class=x24></td>
                <td class=x23></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x23></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r39'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td colspan=4 class=x60></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x23></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x24></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r40'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td colspan=4 class=x60>INDICACIONES MÉDICAS:</td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x23></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r41'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td colspan=4 class=x60></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x23></td>
                <td colspan=3 class=x60></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r42'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x23></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r43'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td colspan=4 class=x60></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x23></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=80 style='mso-height-source:userset;height:60pt' id='r44'>
                <td height=80 class=x23 style='height:60pt;'></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x23></td>
                <td colspan=3 class=x60></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r45'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td colspan=4 class=x60></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x23></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x31></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=24 style='mso-height-source:userset;height:18pt' id='r46'>
                <td height=24 class=x23 style='height:18pt;'></td>
                <td colspan=4 class=x60></td>
                <td class=x32></td>
                <td class=x32></td>
                <td class=x23></td>
                <td class=x31></td>
                <td class=x33></td>
                <td class=x33></td>
                <td class=x35></td>
                <td class=x22></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.45pt' id='r47'>
                <td height=19 class=x23 style='height:14.45pt;'></td>
                <td></td>
                <td class=x34></td>
                <td class=x34></td>
                <td class=x34></td>
                <td rowspan=2 height=39 class=x42 style='height:29.45pt;'></td>
                <td class=x31></td>
                <td class=x23></td>
                <td colspan=3 rowspan=2 height=39 class=x62 style='height:29.45pt;'></td>
                <td rowspan=2 height=39 class=x42 style='height:29.45pt;'></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r48'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td colspan=4 class=x65>Vea sección posterior de Hoja</td>
                <td class=x31></td>
                <td class=x23></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r49'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td colspan=2 rowspan=5 height=98 class=x66 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:73.5pt;'></td>
                <td colspan=2 rowspan=5 height=98 class=x56 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:73.5pt;'></td>
                <td class=x31></td>
                <td class=x24></td>
                <td colspan=3 rowspan=5 height=98 class=x56 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:73.5pt;'></td>
                <td colspan=2 rowspan=5 height=98 class=x56 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:73.5pt;'></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r50'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x31></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r51'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x31></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r52'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x31></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r53'>
                <td height=20 class=x23 style='height:15pt;'></td>
                <td class=x23></td>
                <td class=x24></td>
                <td class=x22></td>
            </tr>
            <tr height=30 style='mso-height-source:userset;height:22.5pt' id='r54'>
                <td height=30 class=x23 style='height:22.5pt;'></td>
                <td colspan=4 class=x64>Firma y Sello de Admisión</td>
                <td class=x23></td>
                <td class=x24></td>
                <td colspan=5 class=x64>Firma y Sello del Médico </td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r55'>
                <td height=20 class=x22 style='height:15pt;'></td>
                <td class=x22></td>
                <td class=x22></td>
                <td class=x22></td>
                <td class=x22></td>
                <td class=x22></td>
                <td class=x22></td>
                <td class=x22></td>
                <td class=x22></td>
                <td class=x22></td>
                <td class=x22></td>
                <td class=x22></td>
                <td></td>
            </tr>
            <tr height=100 style='mso-height-source:userset;height:75pt;mso-xlrowspan:5' id='r56'>
                <td height=100 style='height:75pt'></td>
                <td></td>
                <td></td>
                <td colspan=4 style='mso-ignore:colspan;'></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height=100 style='mso-height-source:userset;height:75pt;mso-xlrowspan:5' id='r56'>
                <td height=100 style='height:75pt'></td>
                <td></td>
                <td></td>
                <td colspan=4 style='mso-ignore:colspan;'></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r57'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=2 rowspan=4 height=80 class=x68 style='height:60pt;'></td>
                <td colspan=7 class=x69>MINISTERIO DE SALUD PÚBLICA Y ASISTENCIA SOCIAL</td>
                <td rowspan=4 height=80 class=x68 style='height:60pt;'></td>
                <td rowspan=4 height=78 class=x70 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:58.5pt;'>CÓDIGO<span style='mso-spacerun:yes'>&nbsp; </span>044</td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r58'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=7 class=x69>HOSPITAL NACIONAL ESPECIALIZADO DE VILLA NUEVA</td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r59'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=7 rowspan=2 height=40 class=x69 style='height:30pt;'>HOJA DE DOCUMENTACIÓN Y REGISTRO DE CONSULTA EXTERNA</td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r60'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r61'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r62'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td class=x67>Otros:</td>
                <td class=x71></td>
                <td colspan=5 class=x72></td>
                <td colspan=2 class=x73></td>
                <td colspan=2 class=x74></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r63'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=2 class=x75></td>
                <td colspan=5 class=x72></td>
                <td colspan=2 class=x73></td>
                <td colspan=2 class=x72></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r64'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=2 class=x75></td>
                <td colspan=2 class=x76></td>
                <td class=x77></td>
                <td colspan=2 class=x78></td>
                <td colspan=2 class=x73></td>
                <td colspan=2 class=x72></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r65'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td class=x79></td>
                <td class=x79></td>
                <td class=x80></td>
                <td class=x80></td>
                <td class=x81></td>
                <td colspan=2 class=x72></td>
                <td colspan=2 class=x73></td>
                <td colspan=2 class=x82></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r66'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=2 class=x69></td>
                <td colspan=2 class=x83></td>
                <td class=x84></td>
                <td class=x80></td>
                <td colspan=2 class=x83></td>
                <td class=x79></td>
                <td class=x79></td>
                <td class=x67></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r67'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td class=x79></td>
                <td class=x79></td>
                <td class=x85></td>
                <td class=x85></td>
                <td class=x84></td>
                <td class=x80></td>
                <td class=x85></td>
                <td class=x85></td>
                <td class=x79></td>
                <td class=x79></td>
                <td class=x67></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r68'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td class=x86></td>
                <td class=x86></td>
                <td class=x86></td>
                <td colspan=3 class=x73></td>
                <td colspan=5 class=x73></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r69'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=2 class=x73></td>
                <td colspan=9 class=x73></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r70'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=11 class=x73></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r71'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=2 class=x73></td>
                <td class=x21></td>
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
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r72'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td class=x77></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td colspan=2 class=x73></td>
                <td colspan=2 class=x73></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r73'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td class=x77></td>
                <td colspan=6 class=x63></td>
                <td colspan=2 class=x73></td>
                <td colspan=2 class=x73></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r74'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r75'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r76'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r77'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r78'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=11 class=x69>Marque con una X conducta a seguir con Paciente:</td>
                <td></td>
            </tr>
            <tr height=6 style='mso-height-source:userset;height:4.5pt' id='r79'>
                <td height=6 class=x67 style='height:4.5pt;'></td>
                <td class=x84></td>
                <td class=x84></td>
                <td class=x84></td>
                <td class=x84></td>
                <td class=x84></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r80'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=4 class=x87 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>Ingresó a Servicios de Encamamiento</td>
                <td class=x88></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x21></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r81'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=4 class=x87 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>Caso resuelto en Clasificación</td>
                <td class=x88></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x21></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r82'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=4 class=x89 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>Caso referido a otro Servicio de Salud</td>
                <td class=x90></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x21></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r83'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=4 class=x91 style='border-right:1px solid windowtext;'>Caso referido a Especialista </td>
                <td class=x92></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x21></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r84'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td class=x93></td>
                <td class=x93></td>
                <td class=x93></td>
                <td class=x93></td>
                <td class=x93></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x21></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r85'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=5 class=x78>Seleccione la Clinica de Especialidad si fue referido </td>
                <td class=x40></td>
                <td class=x67></td>
                <td colspan=3 class=x94 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>EMERGENCIA PEDIATRICA </td>
                <td class=x95></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r86'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x67></td>
                <td class=x40></td>
                <td class=x67></td>
                <td colspan=3 class=x94 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>EMERGENCIA DE ADULTOS</td>
                <td class=x96></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r87'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=4 class=x97 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLINICA DE PEDIATRÍA</td>
                <td class=x95></td>
                <td class=x40></td>
                <td class=x67></td>
                <td colspan=3 class=x94 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLINICA DE NEUMOLOGÍA </td>
                <td class=x95></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r88'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=4 class=x97 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLINICA DE CIRUGIA PEDIATRÍA</td>
                <td class=x95></td>
                <td class=x40></td>
                <td class=x67></td>
                <td colspan=3 class=x94 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLÍNICA DE CIRUGÍA RODILLA </td>
                <td class=x95></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r89'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=4 class=x97 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLINICA DE ENDOCRINOLOGÍA PEDIATRICA</td>
                <td class=x95></td>
                <td class=x98></td>
                <td class=x67></td>
                <td colspan=3 class=x94 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLÍNICA DE UROLOGÍA </td>
                <td class=x95></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r90'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=4 class=x97 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLÍNICA DE NEFROLOGÍA PEDIATRICA</td>
                <td class=x95></td>
                <td class=x40></td>
                <td class=x67></td>
                <td colspan=3 class=x94 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLÍNICA DE NEUROCIRUGÍA </td>
                <td class=x95></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r91'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=4 class=x97 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLINICA DE NEUMOLOGÍA PEDIATRICA</td>
                <td class=x95></td>
                <td class=x40></td>
                <td class=x67></td>
                <td colspan=3 class=x94 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLÍNICA DE PSICOLOGÍA </td>
                <td class=x95></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r92'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=4 class=x97 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLÍNICA DE NEUROLOGÍA PEDIATRICA</td>
                <td class=x95></td>
                <td class=x21></td>
                <td class=x21></td>
                <td colspan=3 class=x94 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLINICA DE CIRUGÍA</td>
                <td class=x95></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r93'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=4 class=x97 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLÍNICA DE PSICOLOGÍA PEDIATRICA </td>
                <td class=x95></td>
                <td class=x21></td>
                <td class=x21></td>
                <td colspan=3 class=x94 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLÍNICA DE TRAUMATOLOGÍA</td>
                <td class=x95></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r94'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=4 class=x97 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>OBSTETRICIA ALTO RIESGO </td>
                <td class=x95></td>
                <td class=x21></td>
                <td class=x21></td>
                <td colspan=3 class=x94 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLÍNICA DE DERMATOLOGÍA </td>
                <td class=x95></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r95'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=4 class=x97 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLÍNICA DE GINECOLOGÍA</td>
                <td class=x99></td>
                <td class=x21></td>
                <td class=x21></td>
                <td colspan=3 class=x94 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLÍNICA DE NEUROLOGIA</td>
                <td class=x95></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r96'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td colspan=4 rowspan=2 height=38 class=x100 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:28.5pt;'>CLÍNICA DE MEDICINA REPRODUCTIVA, INFERTELIDAD Y CLIMATERIO</td>
                <td rowspan=2 height=38 class=x97 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:28.5pt;'></td>
                <td class=x21></td>
                <td class=x21></td>
                <td colspan=3 rowspan=2 height=38 class=x101 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:28.5pt;'>CLÍNICA DE OTORRINOLARINGOLOGIA </td>
                <td rowspan=2 height=38 class=x56 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:28.5pt;'></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r97'>
                <td height=20 class=x67 style='height:15pt;'></td>
                <td class=x21></td>
                <td class=x21></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r98'>
                <td height=20 style='height:15pt;'></td>
                <td colspan=4 class=x97 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CARDIOLOGIA DE ADULTOS</td>
                <td class=x95></td>
                <td class=x67></td>
                <td class=x67></td>
                <td colspan=3 rowspan=2 height=38 class=x101 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:28.5pt;'>CLÍNICA DE FISIATRÍA</td>
                <td rowspan=2 height=38 class=x56 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:28.5pt;'></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r99'>
                <td height=20 style='height:15pt;'></td>
                <td colspan=4 class=x97 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLÍNCIA DE ODONTOLOGÍA </td>
                <td class=x95></td>
                <td class=x67></td>
                <td class=x67></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r100'>
                <td height=20 style='height:15pt;'></td>
                <td colspan=4 class=x97 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLÍNICA DE MEDICINA INTERNA</td>
                <td class=x95></td>
                <td class=x67></td>
                <td class=x67></td>
                <td colspan=4 rowspan=4 height=78 class=x102 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:58.5pt;'>Otra Clínica (especifique):</td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r101'>
                <td height=20 style='height:15pt;'></td>
                <td colspan=4 class=x97 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>GASTROENTEROLOGÍA ADULTOS</td>
                <td class=x95></td>
                <td class=x67></td>
                <td class=x67></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r102'>
                <td height=20 style='height:15pt;'></td>
                <td colspan=4 class=x97 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>ENDOCRINOLOGÍA ADULTOS</td>
                <td class=x95></td>
                <td class=x67></td>
                <td class=x67></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r103'>
                <td height=20 style='height:15pt;'></td>
                <td colspan=4 class=x97 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>CLÍNICA DE NUTRICIÓN </td>
                <td class=x95></td>
                <td class=x67></td>
                <td class=x67></td>
                <td></td>

            </tr>
            <![if supportMisalignedColumns]>
            <tr height=0 style='display:none'>
                <td width=32 style='width:24pt'></td>
                <td width=61 style='width:45.75pt'></td>
                <td width=96 style='width:72pt'></td>
                <td width=61 style='width:45.75pt'></td>
                <td width=61 style='width:45.75pt'></td>
                <td width=61 style='width:45.75pt'></td>
                <td width=61 style='width:45.75pt'></td>
                <td width=154 style='width:115.5pt'></td>
                <td width=54 style='width:40.5pt'></td>
                <td width=70 style='width:52.5pt'></td>
                <td width=75 style='width:56.25pt'></td>
                <td width=137 style='width:102.75pt'></td>
                <td width=20 style='width:15pt'></td>
                <td width=80 style='width:60pt'></td>
                <td width=80 style='width:60pt'></td>
                <td width=80 style='width:60pt'></td>
                <td width=80 style='width:60pt'></td>
            </tr>
            <![endif]>
        </table>

        </body>

        <style>
            <!--
            .x103
            {
                mso-style-parent:style0;
                mso-number-format:General;
                text-align:general;
                vertical-align:middle;
                white-space:nowrap;
                background:#FFFFFF;
                mso-pattern:auto none;
                color:#000000;
                font-size:11pt;
                font-weight:400;
                font-style:normal;
                font-family:"Calibri","sans-serif";
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
    }//Fin RenderRepCoex2
}
?>

    
	

