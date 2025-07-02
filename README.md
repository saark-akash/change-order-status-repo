# change-order-status-repo

Create Bearer token => curl --location '<base_url>/rest/V1/integration/admin/token' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer eyJraWQiOiIxIiwiYWxnIjoiSFMyNTYifQ.eyJ1aWQiOjEsInV0eXBpZCI6MiwiaWF0IjoxNzUxNDUyMzg3LCJleHAiOjE3NTE0NTU5ODd9.Z7X2uxTBvlICiGkVfSa7XxKyYpFy6gHKdIXTbd_1_kI' \
--header 'Cookie: PHPSESSID=599276759863eac9902ac85b8aa9a0c0; private_content_version=b8f9a30afccf4cc5fd1f420dfe1e8a40' \
--data '{
    "username" : "admin",
    "password" : "admin123"
}'

Change status => curl --location '<base_url>/rest/V1/orders/3/statuses' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer eyJraWQiOiIxIiwiYWxnIjoiSFMyNTYifQ.eyJ1aWQiOjEsInV0eXBpZCI6MiwiaWF0IjoxNzUxNDY1NDA5LCJleHAiOjE3NTE0NjkwMDl9.NlX4khyFXMCPG0jxPqfs0XEfQ81U9_rH2SUqNZkEMLM' \
--header 'Cookie: PHPSESSID=599276759863eac9902ac85b8aa9a0c0; private_content_version=b8f9a30afccf4cc5fd1f420dfe1e8a40' \
--data '{
  "entity_id": "3",
  "status": "closed"
}'

Install module 

Place module in app/code/Vendor directory
Run 
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deply 

use Postman to run the apu 

Please change the admin username and password for bearer token. Provide the provision to the user for sales menus for apis

api will return the chnage status.
