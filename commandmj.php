<?php
require "config.php"; 
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title;?> - Commandes MJ</title>

<style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
}
body { background:url(images/footer.jpg) no-repeat top #070707; padding:0px; margin:0px;}
.body {
	position:relative; 
	width:750px; 
	height:500px;
	background:url(images/) no-repeat;
	margin: 0px 0px 0px 0px;
	}
a:link {border:0px;outline: none;}
a:visited {border:0px;outline: none;}
input, textarea {
	background: #0f0f0f;
	border: 1px solid #000000;
	color: #423c3b;
	font-size:19px; color:#666; font-family:Arial, Helvetica, sans-serif;
	height:950px;
}
a:active {
  outline: none;
}
.textars {
	position:relative;
	width:1000px; height:50px;
	padding: -600px 0px 0px 0px;
	left:-440px;
}
.bb {
	position:relative;
	padding: 50px 0px 0px 10px;
    }
	.bb ul { padding:500px; margin:0px;}
	.bb li {
	list-style:none;
	float:left;
	}
	.bb li a {
	display:block;
	}
	.bb li a:hover {
	}
	
-->
</style>
</head>

<body>
<div style="height:55px;"></div>
<center>
<div class="body">
<div class="textars">
<textarea rows="23" style="width:164%; color:#746d6c;" readonly="readonly">
Commandes GM: 
************
.gm on/off :active désactive le mode GM
.gm chat on/off :active désactive le logo [blizz] devant votre nom
.gm visible on/off :active désactive le mode invisible
.gm fly on/off :active désactive le mode vol
.gm list :voir les mj connecter
.whisper on/off : actived ésactive les chuchotements

Commandes de TP:
****************
.appear $nomdujoueur :ce téléporter au joueur 
.summon $nomdujoueur :téléporte le joueurs a soit
.tele $nomdutp : pour ce téléporter (exemple .tele gmi pour l'ile des mj)/.look tele $nom 
.gps :optien les coordonées
.go $coordonée :vous téléporte à un endroit précit.
.recal :renvoi un joueur a son emplacement.

Commandes Modify:
****************
.modify gold : Modifier l'argent du joueur ciblé.
.modify hp : Modifier les HP du joueur ciblé.
.modify level : Modifier le niveau du joueur ciblé.
.modify mana : Modifier le mana du joueur ciblé.
.modify rage : Modifier la rage du joueur ciblé.
.modify energy :Modifie l’énergie du joueur sélectionne. Si aucun joueur sélectionné, modifie votre énergie.
.modifyfaction #factionid :Modifie la faction et flags ("but") de la créature sélectionnée. Si aucune valeur entrée, affiche la faction et flag par défaut de la créature sélectionnée.
.modify scale : Modifier la taille du joueur ciblé.
.modify aspeed :Modifie toutes les vitesses
.modify swim : vitesse de nage (pas de vol)
.modify fly: vitesse de vol uniquement
.modify speed : vitesse de course
.modify bwalk: vitesse de marche

Commandes GameObjet:
********************
Pour comprendre les gameobjects, il faut comprend la notion d'ID et le guid)
L'id: L'ID est propres à chaque game de gameobject.
Le Guid: Le GUID est propres à chaque Gameobject, vous n'aurez jamais 2fois le même GUID.
.gob add $ID: ajoute l'objet $id 
.lo ob $nom: cherche l'id d'un objet en fonction du $nom
.gob tar: cible l'objet le plus proche (vous donne l'id, le guid..)
.gob del $guid: suprime l'objet ne fonction de sont guid.
T1:
.additemset 201 / Mage
.additemset 202 / Prêtre
.additemset 203 / Démoniste
.additemset 204 / Voleur
.additemset 205 / Druide
.additemset 206 / Chasseur
.additemset 207 / Chaman
.additemset 208 / Paladin
.additemset 209 / Guerrier
T2:
.additemset 210 / Mage
.additemset 211 / Prêtre
.additemset 212 / Démoniste
.additemset 213 / Voleur
.additemset 214 / Druide
.additemset 215 / Chasseur
.additemset 216 / Chaman
.additemset 217 / Paladin
.additemset 218 / Guerrier
T3:
.additemset 521 / Druide
.additemset 523 / Guerrier
.additemset 524 / Voleur
.additemset 525 / Prêtre
.additemset 526 / Mage
.additemset 527 / Chaman
.additemset 528 / Paladin
.additemset 529 / Démoniste
.additemset 530 / Chasseur
T4:
.additemset 654 / Guerrier 1
.additemset 655 / Guerrier 2
.additemset 640 / Druide 1
.additemset 639 / Druide 2
.additemset 664 / Prêtre 1
.additemset 663 / Prêtre 2
.additemset 645 / Démoniste
.additemset 632 / Chaman 1
.additemset 633 / Chaman 2
.additemset 651 / Chasseur
.additemset 625 / Paladin
.additemset 621 / Voleur
.additemset 648 / Mage
T5:
.additemset 656 / Guerrier 1
.additemset 657 / Guerrier 2
.additemset 643 / Druide 1
.additemset 641 / Druide 2
.additemset 642 / Druide 3
.additemset 665 / Prêtre 1
.additemset 666 / Prêtre 2
.additemset 646 / Démoniste
.additemset 634 / Chaman 1
.additemset 636 / Chaman 2
.additemset 635 / Chaman 3
.additemset 652 / Chasseur
.additemset 627 / Paladin 1
.additemset 628 / Paladin 2
.additemset 629 / Paladin 3
.additemset 622 / Voleur
.additemset 649 / Mage
T6:
.additemset 668 / Voleur
.additemset 669 / Chasseur
.additemset 670 / Démoniste
.additemset 671 / Mage
.additemset 672 / Guerrier
.additemset 674 / Prêtre
.additemset 676 / Druide
.additemset 679 / Paladin
.additemset 682 / Chaman
T7:
.additemset 787 /Guerrier
.additemset 801 /Voleur
.additemset 791 /Paladin
.additemset 796 /Chaman
.additemset 793 /DK
.additemset 800 /Druide
.additemset 803 /Mage
.additemset 794 /Chasseur
.additemset 805 /Prêtre
.additemset 802 /Démoniste
T8:
Paladin
.additemset 820
.additemset 821
.additemset 821
*******
Chevalier de la mort:
.additemset 834
.additemset 835
******
Démoniste: 
.additemset 837
******
mage:
.additemset 836
******
Druide
.additemset 828
.additemset 827
.additemset 829
******
Prêtre 
.additemset 832
.additemset 833
******
Chasseur: 
.additemset 838
******
Guerrier:
.additemset 830
.additemset 831
******:
Voleur 
.additemset 826
******
Chaman:
.additemset 824
.additemset 825
.additemset 823
******
Maintenant c'est plus les set mais les objets direct
commande : .additem
T9 :
Chaman :
.additem 48294
.additem 48290
.additem 48291
.additem 48292
.additem 48293
******
Chasseur :
.additem 48259
.additem 48255
.additem 48256
.additem 48257
.additem 48258
*******
Chevalier de la mort :
.additem 48495
.additem 48491
.additem 48492
.additem 48493
.additem 48494
*******
Démoniste :
.additem 47797
.additem 47793
.additem 47795
.additem 47796
.additem 47794
********
Druide :
.additem 48201
.additem 48200
.additem 48199
.additem 48198
.additem 48202
********
Guerrier :
.additem 48400
.additem 48396
.additem 48397
.additem 48398
.additem 48399
********
Mage :
.additem 47767
.additem 47763
.additem 47764
.additem 47765
.additem 47766
********
Paladin :
.additem 48584
.additem 48580
.additem 48581
.additem 48582
.additem 48583
********
Pretre :
.additem 48037
.additem 48029
.additem 48031
.additem 48035
.additem 48033
********
Voleur :
.additem 48237
.additem 48233
.additem 48235
.additem 48236
.additem 48234
T10 :
*****
Chaman :
.additem 51245
.additem 51246
.additem 51247
.additem 51248
.additem 51249
*****
Chasseur :
.additem 51285
.additem 51286
.additem 51287
.additem 51288
.additem 51289
******
Chevalier de la mort :
.additem 51305
.additem 51306
.additem 51307
.additem 51308
.additem 51309
*******
Druide :
.additem 51300
.additem 51301
.additem 51302
.additem 51303
.additem 51304
*******
Demoniste :
.additem 51230
.additem 51231
.additem 51232
.additem 51233
.additem 51234
********
Guerrier :
.additem 51225
.additem 51226
.additem 51227
.additem 51228
.additem 51229
********
Mage :
.additem 51280
.additem 51281
.additem 51282
.additem 51283
.additem 51284
********
Paladin :
.additem 51270
.additem 51271
.additem 51272
.additem 51273
.additem 51274
********
Pretre :
.additem 51260
.additem 51261
.additem 51262
.additem 51263
.additem 51264
********
Voleur :
.additem 51250
.additem 51251
.additem 51252
.additem 51253
.additem 51254 
********
S6:
Chaman :
.additem 41211
.additem 41081
.additem 41137
.additem 41151
.additem 41199
********
Chasseur :
.additem 41217
.additem 41087
.additem 41143
.additem 41157
.additem 41205
*********
Chevalier de la mort :
.additem 40868
.additem 40787
.additem 40809
.additem 40827
.additem 40848
********
Démoniste :
.additem 42017
.additem 41993
.additem 41998
.additem 42005
.additem 42011
********
Druide :
.additem 41321
.additem 41275
.additem 41287
.additem 41298
.additem 41310
********
Guerrier :
.additem 40866
.additem 40789
.additem 40807
.additem 40826
.additem 40847
********
Mage :
.additem 41971
.additem 41946
.additem 41953
.additem 41965
.additem 41959
********
Paladin :
.additem 40963
.additem 40907
.additem 40927
.additem 40939
.additem 40933
********
Pretre :
.additem 41940
.additem 41915
.additem 41921
.additem 41927
.additem 41934
********
Voleur :
.additem 41767
.additem 41650
.additem 41655
.additem 41672
.additem 41683

</textarea>
</div>
<div class="bb" align="left">
 <ul>
  <li><a id="agree" href="index.php?terms=agree"></a></li>
  <li><a id="disagree" href="http://www.gm-wow.fr"></a></li>
 </ul>
</div>
</div>
</center>

</body>
</html>
