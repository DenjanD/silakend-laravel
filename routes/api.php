<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Debug
Route::get('/debug', [App\Http\Controllers\DebugController::class, 'debug']);

Route::prefix('v1')->group(function () {
    Route::prefix('auth')->group(function () {

        // Create New User
        Route::post('register', [App\Http\Controllers\AuthController::class, 'register']);

        // Login User
        Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
        
        // Refresh the JWT Token
        Route::get('refresh', [App\Http\Controllers\AuthController::class, 'refresh']);
        
        // Below mention routes are available only for the authenticated users.
        Route::middleware('auth:api')->group(function () {
            // Get user info
            Route::get('user', [App\Http\Controllers\AuthController::class, 'user']);
            // Logout user from application
            Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout']);
        });
    });

    //SuperAdmin APIs
    Route::middleware(['auth:api','rolecheck:Superadmin'])->prefix('sa')->group(function () {
        Route::prefix('master')->group(function () {
            Route::prefix('roles')->group(function () {
                //Roles APIs
                Route::get('/', [App\Http\Controllers\SuperAdmin\RolesController::class, 'index']);
                Route::get('/{id}', [App\Http\Controllers\SuperAdmin\RolesController::class, 'show']);
                Route::post('/', [App\Http\Controllers\SuperAdmin\RolesController::class, 'store']);
                Route::put('/{id}', [App\Http\Controllers\SuperAdmin\RolesController::class, 'update']);
                Route::delete('/{id}', [App\Http\Controllers\SuperAdmin\RolesController::class, 'destroy']);
            });
            Route::prefix('jobunits')->group(function () {
                //Job Units APIs
                Route::get('/', [App\Http\Controllers\SuperAdmin\JobUnitsController::class, 'index']);
                Route::get('/{id}', [App\Http\Controllers\SuperAdmin\JobUnitsController::class, 'show']);
                Route::post('/', [App\Http\Controllers\SuperAdmin\JobUnitsController::class, 'store']);
                Route::put('/{id}', [App\Http\Controllers\SuperAdmin\JobUnitsController::class, 'update']);
                Route::delete('/{id}', [App\Http\Controllers\SuperAdmin\JobUnitsController::class, 'destroy']);
            });
            Route::prefix('users')->group(function () {
                //Users APIs
                Route::get('/', [App\Http\Controllers\SuperAdmin\UsersController::class, 'index']);
                Route::get('/{id}', [App\Http\Controllers\SuperAdmin\UsersController::class, 'show']);
                Route::post('/', [App\Http\Controllers\SuperAdmin\UsersController::class, 'store']);
                Route::put('/{id}', [App\Http\Controllers\SuperAdmin\UsersController::class, 'update']);
                Route::delete('/{id}', [App\Http\Controllers\SuperAdmin\UsersController::class, 'destroy']);
            });
            Route::prefix('vcategories')->group(function () {
                //Vehicle Categories APIs
                Route::get('/', [App\Http\Controllers\SuperAdmin\VehicleCategoriesController::class, 'index']);
                Route::get('/{id}', [App\Http\Controllers\SuperAdmin\VehicleCategoriesController::class, 'show']);
                Route::post('/', [App\Http\Controllers\SuperAdmin\VehicleCategoriesController::class, 'store']);
                Route::put('/{id}', [App\Http\Controllers\SuperAdmin\VehicleCategoriesController::class, 'update']);
                Route::delete('/{id}', [App\Http\Controllers\SuperAdmin\VehicleCategoriesController::class, 'destroy']); 
            });
            Route::prefix('ucategories')->group(function () {
                //Usage Categories APIs
                Route::get('/', [App\Http\Controllers\SuperAdmin\UsageCategoriesController::class, 'index']);
                Route::get('/{id}', [App\Http\Controllers\SuperAdmin\UsageCategoriesController::class, 'show']);
                Route::post('/', [App\Http\Controllers\SuperAdmin\UsageCategoriesController::class, 'store']);
                Route::put('/{id}', [App\Http\Controllers\SuperAdmin\UsageCategoriesController::class, 'update']);
                Route::delete('/{id}', [App\Http\Controllers\SuperAdmin\UsageCategoriesController::class, 'destroy']);
            });
            Route::prefix('vehicles')->group(function () {
                //Vehicles APIs
                Route::get('/', [App\Http\Controllers\SuperAdmin\VehiclesController::class, 'index']);
                Route::get('/{id}', [App\Http\Controllers\SuperAdmin\VehiclesController::class, 'show']);
                Route::post('/', [App\Http\Controllers\SuperAdmin\VehiclesController::class, 'store']);
                Route::put('/{id}', [App\Http\Controllers\SuperAdmin\VehiclesController::class, 'update']);
                Route::delete('/{id}', [App\Http\Controllers\SuperAdmin\VehiclesController::class, 'destroy']);
            });
        });  
        Route::prefix('transaction')->group(function () {
            Route::prefix('usages')->group(function () {
                //Vehicle Usages APIs
                Route::get('/', [App\Http\Controllers\SuperAdmin\VehicleUsagesController::class, 'index']);
                Route::get('/{id}', [App\Http\Controllers\SuperAdmin\VehicleUsagesController::class, 'show']);
                Route::post('/', [App\Http\Controllers\SuperAdmin\VehicleUsagesController::class, 'store']);
                Route::put('/{id}', [App\Http\Controllers\SuperAdmin\VehicleUsagesController::class, 'update']);
                Route::delete('/{id}', [App\Http\Controllers\SuperAdmin\VehicleUsagesController::class, 'destroy']);
            });           
            Route::prefix('maintenances')->group(function () {
                //Vehicle Maintenances APIs
                Route::get('/', [App\Http\Controllers\SuperAdmin\VehicleMaintenancesController::class, 'index']);
                Route::get('/{id}', [App\Http\Controllers\SuperAdmin\VehicleMaintenancesController::class, 'show']);
                Route::post('/', [App\Http\Controllers\SuperAdmin\VehicleMaintenancesController::class, 'store']);
                Route::put('/{id}', [App\Http\Controllers\SuperAdmin\VehicleMaintenancesController::class, 'update']);
                Route::delete('/{id}', [App\Http\Controllers\SuperAdmin\VehicleMaintenancesController::class, 'destroy']);
            });
            Route::prefix('mdetails')->group(function () {
                //Vehicle Maintenance Details APIs
                Route::get('/', [App\Http\Controllers\SuperAdmin\VehicleMaintenanceDetailsController::class, 'index']);
                Route::get('/{id}', [App\Http\Controllers\SuperAdmin\VehicleMaintenanceDetailsController::class, 'show']);
                Route::post('/', [App\Http\Controllers\SuperAdmin\VehicleMaintenanceDetailsController::class, 'store']);
                Route::put('/{id}', [App\Http\Controllers\SuperAdmin\VehicleMaintenanceDetailsController::class, 'update']);
                Route::delete('/{id}', [App\Http\Controllers\SuperAdmin\VehicleMaintenanceDetailsController::class, 'destroy']);
            });
        }); 
    });
    
    //UnitMember APIs
    Route::middleware(['auth:api','rolecheck:UnitMember'])->prefix('um')->group(function () {
        Route::prefix('transaction')->group(function () {      
            Route::prefix('usages')->group(function () {
                Route::get('/', [App\Http\Controllers\UnitMember\VehicleUsagesController::class, 'index']);
                Route::get('/{id}', [App\Http\Controllers\UnitMember\VehicleUsagesController::class, 'show']);
                Route::post('/', [App\Http\Controllers\UnitMember\VehicleUsagesController::class, 'store']);
                Route::put('/{id}', [App\Http\Controllers\UnitMember\VehicleUsagesController::class, 'update']);
            });
        });
    });

    //UnitHead APIs
    Route::middleware(['auth:api','rolecheck:UnitHead'])->prefix('uh')->group(function () {
        Route::prefix('transaction')->group(function () {   
            Route::prefix('usages')->group(function () {
                Route::get('/', [App\Http\Controllers\UnitHead\VehicleUsagesController::class, 'index']);
                Route::get('/request', [App\Http\Controllers\UnitHead\VehicleUsagesController::class, 'request']);
                Route::put('/verify/{id}', [App\Http\Controllers\UnitHead\VehicleUsagesController::class, 'verify']);
                Route::get('/{id}', [App\Http\Controllers\UnitHead\VehicleUsagesController::class, 'show']);
                Route::post('/', [App\Http\Controllers\UnitHead\VehicleUsagesController::class, 'store']);
                Route::put('/{id}', [App\Http\Controllers\UnitHead\VehicleUsagesController::class, 'update']);
            });
        });
    });

    //PIC APIs
    Route::middleware(['auth:api','rolecheck:PIC'])->prefix('pic')->group(function () {
        Route::prefix('master')->group(function () {
            Route::prefix('users')->group(function () {
                Route::get('/', [App\Http\Controllers\PIC\UsersController::class, 'index']);
                Route::get('/{id}', [App\Http\Controllers\PIC\UsersController::class, 'show']);
            });
            Route::prefix('vehicles')->group(function () {
                Route::get('/', [App\Http\Controllers\PIC\VehiclesController::class, 'index']);
                Route::get('/{id}', [App\Http\Controllers\PIC\VehiclesController::class, 'show']);
            });
        });
        Route::prefix('transaction')->group(function () {
            Route::prefix('usages')->group(function () {
                Route::get('/', [App\Http\Controllers\PIC\VehicleUsagesController::class, 'index']);
                Route::get('/request', [App\Http\Controllers\PIC\VehicleUsagesController::class, 'request']);
                Route::put('/verify/{id}', [App\Http\Controllers\PIC\VehicleUsagesController::class, 'verify']);
                Route::get('/{id}', [App\Http\Controllers\PIC\VehicleUsagesController::class, 'show']);
                Route::post('/', [App\Http\Controllers\PIC\VehicleUsagesController::class, 'store']);
                Route::put('/{id}', [App\Http\Controllers\PIC\VehicleUsagesController::class, 'update']);
            });
            Route::prefix('maintenances')->group(function () {
                Route::get('/', [App\Http\Controllers\PIC\VehicleMaintenancesController::class, 'index']);
                Route::get('/{id}', [App\Http\Controllers\PIC\VehicleMaintenancesController::class, 'show']);
                Route::post('/', [App\Http\Controllers\PIC\VehicleMaintenancesController::class, 'store']);
                Route::put('/{id}', [App\Http\Controllers\PIC\VehicleMaintenancesController::class, 'update']);
                Route::delete('/{id}', [App\Http\Controllers\PIC\VehicleMaintenancesController::class, 'destroy']);
            });
            Route::prefix('mdetails')->group(function () {
                Route::get('/', [App\Http\Controllers\PIC\VehicleMaintenanceDetailsController::class, 'index']);
                Route::get('/{id}', [App\Http\Controllers\PIC\VehicleMaintenanceDetailsController::class, 'show']);
                Route::post('/', [App\Http\Controllers\PIC\VehicleMaintenanceDetailsController::class, 'store']);
                Route::put('/{id}', [App\Http\Controllers\PIC\VehicleMaintenanceDetailsController::class, 'update']);
                Route::delete('/{id}', [App\Http\Controllers\PIC\VehicleMaintenanceDetailsController::class, 'destroy']);
            });
        });
    });

    //Driver APIs
    Route::middleware(['auth:api','rolecheck:Driver'])->prefix('driver')->group(function () {
        Route::prefix('transaction')->group(function () {   
            Route::prefix('usages')->group(function () {
                Route::get('/', [App\Http\Controllers\Driver\VehicleUsagesController::class, 'index']);
                Route::get('/{id}', [App\Http\Controllers\Driver\VehicleUsagesController::class, 'show']);
                Route::put('/{id}', [App\Http\Controllers\Driver\VehicleUsagesController::class, 'update']);
            });
        });
    });

    //Officer APIs
    Route::middleware(['auth:api','rolecheck:Officer'])->prefix('officer')->group(function () {
        Route::prefix('transaction')->group(function () {   
            Route::prefix('usages')->group(function () {
                Route::get('/', [App\Http\Controllers\Officer\VehicleUsagesController::class, 'index']);
                Route::get('/{id}', [App\Http\Controllers\Officer\VehicleUsagesController::class, 'show']);
                Route::put('/{id}', [App\Http\Controllers\Officer\VehicleUsagesController::class, 'update']);
            });
        });
    });
});

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
