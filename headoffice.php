
</head>

<style type="text/css">
<!--
-->
a:hover{
color:#00CC00;
}
.style8 {color: #FFFFFF}
.style16 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 30px; color: #000000; }
</style>
<body>
<div align="center"><?php include('admin_header.php');?>
  <h2 align="left" style="font-size:36px;">HEAD OFFICE</h2>
</div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                       
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section lb" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar" style="width:1500px; margin-left: -193px; margin-top:-63px; margin-bottom:-110px;">
                            <div class="widget-no-style">
                                <div class="newsletter-widget text-center align-self-center">
  <form id="form1" name="form1" method="post" action="headoffice-insert.php">
    <table width="583" align="center" style="margin-left:150px;">
      <tr>
        <td width="359" height="64"><span class="style16">Head Office Name</span></td>
        <td width="212"><label>
          <input type="text" name="t1" id="t1" required pattern="[A-Za-z\s]+" title="enter characters only" />
        </label></td>
      </tr>
      <tr>
        <td height="69"><span class="style16">Head Office Location</span></td>
        <td><input type="text" name="t2" id="t2" required pattern="[A-Za-z\s]+" title="enter characters only"/></td>
      </tr>
      <tr>
        <td height="62"><span class="style16">Head Office Address</span></td>
        <td><input type="text" name="t3" id="t3" required pattern="[A-Za-z\s]+" title="enter characters only" /></td>
      </tr>
      <tr>
        <td height="66"><span class="style16">Head Office District</span></td>
        <td><input type="text" name="t4" id="t4" required pattern="[A-Za-z\s]+" title="enter characters only" /></td>
      </tr>
      <tr>
        <td height="65"><span class="style16">Head Office Taluk</span></td>
        <td><input type="text" name="t5" id="t5" required pattern="[A-Za-z\s]+" title="enter characters only" /></td>
      </tr>
      <tr>
        <td height="64"><span class="style16">Head Office Contact</span></td>
        <td><input type="text" name="t6" id="t6" required pattern="[6-9]{1}[0-9]{9}" title="Enter a valid phone number only" /></td>
      </tr>
      <tr>
        <td height="73" colspan="2"><span class="style8">
          <label></label>
          </span>
          <div align="center" class="style8">
            <input type="submit" name="b1" id="b1" value="Submit"  style="background-color:#000000; height:50px; width:200px; color:#FFFFFF;font:Arial, Helvetica, sans-serif; margin-left:10px; font-size:24px;"/>
            <input type="reset" name="Reset" id="button" value="Reset" style="background-color:#FF0000; color:#FFFFFF;; height:50px; width:200px; font-size:24px;" />
        </div></td>
      </tr>
    </table>
  </form>
   <?php include('footer.php');?>
</div>
</body>
</html>
