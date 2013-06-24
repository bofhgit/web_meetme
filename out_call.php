<?php
include ("./lib/defines.php");
include ("./lib/functions.php");
include ("locale.php");

getpost_ifset ('confno');

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
        <title><?php print GUI_TITLE; ?> <?php print _("control"); ?></title>
        <meta http-equiv="Content-Type" content="text/html">


        <link rel="stylesheet" type="text/css">
        <style type="text/css" media="screen">

                @import url("css/content.css");
                @import url("css/docbook.css");
        </style>

        <script language="JavaScript" type="text/JavaScript">
        <!--
        function MM_openBrWindow(theURL,winName,features) { //v2.0
          window.open(theURL,winName,features);
        }

        //-->
        </script>
</head>

<body bgcolor="#acbdee">

<center>


		<?php print _("Outbound Call to invited participant").":"; ?>

                <FORM action="./call_operator.php" method=post name=WMOutCall>
                <INPUT type="hidden" name="action" value="quickcall">
                <INPUT type="hidden" name="data" value="<?php print $confno; ?>">
		<?php print _("Telephone #"); ?><INPUT type="text" name="invite_num" value="">
		<br>
		<center>
		<input type="submit" value=<?php print "\""._("CALL")."\""; ?> />
		<center>
		</FORM>

<script language="javascript">
<!--
document.WMOutCall.invite_num.focus()
//-->
</script>

