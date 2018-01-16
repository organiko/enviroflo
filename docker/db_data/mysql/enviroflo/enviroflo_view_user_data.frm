TYPE=VIEW
query=select `a`.`user_id` AS `user_id`,`a`.`clnt` AS `clnt`,`a`.`userLogin` AS `userLogin`,`b`.`userName` AS `userName`,`b`.`userAvatar` AS `userAvatar`,`a`.`userPwd` AS `userPwd`,`b`.`userPageDefault` AS `userPageDefault`,`c`.`feature_desc` AS `feature_desc`,`c`.`feature_content_page` AS `feature_content_page`,`a`.`sessID` AS `sessID`,`a`.`userStatus` AS `userStatus`,`a`.`ok` AS `ok` from ((`enviroflo`.`enviroflo_admin_user_data` `a` join `enviroflo`.`enviroflo_admin_user_detail` `b` on((`a`.`user_id` = `b`.`user_id`))) join `enviroflo`.`enviroflo_admin_lov_feature` `c` on((`b`.`userPageDefault` = `c`.`feature_id`)))
md5=0df1cb455facef47ad81a525fc09a67c
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2018-01-12 20:36:21
create-version=1
source=select `a`.`user_id` AS `user_id`,`a`.`clnt` AS `clnt`,`a`.`userLogin` AS `userLogin`,`b`.`userName` AS `userName`,`b`.`userAvatar` AS `userAvatar`,`a`.`userPwd` AS `userPwd`,`b`.`userPageDefault` AS `userPageDefault`,`c`.`feature_desc` AS `feature_desc`,`c`.`feature_content_page` AS `feature_content_page`,`a`.`sessID` AS `sessID`,`a`.`userStatus` AS `userStatus`,`a`.`ok` AS `ok` from ((`enviroflo_admin_user_data` `a` join `enviroflo_admin_user_detail` `b` on((`a`.`user_id` = `b`.`user_id`))) join `enviroflo_admin_lov_feature` `c` on((`b`.`userPageDefault` = `c`.`feature_id`)))
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `a`.`user_id` AS `user_id`,`a`.`clnt` AS `clnt`,`a`.`userLogin` AS `userLogin`,`b`.`userName` AS `userName`,`b`.`userAvatar` AS `userAvatar`,`a`.`userPwd` AS `userPwd`,`b`.`userPageDefault` AS `userPageDefault`,`c`.`feature_desc` AS `feature_desc`,`c`.`feature_content_page` AS `feature_content_page`,`a`.`sessID` AS `sessID`,`a`.`userStatus` AS `userStatus`,`a`.`ok` AS `ok` from ((`enviroflo`.`enviroflo_admin_user_data` `a` join `enviroflo`.`enviroflo_admin_user_detail` `b` on((`a`.`user_id` = `b`.`user_id`))) join `enviroflo`.`enviroflo_admin_lov_feature` `c` on((`b`.`userPageDefault` = `c`.`feature_id`)))
