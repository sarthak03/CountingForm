-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Oct 18, 2015 at 11:35 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `neha`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Sno` int(20) NOT NULL,
  `Statement` varchar(255) NOT NULL DEFAULT '0',
  `SA` int(20) NOT NULL DEFAULT '0',
  `A` int(20) NOT NULL DEFAULT '0',
  `N` int(20) NOT NULL DEFAULT '0',
  `D` int(20) NOT NULL DEFAULT '0',
  `SD` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Sno`, `Statement`, `SA`, `A`, `N`, `D`, `SD`) VALUES
(1, 'I feel satisfied with my current salary.', 2, 2, 0, 0, 0),
(2, 'My salary is sufficient to meet my expenses.', 3, 0, 1, 0, 0),
(3, 'Raises in salary are too few and far between.', 1, 4, 0, 0, 0),
(4, 'My salary does not match the amount of work I do.', 0, 0, 0, 0, 0),
(5, 'I feel my salary does not suit my educational qualifications and experience', 0, 0, 0, 0, 0),
(6, 'I am aware of all the benefits I am entitled to', 0, 0, 0, 0, 0),
(7, 'I am satisfied with: LTC (Leave Travel Concession) benefits', 0, 0, 1, 0, 0),
(8, 'I am satisfied with: Maternity leaves', 0, 0, 0, 0, 0),
(9, 'I am satisfied with: Insurance benefits', 0, 0, 0, 0, 0),
(10, 'I am satisfied with: Transportation allowance', 0, 0, 0, 0, 0),
(11, 'I am satisfied with: Bonus ', 0, 0, 0, 0, 0),
(12, 'I feel satisfied with the physical conditions (light, furniture, ventilation, noise, appearance etc.) of the library.', 0, 0, 0, 0, 0),
(13, 'I am satisfied with my working hours.', 0, 0, 0, 0, 0),
(14, 'I am able to do my job without feeling it is morally wrong or against my religious beliefs.', 0, 0, 0, 0, 0),
(15, 'I am satisfied with the ICT infrastructure available to the staff.', 0, 0, 0, 0, 0),
(16, 'I like the work I do here', 0, 0, 0, 0, 0),
(17, 'I get to do a variety of things', 0, 0, 0, 0, 0),
(18, 'I feel a sense of accomplishment after doing my work', 0, 0, 0, 0, 0),
(19, 'I am able to be creative at work', 0, 0, 0, 0, 0),
(20, 'I find my work is challenging and interestingn', 0, 0, 0, 0, 0),
(21, 'The work I do is well-suited to my skills and aptitude', 0, 0, 0, 0, 0),
(22, 'I feel I have too much work to do.', 0, 0, 0, 0, 0),
(23, 'I feel bored and stuck at my job.', 0, 0, 0, 0, 0),
(24, 'I feel my skills remain under-utilized here.', 0, 0, 0, 0, 0),
(25, 'I feel most of my work is simple and routine', 0, 0, 0, 0, 0),
(26, 'I have lot of free time at work.', 0, 0, 0, 0, 0),
(27, 'When I do a good job, I receive the recognition for it', 0, 0, 0, 0, 0),
(28, 'There are few rewards for those who work here', 0, 0, 0, 0, 0),
(29, 'Initiatives are noticed and appreciated by my superiors and co-workers', 0, 0, 0, 0, 0),
(30, 'I feel an important member of the library ', 0, 0, 0, 0, 0),
(31, 'My supervisor offers constructive feedback on my performance ', 0, 0, 0, 0, 0),
(32, 'Those who do well on the job stand a fair chance of being promoted', 0, 0, 0, 0, 0),
(33, 'The promotions are done on time', 0, 0, 0, 0, 0),
(34, 'There is too little chance for promotion for me here', 0, 0, 0, 0, 0),
(35, 'People do not get ahead as fast here as they do in other places', 0, 0, 0, 0, 0),
(36, 'Politics rather than performance determines who gets promoted', 0, 0, 0, 0, 0),
(37, 'My job offers scope to realize my aspirations and ambitions ', 0, 0, 0, 0, 0),
(38, 'I have adequate opportunities for enhancing my professional skills', 0, 0, 0, 0, 0),
(39, 'This is a dead-end job', 0, 0, 0, 0, 0),
(40, 'I get encouragement and opportunities for research and publishing', 0, 0, 0, 0, 0),
(41, 'I get opportunities to develop leadership skills', 0, 0, 0, 0, 0),
(42, 'Cooperative and cordial relationships exist overall within the library', 0, 0, 0, 0, 0),
(43, 'My seniors are supportive towards me', 0, 0, 0, 0, 0),
(44, 'I am friends with many of my colleagues ', 0, 0, 0, 0, 0),
(45, 'I feel I have to work harder at my job because of incompetence of people I work with', 0, 0, 0, 0, 0),
(46, 'My juniors are cooperative', 0, 0, 0, 0, 0),
(47, 'I am comfortable enough to ask my supervisors in case of work-related doubts ', 0, 0, 0, 0, 0),
(48, 'I feel my supervisor is competent and a good leader', 0, 0, 0, 0, 0),
(49, 'My supervisor understands me and respects me', 0, 0, 0, 0, 0),
(50, 'I feel my inputs are heard and encouraged ', 0, 0, 0, 0, 0),
(51, 'I feel I am stressed at my job', 0, 0, 0, 0, 0),
(52, 'I often think about work-related problems in my own time', 0, 0, 0, 0, 0),
(53, 'I find it difficult to balance work life and family life', 0, 0, 0, 0, 0),
(54, 'I feel stressed because work assignments are not fully explained ', 0, 0, 0, 0, 0),
(55, 'I feel positive about working for this library.', 0, 0, 0, 0, 0),
(56, 'I feel the commuting distance to work is too much and is taking a toll on my health ', 0, 0, 0, 0, 0),
(57, 'I feel happy to interact and help the users', 0, 0, 0, 0, 0),
(58, 'I would advise my relatives and friends to take up this job', 0, 0, 0, 0, 0),
(59, 'I am satisfied with the social status of health science librarian', 0, 0, 0, 0, 0),
(60, 'I think working as a librarian in a health institution is more satisfying than working in academic libraries', 0, 0, 0, 0, 0),
(61, 'I think working as a librarian in government sector is better than in private', 0, 0, 0, 0, 0),
(62, 'I feel I get the chance to be ''''somebody'''' in the community', 0, 0, 0, 0, 0),
(63, 'I feel I have a noble profession ', 0, 0, 0, 0, 0),
(64, 'I feel I am contributing in building a knowledge society ', 0, 0, 0, 0, 0),
(65, 'When new procedures are adopted, I feel I receive sufficient training on the job', 0, 0, 0, 0, 0),
(66, 'The orientation I received prepared me well for doing this job', 0, 0, 0, 0, 0),
(67, 'I feel I lack adequate training', 0, 0, 0, 0, 0),
(68, 'My organization encourages me to attend seminars/workshops/conferences', 0, 0, 0, 0, 0),
(69, 'My organization conducts periodic training for skill development of employees ', 0, 0, 0, 0, 0),
(70, 'Communication seems good within this organization', 0, 0, 0, 0, 0),
(71, 'There is too much complaining and gossiping in this library ', 0, 0, 0, 0, 0),
(72, 'I feel the policies and procedures are clear and enforced consistently within the organization ', 0, 0, 0, 0, 0),
(73, 'There is no bias in our organization ', 0, 0, 0, 0, 0),
(74, 'Employee grievances are well-handled', 0, 0, 0, 0, 0),
(75, 'I see myself working here in the future also', 0, 0, 0, 0, 0),
(76, 'I have clearly defined responsibilities ', 0, 0, 0, 0, 0),
(77, 'The opportunity for independent thought or action in my job is high', 0, 0, 0, 0, 0),
(78, 'I plan and prioritize my work tasks on my own.', 0, 0, 0, 0, 0),
(79, 'I rarely get opportunities to work independent of others. ', 0, 0, 0, 0, 0),
(80, 'I feel secure in this job.', 0, 0, 0, 0, 0),
(81, 'Lay offs and transfers are not that common in my job.', 0, 0, 0, 0, 0),
(82, 'I frequently think of quitting the job due to its unsteadiness', 0, 0, 0, 0, 0),
(83, 'I feel a constant risk of arbitrary termination/suspension from job', 0, 0, 0, 0, 0),
(84, 'Use of computers and other modern technologies save time and effort and makes work easier. ', 0, 0, 0, 0, 0),
(85, 'It has added to frustration and stress at work ', 0, 0, 0, 0, 0),
(86, 'It has made the job more interesting', 0, 0, 0, 0, 0),
(87, 'It has helped me devote more time to user service rather than being stuck in paperwork', 0, 0, 0, 0, 0),
(88, 'It has made work mechanical and boring', 0, 0, 0, 0, 0),
(89, 'It has made me isolated from others', 0, 0, 0, 0, 0),
(90, 'There is too much dependency on ICT which gives me less chance to use my skills. ', 0, 0, 0, 0, 0),
(91, 'I arrive on time ', 0, 0, 0, 0, 0),
(92, 'I think of ways of doing my job more effectively', 0, 0, 0, 0, 0),
(93, 'I take initiatives at work', 0, 0, 0, 0, 0),
(94, 'I am absent from work', 0, 0, 0, 0, 0),
(95, 'I attend staff meetings', 0, 0, 0, 0, 0),
(96, 'I meet my work deadlines', 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `Sno` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;