# custom-api
Creating a custom api from scratch for custom db and all.

Generate Token and please replace your domain as well from all the request.

Request Type: GET
http://www.devmagento.com/index.php/rest/default/V1/integration/admin/token
Parameters: {"username": "admin", "password": "admin123"}
Note: username and password will be admin login credentials.

Request Type:: POST
http://www.devmagento.com/index.php/rest/default/V1/bussiness/users
Parameters: {
     "data": {
        "bussiness_name" : "Alok Ply",
        "bussiness_email" : "kkkk@example.com",
        "description" : "This is test bussiness",
        "registration_number" : "111112222"
    }
}

Request Type: GET
http://www.devmagento.com/index.php/rest/default/V1/bussiness/userslist

Request Type: GET
http://www.devmagento.com/index.php/rest/default/V1/bussiness/usersdata/1

Request Type: PUT
http://www.devmagento.com/index.php/rest/default/V1/bussiness/updateusers
{
    "id": "1",
    "data": {
        "bussiness_name" : "Prince Bussiness",
        "bussiness_email" : "Prince@example.com",
        "description" : "This is prince bussiness",
        "registration_number" : "77"
    }
}


