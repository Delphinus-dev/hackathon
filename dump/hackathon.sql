-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Oct 30, 2019 at 08:05 PM
-- Server version: 8.0.15
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `classement`
--

CREATE TABLE `classement` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `complements`
--

CREATE TABLE `complements` (
  `id` int(11) NOT NULL,
  `id_api` int(11) NOT NULL,
  `acteur` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `personnage` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `resume` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complements`
--

INSERT INTO `complements` (`id`, `id_api`, `acteur`, `personnage`, `resume`) VALUES
(1, 1, 'Alex Wolff', 'Peter', 'Suite à la mort de sa mère malade mentale, la famille de Annie cherche le réconfort à tout prix, jusqu\'à flirter avec les sciences occultes et provoquer des événements liés au passé de leur famille.'),
(2, 2, 'Lupita Nyong\'o', 'Adelaide Wilson', 'Pendant des vacances familiales tranquilles à la campagne, ils reçoivent la visite de leurs doubles maléfiques qui viennent semer la terreur'),
(3, 3, 'Jada Pinkett Smith', 'Maureen', 'Deux ans après la première série de meurtres, Sydney s\'acclimate à peine à la vie d\'étudiante quand un nouveau porteur du masque sème la terreur.'),
(4, 4, 'Liev Schreiber', 'Cotton Weary', 'Sidney et ses amis visitent le plateau du prochain film Stab 3, basé sur les meurtres de Woodsboro, quand un nouveau tueur porteur du masque sème la panique.'),
(5, 5, 'Lucy Hale', 'Sherrie', '10 ans ont passé, Sidney Prescott a retrouvé goût à la vie grâce à son métier d\'autrice, mais un nouveau tueur sanguinaire vient bouleverser sa vie.'),
(6, 6, 'Katie Featherston', 'Katie', 'Un jeune coule de classe moyenne pensait trouver la tranquilité dans une banlieue pavillonnaire, mais une présence démoniaque vient déranger leur sommeil.'),
(7, 7, 'Devon Sawa', 'Alex Browning', 'Après la vision terrifiante dun crash aérien tuant toute a clase, un adolescent évite l\'accident. Mais la mort ne les a pas oubliés.'),
(8, 8, 'Ali Larter', 'Clear Rivers', 'Kimberley a la vision d\'un violent accident sur l\'autoroute, elle arrête le traffic pour l\'empêcher. Mais la mort n\'a pas oublié ceux qui devaient mourir.'),
(9, 9, 'Mary Elizabeth Winstead', 'Wendy Christensen', 'Des étudiants ont échappé à leur destin funeste : \'un grave accident sur des montagnes russes. Mais la mort ne les a pas oublié.'),
(10, 10, 'Bobby Campo', 'Nick', 'Suite à une prémonition, un jeune homme évite à des pilotes automobiles une mort violente. Mais la mort en a décidé autrement et vient collecter son dû.'),
(11, 11, 'Nicholas D\'Agosto', 'Sam', 'Ils ont évité leur destin funeste sur un pont suspendu. Mais la mort en a décidé autrement et réclame son dû.'),
(12, 12, 'Patrick Wilson', 'Josh Lambert', 'Après un accident mystérieux dans leur grenier, leur fils tombé dans le coma est la proie d\'un esprit maléfique.'),
(13, 13, 'Vera Farmiga', 'Kate', 'Après la perte de leur bébé, le couple adopte une fillette de 9 ans qui n\'est pas aussi innocente qu\'elle en a l\'air.'),
(14, 14, 'Katie Featherston', 'Katie', 'Après une tentative de cambriolage, une famille installe des caméras de surveillance dans leur maison. Mais finalement pas d\'intrus, c\'est la maison qui semble possédée...'),
(15, 15, 'Manuela Velasco', 'Ángela', 'Reporter et cameraman suivent une équipe de pompiers en plein travail de auvetage dans un immeuble, quand ils se retrouvent tous enfermés dans le bâtiment, à la merci de morts-vivants.'),
(16, 16, 'Jonathan D. Mellor', 'Dr. Owen', 'Un médecin du travail et le RAID espagnol tentent d\'infiltrer l\'immeuble maudit qui est actuellement en quarantaine.'),
(17, 17, 'Tobin Bell', 'Jigsaw', '2 hommes qui ne se connaissent pas se réveillent dans une cellule. Ils vont vite comprendre qu\'ils sont les victimes du jeu malsain d\'un tueur en série.'),
(18, 18, 'Tobin Bell', 'Jigsaw', 'Un inspecteur et son équipe tentent de sauver 8 victimes de Jigsaw retenus en otage dans une usine.'),
(19, 19, 'Tobin Bell', 'Jigsaw', 'Jigsaw kidnappe un médecin pour rester en vie.'),
(20, 20, 'Tobin Bell', 'Jigsaw', 'Jigsaw est mort, mais pour sauver deux de ses collègues, le lieutenant Rigg doit devenir la marionnette d\'un nouveau tueur.'),
(21, 21, 'Tobin Bell', 'Jigsaw', 'Après la mort de Jigsaw, Mark Hoffman est devenu un héros. Méfiant, l\'agent Strahm va fouiller son passé, pendant qu\'un groupe de personnes ets la cible d\'un nouveau tueur qui les soumet à des tests sanguinaires.'),
(22, 22, 'Tobin Bell', 'Jigsaw', 'L\'agent Strahm est mort, et l\'agent du FBI Erickson se rapproche de Hoffman. Pendant ce temps deux agents en assurance se retrouvent embarqués dans le jeu sanguinaire de Jigsaw.'),
(23, 23, 'Tobin Bell', 'Jigsaw', 'Bobby Dagen devient le gourou d\'un groupe de survivants de Jigsaw, et il va faire s\'abbatre sur eux une nouvelle terreur.'),
(24, 24, 'Choi Min‑sik', 'Kyung‑Chul', 'Soo-hyun, jeune agent des services secrets sud-coréen, se lance à la poursuite du tueur en série qui a tué sa fiancée alors enceinte, avec en tête un plan de vengeance aussi diabolique que l\'est le criminel avec ses victimes.'),
(25, 25, 'Michael Bailey Smith', 'Pluto', 'Dans un désert loin de toute civilisation, une famille est victime de canibales mutants.'),
(26, 26, 'John Saxon', 'Lt. Thompson', 'L\'esprit monstrueux d\'un tueur d\'enfant vient hanter les rêves des enfants dont les parents ont causé sa mort.'),
(27, 27, 'Kodi Smit-McPhee', 'Owen', 'Un jeune homme victime de harcèlement scolaire devient ami avec une jeune vampire qui vit en secret avec son gardien.'),
(28, 28, 'Chris Messina', 'Detective Bowden', 'Une de ces personnes coincées dans un ascenseur est en réalité le Diable.'),
(29, 29, 'Kurt Russell', 'MacReady', 'Une équipe de chercheurs en Antarctique est la cible d\'un alien métamorphe.'),
(30, 30, 'Patrick Fabian', 'Cotton Marcus', 'Un ministre évangélique accepte que son dernier exorcisme soit filmé.'),
(31, 31, 'Amber Heard', 'Kristen', 'Une jeune fille internée de force est terrorisée par un fantôme.'),
(32, 32, 'Timothy Olyphant', 'David', 'Un jeune couple se retrouve bloqué dans un village perdu en quarantaine après qu\'un crash d\'avion ait diffusé un virus mystérieux.'),
(33, 33, 'Drew Barrymore', 'Casey Becker', 'Un an après le meurtre de sa mère une jeune fille est terrorisée par un tueur masqué qui s\'inspire de films d\'horreur pour décimer ses amis.'),
(34, 34, 'Sarah Butler', 'Jennifer', 'Après avoir été laissée pour morte dans une cabane en forêt, elle sème la vangeance.'),
(35, 35, 'Belén Rueda', 'Julia Levin', 'Julia perd peu à peu la vue, alors qu\'elle enquête sur le mystérieux meurtre de sa soeur.'),
(36, 36, 'Julianne Moore', 'Cara Harding', 'La psychiatre Cara Harding est spécialisée dans l’étude des tueurs en série. Son père, lui-même psychiatre de renom, lui soumet le cas étrange d\'Adam, patient atteint de schizophrénie. Après sa première entrevue, son père décide de lui montrer qu\'Adam a plusieurs personnalités dont David, Wesley, etc.'),
(37, 37, 'Warren Christie', 'Ben Anderson', 'La découverte de bandes vidéos secrètes révèle que deux astronautes avaient été envoyés sur la Lune, et pourquoi il n\'en sont jamais revenus.'),
(38, 38, 'Melissa Joan Hart', 'Kelley', '9 personnes kidnappées sont forcées à trouver les liens entre eux alors qu\'un des leurs est assassiné toutes les 10 minutes.'),
(39, 39, 'Alan Van Sprang', 'Sarge', 'Les résidants d\'une île d\'Amérique du Nord combattent une épidémie zombie tout en espérant un antidote pour sauver leurs proches devenus morts-vivants.'),
(40, 40, 'Hayden Christensen', 'Luke', 'La population de Detroit a été presque entièrement décimée. Quand le jour se lève, les survivants découvre que le Mal s\'attaque à la ville.'),
(41, 41, 'Zoé Félix', 'Carole', 'Un groupe de médecins bénévoles au Kosovo sont kidnappés par un groupe de traficants d\'organes.'),
(42, 42, 'Laetitia Casta', 'Suzanne', 'En 1922, une jeune écrivaine partie à la campagne pour écrire un roman se retrouve victime de cauchemars et hallucinations terrifiants.'),
(43, 43, 'Ellen Burstyn', 'Chris MacNeil', 'Sa fille étant possédée par un dangereux démon, elle appelle a l\'aide deux prêtres.'),
(44, 44, 'Cécile Breccia', 'Pregnant Woman', 'Lors de leur dernier jour d\'entraînement dans le désert, ils se retrouvent attaqués par une horde de mutants.'),
(45, 45, 'Christa Théret', 'Emma Valeyre', 'Un groupe d’amis prend la route pour passer le week-end dans le village de Ruiflec. Arrivés sur place, certains disparaissent mystérieusement.'),
(46, 46, 'Cristina Rosato', 'Michelle Harris', '5 américains rentrent chez eux après avoir fêté un mariage au Canada. Deux officiers contrôlent leur identité à la douane.'),
(47, 47, 'Claude Legault', 'Dr. Bruno Hamel', 'Un docteur kidnappe l\'homme qui a violé, torturé et assassiné sa fille.'),
(48, 48, 'Razane Jammal', 'Salama', 'Aux Emirats Arabes, un jeune couple qui rentre de voyage découvre que leur maison a été construite sur un site hanté.'),
(49, 49, 'Florencia Colucci', 'Laura', 'Enfermée dans la maison de vacances familiale, elle est incapable de contacter l\'extérieur pour appeler à l\'aide.'),
(50, 50, 'Tatyana Kanavka', 'Evangeline Broussard', 'Un groupe de jeunes qui se rend à une soirée Halloween se retrouve face à un groupe de démons.'),
(51, 51, 'Josie Ho', 'Cheng Lai Sheung', 'Pour continuer à vivre dans la maison de ses rêves, elle doit ruer tous ses nouveaux voisins.'),
(52, 52, 'Hadewych Minis', 'Christine', 'À 9 ans, Lisa découvre que sa nouvelle amie lugubre est en réalité le fantôme de la jumelle morte de sa mère.'),
(53, 53, 'Joel David Moore', 'Ben', 'Un groupe de touriste participe à la visite d\'un marais hanté à la Nouvelle Orléans.'),
(54, 54, 'Danielle Harris', 'Marybeth Dunstan', 'Marybeth revient au marais accompagnée de chasseurs pour se vanger de Victor Crowley'),
(55, 55, 'Yeong-hie Seo', 'Kim Bok-nam', 'Claire vient de perdre son frère Michel. Ce dernier s\'est tiré une balle dans la tête dans la propriété que Claire et son mari Benoît vont rénover pour la mettre en vente. Cependant, les deux époux ne semblent pas être seuls dans la maison...'),
(56, 56, 'Seo Young-hee', 'Bok-nam', 'Hae-won est témoin d\'une agression. Au même moment, elle a des problèmes au travail. Elle se voit alors obligée de prendre des vacances et décide de se rendre sur une petite île isolée appelée « Moodo ».'),
(57, 57, 'Layton Matthews', 'Morbius', 'Que se passe-t-il si vous vous faites tatouer une Ouija Board.'),
(58, 58, 'Andrew Howard', 'Andrew', '3 captifs sont enchaînés par un dangereux psychopathe.'),
(59, 59, 'Ingrid Bolsø Berdal', 'Jannicke', 'Jannicke, Morten, Eirik, Mikael et Ingunn sont cinq jeunes Norvégiens qui décident de partir en vacances dans les montagnes de Jotunheimen, afin de pouvoir faire du snowboard.'),
(60, 60, 'Ingrid Bolsø Berdal', 'Jannicke', 'Jannicke Berdal, la seule survivante du massacre de l\'hiver 2006, est retrouvée par un jeune homme et transportée dans un hôpital de la région. À son réveil, elle raconte ce qui s\'est passé à ce fameux hôtel abandonné, mais la police a du mal à la croire…'),
(61, 61, 'Ida Marie Bakkerud', 'Hedda', 'La vie très violente du tueur qu\'a affronté Jannicke à deux reprises, avant son arrivée à l’hôtel.'),
(62, 62, 'Marc Zammit', 'Doug', 'En 1978, le crash sur Terre d\'un météorite libère un virus. 30 ans plus tard le virus revient.'),
(63, 63, 'Robert Englund', 'Robert', 'Un groupe de jeunes individus fort éduqués et fortunés pénètre dans un espace confiné (une tour de verre typique de New York) d\'où ils ne peuvent pas s\'échapper et où ils seront confrontés à un \"puissant ennemi\" qui souhaite les anéantir.'),
(64, 64, 'Erol Gedik', 'Berk', 'Ahmet organise une séance photo dans une ancienne fabrique de bougies. Ce qu\'il ne sait pas, c\'est que cette usine a été le théâtre de nombreuses disparitions dans le passé. Fermé suite à de mystérieux incendies, ce terrible bâtiment n\'a pas livré tous ses mystères... Ahmet et son modèle, Berk, vont le découvrir à leur dépens...'),
(65, 65, 'Andreas Vaehi', 'Chad Fox', 'Deux pom-pom girls font de l\'auto-stop avec deux beaux garçons mais sont vite capturés par une famille de Suédois violents.'),
(66, 66, 'Jack Nicholson', 'Jack Torrance', 'Une famille se rend dans un hôtel isolé pour l’hiver, où une présence sinistre inspire le père dans la violence, tandis que son fils psychique voit d’horribles pressentiments du passé et du futur.'),
(67, 67, 'Anthony Perkins', 'Norman Bates', 'Une secrétaire de Phoenix détourne quarante mille dollars du client de son employeur, part en fuite et s’installe dans un motel isolé tenu par un jeune homme sous la domination de sa mère.'),
(68, 68, 'Sarah Polley', 'Ana', 'Une infirmière, un policier, un jeune couple marié, un vendeur et d’autres survivants d’un fléau mondial produisant des zombies agressifs et carnivores se réfugient dans un méga centre commercial du Midwest.'),
(69, 69, 'Duane Jones', 'Ben', 'Un groupe déréglé de Pennsylvaniens se barricade dans une ancienne ferme pour rester à l\'abri d\'une race de monstres assoiffés de sang et carnivores qui ravagent la côte est des États-Unis.'),
(70, 70, 'Sissy Spacek', 'Carrie', 'Carrie White, une adolescente timide et sans amis qui est protégée par sa mère dominatrice et religieuse, déchaîne ses pouvoirs de télékinésie après avoir été humiliée par ses camarades de classe lors de son bal de fin d\'année.'),
(71, 71, 'Max Schreck', 'Graf Orlok', 'Le vampire Count Orlok exprime son intérêt pour une nouvelle résidence et l\'épouse de l\'agent immobilier Hutter.'),
(72, 72, 'Rod Taylor', 'Mitch Brenner', 'Un riche socialiste de San Francisco poursuit un petit ami potentiel dans une petite ville du nord de la Californie qui prend lentement la tournure de l\'étrange quand des oiseaux de toutes sortes commencent soudain à attaquer les gens.'),
(73, 73, 'Morjana Alaoui', 'Anna', 'La quête de vengeance d\'une jeune femme contre les personnes qui l\'ont kidnappée et tourmentée alors qu\'un enfant l\'entraîne avec son amie victime d\'abus sexuel dans un terrifiant voyage dans un enfer de dépravation.'),
(74, 74, 'Robert Kerman', 'Professor Harold Monroe', 'Lors d\'une mission de sauvetage dans la forêt amazonienne, un professeur découvre le film perdu filmé par une équipe de documentaires disparue.'),
(75, 75, 'Heather Donahue', 'Heather Donahue', 'Trois étudiants en cinéma disparaissent après avoir voyagé dans une forêt du Maryland pour tourner un documentaire sur la légende locale de Blair Witch, ne laissant que leurs images.'),
(76, 76, 'Bruce Campbell', 'Ashley \'Ash\' J. Williams', 'Cinq amis se rendent dans une cabane dans les bois, où ils relâchent sans le savoir des démons possédant de la chair.'),
(77, 77, 'Craig T. Nelson', 'Steve Freeling', 'La maison familiale est hantée par une foule de fantômes démoniaques.'),
(78, 78, 'Jack Nance', 'Henry Spencer', 'Henry Spencer tente de survivre dans son environnement industriel, sa petite amie en colère et les hurlements insupportables de son nouveau-né mutant.'),
(79, 79, 'Tim Robbins', 'Jacob', 'Dans le deuil de son enfant mort, un ancien combattant hanté de la guerre du Vietnam tente de découvrir son passé tout en souffrant d\'un grave cas de dissociation. Pour ce faire, il doit déchiffrer la réalité et la vie de ses propres rêves, illusions et perceptions de la mort.'),
(80, 80, 'Andrew Graves', 'Warren', 'Quatre semaines après la propagation d\'un mystérieux virus incurable à travers le Royaume-Uni, une poignée de survivants tentent de trouver refuge.'),
(81, 81, 'Rose Byrne', 'Rose Byrne', 'Six mois après que le virus de la rage ait été infligé à la population de Grande-Bretagne, l\'armée américaine aide à sécuriser une petite zone de Londres pour permettre aux survivants de se repeupler et de recommencer. Mais tout ne se passe pas comme prévu.'),
(82, 82, 'Patrick Wilson', 'Josh Lambert', 'Les Lamberts croient avoir vaincu les esprits qui hantaient leur famille, mais ils découvrent rapidement que le mal n\'est pas vaincu si facilement.');

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id` int(11) NOT NULL,
  `API` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `francais` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id`, `API`, `francais`) VALUES
(1, 'Canada', 'canadien'),
(2, 'French', 'français'),
(3, 'Germany', 'allemand'),
(4, 'Hong_Kong', 'de Hong-Kong'),
(5, 'Italy', 'italien'),
(6, 'Netherlands', 'hollandais'),
(7, 'Norway', 'norvégien'),
(8, 'South_Korea', 'de Korée du Sud'),
(9, 'Spain', 'espagnol'),
(10, 'Sweden', 'suédois'),
(11, 'Turkey', 'turc'),
(12, 'United_Kindgom', 'anglais'),
(13, 'United_States', 'américain'),
(14, 'Uruguay', 'uruguayen');

-- --------------------------------------------------------

--
-- Table structure for table `pipeau`
--

CREATE TABLE `pipeau` (
  `id` int(11) NOT NULL,
  `indice` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classement`
--
ALTER TABLE `classement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complements`
--
ALTER TABLE `complements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pipeau`
--
ALTER TABLE `pipeau`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classement`
--
ALTER TABLE `classement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complements`
--
ALTER TABLE `complements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pipeau`
--
ALTER TABLE `pipeau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
