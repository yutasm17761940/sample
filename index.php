<!DOCTYPE html>
<html>
<head>
 <style>

 </style>
</head>
<body>
<noscript>
  <p>scriptをオンにしてください</p>
</noscript>

<p>rokudo</p>

<?php
echo "<p> これはPHPです </p>";
?>
 
<div id="quizes" align="center">
<input id="startbutton" style="height:50px; width:500px; background-color:green;"  type="button" onclick="letsquiz()" value="クイズを始める"/>
</div>

<script>

function letsquiz() {
let sheeting = document.createElement('div');  //divエレメント作成
sheeting.id = "sheetings";
sheeting.style.backgroundColor = '#ffffff';
sheeting.style.height = '100%';
sheeting.style.position = 'fixed';
sheeting.style.top = '0px';
sheeting.style.width = '100%';
sheeting.style.zIndex = '9979';
sheeting.style.opacity = '0.8';

let flaming = document.createElement("div");
flaming.id = "flamings";
flaming.style.backgroundColor = '#BD5C8D';
flaming.style.textAlign = "center";
flaming.style.imgAlign = "center";
flaming.style.fontSize = "10px";
flaming.style.height = '100%';
flaming.style.left = '0px';
flaming.style.position = 'fixed';
flaming.style.top = '10%';
flaming.style.width = '100%';
flaming.style.zIndex = '9980';

let yourname = document.createElement("input");
yourname.id = "names"
yourname.setAttribute("type", "text");
yourname.setAttribute("maxlength", "10");
yourname.setAttribute("size", "16");
yourname.setAttribute("value", "");



let quizstart = document.createElement("button");
quizstart.type = "button";
quizstart.innerHTML = "QUIZ START!";
quizstart.style.backgroundColor = "brown";
quizstart.onclick = () => {
  alert(names.value);
};

let batu = document.createElement("div");
batu.id = "batubutton";
batu.style.height = '25px';
batu.style.right = '2%';
batu.style.position = 'fixed';
batu.style.top = '2%';
batu.style.width = "25px";
batu.style.zIndex = '9990';
batu.style.opacity = '1';

let btns = document.createElement("button");
btns.id = "batubtns";
btns.style.backgroundColor = "red";
btns.style.width = "30px";
btns.style.height = "30px";
btns.type = "button";
btns.innerHTML = "＊";
btns.onclick = () => {
  let yesno = window.confirm("クイズ止めるんですか？本気っすか！？");
  if (yesno) {
    alert("また来てね！！")
    btns.style.visibility = "hidden";
    delete_dom_obj("sheetings");
    delete_dom_obj("flamings");
    delete_dom_obj("batu");
    delete_dom_obj("btns");
  }
} ;

let objBody = document.getElementsByTagName("body").item(0);
objBody.appendChild(sheeting);
objBody.appendChild(flaming);
objBody.appendChild(batu);
flaming.appendChild(yourname);
flaming.appendChild(quizstart);
batu.appendChild(btns);

}

function delete_dom_obj( id_name ){
  let dom_obj = document.getElementById(id_name);
  let dom_obj_parent=dom_obj.parentNode;
  dom_obj_parent.removeChild(dom_obj);
}

function quizes(num) {
  let quiztext = [
    "桐蔭高校の敷地面積は？",
    "桐蔭高校のイメージカラーのカラーナンバーは？",
    "西側諸国に必要なものは？",
    "",
    "",
  ];
  return quiztext[num];
}
/*
function ranking() {
  sort
}
*/
</script>



</body>
</html>
