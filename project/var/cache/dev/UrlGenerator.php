<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], []],
    'testee' => [[], ['_controller' => 'App\\Controller\\TesteController::index'], [], [['text', '/testeee']], [], []],
    'home_index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'app_teste_new' => [[], ['_controller' => 'App\\Controller\\TesteController::new'], [], [['text', '/teste/new']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], []],
    'user_list' => [[], ['_controller' => 'App\\Controller\\UserController::list'], [], [['text', '/user/list']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/edit']], [], []],
    'user_remove' => [['id'], ['_controller' => 'App\\Controller\\UserController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/remove']], [], []],
    'vet_index' => [[], ['_controller' => 'App\\Controller\\VeterinaryController::index'], [], [['text', '/veterinary']], [], []],
    'vet_new' => [[], ['_controller' => 'App\\Controller\\VeterinaryController::new'], [], [['text', '/veterinary/new']], [], []],
    'vet_list' => [[], ['_controller' => 'App\\Controller\\VeterinaryController::list'], [], [['text', '/veterinary/list']], [], []],
    'vet_edit' => [['id'], ['_controller' => 'App\\Controller\\VeterinaryController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/veterinary/edit']], [], []],
    'vet_remove' => [['id'], ['_controller' => 'App\\Controller\\VeterinaryController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/veterinary/remove']], [], []],
    'clinic_index' => [[], ['_controller' => 'App\\Controller\\ClinicController::index'], [], [['text', '/clinic']], [], []],
    'clinic_new' => [[], ['_controller' => 'App\\Controller\\ClinicController::new'], [], [['text', '/clinic/new']], [], []],
    'clinic_list' => [[], ['_controller' => 'App\\Controller\\ClinicController::list'], [], [['text', '/clinic/list']], [], []],
    'clinic_edit' => [['id'], ['_controller' => 'App\\Controller\\ClinicController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/clinic/edit']], [], []],
    'clinic_remove' => [['id'], ['_controller' => 'App\\Controller\\ClinicController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/clinic/remove']], [], []],
    'pet_index' => [[], ['_controller' => 'App\\Controller\\PetController::index'], [], [['text', '/pet']], [], []],
    'pet_new' => [[], ['_controller' => 'App\\Controller\\PetController::new'], [], [['text', '/pet/new']], [], []],
    'pet_list' => [[], ['_controller' => 'App\\Controller\\PetController::list'], [], [['text', '/pet/list']], [], []],
    'pet_edit' => [['id'], ['_controller' => 'App\\Controller\\PetController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pet/edit']], [], []],
    'pet_remove' => [['id'], ['_controller' => 'App\\Controller\\PetController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pet/remove']], [], []],
    'api_users_list' => [[], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiUserController::list'], [], [['text', '/api/v1/users']], [], []],
    'api_users_show' => [['id'], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiUserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/v1/users']], [], []],
    'api_users_new' => [[], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiUserController:new'], [], [['text', '/api/v1/users']], [], []],
    'api_users_edit' => [['id'], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiUserController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/v1/users']], [], []],
    'api_users_delete' => [['id'], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiUserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/v1/users']], [], []],
    'api_clinics_list' => [[], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiClinicController::list'], [], [['text', '/api/v1/clinics']], [], []],
    'api_clinics_show' => [['id'], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiClinicController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/v1/clinics']], [], []],
    'api_clinics_show_veterinaries' => [['id'], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiClinicController::showAddress'], [], [['text', '/addresses'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/v1/clinics']], [], []],
    'api_clinics_new' => [[], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiClinicController:new'], [], [['text', '/api/v1/clinics']], [], []],
    'api_clinics_edit' => [['id'], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiClinicController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/v1/clinics']], [], []],
    'api_clinics_delete' => [['id'], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiClinicController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/v1/clinics']], [], []],
    'api_veterinaries_list' => [[], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiVeterinaryController::list'], [], [['text', '/api/v1/veterinaries']], [], []],
    'api_veterinaries_show' => [['id'], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiVeterinaryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/v1/veterinaries']], [], []],
    'api_veterinaries_show_address' => [['id'], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiVeterinaryController::showAddress'], [], [['text', '/addresses'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/v1/veterinaries']], [], []],
    'api_veterinaries_new' => [[], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiVeterinaryController:new'], [], [['text', '/api/v1/veterinaries']], [], []],
    'api_veterinaries_edit' => [['id'], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiVeterinaryController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/v1/veterinaries']], [], []],
    'api_veterinaries_delete' => [['id'], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiVeterinaryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/v1/veterinaries']], [], []],
    'api_pets_list' => [[], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiPetController::list'], [], [['text', '/api/v1/pets']], [], []],
    'api_pets_show' => [['id'], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiPetController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/v1/pets']], [], []],
    'api_pets_show_owner' => [['id'], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiPetController::showOwner'], [], [['text', '/owners'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/v1/pets']], [], []],
    'api_pets_show_owner_address' => [['id'], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiPetController::showOwnerAddress'], [], [['text', '/owners/addresses'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/v1/pets']], [], []],
    'api_pets_new' => [[], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiPetController:new'], [], [['text', '/api/v1/pets']], [], []],
    'api_pets_edit' => [['id'], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiPetController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/v1/pets']], [], []],
    'api_pets_delete' => [['id'], ['_format' => 'json', '_controller' => 'App\\Controller\\ApiPetController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/v1/pets']], [], []],
];
