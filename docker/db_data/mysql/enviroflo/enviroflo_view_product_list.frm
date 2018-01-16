TYPE=VIEW
query=select `a`.`product_id` AS `product_id`,`a`.`product_link` AS `product_link`,`a`.`clnt` AS `clnt`,`a`.`category_id` AS `category_id`,`b`.`category_url` AS `category_url`,`b`.`category_desc` AS `category_desc`,`b`.`category_status` AS `category_status`,`a`.`subcategory_desc` AS `subcategory_desc`,`a`.`product_desc` AS `product_desc`,`a`.`manufacturer` AS `manufacturer`,`a`.`product_text` AS `product_text`,`a`.`product_status` AS `product_status` from (`enviroflo`.`enviroflo_home_product` `a` join `enviroflo`.`enviroflo_home_category` `b` on((`a`.`category_id` = `b`.`category_id`))) where ((`b`.`category_status` = 1) and (`a`.`product_status` = 1))
md5=52344e3e9085ff8142bc022c225c73a0
updatable=1
algorithm=0
definer_user=root
definer_host=%
suid=1
with_check_option=0
timestamp=2018-01-15 00:32:37
create-version=1
source=SELECT\n	`a`.`product_id` AS `product_id`,\n	`a`.`product_link` AS `product_link`,\n	`a`.`clnt` AS `clnt`,\n	`a`.`category_id` AS `category_id`,\n	`b`.`category_url` AS `category_url`,\n	`b`.`category_desc` AS `category_desc`,\n	`b`.`category_status` AS `category_status`,\n	`a`.`subcategory_desc` AS `subcategory_desc`,\n	`a`.`product_desc` AS `product_desc`,\n	`a`.`manufacturer` AS `manufacturer`,\n	`a`.`product_text` AS `product_text`,\n	`a`.`product_status` AS `product_status` \nFROM\n	(\n	`enviroflo_home_product` `a`\n	JOIN `enviroflo_home_category` `b` ON ( ( `a`.`category_id` = `b`.`category_id` ) ) \n	) \nWHERE\n	(\n	( `b`.`category_status` = 1 ) \n	AND ( `a`.`product_status` = 1 ) \n	)
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `a`.`product_id` AS `product_id`,`a`.`product_link` AS `product_link`,`a`.`clnt` AS `clnt`,`a`.`category_id` AS `category_id`,`b`.`category_url` AS `category_url`,`b`.`category_desc` AS `category_desc`,`b`.`category_status` AS `category_status`,`a`.`subcategory_desc` AS `subcategory_desc`,`a`.`product_desc` AS `product_desc`,`a`.`manufacturer` AS `manufacturer`,`a`.`product_text` AS `product_text`,`a`.`product_status` AS `product_status` from (`enviroflo`.`enviroflo_home_product` `a` join `enviroflo`.`enviroflo_home_category` `b` on((`a`.`category_id` = `b`.`category_id`))) where ((`b`.`category_status` = 1) and (`a`.`product_status` = 1))
