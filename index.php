<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>ฐานข้อมูลศิษย์เก่า สาขาวิทยาการคอมพิวเตอร์</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <style type="text/css">
  #apDiv1 {
	position: absolute;
	left: 230px;
	top: 114px;
	width: 114px;
	height: 125px;
	z-index: 1;
}
  #apDiv2 {
	position: absolute;
	left: 380px;
	top: 144px;
	width: 266px;
	height: 46px;
	z-index: 1;
}
  #apDiv3 {
	position: absolute;
	left: 378px;
	top: 181px;
	width: 359px;
	height: 45px;
	z-index: 2;
}
  </style>
</head>

<body>
  <div id="apDiv2"><font size="+2">มหาวิทยาลัยราชภัฏชัยภูมิ</font></a></h></div>
  <div id="apDiv3"><font size="+2">Chaiyaphum Rajabhat University</font></a></h></div></div>
  <div id="main">

    <div id="header">  
	  
	  <div id="menubar">
	    
		<div id="welcome">
	      <h1><a href=><font size="+2"><marquee direction="left">ฐานข้อมูลศิษย์เก่า สาขาวิทยาการคอมพิวเตอร์</marquee></font></a></h1>
	    </div><!--close welcome-->
		
        <div id="menu_items">
	      <ul id="menu">
            <li class="current"><a href="index.php">หน้าแรก</a></li>
            <li><a href="insert.php">ค้นหาข้อมูล</a></li>
            <li><a href="News.php">ข่าวสาร</a></li>
            <li><a href="Member_from.php">ลงทะเบียน</a></li>
            <li><a href="report.php">ติดต่อเรา</a></li>
          </ul>
        </div>
        <!--close menu-->
		
      </div><!--close menubar-->	
	
	</div><!--close header-->		
	
<div id="site_content">	
	

    <div class="sidebar_container"><!--close sidebar-->
      <script>
function ValForm()
{
	var Username = document.forms["regis_form"]["Username"].value;
	if(Username == null || Username=="")
	{
		alert("กรุณาป้อนชื่อเข้าใช้งานด้วยนะค่ะ");
		return false;
	}
	var Password = document.forms["regis_form"]["Password"].value;
	if(Password == null || Password=="")
	{
		alert("กรุณาป้อนรหัสผ่านด้วยนะค่ะ");
		return false;
	}
}
</script>
      <?

if($_SESSION['login']!="")
{
	?>

	ยินดีต้อนรับคุณ : <?=$_SESSION['login']; ?>
    <br>

    
    <?
}
else
{
	
?><h3 class="title">ลงชื่อเข้าใช้งาน</h3>
    <table border="0" cellpadding="0" cellspacing="0" width="98%">
      <tbody>
        <tr>
          <td valign="top"><form action="Check_Login_Member.php" method="post" name="regis_form" id="regis_form" onsubmit="return ValForm()">
            <div align="center">
              <center>
                <table bordercolor="#666666" cellspacing="0" cellpadding="2" width="100%" bordercolorlight="#00ee00" border="1">
                  <tbody>
                    <tr>
                      <td valign="center" align="right" height="28" class="text"><font class="small" color="#0000ff">Username :&nbsp;</font></td>
                      <td valign="center" class="text"><font color="#804000">
                        <input name="Username" type="text"size="10" />
                      </font></td>
                    </tr>
                    <tr>
                      <td valign="center" align="right" height="28" class="text"><font class="small" color="#0000ff">Password :&nbsp;</font></td>
                      <td valign="center" class="text"><font color="#804000">
                        <input name="Password" type="password" size="10" />
                      </font></td>
                    </tr>
                    <tr>
                      <td valign="center" align="middle" colspan="2" height="33"><div align="center">
                        <input name="input" type="submit"  value="เข้าสู่ระบบ" /></div></td>
                    </tr>
                  </tbody>
                </table>
              </center>
            </div>
          </form></td>
        </tr>
      </tbody>
    </table>
    <?
}
?>
<h3 class="title"></h3>
 <center>
 <img src="images/registro_icono.jpg" alt="" width="20" height="20" />  <a href="admin_login.php">ผู้ดูแลระบบ</a>
 </center><!--close sidebar--><!--close sidebar-->  
		<h3 class="title"></h3>
      </div><!--close sidebar_container-->
      		  
	 
  <div id="content">
        
	<div class="content_item">
	      <p><font size="+0.1">ฐานข้อมูลศิษย์เก่าสาขาวิทยาการคอมพิวเตอร์ ถูกสร้างขึ้นมาเพื่อเป็นศูนย์กลางระหว่างศิษย์เก่าแต่ละรุ่น ให้ได้แลกเปลี่ยนข่าวสารและเป็นสื่อในการติดต่อสื่อสาร ทั้งนี้ผู้จัดทำระบบจึงขอความร่วมมือกับศิษย์เก่าทุกท่านให้ข้อมูลที่เป็นประโยชน์ต่อทางสาขา หากศิษย์เก่าท่านใดที่ไม่สามารถเข้าสู่ระบบได้ จะต้องลงทะเบียนก่อน</font></p>	  
		  
		  <div class="content_images_text">
		  
		    <div class="content_image"><centr>
            
		      <centr>
		      <p><img src="images/123tu.jpg" alt="content image" width="367" height="243" />
	          </p>
		    </div>
		  </div>
          <br />
                <br />
                <br />
                <br /><br /><br /><br />
          
         
		  <p>&nbsp;</p>
		  <p><!--close content_container--></p>
		  <p><!--close content_container--
          		
        </div>
	  </div><br /><br /><br /><br />
	<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FCScpru&amp;width=250&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:290px;" allowTransparency="true"></iframe>
	  <div class="textwidget"></div>
    
      <!--close button_small-->
    </div><br />
		<p><p>&nbsp;</p>
	<p>&nbsp;</p>
	        <p>&nbsp;</p>
	      <p>&nbsp;</p>
	      <p>&nbsp;</p>
	      <p>&nbsp;</p>
	      <p>&nbsp;</p>
	      <p>&nbsp;</p>
	      <p>&nbsp;</p>
	      <p>&nbsp;</p>
      <p>&nbsp;</p>
  </div><center>
    <a href="http://learn.cpru.ac.th/"><span class="title"><img src="images/as.gif" alt="" width="170" height="37" /></span><img src="images/e-learn.gif" alt="" width="175" height="45" /></a><a href="http://library.cpru.ac.th/lib/index.php"><img src="images/e-library.gif" alt="" width="175" height="45" /></a>
     <a href="http://www.cpru.ac.th/E_BOOK/new.htm"><img src="images/data.gif" alt="" width="175" height="45" /></a>
     <a href="http://mis.cpru.ac.th/cpru/student/"><img src="images/Garde.gif" alt="" width="175" height="45" /></a></center><br />
	  
	    <center><iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FCScpru&amp;width=250&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:290px;" allowtransparency="true"></iframe></center>
	  
  <!--close content_item--></div>   
</div>
	  <!--close content-->
     <div id="footer">Copyright © ฐานข้อมูลศิษย์เก่า <a href="http://cs.cpru.ac.th/"><strong>​สาขาวิทยาการคอมพิวเตอร์</strong></a><a href="http://cpru.ac.th/"><strong> มหาวิทยาลัยราชภัฏชัยภูมิ</strong></a></div><a href="http://cpru.ac.th/"><strong>​</strong></a><!--close footer-->  
  
</body>
</html>
