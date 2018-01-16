TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `sideTables` AFTER INSERT ON `enviroflo_admin_user_data` FOR EACH ROW BEGIN\n	INSERT INTO enviroflo_admin_user_detail (user_id) VALUES (new.user_id);\n	INSERT INTO enviroflo_admin_user_profile (user_id,profile_id) VALUES (new.user_id,3);\nEND'
sql_modes=1073741824
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_general_ci'
db_cl_names='latin1_swedish_ci'
