<center>

<font face="Tahoma, Verdana, Arial" size="-1">

<HR COLOR="#024070" SIZE="2" WIDTH="90%">

<font face="Tahoma, Verdana, Arial" size="-1"><B>Members</B></FONT><FONT FACE="verdana" SIZE="1">

<HR COLOR="#024070" SIZE="2" WIDTH="90%">

</FONT><font face="Tahoma, Verdana, Arial" size="-1"></FONT>

</FORM>
<FONT COLOR="#515468">&raquo;</FONT>
<A HREF="http://nemo.r-fx.org/phpBB/login.php">Login</a><br>

<FONT COLOR="#515468">&raquo;</FONT> 

<A HREF="http://nemo.r-fx.org/phpBB/bb_register.php?mode=agreement">Register</a><br>

<FONT COLOR="#515468">&raquo;</FONT> 

<A HREF="http://nemo.r-fx.org/phpBB/viewpmsg.php">Private messaging</a><br>

<FONT COLOR="#515468">&raquo;</FONT> 

<A HREF="http://nemo.r-fx.org/phpBB/search.php">Search bbs</a><br>

<FONT COLOR="#515468">&raquo;</FONT> 

<A HREF="http://nemo.r-fx.org/phpBB/bb_memberlist.php">Members List</a><br>

<FONT COLOR="#515468">&raquo;</FONT> 

<A HREF="http://nemo.r-fx.org/phpBB/sendpassword.php">Lost password</a><br>



<BR>

<font face="Tahoma, Verdana, Arial" size="-1">

<HR COLOR="#024070" SIZE="2" WIDTH="90%">

<font face="Tahoma, Verdana, Arial" size="-1"><B>Tests</B></FONT><FONT FACE="verdana" SIZE="1">

<HR COLOR="#024070" SIZE="2" WIDTH="90%">

</FONT><font face="Tahoma, Verdana, Arial" size="-1"></FONT>

<FONT COLOR="#515468">&raquo;</FONT>
<A HREF="http://nemo.r-fx.org/test/alltests.php">Take a Test</A><BR>

<FONT COLOR="#515468" size=1>&raquo;</FONT> 
<A HREF="http://nemo.r-fx.org/test/maketest.php">Make a Test</A><BR>


<br>



<CENTER><font face="Tahoma, Verdana, Arial" size="-1">

<HR WIDTH="90%" COLOR=#024070 SIZE=2>

<font face="Tahoma, Verdana, Arial" size="-1"><B>Your information </B> 

<HR WIDTH="90%" COLOR=#024070 SIZE=2>



<CENTER><B>Your IP (<?php echo $REMOTE_ADDR; ?>) </B>

<TABLE BORDER=0>

  <TBODY>

  <TR>

    <TD>

      <CENTER>

      <FORM NAME=t METHOD=post><font face="Tahoma, Verdana, Arial" size="-1">Your screen 

      width:<BR>

<INPUT SIZE=4 VALUE="not supported" NAME=t1  style="background-color: #003366; background-attachment: scroll; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; color: #FFFFFF; border-height: 2; text-decoration: none; font-weight: bold; border: 1 solid #000000; padding: 1"><BR><BR>

<FONT FACE=verdana  SIZE=1>Your screen height:<BR>

<INPUT SIZE=3 VALUE="not supported" NAME=t2  style="background-color: #003366; background-attachment: scroll; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; color: #FFFFFF; border-height: 2; text-decoration: none; font-weight: bold; border: 1 solid #000000; padding: 1"><BR><BR>

<font face="Tahoma, Verdana, Arial" size="-1">Your screen color Depth:<BR>

<INPUT SIZE=2 VALUE="not supported" NAME=t3 style="background-color: #003366; background-attachment: scroll; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; color: #FFFFFF; border-height: 2; text-decoration: none; font-weight: bold; border: 1 solid #000000; padding: 1"> 

  </FONT></FONT></FONT></CENTER></TD></TR></TBODY></TABLE></FORM>

<SCRIPT>

<!--



function show(){

if (!document.all&&!document.layers)

return

document.t.t1.value=screen.width

document.t.t2.value=screen.height

document.t.t3.value=screen.colorDepth

}

show()

//-->

</SCRIPT>

<HR COLOR="#024070" SIZE="2" WIDTH="90%">

<font face="Tahoma, Verdana, Arial" size="-1"><B>Login</B></FONT><FONT FACE="verdana" SIZE="1">

<HR COLOR="#024070" SIZE="2" WIDTH="90%">
<FORM ACTION="login.php" METHOD="POST">
<font face="Tahoma, Verdana, Arial" size="-1">
              <b>Username: </b></font><br>
              <INPUT style="background: black; border-color: $color1; font-family: Verdana; color: white; border-width: 1; font-size: 11px; border-height: 1; border-style: solid" TYPE="TEXT" NAME="user" SIZE="13" MAXLENGTH="40" VALUE="">
              <br>
              <font face="Tahoma, Verdana, Arial" size="-1">
              <b>Password: </b><INPUT style="background: black; border-color: $color1; font-family: Verdana; color: white; border-width: 1; font-size: 11px; border-height: 1; border-style: solid" TYPE="PASSWORD" NAME="passwd" SIZE="13" MAXLENGTH="25">
<br><a href=sendpassword.php>Password Lost?</a>&nbsp&nbsp;<br><INPUT TYPE="SUBMIT" NAME="submit" VALUE="Login" style="background-color: $color1; background-attachment: scroll; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; color: $textcolor; border-height: 2; text-decoration: none; font-weight: bold; border: 1 solid #000000; padding: 1">
</FORM>
</center>

