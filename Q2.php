<?php

function isValidHexCode ($string)
{
$chars;
$isValid = 'false';
  
$temp = strtolower($string);
  
if ($temp[0]=='#') {
      
if (strlen($temp) == 7)
	{
	  
 
for ($i = 0; $i < strlen($temp); $i++)
	    {
	      
$chars[$i] = $temp[$i];
	      
if (is_numeric($chars[$i]))
		{
		  
$isValid = 'true';
		
}
	      else
		{
		  
if (($chars[$i] == 'a' || $chars[$i] == 'b' || $chars[$i] == 'c'
			|| $chars[$i] == 'd' ||$chars[$i] == 'e'
			|| $chars[$i] == 'f' || $chars[$i] == '#'))
		    {
		      
$isValid = 'true';
		    
}
		  else
		    {
		      
$isValid = 'false';
		      
break;
		    
}
		
}
	    
}
	

}

}
 
return $isValid;

}

echo(isValidHexCode("")) ;

