# Create New User

## POST ``/v1/users``

**POST Params:**

* ```fullname``` : user fullname
* ```email``` : user email
* ```mobile``` : user mobile (Default null)
* ```password``` : user password
___

## ``JSON`` **Response Format**

``` json
{
    "success": false, //boolean
    "message":"",     // string
    "data":{}         // create user data 
}
```