
</head>

<style type="text/css">
<!--
-->
a:hover{
color:#00CC00;
}
.style5 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; color: #000000; }
.style6 {color: #000000}
.style12 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #000000; font-size: 30px; }
</style>
<body>
<div align="center"><?php include('admin_header.php');?>
                        <h2 align="left" style="font-size:36px;">BETEL NUT PRICE</h2>
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
                        <div class="sidebar" style="width:1500px; margin-left: -193px; margin-top:-63; height:500px;">
                            <div class="widget-no-style">
                                <div class="newsletter-widget text-center align-self-center">
<form action="betelnut_price_insert.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="775" height="441" align="center" style="margin-left:150px;">
    <tr>
      <td width="342" height="58"><span class="style12">Betel Nut Name </span></td>
      <td width="421"><span class="style6">
        <input name="t1" type="text" id="t1" required pattern="[A-Za-z\s]+" title="enter characters only">
        </span><span class="style6"></span><span class="style6">
        </label>
          </span></td>
    </tr>
    <tr>
      <td height="55"><span class="style12">UOM</span></td>
      <td>        <input name="t2" type="text" id="t2" required pattern="[A-Za-z\s]+" title="enter characters only" value="Quintal">      </td>
    </tr>
    <tr>
      <td height="62"><span class="style12">Quality Level</span></td>
      <td><span class="style6">
        <label>
        <div align="center">
          <select name="l1" id="l1">
            <option value="1">QUALITY1</option>
            <option value="2">QUALITYY2</option>
            <option value="3">QUALITY3</option>
          </select>
        </div>
        </label>
      </span></td>
    </tr>
    <tr>
      <td height="54"><span class="style12">Quantity</span></td>
      <td>        <input name="t3" type="number" id="t3" required >      </td>
    </tr>
    <tr>
      <td height="50"><span class="style12">Rate</span></td>
      <td>        <input name="t4" type="number" id="t4" required >      </td>
    </tr>
    <tr>
      <td height="68"><span class="style12">IMAGE</span></td>
      <td><span class="style6">
        <label>
        </span> 
        <span class="style6">
        <input type="file" name="file" id="file" />
        </span><span class="style6"></span><span class="style6">        </label>
          </span></td>
    </tr>
    <tr>
      <td height="76" colspan="2"><div align="center" class="style5">
        <label>
        <input type="submit" name="b1" id="b1" value="Submit" style="background-color:#000000; color:#FFFFFF; font-size:24px; height:50px; width:200px; margin-left:-200px;" /> 
        </label>
        <label>
        <input type="reset" name="b2" id="b2" value="Reset" style="background-color:#FF0000; color:#FFFFFF; font-size:24px; height:50px; width:200px;">
        </label>
      </div></td>
    </tr>
  </table>
</form>
 
<?php include('footer.php');?>
<p><em></em></p>
