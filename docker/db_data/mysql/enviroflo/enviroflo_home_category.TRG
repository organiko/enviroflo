TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `lastCategory` BEFORE INSERT ON `enviroflo_home_category` FOR EACH ROW BEGIN\n	DECLARE newOrder INT;\n	DECLARE categoryCount INT;\n\n	SELECT COUNT(category_id) FROM enviroflo_home_category INTO categoryCount;\n	\n	IF categoryCount < 1 THEN\n		SET new.category_order = 1;\n	ELSE\n		SELECT MAX(category_order)+1 FROM enviroflo_home_category INTO newOrder;\n		SET new.category_order = newOrder;\n	END IF;\n\nEND'
sql_modes=1073741824
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_general_ci'
db_cl_names='latin1_swedish_ci'
