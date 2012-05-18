<?php
class Users extends Controller {
    function index() {
        // Find all users
        $all_users = User::all(); // or User:find('all')

        // Find user with id of 3
        $userthree = User::find(3); // or User:find_by_id(3)

        // Find user with username 'codemonkey'
        $codemonkey = User::find_by_username('codemonkey');

    }
}