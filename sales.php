<style type="text/css">
<!--
.style12 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 30px; color: #000000; }
-->
</style>
                        <?php include('accountant_header.php');?>
<h2 style="font-size:36px;">SALES</h2>
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
<form name="form1" method="post" action="sales_insert.php">
  <table width="588" align="center" style="margin-left:150px;">
    <tr>
      <td width="352" height="76"><span class="style12">Salesid</span></td>
      <td width="224"><label>
        
        <div align="left">
          <input type="text" name="t1" id="t1" required pattern="[0-9]{4}" title="Enter a valid ID">
          </label>
          </div></td>
    </tr>
    <tr>
      <td height="61"><span class="style12">Dealerid</span></td>
      <td>
        
        <div align="left">
          <input type="text" name="t2" id="t2" required pattern="[0-9]{4}" title="Enter a valid ID">
        </div></td>
    </tr>
    <tr>
      <td height="66"><span class="style12">BetelNut Name</span></td>
      <td>
        
        <div align="left">
          <input type="text" name="t3" id="t3" required pattern="[A-Za-z\s]+" title="enter characters only">
        </div></td>
    </tr>
    <tr>
      <td height="67"><span class="style12">Salesdate</span></td>
      <td>
        
        <div align="left">
          <input type="date" name="t4" id="t4">
        </div></td>
    </tr>
    <tr>
      <td height="62"><span class="style12">Quantity</span></td>
      <td>
        
        <div align="left">
          <input type="number" name="t5" id="t5" required >
        </div></td>
    </tr>
    <tr>
      <td height="63"><span class="style12">CostperQty</span></td>
      <td>
        
        <div align="left">
          <input type="number" name="t6" id="t6" required >
        </div></td>
    </tr>
    <tr>
      <td height="61"><span class="style12">Totalcost</span></td>
      <td>
        
        <div align="left">
          <input type="number" name="t7" id="t7" required >
        </div></td>
    </tr>
    <tr>
      <td height="75" colspan="2"><div align="center">
        <label>
        <input type="submit" name="b1" id="b1" value="Submit" style="background-color:#3300CC; color:#CCCCCC; height:50px; width:180px; font-size:24px; font:Georgia, "times="Times" new="New" roman="Roman"", Times, serif;="serif;"" />
        <input type="reset" name="b2" id="b2" value="Reset" style="background-color:#CC0000; color:#FFFFFF;  height:50px; width:180px; font-size:24px; font:Georgia, "times="Times" new="New" roman="Roman"", Times, serif;="serif;"/>
        </label>
      </div></td>
    </tr>
  </table>
</form>
 </form>         
                             <?php include('footer.php');?>
<p>&nbsp;</p>