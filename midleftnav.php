<td width="216" height="232" valign="top" style="padding-top:0px; vertical-align:top; bottom: 123px;position: relative;right: 20px;">
        
        
    <table style="font-size: 10px;" width="200" border="0" align="center" cellpadding="0" cellspacing="0" class="head">
    <tr>
        <td>
        <table width="130" border="0" align="center" cellpadding="0" cellspacing="0" style="width:120px; height:5px;" class="head">
        <tr>
            <td width="34" onMouseOver="return overlib('<font size=1px><font color=ivory><strong>Exp:</strong> <font color=orange><?php echo ceil($exp)?>/<?php echo $maxexp?></font>');" onMouseOut="return nd();"><?php echo ceil(100*($exp/$maxexp))?>%</td>
            <td width="96">
            <table class=bar border=0 cellspacing=0 cellpadding=0 width=100%><tr><td class=exp background=images/spacer.gif><img src=imgs/white.gif height=5 width=<?php echo ceil(100*($exp/$maxexp))?>></td></tr></table></td>
        </tr>
        </table> 
        </td>
    </tr>
    
    <tr>
        <td style="padding-top:15px;">
        <table width="130" border="0" align="center" cellpadding="0" cellspacing="0" style="width:120px; height:5px;" class="head">
        <tr>
            <td width="34" onMouseOver="return overlib('<font size=1px><font color=ivory><strong>Health:</strong> <font color=orange><?php echo $health?>/<?php echo $maxhealth?></font>');" onMouseOut="return nd();"><?php echo ceil(100*($health/$maxhealth))?>%</td>
            <td width="96">
            <table class=bar border=0 cellspacing=0 cellpadding=0 width=100%><tr><td class=energy background=images/spacer.gif><img src=imgs/green.gif height=5 width=<?php echo (100*($health/$maxhealth))?>%></td></tr></table></td>
        </tr>
        </table>
        </td>
    </tr>
    
    <tr>
        <td style="padding-top:14px;">
        <table width="130" border="0" align="center" cellpadding="0" cellspacing="0" style="width:120px; height:5px;" class="head">
        <tr>
            <td width="34" onMouseOver="return overlib('<font size=1px><font color=ivory><strong>Energy:</strong> <font color=orange><?php echo $energy?>/<?php echo $maxenergy?></font>');" onMouseOut="return nd();"><?php echo ceil(100*($energy/$maxenergy))?>%</td>
            <td width="96">
            <table class=bar border=0 cellspacing=0 cellpadding=0 width=100%><tr><td class=energy background=images/spacer.gif><img src=imgs/blue.gif height=5 width=<?php echo (100*($energy/$maxenergy))?>%></td></tr></table></td>
        </tr>
        </table>            
        </td>
    </tr>
    
    <tr>
        <td style="padding-top:16px;">
        <table width="130" border="0" align="center" cellpadding="0" cellspacing="0" style="width:120px; height:5px;" class="head">
        <tr>
            <td width="34" onMouseOver="return overlib('<font size=1px><font color=ivory><strong>Ability:</strong> <font color=orange><?php echo $ability?>/<?php echo $maxability?></font>');" onMouseOut="return nd();"><?php echo ceil(100*($ability/$maxability))?>%</td>
            <td width="96">
            <table class=bar border=0 cellspacing=0 cellpadding=0 width=100%><tr><td class=energy background=images/spacer.gif><img src=imgs/purple.gif height=5 width=<?php echo (100*($ability/$maxability))?>%></td></tr></table></td>
        </tr>
        </table>
       
        </td>
    </tr>
    </table>
        
        
    <table width="216" border="0" style="margin-top:0px;position: relative;top: 100px;left: 37px;" cellpadding="0" cellspacing="0">
    <tr> <?php //TODO: I NEED TO WORK ON THIS MAP IMAGE!!!?>
        <td><img src="/imgs/darkspace2.jpg" alt="" width="216" height="472" border="0" usemap="#Map2"></td>
    </tr>
    
    </table>
        
        
    </td>