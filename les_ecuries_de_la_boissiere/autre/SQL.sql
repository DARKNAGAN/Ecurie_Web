#------------------------------------------------------------
# Insertions de Données
#------------------------------------------------------------

INSERT INTO Cheval (nom,sexe,robe,type,race,proprietaire,age,imageCheval)
VALUES
('STENSON'   , 'MÂLE'   , 'ALEZANE' , 'CHEVAL DE SELLE','HAFLINGER'	,'CLUB', '7', './about_us_files/image/about_us/About_us_img01.jpg'),
('IL CANNETO', 'MÂLE'   , 'NOIR'    , 'CHEVAL DE SELLE','PERCHERON','CLUB', '4', './about_us_files/image/about_us/About_us_img02.jpg'),
('KAKAO'     , 'MÂLE'   , 'BLANCHE' , 'CHEVAL DE TRAIT','QUARTER HORSE','CLUB', '5', './about_us_files/image/about_us/About_us_img03.jpg'),
('KERTULIPE' , 'FEMELLE', 'PIE'     , 'CHEVAL DE SELLE','LUSITANIEN','CLUB', '3', './about_us_files/image/about_us/About_us_img04.jpg'),
('POUPEE'    , 'FEMELLE', 'BAIE'    , 'PONEY'			,'ESPAGNOLE','CLUB', '6', './about_us_files/image/about_us/About_us_img05.jpg'),
('URYKHAN'   , 'FEMELLE', 'BAIE'    , 'COBS'			,'FRISON','CLUB', '8', './about_us_files/image/about_us/About_us_img06.jpg'),
('URFIST'    , 'MÂLE'   , 'NOIR'    , 'CHEVAL DE SELLE','PUR SANG','CLUB', '10', './about_us_files/image/about_us/About_us_img07.jpg'),
('URANIE'    , 'FEMELLE', 'CREME'   , 'PONEY'			,'FRANCAIS','CLUB', '14', './about_us_files/image/about_us/About_us_img08.jpg'),
('VITAMINE'  , 'FEMELLE', 'BAIE'    , 'CHEVAL DE SELLE','ARABE','CLUB', '6', './about_us_files/image/about_us/About_us_img09.jpg'),
('GRISETTE'  , 'FEMELLE', 'GRISE'   , 'CHEVAL DE SELLE','HAFLINGER','CLUB', '7', './about_us_files/image/about_us/About_us_img10.jpg'),
('SUMMER'    , 'MÂLE'   , 'BAIE'    , 'PONEY'			,'SHETLAND','CLUB', '9', './about_us_files/image/about_us/About_us_img11.jpg'),
('OPHELIE'   , 'FEMELLE', 'ALEZANE' , 'CHEVAL DE SELLE','HAFLINGER','CLUB', '12', './about_us_files/image/about_us/About_us_img12.jpg'),
('SUCRE'     , 'MÂLE'   , 'NOIR'    , 'CHEVAL DE SELLE','HAFLINGER','CLUB', '10' , DEFAULT),
('DEEZER'    , 'MÂLE'   , 'PIE'     , 'PONEY'			,'CELTE','CLUB', '7', DEFAULT),
('DALTON'    , 'MÂLE'   , 'BLANCHE' , 'CHEVAL DE TRAIT','PUR SANG','CLUB', '3', DEFAULT),
('GALIA'     , 'FEMELLE', 'NOIR'    , 'PONEY'			,'LANDAIS','PENSION', '5', './about_us_files/image/about_us/About_us_img00.jpg'),
('HURICANE'  , 'MÂLE'   , 'BAIE'    , 'CHEVAL DE SELLE','PUR SANG','PENSION', '4', './about_us_files/image/about_us/About_us_img01.jpg'),
('JIVARO'    , 'MÂLE'   , 'ALEZANE' , 'PONEY'			,'POTTOK','PENSION', '7', './about_us_files/image/about_us/About_us_img02.jpg'),
('TEXANE'    , 'FEMELLE', 'PIE'     , 'CHEVAL DE SELLE'	,'FRANCAIS','PENSION', '8', './about_us_files/image/about_us/About_us_img03.jpg'),
('APELLA'    , 'FEMELLE', 'ALEZANE' , 'PONEY'			,'BOSNIAQUE','PENSION', '14', './about_us_files/image/about_us/About_us_img04.jpg'),
('VEGAS'     , 'MÂLE'   , 'GRISE'   , 'COBS'			,'PERCHERON','PENSION', '13', './about_us_files/image/about_us/About_us_img13.jpg'),
('ZIMBA'     , 'FEMELLE', 'BAIE'    , 'PONEY'			,'SHETLAND','PENSION', '9', './about_us_files/image/about_us/About_us_img14.jpg'),
('LANCÔME'   , 'FEMELLE', 'PIE'     , 'COBS'			,'PERCHERON','PENSION', '11', './about_us_files/image/about_us/About_us_img15.jpg'),
('TONERRE'   , 'MÂLE'   , 'NOIR'    , 'CHEVAL DE SELLE','HAFLINGER','PENSION', '12', './about_us_files/image/about_us/About_us_img00.jpg'),
('ROBERTNANOHORSE', 'MÂLE'   , 'ALESAN AUX CRINS ARGENTS', 'CHEVAL DE SELLE','AMERICAN WALKING PONEY','PENSION AU CLUB', '35', DEFAULT);




INSERT INTO CategorieArticle (libelle)
VALUES
('Equipement Cavalier'),
('Cheval au Travail'),
('Cheval au Repos');




INSERT INTO Article (description,libelle,prix,qtestock,imagearticle,idcategorie)
VALUES

('Conçu pour protéger le buste du cavalier contre les chocs en cas de chute. Ce gilet de protection est composé de plaques de mousse perforées favorisant l''aération. Les scratchs très adhérents garantissent maintien et sécurité. Il est idéal pour la pratique en club.',
'GILET DE PROTECTION ENFANT' ,42	, 37, './shop_files/image/shop/Shop_img21.jpg', 1 ),

('Conçu pour la cavalière de COMPETITION dans toutes les disciplines.Cette veste de concours apporte un grand confort au niveau des épaules grâce au composant bi-extensible. La coupe est ajustée. Elle dispose de 2 poches avec fermeture à glissière.',
'VESTE DE CONCOURS FEMME' ,69.95	, 8, './shop_files/image/shop/Shop_img27.jpg', 1 ),

('Conçu pour la cavalière de COMPETITION dans toutes les disciplines.Cette veste de concours apporte un grand confort au niveau des épaules grâce au composant bi-extensible. La coupe est ajustée. Elle dispose de 2 poches avec fermeture à glissière.',
'POLO MANCHES COURTES FEMME' ,12.50	, 15, './shop_files/image/shop/Shop_img28.jpg', 1 ),

('Conçu pour le cavalier enfant DÉBUTANT montant 1 à 2 fois par semaine par TOUS LES TEMPS.Confortable et agréable toute l''année grâce à sa matière bi-extensible.',	'PANTALON ENFANT' ,52.88	, 10, './shop_files/image/shop/Shop_img07.jpg', 1 ),

('Conçu pour le cavalier en COMPÉTITION dans toutes les disciplines par TOUS LES TEMPS.Ce pantalon à pinces en tissu microfibre et bambou procure un bon confort au cavalier. Les basanes en silicone apportent une très bonne adhérence en selle.',	
 'PANTALON CONCOURS HOMME' ,54.99	, 25, './shop_files/image/shop/Shop_img026.jpg', 1 ),
  
('Conçu pour protéger la tête des chocs en cas de chute du cavalier DÉBUTANT ou CONFIRMÉ montant 1 à 4 fois par semaine.Personnalisable à l’infini ! Le bonnet intérieur est amovible et lavable en machine.',
 'CASQUE ÉQUITATION C350' ,65.99	, 67, './shop_files/image/shop/Shop_img15.jpg', 1 ),

('Conçu pour protéger les mains du frottement des rênes, pour le cavalier DÉBUTANT montant 1 à 2 fois par semaine.Idéal pour pratiquer occasionnellement l''équitation (1 à 2 heures par semaine). Ce gant en tricot fin à picots permet de conserver une bonne accroche sur les rênes.'	,
 'GANTS ADULTE ET ENFANT SCHOOLING' ,	7	, 28, './shop_files/image/shop/Shop_img22.jpg', 1 ),

('Conçu pour le cavalier CONFIRMÉ montant 2 à 4 fois par semaine en EXTÉRIEUR par TOUS LES TEMPS.Très pratique avec son enfilage facilité par les parties élastiquées.',
 'BOOTS ADULTE SENTIER 800' ,110	, 93, './shop_files/image/shop/Shop_img19.jpg', 1 ),

('Conçu pour PROTÉGER le DOS du cheval contre les pressions exercées par la selle et PROTÉGER la SELLE en absorbant la sueur du cheval.
La matelassure à petits carreaux donne une excellente tenue à ce tapis.',
'TAPIS DE SELLE SCHOOLING TURQUOISE'	,27		, 25, './shop_files/image/shop/Shop_img24.jpg', 2 ),

('Conçu pour REPARTIR les pressions de la selle et AMORTIR les chocs sur le DOS du cheval.L''association gel et laine synthétique donne un bon effet amortissant et une excellente stabilité sous la selle.'	,
 'AMORTISSEUR DE DOS LAINE ET GEL ', 29.99		, 58, './shop_files/image/shop/Shop_img13.jpg', 2 ),

('Conçu pour Guider le cheval. La muserolle rend plus précise l''action de main du cavalier.Les rênes permettent au cavalier d''agir.Vendu avec rênes.',
 'FILET + RÊNES NOIR'  	, 20	, 15, './shop_files/image/shop/Shop_img11.jpg', 2 ),

('Conçu pour DÉCOUVRIR et PRATIQUER l''équitation en toute sécurité. Vendue équipée de ses étrivières et étriers.Son siège creux lui confère un grand confort et sensation de sécurité pour découvrir les joies de l''équitation sereinement. Nettoyage facile à l''eau claire. ',
'SELLE MIXTE SYNTHÉTIQUE ÉQUIPÉE CHEVAL'  		, 535	, 10, './shop_files/image/shop/Shop_img06.jpg', 2 ),

('Conçu pour nettoyer la robe du cheval non tondu.S''utilise après l''étrille sur toutes les parties du corps.'	,
'BOUCHON POILS DURS'  , 4.56		, 95, './shop_files/image/shop/Shop_img04.jpg', 3 ),

('Conçu pour chasser la poussière et lustrer le poils.
Brosse en bois certifié FSC respectueux de l''environnement et poils naturels. Poignée cuir pour un bon confort.'	,
'BROSSE DOUCE BOIS'	, 8		, 165, './shop_files/image/shop/Shop_img05.jpg', 3 ),

('Conçu pour curer et nettoyer les pieds du cheval.Idéal pour enlever la boue, le fumier, les cailloux. Petite brosse pour parfaire le nettoyage avant de graisser les pieds.'	,
 'CURE PIED COLORIS ALÉATOIRE'    ,2		, 40, './shop_files/image/shop/Shop_img09.jpg', 3 ),

('Conçu pour DECOLLER les poils souillés par la sueur, l''urine ou la boue séchée. ELIMINER les poils morts en période de mue.Idéale en hiver ou en période de mue pour les chevaux non tondus ou au pré. S''utilise uniquement sur les parties charnues (encolure, ventre, croupe).',
 'ETRILLE AMÉRICAINE'  ,5	, 38, './shop_files/image/shop/Shop_img14.jpg', 3 ),

('Sa doublure en polaire douce et moelleuse apporte du confort au cheval. Le mousqueton rapide sur la sous gorge permet de mettre le licol sans le dérégler. Vendue avec sa longe assortie de 2,5.',
 'LICOL PONEY ET CHEVAL'  , 26	, 5, './shop_files/image/shop/Shop_img12.jpg', 3 ),

('Conçu pour protéger le cheval au pré contre le froid et la pluie.Chaude, imperméable et respirante. Encolure montante. Tissu 1000 deniers Riptsop Diamond.',
 'COUVERTURE D''EXTÉRIEUR ALLWEATHER 6000 NOIR'  ,75.58	, 15, './shop_files/image/shop/Shop_img10.jpg', 3 ),

('Conçu pour PROMENER le cheval en main ou l''ATTACHER. S''utilise avec un licol.D''une longueur de 2m20, la longe est agréable à tenir en main grâce à son toucher doux et sa poignée. Mousqueton interchangeable pour plus de praticité.',
 'LONGE PONEY ET CHEVAL NOIR'  ,9.45	, 22, './shop_files/image/shop/Shop_img25.jpg', 2 ),
 
 ('Conçu pour DÉCOUVRIR et PRATIQUER l''équitation en toute sécurité. Vendue équipée de ses étrivières et étriers.
Son siège creux lui confère un grand confort et sensation de sécurité pour découvrir les joies de l''équitation sereinement. Nettoyage facile à l''eau claire.
Conçu pour DÉCOUVRIR et PRATIQUER l''équitation en toute sécurité. Vendue équipée de ses étrivières et étriers.
Son siège creux lui confère un grand confort et sensation de sécurité pour découvrir les joies de l''équitation sereinement. Nettoyage facile à l''eau claire. ',
 'SELLE MIXTE SYNTHÉTIQUE ÉQUIPÉE CHEVAL SYNT NOIR'  ,1000	, 1000, '', 2 );


INSERT INTO CompteEleve (dateenregistre,privilege,pseudo, prenom, nom, sexe, age, adresse, mdp, adressemail, galop,imageeleve)
VALUES
('2016-09-12'   ,'1',	'sa'   		, 'sa'		, 'pc' 		, 'HOMME','20'	, 'sa'				, '382e0360e4eb7b70034fbaa69bec5786' , 'sa@gmail.com' ,'0', './members_area_files/image/avatar/Avatar_img01.png'),
('2016-09-12'   ,'1',	'PAPI91'   , 'FLORIAN'	, 'ARBITA' 	, 'HOMME','17'	, '3 RUE PITI'		, '83ea007bfdd589f29b820552b3f94260' , 'PAPI@gmail.com'	,'0', './members_area_files/image/avatar/Avatar_img02.png'),
('2016-10-05'   ,'2',	'TATA85'	, 'JANNE'	, 'MORINA'  , 'FEMME','5'	, '78 RUE PARI'		, '01750feaaf112c40293ac49b658b12ab' , 'TATA@gmail.com'	,'1', './members_area_files/image/avatar/Avatar_img03.png'),
('2016-11-03'   ,'2',	'MODR4'    , 'DAVID'	, 'DAROP' 	, 'HOMME','45'	, '65 RUE PIORI'	, '81df18ab2fce0c63561642e298347e5b' , 'MODR@gmail.com'	,'4', './members_area_files/image/avatar/Avatar_img04.png'),
('2016-06-25'   ,'2',	'ALLOO6' 	, 'GEREMY'	, 'MILES'   , 'HOMME','14'	, '6 RUE NIOLO'		, '83ea007bfdd589f29b820552b3f94260' , 'ALLO@gmail.com'	,'2', './members_area_files/image/avatar/Avatar_img05.png'),
('2016-05-10'   ,'2',	'MAMA23'    , 'FLORIANE', 'BOLON'   , 'FEMME','25'	, '1 RUE ROB'		, '01750feaaf112c40293ac49b658b12ab' , 'MAMA@gmail.com'		,'1', './members_area_files/image/avatar/Avatar_img06.png'),
('2016-07-01'   ,'2',	'BIBI'   	, 'EMILIE'	, 'SIRANY'  , 'FEMME','6'	, 'MAISON DU CLOS'	, 'd74c404f01c1e3c127118a8c1fc81212' , 'BIBI@gmail.com'		,'0', './members_area_files/image/avatar/Avatar_img07.png'),
('2016-09-11'   ,'2',	'PIOUPIOU' , 'FLORA'	, 'CERINA' 	, 'FEMME','15'	, 'ALLE DU RUIS'	, '7b5550eae68b75c98a58881cb968c6ff' , 'PIOU@gmail.com'	,'0', './members_area_files/image/avatar/Avatar_img08.png'),
('2016-09-05'   ,'2',	'BANANA987', 'LUCY'		, 'CARELI'  , 'FEMME','18'	, '9 MER DU CIEL'	, '01750feaaf112c40293ac49b658b12ab' , 'BANA@gmail.com'	,'0', './members_area_files/image/avatar/Avatar_img09.png'),
('2016-09-30'   ,'2',	'RARA'  	, 'SOPHIE'	, 'BENIC'   , 'FEMME','26'	, 'CREUX DE L''HIRONDELLE'	, 'dc6accf0ee16c9dbf4daf2b81c1e7fd4' , 'RARA@gmail.com' ,'1', 
'./members_area_files/image/avatar/Avatar_img10.png'),
('2017-05-29'   ,'2',	'DARKY91'  	, 'JONHATAN'	, 'MOITILE' , 'HOMME','5'	, '198 AVENUE DU GENERAL'	, 'b54637201175346cc78ec20fa2718b2f' , 'darky@gmail.com'	,'2', './members_area_files/image/avatar/Avatar_img13.png'),
('2017-04-05'   ,'2',	'DAMI85'  	, 'THOMAS'	, 'NIGOLE' , 'HOMME','5'	, '35 RUE DE LA RIVIIERE'	, 'b2ac9acf20fa3711eb6c8b00734adbde' , 'darky@gmail.com'	,'1', DEFAULT),

('2017-02-25'   ,'2',	'FOFO36'  	, 'REMY'	, 'MINONY' , 'HOMME','5'	, '01 AVENUE DE L''IMPASSE DU CREUX'	, '71b14f0cefc1b25455c3ca7c22a80473' , 'FOFO@gmail.com'	,'3', './members_area_files/image/avatar/Avatar_img12.png'),
('2017-03-14'   ,'2',	'MIBO466'  	, 'OLIVIA'	, 'MOITILE' , 'FEMME','5'	, '36 BIS ALLEE DE L''ETANG DE MILLE LIEUX'	, '857692b439598675d6f89db000a1dc0a' , 'MIBO@gmail.com'	,'4', './members_area_files/image/avatar/Avatar_img11.png'),
('2017-01-09'   ,'2',	'BIIIBBBBOOPOPIL'  	, 'SAMADOUDOURELIE'	, 'KILOPANAPONIKAT' , 'HOMME','100'	, '325 RUE DE PARIS, 3 EME ARRONDISSEMENT , BRUXELLE'	, '52b5dd8f28c934b7a4a3fd3d67835cd8' , 'BIIIBBBBOOPOPIL@yahoo.com'	,'7', DEFAULT);



INSERT INTO Formateur (login, privilege, prenom, nom, age, galop, sexe, adressemail,mdp)
VALUES
('sa'    ,'1'	, 'sa'			, 'sa'		,'20', '2' , 'HOMME'	, 'sa@gmail.com'	 , 'P@ssword'),
('flo'   ,'1'	, 'FLORIAN'		, 'ARBITA'	,'18', '3' , 'HOMME'	, 'farbita@gmail.com'	 , 'AZERTY' ),
('jean'  ,'2'	, 'JEAN'		, 'DURILE'	,'25', '7' , 'HOMME' ,'jdurile@gmail.com'	 , '123' ),
('rem'   ,'2'	, 'REMY'		, 'LIBY'	,'43', '6' , 'HOMME' ,'rliby@gmail.com'	 , '321' ),
('soph'  ,'2'	, 'SOPHIA' 		, 'CERIA'	,'29', '8' , 'FEMME' ,'sceria@gmail.com'	 , 'qwerty' ),
('flo'   ,'2'	, 'FLORA' 		, 'DUPUIS'	,'36', '4' , 'FEMME' ,'fdupuis@gmail.com'	 , 'aqwzsx' ),
('meg'   ,'2'	, 'MEGANE' 		, 'CERIA'	,'29', '5' , 'FEMME' ,'sceria@gmail.com'	 , 'wxcvbn' ),
('domin' ,'2'	, 'DOMINIQUE'	, 'PLUTIE'	,'64', '7' , 'HOMME' ,'dplutie@gmail.com'	 , '2017' ),
('kev'   ,'2'	, 'KEVIN'    	, 'LOPIT'	,'35', '4' , 'HOMME' ,'klopit@gmail.com'	 , 'azerty123' ),
('mimi10','2'	, 'JONATHAN' 	, 'LIKY'	,'29', '8' , 'HOMME' ,'mimi@gmail.com'	 , 'tyu4u566' ),
('pilix' ,'1'	, 'BENJAMIN' 	, 'DOMINAK'	,'36', '4' , 'HOMME' ,'pilix@gmail.com'	 , 'gs12sfg' ),
('nathalia','2'	, 'OLIVIA' 		, 'XIJIRA'	,'29', '8' , 'FEMME' ,'nathalia@gmail.com'	 , 'bvc9d65er' ),
('titineau','2'	, 'DOMINIQUE'	, 'MANAPLA'	,'64', '7' , 'FEMME' ,'titineau@gmail.com'	 , '78hyh789' ),
('mimome'  ,'1'	, 'JEAN-PIERE'  , 'JUDUKI'	,'35', '9' , 'HOMME' ,'mimome@gmail.com'	 , 'vf54vfdv' ),
('BARIBOULBOPOPIL','2', 'SAMADOULOURELIE', 'KILOFANAPONIKAE'	,'100', '9' , 'FEMME' ,'BARIBOULBOPOPIL@yahoo.com'	 , 'F%F53&D96DF!FDS' );



INSERT INTO Cours (datecours,heuredebut,heurefin,ideleve,idformateur,idcheval)
VALUES
('2017-07-12'   , '11:00', '12:00' ,	1,	2,	3 ),
('2017-07-13'   , '9:00', '11:00'  ,	2,	3,	4 ),
('2017-07-14'   , '14:00', '16:00' ,	3,	1,	5 ),
('2017-07-15'   , '11:00', '12:00' ,	4,	3,	2 ),
('2017-07-13'   , '16:00', '17:00' ,	3,	2,	1 ),
('2017-07-12'   , '12:00', '14:00' ,	1,	2,	4 ),
('2017-07-12'   , '14:00', '16:00' ,	1,	3,	2 ),
('2017-07-13'   , '12:00', '13:00' ,	3,	1,	2 ),
('2017-07-14'   , '11:00', '15:00' ,	4,	2,	3 ),
('2017-07-13'   , '13:00', '14:00' ,	3,	2,	1 );






INSERT INTO Commentaire (sujet,datecommentaire,contenu,urlphoto,ideleve)
VALUES
('NOUVELLE MONTURE '   , 		'2016-09-12', 'je fais de l''équitation et j''ai un cheval en fond d''écrans﻿'	,DEFAULT,2 ),
('BIENVENUE AU NOUVEAU'   , 	'2016-09-12', 'C''est top que tu es défendu notre sport, merci à toi!﻿'	,DEFAULT,2 ),
('CONCOURS AU INTERESSER'   , 	'2016-09-12', 'Des gens qui font du dressage? Ou qui dressent des chevaux peu importe le but?'	,DEFAULT,2  ),
('STAGE DE CHEVAL'   , 			'2016-09-12', 'Du dressage ! Je vais modifier le titre !'	,DEFAULT,4  ),
('DEVELOPPER VOS COMPETENCE'   ,'2016-09-12', 'Ah chouette ! Présentez vos Loulous, les méthodes de travail'	,DEFAULT,3  ),
('DECROUVRIR UNE NOUVEL DISCIPLINE','2016-09-12', 'Je me suis intéressée au dressage quand j''ai vu les poneys de compet'	,DEFAULT,1  ),
('CONCOURS  CSO '   , 			'2016-09-12', 'Et j''ai aussi fait diverses rencontres qui me permettent et me permettront d''évoluer'	,DEFAULT,3  ),
('DECOUVERTE NATURE'   , 		'2016-09-12', 'moi je le monte pour mon plaisir personnel. '	,DEFAULT,7  ),
('NOUVELLE MEDAIL'   , 			'2016-09-12', 'Je suis cavalière depuis 15 ans, et j''ai toujours préféré le dressage'	,DEFAULT,4  ),
('PARTAGER UN BON MOMENT'   , 	'2016-09-12', 'depuis que j''ai mon cheval et que j''ai pu prendre conscience de son enorme potentiel dans ce domaine'	,DEFAULT,1  );



INSERT INTO TypeEvent (libelle)
VALUES
('Annimations')/*1*/,
('Attelage')/*2*/,
('CCE')/*3*/,
('Conférence')/*4*/,
('CSO')/*5*/,
('Débat')/*6*/,
('Dressage')/*7*/,
('Elevage')/*8*/,
('Endurance')/*9*/,
('Exposition')/*10*/,
('Formation')/*11*/,
('Horse ball')/*12*/,
('Polo')/*13*/,
('Porte Ouvertes')/*14*/,
('Randonnée')/*15*/,
('Spectacle équestre')/*16*/,
('Stages')/*17*/,
('Vente au enchères ')/*18*/;



INSERT INTO Event (descriptionevent,nomevent,imageevent,dateevent,lieuevent,idtype)
VALUES
('Du mardi 27 au jeudi 29 juin 2017 se déroulent les Journées de l''Elevage du Cheval et du Poney de Sport sur le site du Lycée Agricole Armand Fallières de Nérac dans le département du Lot et Garonne (47) en région Nouvelle Aquitaine. Organisées par l''Association des Eleveurs d''Anglo-Arabes et de Chevaux de Sport de Lot et Garonne, ces Journées de l''Elevage accueillent plus de 300 chevaux d''élevage et constituent un point de rencontre essentiel entre producteurs de chevaux et poneys de sport et acheteurs en provenance de tout le Grand Sud-Ouest. Les éleveurs trouvent des conditions idéales pour présenter leurs produits et les acheteurs apprécient le fait d''avoir l''opportunité de voir un grand nombre de chevaux de sport de qualité dans un environnement où tout est mis en oeuvre pour faciliter les transactions. La convivialité est aussi une des clés du succès de ces Journées de l''Elevage.',
 'Les Journées de l''Elevage du Cheval et du Poney','./event_files/image/event/Event_img21.jpg' , '2017-06-27 10:00:00' 	, 'Nérac',1),
 
('Du vendredi 23 au dimanche 25 juin 2017, la Société de Concours Hippiques de Pompadour, dans le département de la Corrèze (19) en région Nouvelle Aquitaine, organise un Concours de Dressage International avec au programme des épreuves de haut niveau comme celles du CDI3* mais aussi des épreuves ouvertes à de nombreuses catégories, enfants, juniors, séniors, jeunes chevaux, poneys...',
 'Concours de Dressage International'	, './event_files/image/event/Event_img22.jpg' , '2017-03-23 15:30:00'  , 'POMPADOUR ',7),
 
('Du jeudi 13 au dimanche 16 juillet 2017, le Jumping International de Grenoble Jarrie se déroule dans les belles installations du Club Hippique du Manoir sur la commune de Jarrie dans le département de l''Isère (38) en région Auvergne-Rhône-Alpes. Au programme un CSI2* et un CSI Amateur. L''entrée est libre, la restauration assurée, village exposants, espace dédié aux enfants. Plus d''informations sur le site du Club Hippique du Manoir.'	,
 'Jumping International de Grenoble Jarrie'    , './event_files/image/event/Event_img23.jpg' , '2017-07-13 09:45:00' 	, 'Jarrie',5),
 
('Le 26 mai 2017, les éditions Belin publient un nouvel ouvrage, le Bonheur à Cheval en 10 étapes indispensables pour monter en toute sécurité. Ecrit à quatre mains par Alain Bellanger, policier à cheval fort de vingt ans de brigade équestre et de plus de six cents débourrages, et par Sylvie Brunel, écrivain et géographe, mais aussi cavalière d''extérieur expérimentée, ce manuel se compose de dix étapes indispensables, progressives, faciles à mettre en œuvre, pour pouvoir progresser et faire progresser son cheval dans des conditions optimales. Il apporte des réponses aux difficultés que tout cavalier rencontre. Collection Technique Equestre, 19.90 €',
 'Nouvel ouvrage, le Bonheur à Cheval en 10 étapes' 	, './event_files/image/event/Event_img24.jpg' , '2017-05-26 10:00:00'  , 'ORVEAU',null),
 
('L''édition 2017 d''Equirando se déroule du vendredi 21 au dimanche 23 juillet à Bourg-en-Bresse dans le département de l''Ain (01) en région Auvergne Rhône-Alpes. L''Equirando est une manifestation du Comité National de Tourisme Équestre de la Fédération Française d''Équitation. C''est l''un des plus grands rassemblements européens de cavaliers et de meneurs pratiquant l''équitation de pleine nature avec ses 1500 participants venant de toute la France et de différents pays (Belgique, Italie, Suisse, Canada…). Elle tient son nom de la contraction d''Équitation et de Randonnée. Plus d''informations sur le site d''Equirando.'		, 
'Edition 2017 d''Equirando'    , './event_files/image/event/Event_img26.jpg' , '2017-07-21 19:00:00'  , 'Bourg-en-Bresse',15),

('Du jeudi 22 au dimanche 25 juin 2017, le Master Pro Elite et la sixième étape du Grand National de Saut d''Obstacles se déroule au Grand Parquet de Fontainebleau dans le département du Seine-et-Marne (77) en région Ile de France. Les meilleurs cavaliers Pro seront présents pour essayer de remporter un des titres de ces championnats de France 2017 dans les catégories Pro Elite, Pro 1, Pro 2, Pro 3, et cavalières. Village restauration et village exposants, entrée libre. Plus d''informations sur le site du Grand National de la FFE.'		, 
'Master Pro Elite et la sixième étape du Grand National de Saut d''Obstacles'   ,'./event_files/image/event/Event_img25.jpg' , '2017-06-22 09:00:00'  , 'Fontainebleau',5),

('Mardi 18 juillet 2017, l''Hippodrome de Bellerive à Vichy dans le département de l''Allier (03) en région Auvergne-Rhône-Alpes, accueille la septième étape du Défi du Galop de cette année. Le Défi du Galop a pour finalité, par le regroupement de certaines grandes épreuves régionales, et européennes de développer la promotion des « Grands Prix Régionaux » de Plat. Cette compétition richement dotée se déroulent sur 16 étapes, 13 réparties sur de grands hippodromes français et 3 sur des hippodromes européens en Suisse, Espagne et Allemagne. Cet événement est l''occasion pour les Hippodromes qui accueillent une étape d''offrir au public du sport de haut niveau et des animations conviviales. Plus d''informations sur le site du Défi du Galop.'				, 
'DEFI DU GALOP A VICHY'    		, './event_files/image/event/Event_img28.jpg' , '2017-07-18 09:00:00'  , 'Vichy',1),

('Du 19 juillet au 16 août 2017, Sabrina Lepienne et sa troupe, Les Enfants de Balaha, présentent leur nouveau spectacle, Rapsodie Tzigane à la Gaubertière, commune de Priaires dans le département des Deux-Sèvres (79) en région Nouvelle Aquitaine... Tous les mercredis et le samedi 29 juillet à 21 h 30, embarquez au rythme du swing manouche des Musiciens avec cette joyeuse Troupe dans un univers coloré et romanesque, où grandes joies et petits tracas guident le pas des Chevaux et touchent le cœur des Hommes. L’étonnante chorégraphe Sabrina Lepienne et sa Troupe vous invitent à un voyage inoubliable entre culture tzigane et art équestre. Un moment à partager en Duo, en Famille ou entre Amis. Tarifs, enfants de moins de 3 ans gratuit, de 4 à 11 ans 6.00 €, adultes 12.00 €. Informations et réservations 0660 726 654 ou 0983 651 055'		, 
'RAPSODIE TZIGANE AVEC LES ENFANTS DE BALAHA A PRIAIRES', './event_files/image/event/Event_img27.jpg' , '2017-09-19 07:30:00'  , 'Gaubertière',16),

('Du dimanche 2 avril au dimanche 5 novembre 2017, le Domaine de Chantilly dans le département de l''Oise (60) en région Hauts de France propose son nouveau spectacle. Les cavalières des Grandes Écuries vous transportent dans un nouvel univers... Métamorphoses du temps, des âmes, détournements d’objets, transformations équestres… chaque numéro mêlant chevaux, danse ou encore ombres. Cette création artistique originale présente des numéros dont les musiques ont été spécialement composées aux rythmes des pas des chevaux de Chantilly. Passage, piaffé, pas espagnol, pirouettes, cabrioles, changements de pied au temps, tous les airs de haute école composent ce spectacle empreint de poésie et d’espiègleries. Rythme, émotions, sensations accompagnent le spectateur dans cette composition d’un genre nouveau. Métamorphoses en quelques chiffres : 3 musiciens, 7 cavalières, 1 danseur, 15 chevaux, 6 poneys, 2 ânes Plus d''informations sur le site des Grandes Ecuries du Domaine de Chantilly.'	, 
'Métamorphoses aux Grandes Ecuries de Chantilly'  	, './event_files/image/event/Event_img29.jpg' , '2017-04-02 11:00:00'  , 'Chantilly',16),

('Du jeudi 29 juin au dimanche 2 juillet 2017, l''Association Maurice Besson organise le Jumping International du Loiret aux Ecuries Pierre de France à Sandillon dans le département du Loiret (45) en région Centre-Val-de-Loire. Au programme, des épreuves de saut d''obstacles internationales CSI2*, CSI1* et CSI Amateur, mais également des épreuves nationales pour les catégories Pro et Amateur. Village restauration et village exposants, l''entrée est libre. Plus d''informations sur le site des Ecuries Pierre de France.', 
'Jumping Inter National de Sandillon'  	, './event_files/image/event/Event_img30.jpg', '2016-12-30 15:00:00'  , 'Sandillon',5),

('Du jeudi 13 au dimanche 16 juillet 2017, 7ème édition du Festival des Chevaux du Sud aux Saintes-Maries-de-la-Mer dans le département des Bouches-du-Rhône (13) en région Provences-Alpes-Côte d''Azur. Le Festival du livre et du film équestre, Les Chevaux du Sud, propose aux amateurs, passionnés, novices, curieux, professionnels mais aussi à tous ceux qui sont simplement de passage aux Saintes-Maries-de-la-mer durant cette Féria du Cheval, de découvrir le monde du cheval dans toutes ses dimensions culturelles et festives. Le thème de cette année raconte des histoires d’enfants et de chevaux… Des histoires de chevaux qui permettent aux enfants de rejoindre l’école , des histoires de chevaux qui nous donnent des leçons, des chevaux à l’école, des chevaux qui travaillent, qui voyagent, qui guérissent, qui transmettent ou qui font le spectacle ! Des chevaux héros de la littérature, des chevaux qui font leur cinéma … Plus d''informations sur le site des Chevaux du Sud.', 
'Les Chevaux du Sud'    , './event_files/image/event/Event_img31.jpg' , '2017-07-13 17:00:00'  , 'Saintes-Maries-de-la-Mer',10),

('Du mercredi 28 juin au dimanche 2 juillet 2017, les Attelages de L''Yonne organisent sur la commune de Chemilly-sur-Serein à côté de Chablis dans le département de l''Yonne (89) un important Concours d''Attelage. Au programme des épreuves Internationales CAI3* et CAI2* pour 1, 2 ou chevaux et 1, 2 ou 4 poneys. L''organisation et le lieu de ce bel événement sont de grande qualité et le public nombreux à assister aux épreuves dont l''accès est gratuit ainsi que les animations. Plus d''informations sur la page Facebook du Concours d''Attelage de Chablis.', 
'Concours d''Attelage International de Chablis'   ,'./event_files/image/event/Event_img32.jpg' , '2017-04-28 19:00:00'  , 'Chemilly-sur-Serein',2),

('Avec le Pacte d''Amitié de Penny au Poney Club, la Championne Olympique Pénélope Leprévost, se lance dans l''écriture. C''est le premier ouvrage d''une série de huit publié aux éditions Michel Lafon pour le plus grand bonheur des jeunes lecteurs à partir de 6 ans.'				, 
'Penny au Poney Club avec Pénélope Leprévost'    		, './event_files/image/event/Event_img35.jpg' , '2017-02-15 13:00:00'  , 'Orveau',null),

('Samedi 24 et dimanche 25 juin 2017, l''Ecurie de Minuit à Lignières dans le département du Cher (18) en région Centre Val de Loire, organise au Pôle du Cheval et de l''Âne, un important concours d''endurance équestre. Au programme des épreuves internationales, CEI3*, CEI2*, CEI1* et CEI Jeunes chevaux sur des distances de 80 à 160 km et des épreuves nationales dont le Master d''Endurance. L''entrée est libre, village restauration. Plus d''informations sur le site du Pôle du Cheval et de l''Âne de Lignières.'	, 
'ENDURANCE EQUESTRE INTERNATIONALE A LIGNIERES', './event_files/image/event/Event_img33.jpg' , '2017-06-24 10:30:00'  , 'Lignières',9),

('Du vendredi 16 au dimanche 18 juin 2017, le monde de l''équitation se retrouve pour les finales des Championnats de France de Horse-Ball. Pour la 10ème année consécutive, le Haras de Jardy, dans le départemental des Hauts-de-Seine (92) en région Île-de-France accueille plus de 600 cavaliers et leurs chevaux ainsi qu’un très large public pour participer à ces finales du Championnats de France de Hors-Ball de la saison 2016-2017. Les équipes en compétitions n’auront qu’un seul objectif, remporter les plus prestigieux trophées de la discipline ! Restauration, entrée libre. Plus d''informations sur le site de Horse-Ball.org.'	, 
'Finales du Championnat de France de Horse-Ball Pro'  	, './event_files/image/event/Event_img15.jpg' , '2017-04-02 15:30:00'  , 'Jardy',12),


('Le week-end du 10 et 11 Avril, le Grand Parquet sera réservé aux cavaliers franciliens avec la chasse le samedi et le Grand Prix le dimanche pour le Championnat Régional Amateur de CSO. Le cumul des points de ces deux journées permettra d’effectuer le classement du Championnat Régional.De l’amateur 2 à l’amateur Elite, les cavaliers engagés pourront compter sur de belles dotations avec des cadeaux toujours plus beaux grâce à l’ensemble de nos partenaires.'	, 
'Conours d''Amateur , Cycles Libre et Pro', './event_files/image/event/Event_img34.jpg' , '2017-04-10 8:30:00'  , 'Orveau',5),


('Le Grand Parquet sera réservé aux cavaliers franciliens avec la chasse le samedi et le Grand Prix le dimanche pour le Championnat Régional Amateur de CSO. Le cumul des points de ces deux journées permettra d’effectuer le classement du Championnat Régional.De l’amateur 2 à l’amateur Elite, les cavaliers engagés pourront compter sur de belles dotations avec des cadeaux toujours plus beaux grâce à l’ensemble de nos partenaires.'	, 
'Conours d''Amateur, Professionnel d''équitation en équipe , Cycles Libre ', DEFAULT , '2017-01-10 9:35:00'  , 'Orveau',5);

