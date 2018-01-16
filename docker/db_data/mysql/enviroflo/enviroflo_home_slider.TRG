TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `lastSlide` BEFORE INSERT ON `enviroflo_home_slider` FOR EACH ROW BEGIN\n	DECLARE newOrder INT;\n	DECLARE slideCount INT;\n\n	SELECT COUNT(slide_id) FROM enviroflo_home_slider INTO slideCount;\n\n	IF slideCount < 1 THEN\n		SET new.slide_order = 1;\n	ELSE\n		SELECT MAX(slide_order)+1 FROM enviroflo_home_slider INTO newOrder;\n		SET new.slide_order = newOrder;\n	END IF;\nEND'
sql_modes=1073741824
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_general_ci'
db_cl_names='latin1_swedish_ci'
