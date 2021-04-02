<?php


class FunRepoEnc
{
    protected $infoCia;

    function InfoRepoEnc($data)
    {
        //print_r($data);
        $this->infoCia = $data;
    }

    function RenderRepoEnc()
    {
        $matriz2 = $this->infoCia[0];
        ?>

        <!doctype html public "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
        <html>

        <head>
            <meta http-equiv=Content-Type content="text/html; charset=utf-8">
            <meta name=ProgId content=Excel.Sheet>
            <meta name=Generator content="Aspose.Cell ">
            <link rel=File-List href="ajrwt-jzwyg_files/filelist.xml">
            <link rel=Edit-Time-Data href="ajrwt-jzwyg_files/editdata.mso">
            <link rel=OLE-Object-Data href="ajrwt-jzwyg_files/oledata.mso">
            <!--[if gte mso 9]><xml>
                <o:DocumentProperties>
                    <o:Author>Usuario</o:Author>
                    <o:LastPrinted>2020-08-17T07:30:39Z</o:LastPrinted>
                    <o:Created>2020-08-14T09:00:12Z</o:Created>
                    <o:LastSaved>2020-08-17T08:23:10Z</o:LastSaved>
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
                    font-family:"Arial","sans-serif"; }
                .font3
                {
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                .font4
                {
                    color:#000000;
                    font-size:12pt;
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
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
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
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
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
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
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
                    font-family:"Arial","sans-serif";
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
                    white-space:nowrap;
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
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
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
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
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
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
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
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
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
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
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
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x36
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
                    mso-protection:locked visible;
                }
                .x37
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
                    mso-protection:locked visible;
                }
                .x38
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x39
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:center;
                    text-align: center;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x40
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:center;
                    text-align: center;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x41
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x42
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
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x43
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:center;
                    text-align: center;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x44
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
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x45
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
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:2px solid windowtext;
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
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x47
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
                    border-right:2px solid windowtext;
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
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x49
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
                    border-right:1px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x50
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
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
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
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x52
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
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x53
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x54
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x55
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x56
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x57
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
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
                            <x:Name>Sheet1</x:Name>
                            <x:WorksheetOptions>
                                <x:StandardWidth>2048</x:StandardWidth>
                                <x:Print>
                                    <x:ValidPrinterInfo/>
                                    <x:PaperSizeIndex>1</x:PaperSizeIndex>
                                    <x:Scale>71</x:Scale>
                                    <x:HorizontalResolution>200</x:HorizontalResolution>
                                    <x:VerticalResolution>200</x:VerticalResolution>
                                </x:Print>
                                <x:ShowPageBreakZoom/>
                                <x:Zoom>149</x:Zoom>
                                <x:Selected/>
                                <x:TopRowVisible>2</x:TopRowVisible>
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

        <table border=0 cellpadding=0 cellspacing=0 width=857 style='border-collapse:
	 collapse;table-layout:fixed;width:642pt'>
            <col width=64 style='width:48pt'>
            <col width=142 style='mso-width-source:userset;width:106.5pt'>
            <col class=x28 width=194 style='mso-width-source:userset;width:145.5pt'>
            <col width=153 style='mso-width-source:userset;width:114.75pt'>
            <col width=131 style='mso-width-source:userset;width:98.25pt'>
            <col width=173 style='mso-width-source:userset;width:129.75pt'>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r0'>
                <td colspan=6 rowspan=3 height=120 class=x58 width=857 style='height:90pt;' align=left valign=top><span style='mso-ignore:vglayout;position:absolute;z-index:0;margin-left:99px;margin-top:12px;width:97px;height:96px'><img width=97 height=96 src="../img/logo.png" name='Picture 1'></span><span  style='mso-ignore:vglayout2'><table cellpadding=0 cellspacing=0><tr><td colspan=6 rowspan=3 height=120 class=x38 width=857 style='height:90pt;'>HOSPITAL NACIONAL ESPECIALIZADO DE VILLA NUEVA<br></td></tr></table></span></td>
            </tr>
            <tr height=44 style='mso-height-source:userset;height:33.6pt' id='r1'>
            </tr>
            <tr height=56 style='mso-height-source:userset;height:42pt' id='r2'>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r3'>
                <td height=19 style='height:14.4pt;'></td>
                <td class=x22></td>
                <td class=x27></td>
                <td class=x22></td>
                <td class=x22></td>
                <td class=x22></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r4'>
                <td height=19 style='height:14.4pt;'></td>
                <td class=x23>Área</td>
                <td colspan=3 class=x32 style='border-bottom:1px solid windowtext;'><?php echo $matriz2['EncStrNombre'] ?></td>
                <td class=x29></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r5'>
                <td height=19 style='height:14.4pt;'></td>
                <td class=x22></td>
                <td class=x27></td>
                <td class=x22></td>
                <td class=x22></td>
                <td class=x22></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r6'>
                <td height=20 style='height:15pt;'></td>
                <td class=x22></td>
                <td class=x27></td>
                <td class=x22></td>
                <td class=x22></td>
                <td class=x22></td>
            </tr>
            <tr height=33 style='mso-height-source:userset;height:25.2pt' id='r7'>
                <td height=29 class=x53 style='height:22.2pt;'>No. Cama</td>
                <td class=x54>Registro Médico</td>
                <td colspan=2 class=x55 style='border-right:1px solid windowtext;border-bottom:2px solid windowtext;'>Nombre</td>
                <td class=x54>Edad</td>
                <td class=x57>Modo Ventilación</td>
            </tr>
        <?php $cont = 1 ; foreach ($matriz2['ArrayDatos'] as $row) { ?>
            <tr height=19 style='mso-height-source:userset;height:14.4pt' id='r8'>
                <td height=16 class=x39 style='height:12.15pt;'><?php echo $row['EncNumCama'] ?></td>
                <td class=x40><?php echo $row['CitStrRegMedico'] ?></td>
                <td colspan=2 class=x41 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'><?php echo $row['Nombre'] ?></td>
                <td class=x40><?php echo $row['EncNumEdad'] ?></td>
                <td class=x43><?php echo $row['EncModoVentilacion'] ?></</td>
            </tr>
            <?php $cont++; }//Fin de Foreach
            ?>

            <tr height=20 style='mso-height-source:userset;height:15pt' id='r25'>
                <td height=20 style='height:15pt;'></td>
                <td height=20 width=142 style='height:15pt;width:106.5pt;' align=left valign=top><span style='mso-ignore:vglayout;position:absolute;z-index:3;margin-left:126px;margin-top:19px;width:19px;height:23px'><img width=17 height=21 src="../img/svg/clipboard-list-solid.svg"></span></span><span  style='mso-ignore:vglayout2'><table cellpadding=0 cellspacing=0><tr><td height=20 width=142 style='height:15pt;width:106.5pt;'></td></tr></table></span></td>
                <td class=x28></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r26'>
                <td height=20 style='height:15pt;'></td>
                <td></td>
                <td class=x36 style="margin-left: 10px; padding-left: 20px">Total:</td>
                <td class=x25><?php echo $matriz2['EncCantidadCamas'] ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r27'>
                <td height=20 style='height:15pt;'></td>
                <td></td>
                <td class=x36></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r30'>
                <td height=20 style='height:15pt;'></td>
                <td height=20 width=142 style='height:15pt;width:106.5pt;' align=left valign=top><span style='mso-ignore:vglayout;position:absolute;z-index:2;margin-left:126px;margin-top:1px;width:17px;height:21px'><img width=17 height=21 src="../img/svg/times-solid.svg"></span></span><span  style='mso-ignore:vglayout2'><table cellpadding=0 cellspacing=0><tr><td height=20 width=142 style='height:15pt;width:106.5pt;'></td></tr></table></span></td>
                <td class=x36 style="margin-left: 10px; padding-left: 20px" >Total ocupado:</td>
                <td class=x25> <?php echo $matriz2['ocupados'] ?> </td>
                <td></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r31'>
                <td height=20 style='height:15pt'></td>
                <td></td>
                <td class=x28></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r28'>
                <td height=20 style='height:15pt;'></td>
                <td height=20 width=142 style='height:15pt;width:106.5pt;' align=left valign=top><span style='mso-ignore:vglayout;position:absolute;z-index:1;margin-left:127px;margin-top:2px;width:15px;height:18px'><img width=17 height=21 src="../img/svg/check-solid.svg"></span></span><span  style='mso-ignore:vglayout2'><table cellpadding=0 cellspacing=0><tr><td height=20 width=142 style='height:15pt;width:106.5pt;'></td></tr></table></span></td>
                <td class=x37 style="margin-left: 10px; padding-left: 20px">Total disponibles:</td>
                <td class=x25><?php echo $matriz2['EncCantidadCamas'] - $matriz2['ocupados'] ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r29'>
                <td height=20 style='height:15pt;'></td>
                <td></td>
                <td class=x36></td>
                <td></td>
                <td></td>
                <td></td>
            <![if supportMisalignedColumns]>
            <tr height=0 style='display:none'>
                <td width=64 style='width:48pt'></td>
                <td width=142 style='width:106.5pt'></td>
                <td width=194 style='width:145.5pt'></td>
                <td width=153 style='width:114.75pt'></td>
                <td width=131 style='width:98.25pt'></td>
                <td width=173 style='width:129.75pt'></td>
            </tr>
            <![endif]>
        </table>

        </body>

        <style>
            <!--
            .x58
            {
                mso-style-parent:style0;
                mso-number-format:General;
                vertical-align:middle;
                white-space:normal;word-wrap:break-word;
                mso-pattern:auto;
                color:#000000;
                font-size:12pt;
                font-weight:700;
                font-style:normal;
                font-family:"Arial","sans-serif";
                mso-protection:locked visible;
            }

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

            -->
        </style>
        </html>


        <?php
    }


}