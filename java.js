
function dodawanie()
{
 var dod1=document.getElementById("pole1").value;
 var dod2=document.getElementById("pole2").value;
 var dodawanie=0;
dodawanie=Number(dod1)+Number(dod2);
document.getElementById("koniec").innerHTML=dod1+"+"+dod2+"="+dodawanie;
}
 
 function odejmowanie()
{
var od1=document.getElementById("pole1").value;
var od2=document.getElementById("pole2").value;
var odejmowanie=0;
odejmowanie=od1-od2;
document.getElementById("koniec").innerHTML=od1+"-"+od2+"="+odejmowanie;
}
  
 function mnozenie()
{
var mno1=document.getElementById("pole1").value;
var mno2=document.getElementById("pole2").value;
var mnozenie=0;
var mnozenie=mno1*mno2;
 
document.getElementById("koniec").innerHTML=mno1+"*"+mno2+"="+mnozenie;
}
  
 function dzielenie()
{
var dz1=document.getElementById("pole1").value;
var dz2=document.getElementById("pole2").value;
var dzielenie=0;
  
if (dz2==0)
{
document.getElementById("koniec").innerHTML="Nie dzieli się przez 0!";
}
else
{
dzielenie=dz1/dz2;

document.getElementById("koniec").innerHTML=dz1+"/"+dz2+"="+dzielenie;
}
}
function Wyniki()
{
  

}

function podmiana(click) {
   var srcDoPodmiany = document.getElementById(click).src;
   console.log(srcDoPodmiany);
   var srcGlowny = document.getElementById("glowny").src;
   console.log(srcGlowny);
   var help = srcGlowny;
   console.log(help);
   document.getElementById(click).src = help;
   document.getElementById("glowny").src = srcDoPodmiany;
}




