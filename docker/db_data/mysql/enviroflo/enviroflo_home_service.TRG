TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `lastService` BEFORE INSERT ON `enviroflo_home_service` FOR EACH ROW BEGIN\n	DECLARE newOrder INT;\n	DECLARE serviceCount INT;\n\n	SELECT COUNT(service_id) FROM enviroflo_home_service INTO serviceCount;\n	\n	IF serviceCount < 1 THEN\n		SET new.service_order = 1;\n	ELSE\n		SELECT MAX(service_order)+1 FROM enviroflo_home_service INTO newOrder;\n		SET new.service_order = newOrder;\n	END IF;\n\nEND'
sql_modes=1073741824
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_general_ci'
db_cl_names='latin1_swedish_ci'
