CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `incoming_msg_id` INTEGER DEFAULT NULL,
  `outgoing_msg_id` INTEGER DEFAULT NULL,
  `msg` TEXT DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `fname` TEXT DEFAULT NULL,
  `password` TEXT DEFAULT NULL
);

INSERT INTO `users` (`user_id`, `fname`, `password`) VALUES
(18, 'rumi', '123'),
(19, 'wiki', '123');

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(4, 0, 18, 'hello'),
(5, 0, 19, 'siema'),
(6, 0, 18, 'coo'),
(7, 0, 18, 'działa?'),
(8, 0, 19, 'pisze to z chroma'),
(9, 0, 18, 'a ja z opery');
