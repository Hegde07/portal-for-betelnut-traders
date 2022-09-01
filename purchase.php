<style type="text/css">
<!--
.style16 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 30px; color: #000000; }
-->
</style>
<?php include('accountant_header.php');?>
<h2 style="font-size:36px;">Purchase</h2>
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
<form class="form-inline" method="post" action="purchase_insert.php">
<table width="483" align="center" style="margin-left:150px;">
  <tr>
    <td width="239" height="59"><span class="style16">Purchaseid</span></td>
    <td width="232"><label>
      <div align="center">
        <input type="text" name="t1" id="t1" required pattern="[0-9]{4}" title="Enter a valid ID">
        </div>
    </label></td>
  </tr>
  <tr>
    <td height="51"><span class="style16">Marketid</span></td>
    <td><div align="center">
      <input type="text" name="t2" id="t2" required pattern="[0-9]{4}" title="Enter a valid ID">
    </div></td>
  </tr>
  <tr>
    <td height="61"><span class="style16">Quantity</span></td>
    <td><div align="center">
      <input type="number" name="t3" id="t3" required >
    </div></td>
  </tr>
  <tr>
    <td height="67"><span class="style16">PurchaseDate</span></td>
    <td><div align="center">
      <input type="date" name="t4" id="t4">
    </div></td>
  </tr>
  <tr>
    <td height="54"><span class="style16">Cost</span></td>
    <td><div align="center">
      <input type="number" name="t5" id="t5" required >
    </div></td>
  </tr>
  <tr>
    <td height="52"><span class="style16">BetelNut Name</span></td>
    <td><div align="center">
      <input type="text" name="t6" id="t6" required pattern="[A-Za-z\s]+" title="enter characters only">
    </div></td>
  </tr>
  <tr>
    <td height="62"><span class="style16">TotalCost</span></td>
    <td><div align="center">
      <input type="number" name="t7" id="t7" required >
    </div></td>
  </tr>
  <tr>
    <td height="64"><span class="style16">Gst</span></td>
    <td><div align="center">
      <input type="text" name="t8" id="t8">
    </div></td>
  </tr>
  <tr>
    <td height="67"><span class="style16">CGst</span></td>
    <td><div align="center">
      <input type="text" name="t9" id="t9">
    </div></td>
  </tr>
  <tr>
    <td height="58"><span class="style16">SGst</span></td>
    <td><div align="center">
      <input type="text" name="t10" id="t10">
    </div></td>
  </tr>
  <tr>
    <td height="44"><span class="style16">GrandTotal</span></td>
    <td><div align="center">
      <input type="number" name="t11" id="t11" required >
    </div></td>
  </tr>
  <tr>
    <td height="54"><span class="style16">TransportCharge</span></td>
    <td><div align="center">
      <input type="number" name="t12" id="t12" required >
    </div></td>
  </tr>
  <tr>
    <td height="41" colspan="2"><label>
      
        <div align="center">
          <input type="submit" name="b1" id="b1" value="Submit" style="background-color:#3300CC; color:#CCCCCC; height:50px; width:180px; font-size:24px; font:Georgia, "times="Times" new="New" roman="Roman"", Times, serif;="serif;"" />
          <input type="reset" name="b2" id="b2" value="Reset" style="background-color:#CC0000; color:#FFFFFF;  height:50px; width:180px; font-size:24px; font:Georgia, "times="Times" new="New" roman="Roman"", Times, serif;="serif;"/>
          </label>
      </div></td>
    </tr>
</table>
<p>&nbsp;</p>
 </form>         
                             <?php include('footer.php');?>