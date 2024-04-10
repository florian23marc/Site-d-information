--
-- Structure de la table `navbar option 1`
--

CREATE TABLE `navbar` (
  `id` int NOT NULL,
  `icon_i24` varchar(255) NOT NULL,
  `important_subject` varchar(255) NOT NULL,
  `world_subject` varchar(255) NOT NULL,
  `money_subject` varchar(255) NOT NULL,
  `analyse` varchar(255) NOT NULL,
  `complement1` varchar(255) NOT NULL,
  `complement_icon1` varchar(255) NOT NULL,
  `complement2` varchar(255) NOT NULL,
  `complement_icon2` varchar(255) NOT NULL,
  `complement3` varchar(255) NOT NULL,
  `complement_icon3` varchar(255) NOT NULL

);

--
-- Structure de la table `navbar option 2`
--

CREATE TABLE `navbar` (
  `id` int NOT NULL,
  `icon_i24` varchar(255) NULL,
  `subject` varchar(255) NULL,
  `complement` varchar(255) NULL
);


-- ----------------------------------Première partie en dessous de la navbar-------------------------------------


--
-- Structure de la table `grande card`
--

CREATE TABLE `grande_card` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon_clock` varchar(255) NOT NULL,
  'author' varchar(255) NOT NULL,
  `published_at` datetime NOT NULL,
  `icon_bookmark` varchar(255) NOT NULL,
  `icon_dowload` varchar(255) NOT NULL
);

-- --------------------------------------------------------

--
-- Structure de la table `petites card`
--

CREATE TABLE `petite_card` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description` text NULL,
  `icon_clock` varchar(255) NOT NULL,
  'author' varchar(255) NOT NULL,
  `published_at` datetime NOT NULL,
  `icon_bookmark` varchar(255) NOT NULL,
  `icon_dowload` varchar(255) NOT NULL
);

-- --------------------------------------------------------




-- ----------------------------------Deuxième partie sur les chiffres clé-------------------------------------

-- --------------------------------------------------------

--
-- Structure de la table `chiffre clé`
--


CREATE TABLE `chiffre_cle` (
  `id` int NOT NULL,
  `title` varchar(255) NULL,
  `subject` varchar(255) NULL,
  `number_of_subject` varchar(255) NULL
);


-- ----------------------------------Troisième partie sur le carousel video-------------------------------------

-- --------------------------------------------------------

--
-- Structure de la table `carousel video option 1`
--

CREATE TABLE `video` (
  `id` int NOT NULL,
  `title_carousel` varchar(255) NULL,
  `video` varchar(255) NULL,
  `description_video` varchar(255) NULL
);
-- ----------------------------------Quatrième partie sur les cards-------------------------------------

-- --------------------------------------------------------

--
-- Structure de la table `card du milier`
--

CREATE TABLE `middle_card` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description` text NULL,
  `icon_clock` varchar(255) NOT NULL,
  'author' varchar(255) NOT NULL,
  `published_at` datetime NOT NULL,
  `icon_bookmark` varchar(255) NOT NULL,
  `icon_dowload` varchar(255) NOT NULL
);
-- ----------------------------------Cinquième partie sur timeline-------------------------------------

-- --------------------------------------------------------

--
-- Structure de la table `timeline`
--

CREATE TABLE `timeline` (
  `id` int NOT NULL,
  `illustration` varchar(255) NULL,
  `link` varchar(255) NULL,
  `createdAt` datetime NULL,
  `description` text NULL,
);

-- ----------------------------------Sixième partie sur le footer-------------------------------------

-- --------------------------------------------------------

--
-- Structure de la table `footer`
--

CREATE TABLE `footer` (
  `id` int NOT NULL,
  `illustration` varchar(255) NULL,
  `title` varchar(255) NULL,
  `subtitle1` varchar(255) NULL,
  `subtitle2` varchar(255) NULL,
  `subtitle3` varchar(255) NULL,
  `subtitle4` varchar(255) NULL,
  `subtitle5` varchar(255) NULL,
  `subtitle6` varchar(255) NULL
);

CREATE TABLE `icon_footer` (
  `id` int NOT NULL,
  `icon` varchar(255) NULL
);