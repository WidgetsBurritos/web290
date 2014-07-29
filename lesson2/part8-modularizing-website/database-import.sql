
----
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(32) NOT NULL,
  `page_title` varchar(64) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`page_id`),
  UNIQUE KEY `unique_page_id` (`page_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `slug`, `page_title`, `content`) VALUES
(1, 'home', 'Home Page', 'This is the home page'),
(2, 'about', 'About Us', 'Here''s something interesting about us.'),
(3, 'contact', 'Contact Us', 'Call us at (210) 555-5555');

