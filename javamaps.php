<script language="JavaScript" src="includes/overlib.js"></script> 
<script language="JavaScript1.2" type="text/javascript"><!--
	function DoConfirm(message, url) 
	{
		if (confirm(message))
			location.href = url;
	}
	function NeHandler(nyhet)
      {
      	bild =  nyhet+"Img";
            if(document.getElementById(nyhet).style.display==="none")
           	{ 
           	 	document.getElementById(nyhet).style.display=''  ;
 			document.getElementById(bild).src='images/gnl_arrow_down_trans.gif' ;
 	 	}
  		else
      	{
      		document.getElementById(nyhet).style.display="none";
			document.getElementById(bild).src='images/gnl_arrow_right_trans.gif' ;
       	}
   	}
--></script>

    
<!-- End Save for Web Slices -->
<map name="Map2" id="Map2"> 
<area shape="rect" coords="32,19,196,47" href="overview" alt="Overview" />
<area shape="rect" coords="32,50,196,79" href="inventory" alt="Inventory" />
<area shape="rect" coords="34,81,195,109" href="log" alt="Logs" />
<area shape="rect" coords="35,135,194,164" href="citadel" alt="Citadel" />
<area shape="rect" coords="36,165,193,196" href="battlefield" alt="Battlefield" />
<area shape="rect" coords="38,226,193,254" href="Guild" alt="Guild" />
<area shape="rect" coords="38,255,192,284" href="bank" alt="Bank" />
<area shape="rect" coords="36,197,194,226" href="angels" alt="Angels" />
</map>
<map name="Map">
<area shape="rect" coords="31,36,85,60" href="mail" 
<area shape="rect" coords="100,42,163,67" href="forums" 
<area shape="rect" coords="177,42,230,71" href="chat" 
<area shape="rect" coords="323,45,396,70" href="account">
<area shape="rect" coords="408,43,466,66" href="logout">
<area shape="rect" coords="484,36,528,57" href="help">
</map>