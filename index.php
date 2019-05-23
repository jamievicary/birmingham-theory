<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<!-- InstanceBegin template="/Templates/SoCS.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<!-- #BeginEditable "doctitle" -->
<title>School of Computer Science - Theoretical Computer Science - About Us</title>
<!-- #EndEditable -->
  
  <?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/sys/includes/wwwlib.php");
    AddSysStylesheets();
  ?>

  <link href="/sys/style-sheets/sys-styles.css" rel="stylesheet" type="text/css" />
  <link href="nav.css" rel="stylesheet" type="text/css" />

<style>
  
  #theory>h1 {
    margin-left: 0.3px !important;
    margin-top: 20px !important;
  }

  #theory {
    font-size: 1.3em;
  }

  #theory>div.photos>div>a>img, #theory>div.photos>div>img {
    object-fit: cover;
    width: 150px;
    height: 150px;
    margin: 0px 0px 5px 0px !important;
  }

  #theory>div.photos {
    font-size: 1.2em;
  }

  #theory>div.photos>div {
    display: inline-block;
    text-align: center;
    margin-top: 0px;
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: 15px;
    line-height: 1.3em;
    max-width: 150px;
    vertical-align: top;
  }

</style>

<!-- TemplateParam name="title" type="text" value="" -->
<!-- TemplateParam name="maintainer" type="text" value="" -->
<!-- TemplateParam name="maintaineremail" type="text" value="" -->
</head>
<body>

<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/sys/includes/wwwlib.php");

  SetPageTitle('');
  SetMaintainer('Paul Levy', 'P.B.Levy@cs.bham.ac.uk');
  PageStart()
?>

<!-- #BeginEditable "content" -->

<div id="theory">
<?php include 'overview.html';?>
<?php include 'events.html';?>
<?php include 'joining.html';?>
<?php include 'people.html';?>
</div>

<!-- #EndEditable -->

<?php PageEnd(); ?>
</body>
<!-- InstanceEnd -->
</html>
