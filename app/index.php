<?php

print_r($user->getAllusers());

print_r($user->getUsersById(1));

print_r($user->getUsersByUsername("Jonas1181"));

print_r($user->addUser("Jonas", "jonas123"));