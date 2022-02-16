<?php
	function makeArticle($nom, $prix, $categorie, $image, $stock, $description)
	{
		$article=array(
				'nom' => $nom,
				'prix' => $prix,
				'categorie' => $categorie,
				'image' => $image,
				'stock' => $stock,
				'description' => $description,
				'note' => rand(rand(0,1),5),
		);
		return $article;
	}
	
	$articles = array();
	
	$articles[]=makeArticle('Poster Star Wars Episode I', rand(5,50), 'Poster', 'images/Episode_I.jpg', rand(0,15), 'Poster 120 x 90 cm de l\'affiche du film La Menace Fantôme');
	$articles[]=makeArticle('Poster Star Wars Episode II', rand(5,50), 'Poster', 'images/Episode_II.jpg', rand(0,15), 'Poster 120 x 90 cm de l\'affiche du film L\'attaque des clones');
	$articles[]=makeArticle('Poster Star Wars Episode III', rand(5,50), 'Poster', 'images/Episode_III.jpg', rand(0,15), 'Poster 120 x 90 cm de l\'affiche du film La revanche des Siths');
	$articles[]=makeArticle('Poster Star Wars Episode IV', rand(5,50), 'Poster', 'images/Episode_IV.jpg', rand(0,15), 'Poster 120 x 90 cm de l\'affiche du film Un nouvel espoir');
	$articles[]=makeArticle('Poster Star Wars Episode V', rand(5,50), 'Poster', 'images/Episode_V.jpg', rand(0,15), 'Poster 120 x 90 cm de l\'affiche du film L\'empire contre-attaque');
	$articles[]=makeArticle('Poster Star Wars Episode VI', rand(5,50), 'Poster', 'images/Episode_VI.jpg', rand(0,15), 'Poster 120 x 90 cm de l\'affiche du film Le retour du Jedi');

	$articles[]=makeArticle('BandStand', rand(50,150), 'MMI2014', 'images/bandstand.png', rand(0,10), 'Enceintes haute-qualité, portatives, sans-fil, waterproof');
	$articles[]=makeArticle('Second Skin', rand(200,350), 'MMI2014', 'images/secondskin.png', rand(0,15), 'Ce vêtement intelligent utilise une technologie de pointe. Ces capteurs résistant à l\'eau permettent une mesure pr&eacute;cise du rythme cardiaque, de la tension, des calories perdues ainsi que de la distance parcourue.');
	$articles[]=makeArticle('SpaceWatch', rand(400,550), 'MMI2014', 'images/SpaceWatch.jpg', rand(0,10), 'Montre MMI2014 qui a la capacité de projeter un &eacute;cran holographique au dessus de la main du porteur de la montre. L\'écran s’active après un mouvement sp&eacute;cifique de la main. Grâce a cet écran holographique, l\'utilisateur a la capacité de naviguer sur internet, de passer des appels téléphoniques.');
	$articles[]=makeArticle('LinkRing', rand(500,1000), 'MMI2014', 'images/linkring.png', rand(0,20), 'Bague communicante et géolocalisée');
	$articles[]=makeArticle('MicroCheffou', rand(200,300), 'MMI2014', 'images/microcheffou.png', rand(0,8), 'Four à micro-ondes qui cuisine et dresse en un rien de temps (5min), à partir d\'ingrédients simples, des plats succulents !');
	$articles[]=makeArticle('Reminder Bag', rand(175,250), 'MMI2014', 'images/reminderbag.png', rand(0,20), 'Sac intelligent');
	$articles[]=makeArticle('BroadCam', rand(300,500), 'MMI2014', 'images/broadcam.png', rand(0,20), 'Caméra haute définition capable de filmer et diffuser en live de jour commme de nuit');
	$articles[]=makeArticle('DreamStream', rand(500,1000), 'MMI2014', 'images/morpheus.png', rand(0,10), 'La console DreamStream&#169; est la plus légère, la plus résistante et la plus puissante console de toute l\'ère du jeux vidéo. Son design spécial et futuriste en forme d\'oreiller lui donne la meilleure des apparences pour une console de salon. De ce fait, cette console nouvelle génération est facile à transporter et à utiliser. Avec les capteurs sensorielles inclus dans la console, les rêves les plus inaccessibles sont à votre portée avec simplicité !');
	$articles[]=makeArticle('CheckBeauty', rand(100,200), 'MMI2014', 'images/checkbeauty.jpg', rand(0,20), 'Poudrier intelligent avec tutoriaux intégrés');
	$articles[]=makeArticle('ETA', rand(10,50), 'MMI2014', 'images/eta.png', rand(0,20), 'La surface Omni-Energy développée par nos labos permet de récupérer l\'énergie solaire, les vibrations du son, la force du vent, la chaleur ambiante, les rayons gammas, bref, c\'est la surface ultime permettant de récupérer chaque once d\'énergie disponible!');

    $articles[]=makeArticle('MindEye', rand(100,5000), 'MMI2015', 'images/mindeye.png', rand(0,10), 'Le mind eye un implant cérébral, visible ou non, qui permet de télécharger de nouveaux savoirs de manière temporaire ou définitive. L\'implant se pose en toute sécurité et en moins de 20 minutes dans des "boutiques" spécialisées Mind Store. Les savoirs sont disponibles en ligne sur le mind store ou en boutique physique.');
    $articles[]=makeArticle('OmniFluide', rand(10,90), 'MMI2015', 'images/ARN.png', rand(0,50), 'La machine appelée l\' Ơ, a pour but de créer un liquide appelé Omnifluide, ce liquide modifie votre apparence physique comme pourrais le faire des cosmétiques ou de la chirurgie mais sans les défauts. Pour obtenir de l\'Omnifluide, il faut placer un verre d\'eau ainsi que des recharges dans la machine. Ensuite, via un tableau de commande, on peut régler manuellement les différents changements de caractéristiques que l\'on désire ou bien choisir des réglages prédéfinis. Vous pouvez même choisir le goût .');
    $articles[]=makeArticle('Rewind', rand(300,900), 'MMI2015', 'images/Rewind.png', rand(0,10), 'Un masque qui va permettre de vous faire revivre et gérer les souvenirs de votre passé et si vous le souhaitez les sauvegarder en tant que favoris pour y accéder plus rapidement. Ce produit va vous permettre de vous remémorer de vos meilleurs moments passés. Revivez des souvenirs d\'enfance, des moments intimes ... l\'émotion est garantie ! ');
    $articles[]=makeArticle('Nappy', rand(10,50), 'MMI2015', 'images/nappy.png', rand(0,25), 'La Nappy’ Co est la couche connectée ! Nappy’Co est un petit capteur révolutionnaire qui vous indiquera directement sur votre smartphone ou tablette si votre bébé a fait pipi ou caca dans sa couche. Connectée à votre smartphone en Bluetooth via l’application Nappy’Co, le capteur enverra automatiquement les informations sur l’humidité de la couche. Une notification apparaîtra dès lors que votre enfant fera ses besoins. Simple et pratique pour prendre soin de votre nouveau né ! Le produit Nappy’Co permet aussi, associé à son application, d’analyser les résultats et de rester vigilant quant à la santé rénale de leur bébé : déshydratation, infections urinaires, etc ... Ainsi les parents pourront envoyer les résultats en cas de problèmes au médecin en charge du suivi du bébé. A présent, plus besoin de mettre le nez dans les couches de votre enfant.');
    $articles[]=makeArticle('Overfly', rand(150,299), 'MMI2015', 'images/Overfly.png', rand(0,5), 'Un Hover Board, cela tombe sous le sens : C\'est génial. C\'est un moyen cool et décontracté de se déplacer tout en faisant sensation. Mais cet Hover Board à un plus : Il permettra à son possesseur d\'interagir avec les autres utilisateurs et ainsi faire partie d\'une communauté. Jeux entres amis, duels, pilote automatique pour rejoindre ses proches, tout est fait dans cette planche volante pour rapprocher les individus. ');
    $articles[]=makeArticle('Look At Me', rand(100,500), 'MMI2015', 'images/Lookatme.png', rand(0,5), 'Le client qui achète le pack lunette + t-shirt, ce voie offrir comme option de personnifié un texte sur son t-shirt selon ses goûts à un ou des groupes de personnes définies, ou bien à tous le monde possédant aussi ce pack lunette et t-shirt. - Les textes sont à programmés sur les lunettes et son retransmis au t-shirt pour que les autres puissent le voir avec leurs lunette.');
    $articles[]=makeArticle('Homedia', rand(100,500), 'MMI2015', 'images/homedia.png', rand(0,5), 'Les actuels utilisateurs d’enceintes sont obligés de changer de piste quand il le souhaitent. Notre produit à deux fonctionnalités principales : suivre l’utilisateur dans son habitation et diffuser le son uniquement où il se trouve. L’objectif de cette fonctionnalité et de ne pas diffuser de la musique où l’utilisateur ne se trouve pas. L’autre fonctionnalité et que le système s’adapte aux habitudes de l’utilisateur. C’est à dire que s’il à l’habitude d’écouter un certain style de musique dans une certaine pièce ou dans sa voiture, les enceintes présentes dans ce lieu diffuserons automatiquement le style de musique en question.');
    $articles[]=makeArticle('E-Jynga', rand(100,500), 'MMI2015', 'images/logobra.png', rand(0,15), 'Le client peux changer de vêtement à tout moment dans la journée , le produit est disponible avec une app pour pouvoir changer , acheter et revendre ses vêtement à volonté.');
    $articles[]=makeArticle('Space Box', rand(100,500), 'MMI2015', 'images/SpaceBox.jpg', rand(0,10), 'Le produit est une machine qui permet de déstructurer un objet en dissociant ses molécules puis en les numérisant. Une fois numérisés, les objets en question sont stockés sur un serveur. Ensuite, la SpaceBox restructurera l\'objet depuis les données numériques de ce dernier. Cette opération se fera à l\'aide de capsules d\'EC2.');
    $articles[]=makeArticle('Incubateur CS-42', rand(1000000,1500000), 'MMI2015', 'images/incubateur.jpg', rand(0,1), 'Grâce à l\'apparition d\'une nouvelle technologie, qui n\'est pas encore suffisament définie actuellement, la « Creating Species » vous permet de générer selon votre imagination l\'espèce animale ou végétale de votre choix.');
    $articles[]=makeArticle('Remember', rand(100,600), 'MMI2015', 'images/Remember.jpg', rand(0,15), 'Oreiller qui permettrait d\'enregistrer les rêves à l\'aide de capteurs, et de les visionner par la suite. Il serait relié grâce au réseau sans fil, la wifi. Les rêveurs et les autres utilisateurs pourraient ainsi visionner les rêves sur ordinateurs, tablettes, smartphones et tout objets connectés mais aussi les partager sur les réseaux sociaux');


    $articles[]=makeArticle('DWEAR', rand(100,500), 'MMI2016', 'images/dwear.jpg', rand(0,10), 'Le DWear est une tenue multi-transformations qui permet à son porteur d’obtenir un large choix de tenues personnalisables. Composée de 5 pièces (pantalon, tee-shirt, bonnet, bijou, chaussures) tissés en microfibres à intelligence programmable et évolutive, grâce à des capteurs et à un système électromagnétique, le DWear est capable de s\'adapter à l\'environnement et protéger son porteur des agressions extérieures (intempéries, beau temps etc). Muni d\'un système de commande vocale et d\'un capteur permettant de se connecter à son Smartphone ou à sa montre, le porteur du DWear pourra sélectionner la tenue de son choix en ignorant les recommandations des capteurs si il le souhaite. De plus, le DWear peut scanner vos vêtements et les enregistrer! Il est aussi muni de vêtements prédéfinis (simples, noirs, marqués du logo DPeach) comme par exemple une veste noir, si l\'on possède le T-Shirt DWear. Fini l\’attente dans les magasins, grâce à sa connexion Bluetooth ou par port USB (montre DWatch), vous achetez vos vêtements sur n’importe quel site partenaire, et vous les importez directement dans votre DWear. Idem, fini les valises pleines à craquer de vêtements quand vous partez en vacances, vous emportez votre DWear est vous êtes prêt ! Les avantages pour l\'utilisateur sont nombreux : un gain de temps important, un gain de place non négligeable et un large choix de tenue. C\'est la promesse des produits DWear. Tout leurs vêtements seront à portée de main!');
    $articles[]=makeArticle('Super Meet Box', rand(20,80), 'MMI2016', 'images/supermeetbox.jpg', rand(0,50), 'La Super Meet Box est une lunch box apportant des nouveautés sur trois axes différents : tout d\'abord sur la dimension pratique car elle permet de chauffer à la vapeur ou de réfrigérer les aliments qu’elle contient tout en préservant la qualité des ingrédients. Elle permet ensuite sur le plan nutritionnel d’analyser le contenu de la Box, pour en déduire notamment sa date de péremption, mais surtout l’ensemble des nutriments qu’il représente. Cette analyse peut être acheminée vers une application dédiée permettant de suivre son alimentation en fonction de ses besoins nutritionnels personnalisés. Enfin, la Super Meet Box rajoute une dimension sociale aux repas : via un réseau social, il est possible de rechercher des « Lunchers » possédant également ce produit. Le réseau social fonctionne grâce à un système de gamification : le Luncher est amené à rencontrer le plus de personnes possibles, à partager ses recettes, et à participer à des défis quotidiens : utiliser un tel ingrédient dans sa recette, coller le plus possible à ses propres besoins nutritionnels… La Super Meet Box est donc à la fois un produit et un service, qui offre au consommateur un objet pratique pour la vie de tous les jours et des opportunités pour optimiser ses habitudes.');
    $articles[]=makeArticle('Surftouch', rand(100,350), 'MMI2016', 'images/surftouch.jpg', rand(0,3), 'Le Surftouch est un plan de travail révolutionnaire. Pas le temps de cuisiner en sortant du travail ? Régime strict à respecter ? Aucune connaissance en cuisine ? Surftouch a été conçu par des ingénieurs français et allemands pour vous rendre la cuisine plus accessible. Endroit clé de la maison, cuisiner ne sera plus un calvaire. Le Surftouch vous accompagnera dans la confection de tous vos repas. Relié à internet, notre plan de travail connecté vous offrira une immense base de données de recettes allant des plus simples pour les amateurs, aux plus compliquées pour les passionnés et les professionnels. Il ne sera plus possible de rater quoi que ce soit, avec un guide vidéo pour chaque recette et des astuces de professionnels, le Surftouch est l’outil le plus complet que vous puissiez trouver à ce jour. Jamais faire la cuisine n’aura été si facile. Plus la peine de chercher quoi faire à manger ce soir ! Le Surftouch vous fait des propositions de recette en fonction de ce qui reste dans votre frigo et des préférences de chacun.');
    $articles[]=makeArticle('E-DiMens', rand(500,1000), 'MMI2016', 'images/edimens.jpg', rand(0,15), 'L’E-DiMens est un écran modulable d’une dimension de 21x12 cm extensible par hologramme pour ainsi atteindre une dimension maximale de 210x180 cm. Aussi souple et fin qu’une feuille de papier, il est facile à transporter n’importe où. En plus de disposer de toutes les fonctionnalités des tablettes et smartphones d’aujourd’hui, il est adapté à une multitude d’utilisations 2 sur 2 différentes : HUD (Affichage Tête Haute), station de travail, ordinateur, bracelet connecté, etc. La seule limite, c’est votre imagination ! Tout cela est rendu possible par une multitude de nanotechnologies et d’innovations ultra performantes intégrées dans le produit. Parmi ces technologies, on retrouve notamment le Li-Fi, un moyen de transmission très rapide utilisant la lumière, qui offre un débit 100 fois supérieur à l’ancienne génération Wi-Fi. Mais la technologie la plus révolutionnaire utilisée dans l’E-DiMens est le graphène. En effet, ce matériau ultra-conducteur offre à l’E-DiMens une autonomie d’environ 168h et permet une durée de rechargement par induction de seulement 90 secondes ! En somme, E-DiMens, est un écran modulable ultra performant d’une dimension géante, très facilement transportable et dont les possibilités d’utilisations sont quasi-infinies ! Il vous permettra de remplir un large panel de fonctionnalités, n’importe où, n’importe quand.');
    $articles[]=makeArticle('Head Play\'s', rand(75,300), 'MMI2016', 'images/headsplay.png', rand(0,9), 'C\'est une immersion plus prononcée dans le monde du jeu vidéo. Le but premier, c\'est tout d\'abord le réalisme (d\'apporter le plus possible de réalisme) Ensuite, le but est d\'amener le joueur dans un nouveau monde ; seul ou entre amis');
    $articles[]=makeArticle('Admirror', rand(1000,3000), 'MMI2016', 'images/admirror.jpg', rand(0,3), 'L’Admirror est un miroir high tech connecté, il permet de choisir et tester des tenues en se regardant dedans. Il existe 3 gammes. La première, nommée Admirror, permet de tester et choisir des tenues que l’on possède et que l’ordinateur a enregistré au préalable et également de tester des tenues que l’on peut commander sur le net ensuite. L’Admirror premium contient les mêmes aptitudes que l’Admirror auxquelles on ajoute la reconnaissance vocale ; l’ordinateur saura immédiatement qui il doit conseiller. Un logiciel prendra en compte la morphologie ainsi que la couleur de peau, des yeux et des cheveux afin de trouver ce qui va le mieux au client. Un logiciel intelligent conseiller stylistique créera pour vous un choix de garde-robe à la pointe de la mode. L’Admirror deluxe contient les mêmes aptitudes que l’Admirror premium auxquelles on ajoute la possibilité de tester du maquillage, des coiffures. De nombreux plugins seront disponibles pour améliorer encore les compétences de l’Admirror.');
    $articles[]=makeArticle('Bio Filter', rand(100,300), 'MMI2016', 'images/leaf.png', rand(0,15), 'Bio Filter est un filtre destiné aux voitures, camions, tracteurs, scooters, motos, quads. Celui-ci se place directement dans le pot d’échappement du véhicule. Bio Filter utilise la technique de la photosynthèse. La photosynthèse permet à une plante (arbre, algues ou même certaines bactéries) de synthétiser de la matière organique à l’aide de la lumière du soleil. Bio filter est donc constitué d’une fine membrane à base de plantes située dans le filtre. Des capteurs sont installés tout autour du filtre afin que ces plantes puissent percevoir et utiliser l’énergie lumineuse reçue du soleil. Situés à l’intérieur même du pot d’échappement, ces filtres seront directement actifs et assurerons l’épuration des gazes rejetés par le véhicule. Ce produit permettra aux constructeurs de soigner leur image en favorisant le développement durable et d’être innovant en respectant l’environnement, grâce aux atouts principaux du produit. Les particuliers bénéficieront d’un bonus écologique et seront eux aussi respectueux de l’environnement en utilisant ce produit.');
    $articles[]=makeArticle('TeleporTouch', rand(100,300), 'MMI2016', 'images/teleportouch.jpg', rand(0,15), 'En concevant l\'application TeleporTouch, notre objectif est d\'offrir un moyen de transport universel et accessible à tous, qui à long terme, remplacera une grande partie des moyens de transport actuels très polluants. Notre but est donc de faciliter la vie de tous, tout en préservant l\'environnement. Cette application cible les personnes qui voyagent souvent, les personnes qui souhaitent diminuer leur impact environnemental et les personnes intéressées par les nouvelles technologies. Le coeur de cible sera donc les jeunes actifs qui seront amenés à utiliser Teleportouch dans un cadre personnel ou professionnel.');
    $articles[]=makeArticle('Meet Hand', rand(150,500), 'MMI2016', 'images/meethand.jpg', rand(0,5), 'MeetHand est un gant révolutionnaire qui, grâce à ses connections neuronales, vous permet de franchir la frontière de votre imaginaire. Simple d’utilisation, il suffit de l’enfiler et de placer les capteurs du MeetHand sur votre tête. A partir de là il ne vous reste plus qu’à imaginer ce que vous voulez créer et la technologie avancée du MeetHand vous permettra de le réaliser. Par exemple vous avez en tête un paysage floral, une fois munis de votre crayon et de votre support le MeetHand va guider votre main pour la réalisa3on de ce dessin. Cela fonc3onne pour le dessin, pour la peinture, l’architecture etc. Bien que guide précieux pour vos créa3ons, le MeetHand peut-être voué à un appren3ssage pour différentes techniques artistiques. De plus l’écran présent sur le gant pourra vous aiguiller, vous donner des informa3ons et vous proposer différents styles graphiques selon votre convenance. D’un point de vue technique, le produit a une autonomie de 10 heures et est rechargeable avec le chargeur fourni.');
    $articles[]=makeArticle('VoiceRemote', rand(750,1500), 'MMI2016', 'images/voiceremote.jpg', rand(0,5), 'La VoiceRemote est une télécommande imaginé pour rendre la vie des utilisateurs douce et agréable. Le principe est plutôt simple , à l\'aide d\'une télécommande et de deux oreillettes connectées en Bluetooth ,La VoiceRemote va analyser et filtrer selon votre demande les fréquences "indésirable" comme les bruits de fond, le chien du voisin et même la belle mère à la voix stridente... Plus encore cet outil vous permets d\'isoler une fréquence et de faire en sorte que ce soit la seule chose que vous entendiez. Mais ce n\'est pas tout , la VoiceRemote peut être utilisé à des fins médical, bien qu\'il soit possible de supprimer ou d\'isoler des sons il est aussi possible de gérer leur volume, ce qui prend tout son sens quand on souffre de troubles de l\'audition. Il sera également possible de connecté plusieurs paires d\'oreillettes à une seule télécommande ce qui peut être pratique dans un cas de figure ou la fréquence indésirable est un bruit de fond. Le produit peut par exemple remplacer les casques anti-bruit sur les chantiers ou dans les usines. Nous avons donc joint l\'utile à l\'agréable grâce à ce produit révolutionnaire.');
?>
