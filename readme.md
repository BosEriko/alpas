# Alpas

## Setup

#### Migrate Database
```
php artisan migrate
```
#### Create new role
```
php artisan tinker
$role = new App\Role;
$role->name = "default";
$role->save();
$role = new App\Role;
$role->name = “admin”;
$role->save();
```

#### Set user to admin
```
php artisan tinker
$user = App\User::find(1);
$user->role_id = 2;
$user->save();
```
