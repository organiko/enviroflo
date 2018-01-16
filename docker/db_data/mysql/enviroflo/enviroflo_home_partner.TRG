TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `lastClient` BEFORE INSERT ON `enviroflo_home_partner` FOR EACH ROW BEGIN\n	DECLARE newOrder INT;\n	DECLARE partnerCount INT;\n\n	SELECT COUNT(partner_id) FROM enviroflo_home_partner INTO partnerCount;\n	\n	IF partnerCount < 1 THEN\n		SET new.partner_order = 1;\n	ELSE\n		SELECT MAX(partner_order)+1 FROM enviroflo_home_partner INTO newOrder;\n		SET new.partner_order = newOrder;\n	END IF;\n\nEND'
sql_modes=1073741824
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_general_ci'
db_cl_names='latin1_swedish_ci'
