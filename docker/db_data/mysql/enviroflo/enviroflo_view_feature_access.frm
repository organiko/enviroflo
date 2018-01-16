TYPE=VIEW
query=select `a`.`feature_access_id` AS `feature_access_id`,`a`.`clnt` AS `clnt`,`a`.`feature_id` AS `feature_id`,`b`.`feature_desc` AS `feature_desc`,`b`.`feature_content_page` AS `feature_content_page`,`a`.`user_id` AS `user_id`,`c`.`userLogin` AS `userLogin`,`c`.`sessID` AS `sessID`,`c`.`userStatus` AS `userStatus`,`a`.`feature_status` AS `feature_status`,`a`.`crud` AS `crud`,`a`.`created_at` AS `created_at`,`a`.`updated_at` AS `updated_at`,`a`.`updated_by` AS `updated_by`,`a`.`feature_access_status` AS `feature_access_status`,`a`.`ok` AS `ok` from ((`enviroflo`.`enviroflo_admin_user_permission` `a` join `enviroflo`.`enviroflo_admin_lov_feature` `b` on((`a`.`feature_id` = `b`.`feature_id`))) join `enviroflo`.`enviroflo_admin_user_data` `c` on((`a`.`user_id` = `c`.`user_id`)))
md5=894a3ee505ef71f66d6feb9310429d47
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2018-01-12 20:36:21
create-version=1
source=select `a`.`feature_access_id` AS `feature_access_id`,`a`.`clnt` AS `clnt`,`a`.`feature_id` AS `feature_id`,`b`.`feature_desc` AS `feature_desc`,`b`.`feature_content_page` AS `feature_content_page`,`a`.`user_id` AS `user_id`,`c`.`userLogin` AS `userLogin`,`c`.`sessID` AS `sessID`,`c`.`userStatus` AS `userStatus`,`a`.`feature_status` AS `feature_status`,`a`.`crud` AS `crud`,`a`.`created_at` AS `created_at`,`a`.`updated_at` AS `updated_at`,`a`.`updated_by` AS `updated_by`,`a`.`feature_access_status` AS `feature_access_status`,`a`.`ok` AS `ok` from ((`enviroflo_admin_user_permission` `a` join `enviroflo_admin_lov_feature` `b` on((`a`.`feature_id` = `b`.`feature_id`))) join `enviroflo_admin_user_data` `c` on((`a`.`user_id` = `c`.`user_id`)))
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `a`.`feature_access_id` AS `feature_access_id`,`a`.`clnt` AS `clnt`,`a`.`feature_id` AS `feature_id`,`b`.`feature_desc` AS `feature_desc`,`b`.`feature_content_page` AS `feature_content_page`,`a`.`user_id` AS `user_id`,`c`.`userLogin` AS `userLogin`,`c`.`sessID` AS `sessID`,`c`.`userStatus` AS `userStatus`,`a`.`feature_status` AS `feature_status`,`a`.`crud` AS `crud`,`a`.`created_at` AS `created_at`,`a`.`updated_at` AS `updated_at`,`a`.`updated_by` AS `updated_by`,`a`.`feature_access_status` AS `feature_access_status`,`a`.`ok` AS `ok` from ((`enviroflo`.`enviroflo_admin_user_permission` `a` join `enviroflo`.`enviroflo_admin_lov_feature` `b` on((`a`.`feature_id` = `b`.`feature_id`))) join `enviroflo`.`enviroflo_admin_user_data` `c` on((`a`.`user_id` = `c`.`user_id`)))
