// Remove Items From Cart

function a(){
	var a=document.getElementById("item1_").value;
var b=document.getElementById("item1");
b.innerHTML=a*300 +"/-";
}

function b(){
	var x=document.getElementById("item2_").value;
var c=document.getElementById("item2");
c.innerHTML = x * 200 +"/-";
}

function c(){
	var y=document.getElementById("item3_").value;
var d=document.getElementById("item3");
d.innerHTML = y * 130 +"/-";
}

function d(){
	var z=document.getElementById("item4_").value;
var e=document.getElementById("item4");
e.innerHTML = z * 35 +"/-";
}

function e(){
var a=document.getElementById("item1_").value;
var x=document.getElementById("item2_").value;
var y=document.getElementById("item3_").value;
var z=document.getElementById("item4_").value;
var p=document.getElementById("subtotal");
var q=document.getElementById("total");
p.innerHTML=a*300+x*200+y*130+z*35+"/-";
q.innerHTML=a*300+x*200+y*130+z*35+4+5+"/-";
}

