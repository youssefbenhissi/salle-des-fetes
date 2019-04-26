function verif(){
var platName = b.platName.value;
var platDescription = b.platDescription.value;
var platPrice = b.platPrice.value;
var  platImage = b.platImage.value;

if( platName.length== 0 || platDescription.length== 0 || platPrice.length== 0 || platImage.length== 0)
{
alert("Vérifier les champs");
}
else{

alert('Bienvenue ');
}
}