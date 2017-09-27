function rangeval(){
  var niveau=$('#lvl').val();
  if (niveau<=5) {
    $('#value_lvl').text('Débutant');
  }else if (niveau>5&&niveau<=10) {
    $('#value_lvl').text('Intermediaire');
  }else if (niveau>10&&niveau<=15) {
    $('#value_lvl').text('Avancé');
  }else {
    $('#value_lvl').text('Expert');
  }
}
function checknom(id){
  var nom=$('#'+id).val();
  var reg = /^[^0-9!<>,;?=+()@#"Â°{}_$%:]+$/;
  if (!reg.test(nom)) {
    $('#'+id).css({backgroundColor: "#B75862"})
  }else{
    if (nom.trim()!=null&&nom.trim().length!=0) {
        $('#'+id).css({backgroundColor: "#46C095"});
    }else {
        $('#'+id).css({backgroundColor: "#B75862"});
    }
  }
}

function checkmail(){
  var mail=$('#email').val();

}
function scriptload(){
  rangeval();
}
