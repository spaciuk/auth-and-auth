## Auth & Auth

Application to handle Authentication & Authorization for a group of apps

Model:

![alt text](./model3.png)

To continue ...

API:

authenticate(user,pass,application,return_type)

return_type: true/false | jwt | jwt_with_roles | jwt_with_permissions | jwt_with_activities

userRoles(user,application,token)

userPermissions

userActivities

userHasRole

userHasPermission

userHasActivity


LOG:

id_log,id_user,log_date,ip_address,event
